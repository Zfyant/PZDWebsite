<?php
	include 'core/init.php';
	include 'includes/page_starter.php'; 
?>

<div class="content">


<?php

$id = $_POST['id'];
$uid = $_POST['uid'];
$date = $_POST['date'];
$reply = $_POST['reply'];

echo "
	<form method='POST' action='".replyComments($connect)."'>
		<input type='hidden' name='id' value='".$id."'>
		<input type='hidden' name='uid' value='".$uid."'>
		<input type='hidden' name='date' value='".$date."'>
		<textarea name='reply' class='comment-box primary-border' rows='2' placeholder='Reply System Not Working'>".$reply."</textarea>
		<div class='comment-info primary-border'>
			<button name='commentSubmit' type='submit' class='btn-post'>Reply</button>
		</div>
	</form>";
?>


</div><!-- End Content -->
  
<?php include 'includes/footer_and_scripts.php'; ?>
	
  
  
  
  
  
  
  
  
  
  
  