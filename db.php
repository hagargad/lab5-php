<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'Loginusers';
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$con) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging error #: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The <span style='color:red'> $dbname </span>database is great.<br>" . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($con) . PHP_EOL;

// mysqli_close($conn);








?>