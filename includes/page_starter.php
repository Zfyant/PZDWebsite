<html>
<head>
<title>Pro Zech Designs</title>
<?php 	
	include $php_root.'includes/css/styles.php';
	include $php_root.'includes/css/menu.php';
	include $php_root.'includes/css/users.php';
	include $php_root.'includes/css/gallery.php';
	include $php_root.'includes/css/folders.php';
	include $php_root.'includes/css/space.php';
	include $php_root.'includes/css/mobile.php';
?>
<link rel="icon" type="image/png" href="<?php echo $root; ?>images/favicon.png" />
<meta name="viewport" content="initial-scale=1">
</head>

<body>
<!--body style="background-image: url(<?php echo $user_bg; ?>)"-->

<?php include $php_root.'includes/planets.php'; ?>
<?php include $php_root.'includes/menu_and_banner.php'; ?>
 

<div class="wrapper">

	<?php 
		if (logged_in() === false) {
			include $php_root.'includes/login_panels.php'; 
		}
	?>
	
  <div class="user-menu">
		<?php include $php_root.'includes/quicklinks.php'; ?>
  </div><!-- End UserMenu Container -->	