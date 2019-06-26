establish connection with database
database name: pamsqlnep
options within php used to connect are: MySQLi | PDO ( PHP Data Objects )
PDO works in only 12 different database systems,  MySQLi will only work with MySQL Databases
PDO may be the best option due to flexibility
Both support prepared statements, which are important to protect against sql injection

EXAMPLE (MySQLi Object-Oriented)
<?php
  // server name and authentication to database
$servername = "localhost";
$username = "username";
$password = "password";

// creating connection to database, passing in variables with authentication within (servername,username,password);
$conn = new mysqli($servername,$username,$password);
// code above will create a new mysqli object that has servername,username,password within

// check connection
if ($conn->connect_error) {
  die("connection failed: " . $conn->connect_error);
}
// this code will try the authentication ( conn ) against the connect_error object

// this will be a variable that holds sql, so we shall name thee sql
    // this is querying the following: columns: id, firstname, lastname, FROM Table: MyGuest
$sql = "SELECT id, firstname, lastname FROM MyGuest";
$result = $conn->query($sql);



 ?>
