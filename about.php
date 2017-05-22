<?php
include('core/database/connection.php');
$db = Database::getConnection(); ?>

<!doctype html>
<html lang="sv">
<head>
  <meta charset="utf-8"/>
  <title>Pizzeria Fridhem - Meny</title>

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
</head>
<body>

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
        <li><div><a href="menu.php">Meny</a></div></li>
        <li><div><a href="#">Evenemang</a></div></li>
        <li><div><a href="#">Galleri</a></div></li>
        <li><div><a href="#">Fridhemsspelet</a></div></li>
        <li><div><a href="https://onlinepizza.se/karlshamn/pizzeria-fridhem/#menu" target="_blank">Beställa</a></div></li>
        <li><div><a href="#">Om oss</a></div></li>
      </ul>
  </nav>

  </header>
  <!-- Body -->

  <footer>
     
       <article class="footeraddress">
            
        <h2>Pizzeria Fridhem</h2>    
        <p>Fridhemsgatan 4, 374 41 Karlshamn</p>
        <p>0454-10304</p>

         </article>
         
         <article class="footercopyright">
             <p>© Pizzeria Fridhem<p>
         </article>
         
        <div id="map"></div>
      
      
        <script async defer
         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-hvHiQl9w-Bqs_EdXHjDSHVbKm9nLGRg&callback=initMap">
        </script>
      
        
  </footer>
</body>
</html>
