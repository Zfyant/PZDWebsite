<?php
	include 'core/init.php';
	include 'includes/page_starter.php'; 
?>


<div class="content home-doh">

  <div class="comment-container wrapper-content">
    <a href="comment_page.php">
      Ideas, comments, or suggestions about the site? <b>Share here!</b>
    </a>
  </div><!-- End Comment Redirection Bar -->
  
  
  <div class="intro-banner-container wrapper-content">
    <div class="aspect-16-9">
      
      <div class="slide bg01 active-slide">
        <span></span>
      </div>
      
      <div class="slide bg02">
        <span></span>
      </div>
      
      <div class="slide bg03">
        <span>test</span>
      </div>
      
    </div><!-- End AspectRatio Container -->
    <div class="controls-container">
      <div class="slideshow sl-back"></div>
      <div class="sl-option sl-active"></div>
      <div class="sl-option"></div>
      <div class="sl-option"></div>
      <div class="slideshow sl-next"></div>
    </div><!-- End Controls Container -->
  </div><!-- End Introduction Banner Container -->
  
 
  <?php include 'news_feed.php'; ?>
  
</div><!-- End Content Container -->
  
<?php include 'includes/footer_and_scripts.php'; ?>
	
  
  
  
  
  
  
  
  
  
  
  