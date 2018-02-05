<!DOCTYPE html>
<html lang="en">
  <head>    
    <title>Login Screen | Welcome </title>
  </head>
  <body>
    <div id='login_form'>
      <form action="<?php echo site_url();?>/Users/login_account" method='post' class="form">
        <h2>User Login</h2>
        <?php if(! is_null($msg)) echo $msg;?>
        <p>Email: <input type="text" name="UserEmail"/></p>
        <p>Password: <input type="password" name="UserPass"/></p>                            
        <input type='Submit' value='Login' />            
     </form>
    </div>
  </body>
</html>