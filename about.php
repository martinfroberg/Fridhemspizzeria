<?php
include('core/database/connection.php');
$db = Database::getConnection(); ?>

<!doctype html>
<html lang="sv">
<head>
  <meta charset="utf-8"/>
  <title>Pizzeria Fridhem - Om oss</title>

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
  
  
   <section class="ombager">
    
   <img class="bager1" src="images/bagersersap1.jpeg">
   
   <article class="bager">
    
   <p>Namn: Bager Sersap</p>
   <p>Yrke: Pizzabagare, Ägare av Pizzeria Fridhem</p>
   </article>
   
   </section> 
   <article class="pizzeriafridhem">
    <h2>Om Pizzeria Fridhem</h2>
    
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet neque sit amet magna rutrum hendrerit ut eget est. Nunc vel dui eu libero pretium sagittis.
    Aliquam nec consequat augue. Sed bibendum dui neque, a euismod ligula tempor ac. Etiam sed tristique magna, in sodales lectus. In porta nisl a finibus aliquam. Maecenas a metus ac tortor imperdiet tincidunt.
    Nunc magna elit, sodales et tellus ut, porta rutrum enim. Sed et magna id dui commodo scelerisque. Ut suscipit sapien eget eros placerat efficitur.
    Fusce eu arcu ultricies, varius tortor a, elementum neque. Curabitur est nibh, malesuada id pretium sit amet, ullamcorper at justo. Nam pharetra imperdiet rhoncus. Nullam rutrum finibus metus, vitae maximus ligula lacinia ut.
    Fusce id velit elementum, aliquet nisi a, hendrerit velit. Sed ut ex tristique, sodales est a, feugiat nisi.

    Mauris neque ipsum, laoreet non ex nec, sodales varius nulla. Maecenas at nunc neque. Suspendisse sed vehicula leo, at facilisis nisi.
    Sed malesuada purus molestie, viverra libero et, condimentum est. Mauris mi diam, accumsan in varius quis, dapibus eget magna. Proin molestie, ligula sed imperdiet bibendum, enim libero accumsan turpis, id pharetra justo nibh vel orci.
    Cras vel consectetur nibh. Proin vehicula elit dolor, in.</p>
   </article>
   
  
  
   <div id="map"></div>
      
      
        <script async defer
         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-hvHiQl9w-Bqs_EdXHjDSHVbKm9nLGRg&callback=initMap">
        </script>
    <article class="pizzeriafridhem2" >
      
      <h2>Välkommen till Pizzeria Fridhem</h2>
      
      
    </article>

  <footer>
     
       <article class="footeraddress">
            
        <h2>Pizzeria Fridhem</h2>    
        <p>Fridhemsgatan 4, 374 41 Karlshamn</p>
        <p>0454-10304</p>

         </article>
         
         <article class="footercopyright">
             <p>© Pizzeria Fridhem<p>
         </article>
         
       
        
  </footer>
</body>
</html>
