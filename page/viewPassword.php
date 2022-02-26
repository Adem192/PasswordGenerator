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
        <table class="table_sidebar">
          <tr>
            <td class="tile tile_main">
              <a href="viewPassword.php">View Passwords</a>
              <div class="arrow-right active"></div>
            </td>
          </tr>
          <tr>
            <td class="tile tile_main">
              <a href="newPassword.php">New Password</a>
              <div class="arrow-right"></div>
            </td>
          </tr>
          <tr>
            <td class="tile tile_main">
              <a href="upgradeAccount.php">Upgrade Account</a>
              <div class="arrow-right"></div>
            </td>
            <td class="tile tile_main">
              <a href="help.php">Help</a>
              <div class="arrow-right">
            </td>
          </tr>
        </table>
        <table class="table_sidebar account_table">
          <tr>
            <td class="tile tile_pass"><a href="reset-password.php">Reset Password</a></td>
            <td class="tile tile_log"><a href="logout.php">Logout</a></td>
          </tr>
        </table>
      </div>
  </body>
  <script>
    function myFunction(x) {
      x.classList.toggle("change");
    }
  </script>
</html>
