
<h2>Login</h2>
<br/>  <br/>

<form class="login-form" method="post" action="<?php echo $root; ?>login.php" name="login_form">
  
  <table>
    <tr><td>
      <b class="user-color-primary">Username:&nbsp;</b>
      <br>
      <input type="text" name="Username" />
    </td></tr>
    
    <tr><td>
      <b class="user-color-primary">Password:&nbsp;</b>
      <br>
      <input type="password" name="Password" />
    </td></tr>
    
    <tr><td class="btn">
      <input class="login-btn" type="submit" name="loginbtn" value="Login" />
    </td></tr>
    
  </table>
</form>

No Account? <a href="<?php echo $root; ?>register.php">Register -></a>