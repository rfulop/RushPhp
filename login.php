<?php
session_start();
  if ($_POST["login"] && $_POST["password"] && $_POST["submit"] === "OK")
  {
    if (!file_exists("dbs") || !file_exists("dbs/users"))
      exit;
    $tab = unserialize(file_get_contents("dbs/users"));
    $logged = 0;
    $pw = hash("whirlpool", $_POST["password"]);
    foreach ($tab as $user)
    {
      if ($user["login"] === $_POST["login"] && $user["password"] === $pw)
      {
        $logged = 1;
        break;
      }
    }
    if (!$logged)
      echo "Wrong login or password";
    else {
      $_SESSION['login'] = $_POST['login'];
      header("Location: index.php");
    }
  }

if (!$_SESSION['login'])
{
  ?>
 <body>
 <form method="post" action="login.php">
   <h2>Connexion</h2>
   <p>
     <label for="login">Login: </label>
     <input type="text" name="login" />
     <br />
     <label for="password">Password: </label>
     <input type="password" name="password" />
    <input type="submit" name="submit" value="OK"/>
   </form>
   <a = href="create_account.php"><p>Create an account</p></a>
 </body>
<?php } ?>
