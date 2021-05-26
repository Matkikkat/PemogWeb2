<?php
$serverName = "localhost";
$userName = "root";
$password = "";

//create connection
$con = mysqli_connect($serverName,$userName,$password,$dbName);

if(mysqli_connect_errno())
{
    echo " Failed to Connect!";
    exit();
}
else
{
    echo " Connection Success";
}

?>