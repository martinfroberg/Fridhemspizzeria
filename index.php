<?php require_once 'core/database/connect.php';
$connection = db_connect(); ?>

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
</head>
<body>

  <header>
    <h3>PIZZERIA</h3>
    <h1>FRIDHEM</h1>
    <div class="h-img-wrap">
    </div>

  <nav>
       <ul>
        <li><a href="#">Meny</a></li>
        <li><a href="#">Evenemang</a></li>
        <li><a href="#">Galleri</a></li>
        <li><a href="#">Fridhemsspelet</a></li>
        <li><a href="#">Om oss</a></li>
      </ul>
  </nav>

  </header>
  <!-- Body -->
  <section class="news-feed-wrap">
    Nyhetsflöde
  </section>
  <footer>
      <article>

        <h1>Fridhemsgatan 4, Karlshamn</h3>
        <h1>0454-10304</h3>

        <h1>© 2017</h2>

      </article>
  </footer>




</body>
</html>
