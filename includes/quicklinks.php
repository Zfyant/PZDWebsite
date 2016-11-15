<?php
	if (isset($_SESSION['user_id'])) {
?>
  <div class="user-quicklinks">
    <ul>
      <li>Hello <a class="user-color-primary"><?php echo $user_data['Username']; ?></a>!</li>
      <ul>
        <span class="user-color-primary"><?php echo $user_data['FirstName']; ?></span>
        <li><a href="<?php echo $root; ?>changepassword.php">Change Password</a></li>
        <li><a href="<?php echo $root; ?>admin.php">Admin Page</a></li>
        <li><a href="<?php echo $root; ?>logout.php"><font style="font-weight:700" color="#CC4547">Logout</font></a></li>
      </ul>
    </ul>
  </div><!-- End User Quick Links -->
<?php
}
	else
		echo '&nbsp;Not logged in';
?>
      