<?php
function insert_db_data($con){
  insert_admin($con, "admin", "admin");

  //65kr pizzor (ost och tomat i varje) 130kr familje pizza
  insert_menu_item($con, "Margareta", "Ost", "Pizza", "65");
  insert_menu_item($con, "Capriciosa", "Skinka, Champinjoner", "Pizza", "65");
  insert_menu_item($con, "Bolognese", "Köttfärs", "Pizza", "65");
  insert_menu_item($con, "Hawaii", "Skinka, Ananas", "Pizza", "65");
  insert_menu_item($con, "Vesuvio", "Skinka", "Pizza", "65");
  insert_menu_item($con, "Calzone (dubbelvikt och inbakad)", "Skinka", "Pizza", "65");
  insert_menu_item($con, "ST Tropez", "Köttfärs, Lök", "Pizza", "65");
  insert_menu_item($con, "La Mafia", "Bacon, Lök", "Pizza", "65");
  insert_menu_item($con, "Alfunghi", "Champinjoner", "Pizza", "65");
  insert_menu_item($con, "Ananas Pizza", "Banan, Curry", "Pizza", "65");
  insert_menu_item($con, "Pescatore", "Tonfisk", "Pizza", "65");
  insert_menu_item($con, "Caccatore", "Salami, Lök", "Pizza", "65");
  insert_menu_item($con, "Pugliese", "Lök, Champinjoner", "Pizza", "65");
  insert_menu_item($con, "Pompii", "Ananas, Räkor", "Pizza", "65");
  insert_menu_item($con, "Campaniola", "Champinjoner, Räkor", "Pizza", "65");
  insert_menu_item($con, "Tomaso", "Skinka, Räkor", "Pizza", "65");
  insert_menu_item($con, "Marinara", "Musslor, Räkor", "Pizza", "65");
  insert_menu_item($con, "Platano", "Skinka, Banan, Curry", "Pizza", "65");

  //135kr familje pizza
  insert_menu_item($con, "Pallumbo", "Skinka, Champinjoner, Räkor", "Pizza", "70");
  insert_menu_item($con, "Vegetariana", "Champinjoner, Ananas, Paprika, Lök, Oliver", "Pizza", "70");
  insert_menu_item($con, "Tutti Frutti", "Skinka, Ananas, Banan", "Pizza", "70");
  insert_menu_item($con, "Dallas Pizza", "Köttfärs, Champinjoner, Räkor", "Pizza", "70");
  insert_menu_item($con, "Mamma Mia Pizza", "Köttfärssås, Champinjoner, Lök", "Pizza", "70");
  insert_menu_item($con, "Electrolux", "Bacon, Ägg, Lök, Feferoni", "Pizza", "70");
  insert_menu_item($con, "Saint Paolo Pizza", "Skinka, Räkor, Champinjoner, Lök", "Pizza", "70");
  insert_menu_item($con, "Quatro Stagione", "Skinka, Räkor, Musslor, Champinjoner", "Pizza", "70");
  insert_menu_item($con, "The Dog", "Skinka, Tonfisk, Räkor", "Pizza", "70");
  insert_menu_item($con, "Chiao Chiao (Inbakad)", "Fläskfilé, Champinjoner, Lök, Vitlök", "Pizza", "70");
  insert_menu_item($con, "Mexicano", "Skinka, Champinjoner, Räkor, Ananas", "Pizza", "70");
  insert_menu_item($con, "Prinsessa Pizza", "Skinka, Räkor, Ananas", "Pizza", "70");
  insert_menu_item($con, "Petito Pizza", "Skinka, Räkor, Bacon, Lök", "Pizza", "70");
  insert_menu_item($con, "Malena Pizza", "Skinka, Räkor, Krabba", "Pizza", "70");
  insert_menu_item($con, "Milano", "Räkor, Krabba, Bacon, Lök", "Pizza", "70");

  //150kr familje pizza
  insert_menu_item($con, "Al Capone", "Räkor, Krabba, Ananas, Bacon, Lök, Curry", "Pizza", "75");
  insert_menu_item($con, "Torento", "Skinka, Räkor, Champinjoner, Bacon, Lök", "Pizza", "75");
  insert_menu_item($con, "Riviera Pizza", "Skinka, Räkor, Champinjoner, Lök, Köttfärs, Ananas", "Pizza", "75");
  insert_menu_item($con, "Kebab Pizza", "Kebabkött, Lök, Färska tomater, Peparoni, Kebabsås", "Pizza", "75");
  insert_menu_item($con, "Karlshamn Pizza", "Skinka, Räkor, Köttfärs, Bacon, Lök, Champinjoner", "Pizza", "75");
  insert_menu_item($con, "La Bussola", "Krabba, Räkor, Bacon, Lök, Ananas, Champinjoner", "Pizza", "75");
  insert_menu_item($con, "Romana", "Fläskfilé, Lök, Champinjoner, Räkor, Krabba, Vitlök", "Pizza", "75");
  insert_menu_item($con, "Napoli", "Skinka, Räkor, Krabba, Bacon, Lök, Ananas", "Pizza", "75");
  insert_menu_item($con, "Eldorado", "Salami, Champinjoner, Färska tomater, feferoni, Lök", "Pizza", "75");
  insert_menu_item($con, "Flamenco", "Skinka, Ananas, Räkor, Banan, Curry", "Pizza", "75");

  //160kr Familjepizza
  insert_menu_item($con, "Bella Italia", "Fläskfilé, Skinka, Bacon", "Pizza" ,"80");
  insert_menu_item($con, "Palermo", "Fläskfilé, Skinka, Ananas, Lök, Bearnaisesås", "Pizza", "80");
  insert_menu_item($con, "Vegabond", "Skinka, Banan, Ananas, Räkor, Krabba", "Pizza", "80");
  insert_menu_item($con, "Biblos Pizza", "Fläskfilé, Skinka, Räkor, Ananas, Lök, Curry", "Pizza", "80");
  insert_menu_item($con, "Marco Polo", "Fläskfilé, Skinka, Räkor, Ananas, Lök, Curry", "Pizza", "80");
  insert_menu_item($con, "Tropicana", "Fläskfilé, Skinka, Räkor, Banan, Curry", "Pizza", "80");
  insert_menu_item($con, "Kycklingpizza", "Kyckling, Champinjoner, Lök, Curry, Färska tomater", "Pizza", "80");
  insert_menu_item($con, "Husets Special", "Fläskfilé, Champinjoner, Färska tomater, Lök, Vitlökssås", "Pizza", "80");
  insert_menu_item($con, "K Edward Special", "Fläskfilé, Skinka, Champinjoner, Lök, Bacon, Köttfärssås, Räkor", "Pizza", "80");
  insert_menu_item($con, "Tefat (dubbelvikt, två degar)", "Skinka, Champinjoner, Räkor, Tonfisk", "Pizza", "80");
  insert_menu_item($con, "Bombay", "Fläskfilé, Banan, Ananas, Jordnötter, Curry", "Pizza", "80");
  insert_menu_item($con, "Sorrento", "Skinka, Ananas, Banan, Fläskfilé", "Pizza", "80");
  insert_menu_item($con, "Havets Special", "Räkor, Musslor, Krabba, Tonfisk, Lök", "Pizza", "80");
  insert_menu_item($con, "Dilan", "Fläskfilé, Köttfärs, Champinjoner, Lök, Färska tomater, Färsk paprika", "Pizza", "80");
  //Barnpizza 5kr billigare?

  //Kebab
  insert_menu_item($con, "Kebab", "Bröd", "Kebab", "55");
  insert_menu_item($con, "Kebabrulle", "Tunnbröd", "Kebab", "65");
  insert_menu_item($con, "Kebabtallrik", "Pommes frites", "Kebab", "70");


  //Sallad 70kr st, hembakat bröd, smör och dressing
  insert_menu_item($con, "Räksallad", "Sallad, Tomat, Gurka, Ost, Champinjoner, Räkor, Citron", "Sallad", "70");
  insert_menu_item($con, "Västkustsallad", "Sallad, Tomat, Gurka, Ost, Räkor, Musslor, Citron", "Sallad", "70");
  insert_menu_item($con, "Skinksallad", "Sallad, Tomat, Gurka, Skinka, Ananas", "Sallad", "70");
  insert_menu_item($con, "Tonfisksallad", "Sallad, Tomat, Gurka, Ost, Tonfisk, Lök", "Sallad", "70");
  insert_menu_item($con, "Kycklingsallad", "Sallad, Tomat, Gurka, Ost, Kyckling", "Sallad", "70");
  insert_menu_item($con, "Mixsallad", "Sallad, Tomat, Gurka, Ost, Skinka, Ananas, Räkor, Tonfisk", "Sallad", "70");
  insert_menu_item($con, "Grekisksallad", "Sallad, Tomat, Gurka, Fårost, Paprika, Lök, Oliver", "Sallad", "70");
  insert_menu_item($con, "Amerikansksallad", "Sallad, Tomat, Gurka, Ost, Skinka, Ananas, Räkor", "Sallad", "70");
  insert_menu_item($con, "Vegetarisksallad", "Sallad, Tomat, Gurka, Ost, Champinjoner, Ananas, Lök, Paprika, Citron", "Sallad", "70");
  insert_menu_item($con, "Kebabsallad", "Sallad, Tomat, Gurka, Kebabkött, Peperoni, Lök", "Sallad", "70");

  //Grill
  insert_menu_item($con, "Hamburgare 90g", "Med Bröd 40kr. Med Pommes 50kr. Mos/Tallrik 60kr", "Grill", "");
  insert_menu_item($con, "Hamburgare 150g", "Med Bröd 50kr. Med Pommes 60kr. Mos/Tallrik 65kr", "Grill", "");
  insert_menu_item($con, "Ostburgare 150g", "Med Bröd 50kr.", "Grill", "");
  insert_menu_item($con, "Big Meal 90g", "Bröd, Sallad, Lök, Gurka, Tomater, Strips, Dryck", "Grill", "60");
  insert_menu_item($con, "Super Meal 150g", "Bröd, Sallad, Lök, Gurka, Tomater, Dressing, Strips, Dryck", "Grill", "70");
  insert_menu_item($con, "Schnitzel", "Sallad, Lök, Paprika, Tomater, Persiljesmör, Strips", "Grill", "70");
  insert_menu_item($con, "Mörbit", "Sallad, Lök, Tomater, Persiljesmör, Strips", "Grill", "70");
  insert_menu_item($con, "Lövbiff", "Sallad, Lök, Tomater, Bearnaisesås, Persiljesmör, Strips", "Grill", "70");
  insert_menu_item($con, "Grillbiff", "Sallad, Lök, Tomater, Persiljesmör, Strips", "Grill", "70");
  insert_menu_item($con, "Rödspätta", "Klyftpotatis, Remouladsås, Sallad, Lök, Tomater", "Grill", "75");
  insert_menu_item($con, "Strips (stor)", "", "Grill", "30");
  insert_menu_item($con, "Strips (liten)", "", "Grill", "25");

  /*insert_menu_item($con, "Kyckling", "Bröd", "Grill", "55");
  insert_menu_item($con, "Kycklingrulle", "Tunnbröd", "Grill", "65");
  insert_menu_item($con, "Kycklingtallrik", "Med pommes frites", "Grill", "70");
  insert_menu_item($con, "Falafel", "Med bröd", "Grill", "55");
  insert_menu_item($con, "Falafelrulle", "Med tunnbröd", "Grill", "65");
  insert_menu_item($con, "Falafeltallrik", "Med pommes frites", "Grill", "70");

  insert_menu_item($con, "Pasta", "Kyckling eller Fläskfilé", "Pasta", "80");

  insert_menu_item($con, "Läsk 33cl", "Cola, Fanta, Sprite", "Dryck", "14");
  insert_menu_item($con, "Läsk 50cl", "Cola, Fanta, Sprite", "Dryck", "16");
  insert_menu_item($con, "Läsk 1,5L", "Cola, Fanta, Sprite", "Dryck", "25");*/

}
function insert_admin($con, $username, $password){
  $stmt = $con->prepare("INSERT INTO users (username, password_hash) VALUES (?,?)");
  $stmt->bind_param("ss", $username, $p);
  $p = password_hash($password, PASSWORD_BCRYPT);
  $stmt->execute();
  $stmt->close();
}

function insert_menu_item($con, $name, $ingredients, $category, $price){
  $stmt = $con->prepare('INSERT INTO menu (name, ingredients, category, price) VALUES (?,?,?,?)');
  $stmt->bind_param('sssi', $name, $ingredients, $category, $price);
  $stmt->execute();
  $stmt->close();
}

function insert_times($connection){

}?>
