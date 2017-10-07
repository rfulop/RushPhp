<?php session_start(); ?>

<nav id="navtop">
  <ul>
    <li>Home</li>
    <li>What's new ?</li>
    <li>Contact</li>
    <li>My Shop</li>
    <?php
    if (!$_SESSION['login'])
    echo "<a href='login.php'><li>Login</li></a>";
    else {
      echo "<a href='logout.php'><li>Logout</li></a>";
    }?>
  </ul>
</nav>
