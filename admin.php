<?php include 'modules/header.php';
 ?>
    <div class="mainback"><h1>Fridhems Pizzeria Login</h1></div>
           <!---- Admin Login--> <?php
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
        <div class="holder"><input placeholder="Username" type="text" name="username" required>
        <input placeholder="Password" type="text" name="password" required>
        <button class="btn" type="submit">Login</button></div>
      </form>';
    } ?>

<?php include 'modules/footer.php'; ?>
