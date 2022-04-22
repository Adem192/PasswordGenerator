<?php
$sidebar = '
<aside class="sidebar_container">
  <table class="table_sidebar">
    <tr>
      <td class="tile tile_main" onclick="location.replace(\'page/viewPassword.php\')">
        <a>View Passwords</a>
        <div class="arrow-right"></div>
      </td>
    </tr>
    <tr>
      <td class="tile tile_main" onclick="location.replace(\'page/newPassword.php\')">
        <a>New Password</a>
        <div class="arrow-right"></div>
      </td>
    </tr>
    <tr>
      <td class="tile tile_main" onclick="location.replace(\'page/upgradeAccount.php\')">
        <a>Upgrade Account</a>
        <div class="arrow-right"></div>
      </td>
    </tr>
    <tr>
      <td class="tile tile_main" onclick="location.replace(\'page/help.php\')">
        <a>Help</a>
        <div class="arrow-right">
      </td>
    </tr>
  </table>
  <table class="table_sidebar account_table">
    <tr>
      <td class="tile tile_pass" onclick="location.replace(\'../reset-password.php\')">
        <a>Reset Password</a>
        <div class="arrow-right-reset"></div>
      </td>
      <td class="tile tile_log" onclick="location.replace(\'../logout.php\')">
        <a>Logout</a>
        <div class="arrow-right-log"></div>
      </td>
    </tr>
  </table>
</aside>
';

?>
