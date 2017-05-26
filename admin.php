<html>

<head>
  <meta charset="utf-8">
  <title>Admin</title>
  <meta name="description" content="" />
  <meta name="author" content="" />
  <!-- mobile viewport optimisation -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- stylesheets -->
  <link rel="stylesheet" href="css/base.css" type="text/css" />
  <link rel="stylesheet" href="css/styles.css" type="text/css" />
  <!--[if lte IE 7]>
  <link rel="stylesheet" href="css/iehacks.css" type="text/css"/>
  <![endif]-->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <![endif]-->
  <link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
</head>

<body>
  <div class="loginheader"><h1>Fridhems Pizzeria Login</h1></div>

  <!-- Admin Login--> <?php
  if(session_status() == PHP_SESSION_NONE){
    session_start();
    if(isset($_SESSION['user_id'])) {
      //Logged on
      echo '
      <form action="core/admin/logout.php" method="post">
      <button type="submit">Logout</button>
      </form>';
    } else {
      //Logged off
      echo '
      <form action="core/admin/login.php" method="post">
      <div class="holder"><input class="boxlog" placeholder="Username" type="text" name="username" required>
      <input class="boxlog" placeholder="Password" type="text" name="password" required>
      <button class="btn" type="submit">Login</button></div>
      </form>';
    }
  } ?>
</body>
</html>
