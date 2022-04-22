<?php
// Initialize the session
session_start();
//
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login.php");
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
    <div id="mobile-menu">
      <ul class="mobile-menu-list">
        <li><a href="./page/viewPassword.php">View Passwords</a></li>
        <li><a href="./page/newPassword.php">New Password</a></li>
        <li><a href="./page/upgradeAccount.php">Upgrade Account</a></li>
        <li><a href="./page/help.php">Help</a></li>
        <li><a href="./reset-password.php">Reset Password</a></li>
        <li><a href="./logout.php">Logout</a></li>
      </ul>
    </div>
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
        <h2 class="title">Generate A New Password</h2>
        <form class="form-control">
          <table class="form-control-table outline">
            <tr>
              <td><label for="account">Insert Platform Name</label></td>
            </tr>
            <tr>
              <td><input type="text" name="account" placeholder="Facebook"/></td>
            </tr>
            <tr class="spacer"></tr>
          </table>
          <br/><br/>
          <div class="tabs">
            <button type="button" id="random" class="tab tab-button tab-active" onclick="toggleTab('random')">Random</button>
            <button type="button" id="word" class="tab tab-button" onclick="toggleTab('word')">Words</button>
          </div>
          <div id="tab-random" class="tab-random">
            <table class="form-control-table">
              <tr class="spacer"></tr>
              <tr>
                <td><button id="generatePassword" class="submit" type="button">Generate Password</button></td>
              </tr>
              <tr class="spacer"></tr>
              <tr>
                <td><input id="generatedPassword" style="width:30vw; text-align:center;" type="text" name="generatedPassword"/></td>
              </tr>
              <tr class="spacer"></tr>
              <tr>
                <td><input class="submit" type="submit" name="submit" value="Save Login"/></td>
              </tr>
              <tr class="spacer"></tr>
            </table>
          </div>
          <div id="tab-word" class="tab-word">
            <div>
              3 Words
            </div>
            <div>
              4 Words
            </div>
            <table class="form-control-table">
              <tr class="spacer"></tr>
              <tr>
                <td><button id="generatePassword" class="submit" type="button">Generate Password</button></td>
              </tr>
              <tr class="spacer"></tr>
              <tr>
                <td><input id="generatedPassword" style="width:30vw; text-align:center;" type="text" name="generatedPassword"/></td>
              </tr>
              <tr class="spacer"></tr>
              <tr class="spacer"></tr>
              <tr class="spacer"></tr>
              <tr>
                <td><input class="submit" type="submit" name="submit" value="Save Login"/></td>
              </tr>
              <tr class="spacer"></tr>
            </table>
          </div>
        </form>
      </div>
    </div>
  </body>
  <footer>
    <a class="footer-text">
      Created by Adem Kanca - 2022
    </a>
  </footer>
  <script src="../script.js"/></script>
  <script>
    function myFunction(x) {
      x.classList.toggle("change");
      var mobileMenu = document.getElementById("mobile-menu");
      mobileMenu.classList.toggle("visible");
    }
  </script>
</html>
