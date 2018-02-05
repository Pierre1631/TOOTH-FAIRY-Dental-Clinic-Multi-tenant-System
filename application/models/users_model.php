<?php
class Users_model extends CI_Model {
	private $table = "profile";
	public function __construct(){
		parent::__construct();		
	}
	public function create_users($data){
		$this->db->insert($this->table, $data);
		return TRUE;
	}        
	public function read_users(){
		$this->db->select("*");
		$this->db->from($this->table);		
		$query=$this->db->get();		
		return $query->result_array();
	}
	public function login_users(){

		$useremail = $this->security->xss_clean($this->input->post('UserEmail'));
        $userpass = $this->security->xss_clean($this->input->post('UserPass'));
        
        $this->db->where('UserEmail', $useremail);
        $this->db->where('UserPass', $userpass);

        $query = $this->db->get('profile');
        if($query->num_rows == 1)
        {
            $row = $query->row();
            $data = array(
                    'UserID' => $row->UserID,
                    'UserLastName' => $row->UserLastName,
                    'UserFirstName' => $row->UserFirstName,
                    'UserMiddleName' => $row->UserMiddleName,
                    'UserBirthDate' => $row->UserBirthDate,
                    'UserContact' => $row->UserContact,
                    'UserGender' => $row->UserGender,
                    'UserEmail' => $row->UserEmail,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
        return false;
	}
}
?>
