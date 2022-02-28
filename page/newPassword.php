<?php
// Initialize the session
session_start();
//
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>MyPW</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="../styles.css">
  </head>
  <body>
    <header class="top_header">
      <div class="welcome_message">
        <h2>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to MyPW.</h2>
      </div>
      <div class="burger_container" onclick="myFunction(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </div>
    </header>
    <div class="main_container">
      <aside class="sidebar_container">
        <table class="table_sidebar">
          <tr>
            <td class="tile tile_main" onclick="location.replace('viewPassword.php')">
              <a>View Passwords</a>
              <div class="arrow-right"></div>
            </td>
          </tr>
          <tr>
            <td class="tile tile_main active" onclick="location.replace('newPassword.php')">
              <a>New Password</a>
              <div class="arrow-right active"></div>
            </td>
          </tr>
          <tr>
            <td class="tile tile_main" onclick="location.replace('upgradeAccount.php')">
              <a>Upgrade Account</a>
              <div class="arrow-right"></div>
            </td>
          </tr>
          <tr>
            <td class="tile tile_main" onclick="location.replace('help.php')">
              <a>Help</a>
              <div class="arrow-right">
            </td>
          </tr>
        </table>
        <table class="table_sidebar account_table">
          <tr>
            <td class="tile tile_pass" onclick="location.replace('../reset-password.php')">
              <a>Reset Password</a>
              <div class="arrow-right-reset"></div>
            </td>
            <td class="tile tile_log" onclick="location.replace('../logout.php')">
              <a>Logout</a>
              <div class="arrow-right-log"></div>
            </td>
          </tr>
        </table>
      </aside>
      <div class="page_content">
        <h1 class="title">Generate A New Password</h1>
        <form class="form-control">
          <table class="form-control-table">
            <tr>
              <td><label for="account">Insert Platform Name</label></td>
            </tr>
            <tr>
              <td><input type="text" name="account"/></td>
            </tr>
            <tr>
              <td><label for="account">Insert Platform Name</label></td>
            </tr>
            <tr>
              <td><input type="text" name="account"/></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </body>
  <footer>

  </footer>
  <script>
    function myFunction(x) {
      x.classList.toggle("change");
    }
  </script>
</html>
