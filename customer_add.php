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


// Query to insert the user data into the database
$query = "INSERT INTO customers (firstName, lastName, address, city, state, zip, email, phone) "
        . "VALUES('$_POST[FName]', '$_POST[LCompany]', '$_POST[address]', '$_POST[city]', '$_POST[state]', '$_POST[zip]', '$_POST[email]', '$_POST[phone]')";




// Closing the database
$conn->close();
?>
