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
  <link rel='shortcut icon' type='image/x-icon href='images/favicon.ico' />
</head>
<body>

  <header>
    <h3>PIZZERIA</h3>
    <h1>FRIDHEM</h1>
    <div class=onlinepizza><a target="_blank" href="https://onlinepizza.se/karlshamn/pizzeria-fridhem/#menu">
    <img src="images/onlinepizza.jpeg" title="Beställ mat här" alt="onlinepizza"></a>
    </div>
    <div class="h-img-wrap">
    </div>

  <nav>
       <ul>
        <li><div><a href="#">Meny</a></div></li>
        <li><div><a href="#">Evenemang</a></div></li>
        <li><div><a href="#">Galleri</a></div></li>
        <li><div><a href="#">Fridhemsspelet</a></div></li>
        <li><div><a href="#">Om oss</a></div></li>
      </ul>
  </nav>

  </header>
  <!-- Body -->
  <section class="news-feed-wrap">
    <h3>Hejsan alla pizza älskare!</h3>
    <p>Pizzeria fridhem kommer från och med 05/09-24 att även sälja vitvaroprodukter!
    Hjärtligt välkommna är alla som är intresserade.<br><br>Bager Senaps</p><br><hr>

    <h3>Förra veckans bagerstreet slutade i kaos!</h3>
    <p>Vi får be om ursäkt till närliggande grannar om vi på pizzerian har varit högljudda under senaste
    bager street eventet. Alla är välkommna till nästa bager street den 02/11-17.<br><br>Bager Snaps</p><br><hr>

    <h3>Ny pizza har kommit till Pizzeria Fridhem!</h3>
    <p>Från och med idag(05/08-17) finns det en ny pizza att pröva för er pizza fantaster. Piza nr 58 kallas
    klas-henriks-äventyr och innehåller Kebab, mozarella och bostongurka. Välkommna!<br><br>Bager Sensodyn</p><br><hr>
  </section>
  <footer>

      <article class="footerarticle">
        <p>Fridhemsgatan 4, Karlshamn</p>
        <p>0454-10304</p>
        <h2>© 2017</h2>

      </article>
  </footer>
</body>
</html>
