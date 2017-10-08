<?php session_start(); ?>

<nav id="navtop">
  <ul>
    <li>Home</li>
    <li>What's new ?</li>
    <li>Contact</li>
    <?php
    if ($_SESSION['priv'] === 'superadmin' || $_SESSION['priv'] === 'admin')
      echo "<a href='admin.php'><li>Admin panel</li></a>";
    else {
      echo "<li>My shop</li></a>";
    }
    if (!$_SESSION['login'])
    echo "<a href='login.php'><li>Login</li></a>";
    else {
      echo "<a href='logout.php'><li>Logout</li></a>";
    }?>
  </ul>
</nav>
