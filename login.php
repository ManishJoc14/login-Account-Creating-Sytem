<?php
//Requirements
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
   echo"Connected successfully"; }
*/

//Fetching data from form
//name and pass are names given to input boxes in form
$Name=$_POST["name"];
$Pass=$_POST["pass"];

//Fetching data from database 
//'LoginTable'is my Table in database 'mydb'
$query=mysqli_query($conn,"SELECT * FROM LoginTable WHERE Username='$Name' && Password='$Pass'");
$rowcount=mysqli_num_rows($query);
if ($rowcount>0)
{
echo "<h1>Login Sucessful </h1><Br/>";
echo "<h2>Welcome ".$Name."</h2>";
}
else
{
echo "<h1>Login Failed <h1>";
}
?>
