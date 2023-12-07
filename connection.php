<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "page1";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    echo "connection failed";
}
// else{
//     echo "connected....";
// }

// create database

// $sql = "create database page1";

// if(mysqli_query($conn,$sql)){
//     echo "database created successfully";
// }
// else{
//     echo "error creating database";
// }
// mysqli_close($conn);


// table creation

// $sql = "create table rform(
//     id int auto_increment,
//     username varchar(50) not null,
//     email varchar(40) not null,
//     password varchar(20),
//     primary key(id)
// )";

// if(!mysqli_query($conn,$sql)){
//     echo "error";
// }
// else
// echo "connected table";

?>