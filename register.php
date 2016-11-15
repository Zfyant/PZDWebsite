<?php
	include 'core/init.php';
	redirect_logged_in();
	include 'includes/page_starter.php';

if (empty($_POST) === false) {
	$required_fields = array('username', 'email', 'password', 'passwordconfirm', 'firstname');

	foreach($_POST as $key=>$value) {
		if (empty($value) && in_array($key, $required_fields) === true) {
			$errors[] = 'Colored fields must be filled.';
			break 1;
		}
	}
	
	if (empty($errors) === true) {
		if (user_exists($_POST['username']) === true) {
			$errors[] = 'The username \'' . $_POST['username'] . '\' is already taken';
		}
		if (preg_match("/\\s/", $_POST['username']) == true) {
			$errors[] = 'Spaces are not allowed';
		}
		if (strlen($_POST['password']) < 6) {
			$errors[] = 'Password must be at least 6 characters';
		}
		if ($_POST['password'] !== $_POST['passwordconfirm']) {
			$errors[] = 'Passwords do not match';
		}
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
			$errors[] = 'A valid email adddress is required';
		}
		if (email_exists($_POST['email']) === true) {
			$errors[] = 'The email \'' . $_POST['username'] . '\' is already in use';
		}
		if ($_POST['password'] === $_POST['username']) {
			$errors[] = 'Your password must not be the same as your username.';	
		}
	}
}
?>

<div class="content">

	<br><h1>Register</h1>
  
  <div class="errors">
		<?php
      if (empty($_POST) === false && empty($errors) === true) {
        $register_data = array(
          'username' 	=> $_POST['username'],
          'password' 	=> $_POST['password'],
          'email' 		=> $_POST['email'],
          'firstname' => $_POST['firstname'],
          'lastname' 	=> $_POST['lastname'],
        );
        register_user($register_data);
        header('Location: index.php');
        echo 'Registration successful!';
        exit();
      }
      else if (empty($errors) === false) {
        echo output_errors($errors);
      }
    ?>
  </div>
  
  <form class="login-form" action="" method="post">
  
    <div class="legend">
      <div class="legend-item user-color-primary">Required</font></div>
      <div class="legend-item">Not Required</div>
    </div>
  
    <table>
      <tr>
        <td>
          <b class="user-color-primary">Username:&nbsp;</b>
          <br>
          <input type="text" name="username">
        </td>
        
        <td>
          <b class="user-color-primary">Email:&nbsp;</b>
          <br>
          <input type="email" name="email">
        </td>
      </tr>
      
      <tr>
        <td>
          <b class="user-color-primary">Password:&nbsp;</b>
          <br>
          <input type="password" name="password">
        </td>
        
        <td>
          <b class="user-color-primary">Password Confirm:&nbsp;</b>
          <br>
          <input type="password" name="passwordconfirm">
        </td>
      </tr>
    
      <tr>
        <td>
          <b class="user-color-primary">First Name:&nbsp;</b>
          <br>
          <input type="text" name="firstname">
        </td>
        
        <td>
          <b>Last Name:&nbsp;</b>
          <br>
          <input type="text" name="lastname">
        </td>
      </tr>
        
    </table>
      
		<input class="login-btn" type="submit" value="Register">
    
  </form>
  
</div><!-- End Content Container -->
  
<?php 
include $php_include.'includes/footer_and_scripts.php'; 
?>

