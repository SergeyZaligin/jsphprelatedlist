<?php
// 1. Create a database connection
  define("DB_HOST", "localhost");
  define("DB_USER", "root");
  define("DB_PASSWORD", '');
  define("DB_NAME", "related_list");
  $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  mysqli_set_charset($connection, 'utf8');
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }