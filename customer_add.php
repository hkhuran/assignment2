<?php

// Database credentials 
$hn = 'www.it354.com';
$db = 'it354_students';
$un = 'it354_students';
$pw = 'steinway';

// To connect to database
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error)
    die($conn->connect_error);

// Query to delete the data
// $query = "Delete from customers where firstName = 'Aaron'";
// Query to insert the user data into the database
$query = "INSERT INTO customers (firstName, lastName, address, city, state, zip, email, phone) "
        . "VALUES('$_POST[FName]', '$_POST[LCompany]', '$_POST[address]', '$_POST[city]', '$_POST[state]', '$_POST[zip]', '$_POST[email]', '$_POST[phone]')";


// Printing the result of the query
if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

// Closing the database
$conn->close();
?>
