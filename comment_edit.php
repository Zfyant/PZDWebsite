<?php
	include 'core/init.php';
	include 'includes/page_starter.php'; 
?>

<div class="content">


<?php

$id = $_POST['id'];
$uid = $_POST['uid'];
$date = $_POST['date'];
$message = $_POST['message'];

echo "
	<form method='POST' action='".editComments($connect)."'>
		<input type='hidden' name='id' value='".$id."'>
		<input type='hidden' name='uid' value='".$uid."'>
		<input type='hidden' name='date' value='".$date."'>
		<textarea name='message' class='comment-box primary-border' rows='2'>".$message."</textarea>
		<div class='comment-info primary-border'>
			<button name='commentSubmit' type='submit' class='btn-post'>Edit</button>
		</div>
	</form>";
?>


</div><!-- End Content -->
  
<?php include 'includes/footer_and_scripts.php'; ?>
	
  
  
  
  
  
  
  
  
  
  
  