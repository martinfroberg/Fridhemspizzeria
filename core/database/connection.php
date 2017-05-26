<?php
class Database {
  private static $db = null;
  private $connection = null;

  private function __construct() {
    $db_config = parse_ini_file('config.ini');

    $this->connection = new MySQLi($db_config['server'], $db_config['username'], $db_config['password']);
    if($this->connection) {
      //Connection established
      //Check to see if database exists
      //TODO remove for public use
      if (!mysqli_select_db($this->connection, $db_config['database'])){
        //Database not found
        //Create new database
        $this->create_database();
      }
    } else {
      //Cannot create connection to database
      //TODO proper error handling
    }
  }

  function __destruct() {
    $this->connection->close();
  }

  //Lazy base entries for database creation
  //TODO remove for public use
  private function create_database() {
    $db_config = parse_ini_file('config.ini');
    $stmt = $this->connection->prepare('CREATE DATABASE ' . $db_config['database']);
    $stmt->execute();
    $stmt->close();

    mysqli_select_db($this->connection, $db_config['database']);

    //Create users table
    mysqli_query($this->connection,
    "CREATE TABLE `users`
    ( `id` INT NOT NULL AUTO_INCREMENT ,
      `username` VARCHAR(20) NOT NULL ,
      `password_hash` TEXT NOT NULL ,
      `session_hash` TEXT ,
      PRIMARY KEY (`id`))");

      mysqli_query($this->connection,
      "CREATE TABLE `menu`
      ( `id` INT NOT NULL AUTO_INCREMENT ,
        `order` INT NOT NULL ,
        `name` TEXT NOT NULL ,
        `ingredients` TEXT ,
        `category` TEXT NOT NULL ,
        `price` INT ,
        `direction` INT NOT NULL ,
        PRIMARY KEY (`id`))");

      //Get db entries
      require_once 'core/db_data.php';
      insert_db_data($this->connection);
  }

  public static function getConnection() {
    if (!self::$db) {
      self::$db = new Database();
    }
    return self::$db->connection;
  }
}
