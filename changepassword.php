<?php 
include 'core/init.php';
protect_page();


if (empty($_POST) === false) {
	$required_fields = array('current_password', 'password', 'repeat_password');
	
	foreach($_POST as $key=>$value) {
		if (empty($value) && in_array($key, $required_fields) === true) {
			$errors[] = 'All fields must be filled.';
			break 1;
		}
	}
	
	if (md5($_POST['current_password']) === $user_data['Password']) {
		if (trim($_POST['password']) !== trim($_POST['repeat_password'])) {
			$errors[] = 'Passwords do not match';
		}
		else if (strlen($_POST['password']) < 6 ) {
			$errors[] = 'Password must be at least 6 characters';
		}
	}
	else {
		$errors[] = 'Your Current Password is incorrect';
	}
}


include 'includes/page_starter.php';
?>

<div class="content">

	<h1>Change Password</h1>
  
  <div class="errors">
		<?php
      if (empty($_POST) === false && empty($errors) === true) {
        change_password($session_user_id, $_POST['password']);
				header('Location: changepassword.php');
        echo 'Password change successful!';
        exit();
      }  
      else if (empty($errors) === false) {
        echo output_errors($errors);
      }
    ?>
  </div>
  
  <form action="" method="post">
  	
    <table>
      <tr><td>
        <b class="user-color-primary">Current Password</b>
        <br>
        <input type="password" name="current_password">
      </td></tr>
      
      <tr><td>
        <b class="">New Password</b>
        <br>
        <input type="password" name="password">
      </td></tr>
      
      <tr><td>
        <b class="">Repeat Password</b>
        <br>
        <input type="password" name="repeat_password">
      </td></tr>
      
      <tr><td class="btn">
      	<input class="login-btn" type="submit" value="Change Password">
      </td></tr>
    </table>
  
  </form>
  
</div><!-- End Content Container -->
  
<?php 
include 'includes/footer_and_scripts.php'; 
?>

