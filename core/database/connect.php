<?php
function db_connect(){
  static $connection;

  if(!isset($connection)){
    $config = parse_ini_file('config.ini');
    $connection = mysqli_connect($config['server'],$config['username'],$config['password']);

    if(!$connection){
      die('Could not connect to server. Error: ' . mysqli_error($connection));
    }

    $config = parse_ini_file('config.ini');
    //Check if database exists
    if(!mysqli_select_db($connection, $config['database'])){
      //Database doesnt exist
      if(mysqli_query($connection, 'CREATE DATABASE `' . $config['database'] . '`')){
        mysqli_select_db($connection, $config['database']);
        //Database created, create article table
        //Check if article table exist

        /*
        if (!mysqli_query($connection, "SHOW TABLES LIKE article")) {
          //Create table
          mysqli_query($connection,
          "CREATE TABLE `articles`
          ( `id` INT NOT NULL AUTO_INCREMENT ,
          `creation_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
          `views` INT NOT NULL DEFAULT '0' ,
          `author` TEXT NOT NULL ,
          `category` TEXT NOT NULL,
          `text` TEXT NULL ,
          PRIMARY KEY (`id`))");
        }
        //Check if news table exist
        if (!mysqli_query($connection, "SHOW TABLES LIKE news")) {
          //Create table
          mysqli_query($connection,
          "CREATE TABLE `news`
          ( `article_id` INT NOT NULL ,
          `img_path` TEXT NOT NULL ,
          `headline` TEXT NOT NULL ,
          `summary` TEXT NOT NULL ,
          PRIMARY KEY (`article_id`))");
          //Get db entries
          require_once 'core/db_entries.php';
          insertEntries($connection);
        }
        */
      }
    }
  }
  return $connection;
}?>
