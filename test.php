<?php
session_start();
  ?>
<doctype html>
<html>
  <body>
  <header>
<form action="login.php" method="POST">
       <input type="mailiud" placeholder="Enter Email" name="mailuid" id="enter">
       <input type="password" placeholder="Enter Password" name="password" id ="enter">      
      <button type="submit" id="button2">Login</button>
      </form>
    <form action="logout.php" method="POST">
      
    </form>
    </header>
  </body>
  </html>