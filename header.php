<?php
$header = '
<header class="top_header">
  <div class="welcome_message">
    <h2>Hi, <b>'.htmlspecialchars($_SESSION["username"]).'</b>. Welcome to MyPW.</h2>
  </div>
  <div class="burger_container" onclick="myFunction(this)">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
  </div>
</header>';?>
