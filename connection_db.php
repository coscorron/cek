<?php
//$servername = "35.198.59.7";
//$username = "root";
//$password = "kamehouse";
//$dbname = "cek";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
//if ($conn->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
//}
//echo "Connected successfully";

//mysqli_close($conn);
?>
<?php

$server = "PC-CCL160";
$database = "cek";
$user = "cek";
$password = "connectis2018$$";

// Se realiza la conexón con los datos especificados anteriormente
//$conn = odbc_connect( $dsn, 'cek', 'connectis2018$$' );
// Microsoft SQL Server usando SQL Native Client 10.0 ODBC Driver - permite la conexión a SQL 7, 2000, 2005 y 2008
$conn = odbc_connect("Driver={SQL Server Native Client 11.0};Server=$server;Database=$database;", $user, $password);

?>
