<?php
//EXAMPLE
/*news_entry($connection, //Databas connection
rand(0,10000), //Views for this article (för "trending" saker att funka)
"technology & science", //News category
"Unknown",  //Author
"", //Article text
"", //News img url/path
"", //News headline
""); //News summary*/

function insert_db_data($con){
  insert_admin($con, "admin", "admin");
}

function insert_admin($con, $username, $password){
  $stmt = $con->prepare("INSERT INTO users (username, password_hash) VALUES (?,?)");
  $stmt->bind_param("ss", $u, $p);
  $u = filter_var($username, FILTER_SANITIZE_STRING);
  $p = password_hash($password, PASSWORD_BCRYPT);
  $stmt->execute();
  $stmt->close();
}

function insert_menu_item($connection){

}

function insert_times($connection){

}?>
