<?php 
	include 'core/init.php';
	redirect_logged_in();
	
if (empty($_POST) === false) {
	$username = ($_POST['Username']);
	$password = ($_POST['Password']);
	
	if (empty($username) === true || empty($password) === true) {
		$errors[] = 'You need to enter a username AND password';
	}
	else if(user_exists($username) === false) {
		$errors[] = 'Cannot find that username';
	}
	//else if (user_active($username) === false) {
	//	$errors[] = 'Account not activated';
	//}
	else {
		
		if (strlen($password) > 32) {
			$errors[] = 'Password too long';
		}				
		$login = login($username, $password);
		if ($login === false) {
			$errors[] = 'That username/password combo is incorrect';
		}
		else {
			$_SESSION['user_id'] = $login;
			echo 'Login Halted..';
			header('Location: index.php');
			exit();
		}
	} 
}
else { 
	$errors[] = 'No data received';
}
if (empty($errors) === false) {
	include 'includes/page_starter.php';
?>

	<div class="content">
  	<h2 style="color: #ddd">Login Error</h2>
      <div class="errors">
				<?php
          echo output_errors($errors);
        ?>
      </div>
  </div><!-- End Content -->
  
<?php 
	include 'includes/footer_and_scripts.php';
	}
?>
    
    
    
    
    