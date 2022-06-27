<?php


session_start();

$servername = "localhost";
$username = "root";
$password = "";
$DBNAME="php";


//create connection

$con=new mysqli($servername,$username,$password,$DBNAME);

if($con->connect_error){
    die("not connected".$con->connect_error);
}else{
    echo "connected successfull";
}

$sql = "CREATE DATABASE IF NOT EXISTS php";
if ($con->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $con->error;
}


$sql="CREATE TABLE IF NOT EXISTS newlogin (
    user VARCHAR(30) NOT NULL,password varchar(8))";

    if($con->query($sql) === true){
      echo "table creted success";
    }else{
      echo "not created".$con->error;
    }

    // $sql="ALTER TABLE newlogin ADD PRIMARY KEY(user) ";

    // if($con->query($sql)){
    //   echo "altered";
    // }else{
    //   echo "not altered".$con->error;
    // }

$name=$_POST['user'];
$pass=$_POST['password'];


// $sql = "INSERT INTO login (user,password)
// VALUES ('$name','$pass')";

// if($con->query($sql)){
//   echo "inserted";

// }else{
//   echo "not inserted".$con->error;
// }

$sql="SELECT * FROM newlogin WHERE user='$name'";
$result=$con->query($sql);

if($result->num_rows > 0){
  echo "Already user exists";
}
else{
  
$sql = "INSERT INTO newlogin (user,password)
VALUES ('$name','$pass')";

$con->query($sql);
echo "inserted success".$con->error;
}


$con->close();









?>