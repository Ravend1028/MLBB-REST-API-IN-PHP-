<?php

 class Post extends Database {
  // DB stuff
  private $conn;
  private $table = 'heroes';

  // Constructor with DB
  public function __construct($db) {
    $this->conn = $db;
  }

  // Get Posts
  public function read() {
    // Create query
    $query = 'SELECT name, image FROM ' . $this->table;
    
    // Prepare statement
    $stmt = $this->conn->prepare($query);

    // Execute query
    $stmt->execute();

    return $stmt;
  }
 }

?>