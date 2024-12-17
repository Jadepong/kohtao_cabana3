<?php

// Connect to the database
$servername = "localhost";
$username = "kohtaocabana";
$password = "ktcbn2005";
$dbname = "kohtaocabana";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT id, up_group, content, up_start, up_end FROM tb_villa_up_sale";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $users = array();
    while ($row = $result->fetch_assoc()) {

      $rowarray = [];
      
      $rowarray['id'] = $row['id'];
      $rowarray['group'] = $row['up_group'];
      $rowarray['content'] = $row['content'];
      $rowarray['start'] = $row['up_start'];
      $rowarray['end'] = $row['up_end'];


      $users[] = $rowarray;


      //$users[] = $row;
    }


    // Encode SQL data to JSON
    $json = json_encode($users, JSON_PRETTY_PRINT);

// Write JSON to file

$file = "up_sale.json";   
file_put_contents($file, $json);
/*
$file = "up_sale.json";
    if (file_put_contents($file, $json) !== false) {
        echo "Data has been written to $file.";
    } else {
        echo "Error occurred while writing to $file.";
    }
} else {
    echo "No data found.";
}

*/

// Close the database connection
$conn->close();






?>
