<?php

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "realestate";

    $conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
    if ($conn->connect_error) 
    {
        echo "Failed to connect to MySQL: " . $conn->connect_error;
        exit();
    }

    // $sql = "CREATE TABLE users (
	// uid INT(11) AUTO_INCREMENT PRIMARY KEY,
    // name VARCHAR(50) NOT NULL,
    // email VARCHAR(50) NOT NULL,
    // phone VARCHAR(50) NOT NULL,
    // pwd VARCHAR(50) NOT NULL
    // );";

    // $sql .= "CREATE TABLE properties (
    //     img_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    //     name VARCHAR(50) NOT NULL,
    //     phone VARCHAR(50) NOT NULL,
    //     type VARCHAR(50) NOT NULL,
    //     size VARCHAR(50) NOT NULL,
    //     rent VARCHAR(50) NOT NULL,
    //     address VARCHAR(50) NOT NULL,
    //     city VARCHAR(50) NOT NULL,
    //     furnished VARCHAR(50) NOT NULL,
    //     description VARCHAR(255) NOT NULL,
    //     mainImage VARCHAR(255) NOT NULL
    // );";

    // $sql .= "CREATE TABLE saved (
    //     sid INT(11) AUTO_INCREMENT PRIMARY KEY,
    //     uid VARCHAR(50) NOT NULL,
    //     imgId VARCHAR(50) NOT NULL,
    //     image VARCHAR(50) NOT NULL
    // );";

    // $sql .= "CREATE TABLE queries (
    //     qid INT(11) AUTO_INCREMENT PRIMARY KEY,
    //     name VARCHAR(50) NOT NULL,
    //     email VARCHAR(50) NOT NULL,
    //     phone VARCHAR(50) NOT NULL,
    //     message LONGTEXT NOT NULL
    // );";

    // if ($conn->multi_query($sql) === TRUE) 
    // {
    //     echo "Tables created successfully";
    // } 
    // else
    // {
    //     echo "Error creating tables: " . $conn->error;
    // }

?>