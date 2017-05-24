<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Pizzeria Fridhem</title>
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
    <title></title>
</head>

<body>
    <div class="mainback">
        <div class="pannel">
            <!---- Admin Login-->
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
                <div class="menypannel">
                    <ul>
                        <li><a href="#">Meny</a></li>
                        <li><a href="#">Nyheter</a></li>
                        <li><a href="#">Galleri</a></li>
                        <li><a href="#">Öppettider</a></li>
                    </ul>
                </div>
        </div>
        <div class="mainpage">
            <?php include 'modules/header.php'; ?>

            <!-- Body -->
            <section class="news-feed-wrap">
  <hr class="hr-l">
  <br>
  <h3>Hejsan alla pizza älskare!</h3>

  <p>Torsdagen den 18/08-19 kommer vi ha lunchrabatter! 12.00 - 15.00 kommer vi att sälja valfri pizza ifrån menyn med 20% rabatt.
    Hjärtligt välkommna till Pizzeria Fridhem.<br><br>Bager Sersap</p><br><hr class="hr-s"><br>

    <h3>Bager street imorgon 10/05-19!</h3>
    <p>Livemusik, god mat, kall öl. Bager street börjar 22.00 och håller på till 02.00. Välkommna!<br><br>Bager Sersap</p><br><hr class="hr-s"><br>

    <h3>Ny pizza har kommit till Pizzeria Fridhem!</h3>
    <p>Från och med idag(05/08-17) finns det en ny pizza att pröva för er pizza fantaster. Pizza nr 58 kallas
      kött-tornadon och innehåller Kebab, kyckling, köttfärsås, champinjoner, lök, färska tomater med valfri sås. Välkommna!<br><br>Bager Sersap</p><br><hr class="hr-s"><br>

      <h3>Pizzeria Fridhem stängt 03/01-17 för renovering.</h3>
      <p>Tyvär måste vi ha stängt under hela dagen på grund av renovering. Vi kommer vara öppna dagen efter, Välkommna då!<br><br>Bager Sersap</p><br>
      <hr class="hr-l">
    </section>
           <?php include 'modules/footer.php'; ?>

        </div>
    </div>
</body>

</html>