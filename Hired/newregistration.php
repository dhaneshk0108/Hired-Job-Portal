<html>
<head>
<title>congrats</title>
<body bgcolor="#CCCCCC">

<?php

$FirstName = $_POST['name'];
$LastName = $_POST['lastname'];	
$EmailId = $_POST['email']; 
$Password = $_POST['password'];

$servername = "localhost";
$username = "root";
$password = "india123";
$dbname = "hired";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO `hired`.`person` (`Id`, `FirstName`, `LastName`, `EmailId`, `Password`) VALUES (NULL, '$FirstName', '$LastName', '$EmailId', '$Password')";

if ($conn->query($sql) === TRUE) {
    echo "<br><br><center><H1>Congratulation! You have created the Hired Account. <a href='index.html'>click here</a> to continue your job search</H1></center>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();


?>
</body>
</html>