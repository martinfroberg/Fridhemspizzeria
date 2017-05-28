<?php
require_once 'core/database/connection.php';
$con = Database::getConnection(); ?>

<!doctype html>
<html lang="sv">
<head>
  <meta charset="utf-8"/>
  <title>Pizzeria Fridhem</title>

  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <!-- mobile viewport optimisation -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- stylesheets -->
  <link rel="stylesheet" href="css/base.css" type="text/css"/>
  <link rel="stylesheet" href="css/styles.css" type="text/css"/>
  <!--[if lte IE 7]>
  <link rel="stylesheet" href="css/iehacks.css" type="text/css"/>
  <![endif]-->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <![endif]-->
  <script type="text/javascript" src="js/main.js"></script>
  <link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
  <script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
  <?php
  if(session_status() == PHP_SESSION_NONE){
    session_start();
    if(isset($_SESSION['user_id'])) {
      include 'admin/adminui.php';
    }
  } ?>

  <header>
    <a href="index.php">
      <h3>PIZZERIA</h3>
      <h1>FRIDHEM</h1>
    </a>
    <div class="h-img-wrap">
      <a href="https://onlinepizza.se/karlshamn/pizzeria-fridhem/#menu" target="_blank"><img src="images/onlinepizza.jpeg" title="Beställ från Pizzeria Fridhem" alt=""></a>
    </div>

    <nav>
      <ul>
        <li><div><a href="index.php">Hem</a></div></li>
        <li><div><a href="menu.php">Meny</a></div></li>
        <li><div><a href="events.php">Evenemang</a></div></li>
        <li><div><a href="gallery.php">Galleri</a></div></li>
        <li><div><a href="https://onlinepizza.se/karlshamn/pizzeria-fridhem/#menu" target="_blank">Beställa</a></div></li>
        <li><div><a href="about.php">Om oss</a></div></li>
      </ul>
    </nav>
  </header>
