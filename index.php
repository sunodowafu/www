<?php
error_reporting(E_ALL);
  ini_set('display_errors', 'On');
  session_start();
?>
<!DOCTYPE html>
<html>
Welcom, <?php echo !empty($_SESSION['auth'])?$_SESSION['auth']['name']:"Guest"  ?>
    <?php $check = !empty($_SESSION['auth']);
    if (!empty($_SESSION['auth'])){
      ?>
      <a href="profile.php">Profile</a><br>
      <?php
        if ($_SESSION['auth']['role']=='admin'){
          echo 'You logged in as admin';
        }
      }
    else{
      ?>
      <form method="post" action="polz.php">
	  <input type="text" name="user"/><br>
	  <input type="password" name="password"/><br>
	  <input type="submit" name="send" value="enter"/><br>
	  </form><br>
	  <FORM method="post" action="register.php">
      <input type="submit" name="register" value="register"/>
      </form>
      <?php
    }
  ?>
</html>