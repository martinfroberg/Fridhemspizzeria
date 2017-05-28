<?php
function insert_db_data($con){
  insert_admin($con, "admin", "admin");

  //65kr pizzor (ost och tomat i varje) 130kr familje pizza
  insert_menu_item($con, 1, "Margareta", "Ost", "Pizza", "65", 0);
  insert_menu_item($con, 2, "Capriciosa", "Skinka, Champinjoner", "Pizza", "65", 0);
  insert_menu_item($con, 3, "Bolognese", "Köttfärs", "Pizza", "65", 0);
  insert_menu_item($con, 4, "Hawaii", "Skinka, Ananas", "Pizza", "65", 0);
  insert_menu_item($con, 5, "Vesuvio", "Skinka", "Pizza", "65", 0);
  insert_menu_item($con, 6, "Calzone (dubbelvikt och inbakad)", "Skinka", "Pizza", "65", 0);
  insert_menu_item($con, 7, "ST Tropez", "Köttfärs, Lök", "Pizza", "65", 1);
  insert_menu_item($con, 8, "La Mafia", "Bacon, Lök", "Pizza", "65", 0);
  insert_menu_item($con, 9, "Alfunghi", "Champinjoner", "Pizza", "65", 0);
  insert_menu_item($con, 10, "Ananas Pizza", "Banan, Curry", "Pizza", "65", 0);
  insert_menu_item($con, 11, "Pescatore", "Tonfisk", "Pizza", "65", 0);
  insert_menu_item($con, 12, "Caccatore", "Salami, Lök", "Pizza", "65", 0);
  insert_menu_item($con, 13, "Pugliese", "Lök, Champinjoner", "Pizza", "65", 0);
  insert_menu_item($con, 14, "Pompii", "Ananas, Räkor", "Pizza", "65", 1);
  insert_menu_item($con, 15, "Campaniola", "Champinjoner, Räkor", "Pizza", "65", 0);
  insert_menu_item($con, 16, "Tomaso", "Skinka, Räkor", "Pizza", "65", 0);
  insert_menu_item($con, 17, "Marinara", "Musslor, Räkor", "Pizza", "65", 0);
  insert_menu_item($con, 18, "Platano", "Skinka, Banan, Curry", "Pizza", "65", 1);

  //135kr familje pizza
  insert_menu_item($con, 19, "Pallumbo", "Skinka, Champinjoner, Räkor", "Pizza", "70", 0);
  insert_menu_item($con, 20, "Vegetariana", "Champinjoner, Ananas, Paprika, Lök, Oliver", "Pizza", "70", 0);
  insert_menu_item($con, 21, "Tutti Frutti", "Skinka, Ananas, Banan", "Pizza", "70", 0);
  insert_menu_item($con, 22, "Dallas Pizza", "Köttfärs, Champinjoner, Räkor", "Pizza", "70", 0);
  insert_menu_item($con, 23, "Mamma Mia Pizza", "Köttfärssås, Champinjoner, Lök", "Pizza", "70", 0);
  insert_menu_item($con, 24, "Electrolux", "Bacon, Ägg, Lök, Feferoni", "Pizza", "70", 0);
  insert_menu_item($con, 25, "Saint Paolo Pizza", "Skinka, Räkor, Champinjoner, Lök", "Pizza", "70", 1);
  insert_menu_item($con, 26, "Quatro Stagione", "Skinka, Räkor, Musslor, Champinjoner", "Pizza", "70", 0);
  insert_menu_item($con, 27, "The Dog", "Skinka, Tonfisk, Räkor", "Pizza", "70", 0);
  insert_menu_item($con, 28, "Chiao Chiao (Inbakad)", "Fläskfilé, Champinjoner, Lök, Vitlök", "Pizza", "70", 0);
  insert_menu_item($con, 29, "Mexicano", "Skinka, Champinjoner, Räkor, Ananas", "Pizza", "70", 0);
  insert_menu_item($con, 30, "Prinsessa Pizza", "Skinka, Räkor, Ananas", "Pizza", "70", 0);
  insert_menu_item($con, 31, "Petito Pizza", "Skinka, Räkor, Bacon, Lök", "Pizza", "70", 0);
  insert_menu_item($con, 32, "Malena Pizza", "Skinka, Räkor, Krabba", "Pizza", "70", 0);
  insert_menu_item($con, 33, "Milano", "Räkor, Krabba, Bacon, Lök", "Pizza", "70", 1);

  //150kr familje pizza
  insert_menu_item($con, 34, "Al Capone", "Räkor, Krabba, Ananas, Bacon, Lök, Curry", "Pizza", "75", 0);
  insert_menu_item($con, 35, "Torento", "Skinka, Räkor, Champinjoner, Bacon, Lök", "Pizza", "75", 0);
  insert_menu_item($con, 36, "Riviera Pizza", "Skinka, Räkor, Champinjoner, Lök, Köttfärs, Ananas", "Pizza", "75", 0);
  insert_menu_item($con, 37, "Kebab Pizza", "Kebabkött, Lök, Färska tomater, Peparoni, Kebabsås", "Pizza", "75", 0);
  insert_menu_item($con, 38, "Karlshamn Pizza", "Skinka, Räkor, Köttfärs, Bacon, Lök, Champinjoner", "Pizza", "75", 1);
  insert_menu_item($con, 39, "La Bussola", "Krabba, Räkor, Bacon, Lök, Ananas, Champinjoner", "Pizza", "75", 0);
  insert_menu_item($con, 40, "Romana", "Fläskfilé, Lök, Champinjoner, Räkor, Krabba, Vitlök", "Pizza", "75", 0);
  insert_menu_item($con, 41, "Napoli", "Skinka, Räkor, Krabba, Bacon, Lök, Ananas", "Pizza", "75", 0);
  insert_menu_item($con, 42, "Eldorado", "Salami, Champinjoner, Färska tomater, feferoni, Lök", "Pizza", "75", 0);
  insert_menu_item($con, 43, "Flamenco", "Skinka, Ananas, Räkor, Banan, Curry", "Pizza", "75", 1);

  //160kr Familjepizza
  insert_menu_item($con, 44, "Bella Italia", "Fläskfilé, Skinka, Bacon", "Pizza" ,"80", 0);
  insert_menu_item($con, 45, "Palermo", "Fläskfilé, Skinka, Ananas, Lök, Bearnaisesås", "Pizza", "80", 0);
  insert_menu_item($con, 46, "Vegabond", "Skinka, Banan, Ananas, Räkor, Krabba", "Pizza", "80", 0);
  insert_menu_item($con, 47, "Biblos Pizza", "Fläskfilé, Skinka, Räkor, Ananas, Lök, Curry", "Pizza", "80", 0);
  insert_menu_item($con, 48, "Marco Polo", "Fläskfilé, Skinka, Räkor, Ananas, Lök, Curry", "Pizza", "80", 0);
  insert_menu_item($con, 49, "Tropicana", "Fläskfilé, Skinka, Räkor, Banan, Curry", "Pizza", "80", 1);
  insert_menu_item($con, 50, "Kycklingpizza", "Kyckling, Champinjoner, Lök, Curry, Färska tomater", "Pizza", "80", 0);
  insert_menu_item($con, 51, "Husets Special", "Fläskfilé, Champinjoner, Färska tomater, Lök, Vitlökssås", "Pizza", "80", 0);
  insert_menu_item($con, 52, "K Edward Special", "Fläskfilé, Skinka, Champinjoner, Lök, Bacon, Köttfärssås, Räkor", "Pizza", "80", 0);
  insert_menu_item($con, 53, "Tefat (dubbelvikt, två degar)", "Skinka, Champinjoner, Räkor, Tonfisk", "Pizza", "80", 0);
  insert_menu_item($con, 54, "Bombay", "Fläskfilé, Banan, Ananas, Jordnötter, Curry", "Pizza", "80", 1);
  insert_menu_item($con, 55, "Sorrento", "Skinka, Ananas, Banan, Fläskfilé", "Pizza", "80", 0);
  insert_menu_item($con, 56, "Havets Special", "Räkor, Musslor, Krabba, Tonfisk, Lök", "Pizza", "80", 0);
  insert_menu_item($con, 57, "Dilan", "Fläskfilé, Köttfärs, Champinjoner, Lök, Färska tomater, Färsk paprika", "Pizza", "80", 1);
  //Barnpizza 5kr billigare?

  //Kebab
  insert_menu_item($con, 58, "Kebab", "Bröd", "Kebab", "55", 0);
  insert_menu_item($con, 59, "Kebabrulle", "Tunnbröd", "Kebab", "65", 0);
  insert_menu_item($con, 60, "Kebabtallrik", "Pommes frites", "Kebab", "70", 1);


  //Sallad 70kr st, hembakat bröd, smör och dressing
  insert_menu_item($con, 61, "Räksallad", "Sallad, Tomat, Gurka, Ost, Champinjoner, Räkor, Citron", "Sallad", "70", 0);
  insert_menu_item($con, 62, "Västkustsallad", "Sallad, Tomat, Gurka, Ost, Räkor, Musslor, Citron", "Sallad", "70", 0);
  insert_menu_item($con, 63, "Skinksallad", "Sallad, Tomat, Gurka, Skinka, Ananas", "Sallad", "70", 0);
  insert_menu_item($con, 64, "Tonfisksallad", "Sallad, Tomat, Gurka, Ost, Tonfisk, Lök", "Sallad", "70", 0);
  insert_menu_item($con, 65, "Kycklingsallad", "Sallad, Tomat, Gurka, Ost, Kyckling", "Sallad", "70", 1);
  insert_menu_item($con, 66, "Mixsallad", "Sallad, Tomat, Gurka, Ost, Skinka, Ananas, Räkor, Tonfisk", "Sallad", "70", 0);
  insert_menu_item($con, 67, "Grekisksallad", "Sallad, Tomat, Gurka, Fårost, Paprika, Lök, Oliver", "Sallad", "70", 0);
  insert_menu_item($con, 68, "Amerikansksallad", "Sallad, Tomat, Gurka, Ost, Skinka, Ananas, Räkor", "Sallad", "70", 0);
  insert_menu_item($con, 69, "Vegetarisksallad", "Sallad, Tomat, Gurka, Ost, Champinjoner, Ananas, Lök, Paprika, Citron", "Sallad", "70", 0);
  insert_menu_item($con, 70, "Kebabsallad", "Sallad, Tomat, Gurka, Kebabkött, Peperoni, Lök", "Sallad", "70", 1);

  //Grill
  insert_menu_item($con, 71, "Hamburgare 90g", "Med Bröd 40:-. Med Pommes 50:-. Mos/Tallrik 60:-", "Grill", "", 0);
  insert_menu_item($con, 72, "Hamburgare 150g", "Med Bröd 50:-. Med Pommes 60:-. Mos/Tallrik 65:-", "Grill", "", 0);
  insert_menu_item($con, 73, "Ostburgare 150g", "Med Bröd 50:-.", "Grill", "", 0);
  insert_menu_item($con, 74, "Big Meal 90g", "Bröd, Sallad, Lök, Gurka, Tomater, Strips, Dryck", "Grill", "60", 0);
  insert_menu_item($con, 75, "Super Meal 150g", "Bröd, Sallad, Lök, Gurka, Tomater, Dressing, Strips, Dryck", "Grill", "70", 1);
  insert_menu_item($con, 76, "Schnitzel", "Sallad, Lök, Paprika, Tomater, Persiljesmör, Strips", "Grill", "70", 0);
  insert_menu_item($con, 77, "Mörbit", "Sallad, Lök, Tomater, Persiljesmör, Strips", "Grill", "70", 0);
  insert_menu_item($con, 78, "Lövbiff", "Sallad, Lök, Tomater, Bearnaisesås, Persiljesmör, Strips", "Grill", "70", 0);
  insert_menu_item($con, 79, "Grillbiff", "Sallad, Lök, Tomater, Persiljesmör, Strips", "Grill", "70", 0);
  insert_menu_item($con, 80, "Rödspätta", "Klyftpotatis, Remouladsås, Sallad, Lök, Tomater", "Grill", "75", 0);
  insert_menu_item($con, 81, "Strips (stor)", "", "Grill", "30", 0);
  insert_menu_item($con, 82, "Strips (liten)", "", "Grill", "25", 0);

}
function insert_admin($con, $username, $password){
  $stmt = $con->prepare("INSERT INTO users (`username`, `password_hash`) VALUES (?,?)");
  $stmt->bind_param("ss", $username, $p);
  $p = password_hash($password, PASSWORD_BCRYPT);
  $stmt->execute();
  $stmt->close();
}

function insert_menu_item($con, $order, $name, $ingredients, $category, $price, $direction){
  $stmt = $con->prepare("INSERT INTO menu (`order`, `name`, `ingredients`, `category`, `price`, `direction`) VALUES (?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("isssii", $order, $name, $ingredients, $category, $price, $direction);
  $stmt->execute();
  $stmt->close();
}

function insert_times($connection){

}?>
