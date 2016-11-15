<?php 
	include '../core/init.php';
	include '../includes/page_starter.php'; 
?>

<div class="content">

  <div class="article">
  
  <div class="images">
  
  	<a href="../images/tutorials/Facebeautiful_01.jpg" target="_blank">
    	<img src="../images/tutorials/Facebeautiful_01.jpg" style="float: left;" />
    </a>
    
    <a href="../images/tutorials/Facebeautiful_02.jpg" target="_blank">
    	<img src="../images/tutorials/Facebeautiful_02.jpg" style="float: right;" />
    </a>
    
  </div>
  
  <div class="tutorial_buttons">
  	<a href="#HOW">How does this work?</a>
  	<a href="#DIY">How do I do this?</a>
  </div>
  
  <div class="article-body">
    <div id="HOW">
    <h1>How does this work?</h1><br>
      <a href="https://userstyles.org/" target="_blank">Stylish</a> is a 3rd party plugin that latches onto browsers, free for all to use. <br>
      Currently works on these browsers:
      	<ul>
        	<li><a href="https://chrome.google.com/webstore/detail/stylish/fjnbnpbmkenffdnngjfgmeleoegfcffe" target="_blank">Chrome</a></li>
          <li><a href="https://addons.mozilla.org/en-US/firefox/addon/stylish/?src=external-userstyleshome" target="_blank">Firefox</a></li>
          <li><a href="http://sobolev.us/stylish/" target="_blank">Safari</a></li>
          <li><a href="https://addons.opera.com/en/extensions/details/stylish/" target="_blank">Opera</a></li>
        </ul>
      In a nutshell, Stylish allows any programmer to ovverwrite CSS rules on designated websites. <br>
      For those less tech savvy, I am essentially re-writing the code that styles the elements on the page.<br><br>
      
      Do note, <font color="#FFAE00">this only works on your computer.</font> Only YOU see the changes made to the websites.<br><br>
      
      <h2>Pro</h2>
      One example is the ability to remove a website's ad-box container entirely, thus never seeing their ads (if done correctly).
      <br><br>
      <h2>Con</h2>
      Websites change and over time, precious structured code may break down over time or cease to function at all.
    </div>
    
    
    <br><br><br><br><br>
      
      
    <div id="DIY">
    
    <h1>How do I do this?</h1><br>
    <h2>Outline</h2>
    	<ol>
      	<li>Install Plugin</li>
        <li>Restart Browser</li>
        <li>Search/Download a Skin</li>
        <li>Turn on a selected Skin</li>
        <li>Enjoy</li>
      </ol>
      <br><br>
      <h3>1. Install Plugin</h3>
      You can get the download link from above or on the <a href="https://userstyles.org/" target="_blank">Stylish</a> website.
      <br><br>
      
      <h3>2. Restart Browser</h3>
      Most browsers, on most versions, up to the time of this post require you to restart your browser. <br>
      So if you're anythinglike me, it'd be best to not do this when there are a hundred tabs open.
      <br><br>
      
      <h3>3. Search/Download a Skin</h3>
      Now it is time for the fun part. You have two choices to implement a user skin. <br>
      &nbsp; 1) Download a user-uploaded skin from UserStyles <br>
      &nbsp; 2) Create your own from scratch <br>
      <br>
      I myself have spent a while, modifying Facebook. <br>
      If you like my design (seen above in images), you can download it <a href="../downloads.php#fbbeau">here</a> on the downloads page. <br>
      <br>
      The code is not perfect, and there are some elements I have not yet been able to fix, however if you find pages and odd elements that you can't see too easily do at least one of two things: <br>
      &nbsp; 1) Disable the User Style temporarily <br>
      &nbsp; 2) Then screenshot (if possible) and share with me the broken area, I will do my timely best to fix it!
      <br><br>
      
      <h3>4. Turn on a selected Skin</h3>
      If you went with a user style on the UserStyle community site, then downloads are automatic. To enable your skin, go to the website that the UserStyle you downloaded was directed to. In the upper right hand corner, where your plugins are located, find <i>Stylish</i>, dropdown, and select the downloaded user style. <br>
      
      <br><center><img src="../images/tutorials/Facebeautiful_03.jpg" width="80%" /></center><br>
      
      <h2>HOWEVER</h2>
      if you downloaded my code, all you downloaded was simple text. To put this to use we must undergo a few steps. <br>
      <br>
      What we are doing is essentially making a new skin from scratch, using the current webpage that you are on and pasting my code in.
      
      <ul>
      	<li>Go to Facebook.</li>
        <li>Click the <font color="#DB9C00">Stylish plugin icon</font> and select <font color="#386387">"Write style for: <i>www.facebook.com</i> this URL"</font> at the bottom.</li>
        <li>By default, the <font color="#DB9C00">Applies to</font> selector will be set to <font color="#386387">"URLs starting with"</font> but any Facebook subdomain will not see this code, so change it to <font color="#386387">"URLs on domain"</font>.</li>
        <li><font color="#DB9C00">Copy code</font> from the TXT document you downloaded and <font color="#DB9C00">paste</font> it into the Stylish Code Window.</li>
        <li>Give it a <font color="#DB9C00">Name</font> and as soon as you click <font color="#DB9C00">Save</font>, magic encumbers your soul!</li>
        <br><center><img src="../images/tutorials/Facebeautiful_04.jpg" width="80%" /><br>Example</center><br>
      </ul>
      
    </div>
  </div><!-- End Article Body -->
  
  </div><!-- End Article -->
  
</div><!-- End Content Container -->
  
<?php include '../includes/footer_and_scripts.php'; ?>
	
  
  
  
  
  
  
  
  
  
  
  