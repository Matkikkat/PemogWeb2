

<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbname="lat_dbase";

$mysqli = mysqli_connect($serverName,$userName,$password,$dbname);

// mysql_select_db("lat_dbase");

if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }

$sql = "SELECT * FROM tbl_mhs ORDER BY Lastname";

$result=mysqli_query($mysqli, $sql);
$hit=mysqli_num_rows($result);

echo "jumlah record $hit";


?>