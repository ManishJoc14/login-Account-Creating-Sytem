<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "root";
$dbname="mydb";

// Create connection
$conn = new mysqli($hostname, $username, $password ,$dbname);

/*
// Check connection
if($conn->connect_error){
   die("Connection failed: " . $conn->connect_error);
}
else{
   echo"Connected successfully";
   }
*/

//Fetching data from form
//name and pass are names given to input boxes in form
$Name=$_POST["name"];
$Pass=$_POST["pass"];

//Inserting data to database
//'LoginTable'is my Table in database 'mydb'
$sql = "INSERT INTO `LoginTable`(`Username`, `Password`) VALUES (\"$Name\",\"$Pass\")";
if($conn->query($sql)===True){
echo"<h1>Sucessfully Account Created</h1>";
echo"<h2>Welcome ".$Name."</h2>";
}
else{
echo"<h1>Failed to create Account</h1>";
}
?>
