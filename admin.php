<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    session_start();
    if (isset($_SESSION['user_id'])){
      //Logged on
      echo '
      <form action="core/admin/logout.php" method="post">
        <button type="submit">Logout</button>
      </form>';
    } else {
      //Logged off
      echo '
      <form action="core/admin/login.php" method="post">
        <input placeholder="Username" type="text" name="username" required>
        <input placeholder="Password" type="text" name="password" required>
        <button type="submit">Submit</button>
      </form>';
    } ?>
  </body>
</html>
