<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "animal";

// Create connection
$conn = new mysqli(
    $servername,
    $username,
    $password,
    $dbname
);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}

$name = $_REQUEST['name'];
$color = $_REQUEST['color'];
$spots = $_REQUEST['spots'];
$features = $_REQUEST['features'];

$sql = <<<SQL
INSERT INTO ONE_ANIMAL (NAME, COLOR, SPOTS, FEATURES) VALUES ("$name", "$color","$spots","$features");
SQL;

var_dump($sql);

if ($conn->query($sql) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
if (mysqli_query($conn, $sql)) {
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

    echo nl2br("\n$first_name\n $last_name\n "
        . "$gender\n $address\n $email");
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
