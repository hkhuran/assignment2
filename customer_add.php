<html>
    <head>
        <title>Assignment 2</title>
        <meta name="description" content="">
        <!-- Mobile viewport optimized -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <!-- Start of the Navigation bar -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Heading in the Navigation bar -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Assignment 2</a>
                </div>

                <!-- View and Add option in the Navigation bar -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="customer_view.php">View</a></li>
                        <li><a href="customer_add.html">Add</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Start of php script -->
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
  <!-- Closing the body and html -->
    </body>
</html>