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
                        <li class="active"><a href="customer_view.php">View</a></li>
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

        // Query to get the data from the database
        $query = "SELECT * FROM customers";
        // Execution of the query
        $result = $conn->query($query);
        if (!$result)
        // cecking for database connection error
            die($conn->error);
        $rows = $result->num_rows;

        // Creating a container for table and echo it and general layout for the table.
        echo '<div class="container">';
        echo '<table class="table table-hover">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>ID</th>';
        echo '<th>Last/Company Name</th>';
        echo '<th>First Name</th>';
        echo '<th>Address</th>';
        echo '<th>City</th>';
        echo '<th>State</th>';
        echo '<th>Zip</th>';
        echo '<th>Email</th>';
        echo '<th>Phone</th>';
        echo'</tr>';
        echo '</thead>';
        echo '<tbody>';

        }
        // Closing the table layout.
        echo'</tbody>';
        echo'</table>';
        echo'</div>';

        // Closing the result from the query
        $result->close();

        // Closing the database connection
        $conn->close();
        ?>
        <!-- Closing the body and html -->
    </body>
</html>
