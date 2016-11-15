<?php
	include 'core/init.php';
	include 'includes/page_starter.php'; 
?>

  <div class="content">
  
  	<div class="comment-container">
      
			<?php
      if (isset($_SESSION['user_id'])) {
				echo 
				"<br>Express comments you may have for ProZechDesigns.<br>
					I encourage critism and would love to hear what you like or dislike!<br>
					
				<form method='POST' action='".setComments($connect)."' class='posts'>
        <input type='hidden' name='uid' value='".$_SESSION['user_id']."'>
        <input type='hidden' name='date' value='". date('Y-m-d H:i:s') ."'>
        <textarea name='message' class='comment-box' rows='6' placeholder='Whats on your mind?'></textarea>
        <div class='comment-info primary-border'>
          <button name='commentSubmit' type='submit' class='btn-post'>Post</button>
        </div>
      	</form>";
      } 
			else {
          echo "You must login to comment";
      }
      ?>
      
			</div><!-- End Comment Container Bar -->
      
      <ul class="comments">
      	<h2>Comments</h2>
				<?php getComments($connect); ?>
      </ul>
    
  </div><!-- End Content -->
  
<?php include 'includes/footer_and_scripts.php'; ?>
	
  
  
  
  
  
  
  
  
  
  
  