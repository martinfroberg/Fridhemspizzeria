<html>

<head>
  <meta charset="utf-8">
  <title>Admin</title>
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

<body style="background-color: darkblue; background-image: none;">
  <h1 style="text-align: center;">Admin Login</h1>

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
      <form class="admin-login-form" action="core/admin/login.php" method="post">
      <input placeholder="Username" type="text" name="username" required>
      <br>
      <input placeholder="Password" type="text" name="password" required>
      <br>
      <button type="submit">Login</button>
      </form>';
    }
  } ?>
</body>
</html>
