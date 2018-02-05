<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('users_model','Users');
	}
	public function index($msg = NULL)
	{
		$result = $this->Users->read_users();
		$profile = array();
		foreach ($result as $r) {
			$info = array();			
			$info['userid'] = $r['UserID'];
			$info['userlastname'] = $r['UserLastName'];
			$info['userfirstname'] = $r['UserFirstName'];
			$info['usermiddlename'] = $r['UserMiddleName'];
			$info['userbirthdate'] = $r['UserBirthDate'];
			$info['usercontact'] = $r['UserContact'];
			$info['usergender'] = $r['UserGender'];
			$info['useremail'] = $r['UserEmail'];			
			$profile[] = $info;
		}
		$data['profile'] = $profile;
		$this->load->view('users_view',$data);
		$data['msg'] = $msg;
        $this->load->view('login_account', $data);
	}
	public function create_account(){
		if( $_SERVER['REQUEST_METHOD']=='POST'){ 
			$d = $_POST;		
			$data = array(
				'UserLastName'=>$d['UserLastName'],
				'UserFirstName'=>$d['UserFirstName'],
				'UserMiddleName'=>$d['UserMiddleName'],
				'UserBirthDate'=>$d['UserBirthDate'],
				'UserContact'=>$d['UserContact'],
				'UserGender'=>$d['UserGender'],
				'UserEmail'=>$d['UserEmail'],
				'UserPass'=>sha1($d['UserPass']),
			);
			$result = $this->Users->create_users($data);	
			if( $result=1 )
				echo "Account Created! ";
			else
				$this->load->view('create_account');		
		}
		else{
			$this->load->view('create_account');		
			//echo "Account Created! ";	
		}	

	}
	public function login_account(){
        $this->load->model('users_model');
          $result = $this->users_model->login_users();
          if(! $result){
              $msg = '<font color=red>Invalid email and/or password.</font><br />';
              $this->index($msg);
          }else{
          		echo "Login successfully!";
          }        
    }
}
?>