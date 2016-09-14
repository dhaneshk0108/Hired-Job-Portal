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
$persontype = 'jobseeker';

$sql = "INSERT INTO `hired`.`person` (`Id`, `FirstName`, `LastName`, `EmailId`, `Password`, `PersonType`) VALUES (NULL, '$FirstName', '$LastName', '$EmailId', '$Password','$persontype')";

if ($conn->query($sql) === TRUE) {
  //  echo "<br><br><center><H1>Congratulation! You have created the Hired Account. <a href='index.html'>click here</a> to continue your job search</H1></center>";
} else {
    echo "Email Id already exist. Please go back to enter another email id.<br>" . $conn->error;
}


$conn->close();


?>

<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="register.css">
<title>Registration | Step 2</title>
    <title>MySQL file upload example</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>
<body>

<div id="register">
    <div>
      <P>Upload your Resume</P>
    </div>      
	<h4>--------------------------------  Step 2  ---------------------------------<h4>
    <form action="uploadfile.php" method="post" enctype="multipart/form-data">
	 <div id="contact">
        <br>contact 1<input type="text" name="contact1" class="input_contact" required/>
		preferred<input type="radio" name="preferred1"  checked><br>
      </div>
	  <div id="contact">
        <br>contact 2<input type="text" name="contact2" class="input_contact" required/>
		preferred<input type="radio" name="preferred2">
		<input type="hidden" name="emailid" value=<?=$EmailId?>>
      </div><br>
        <input type="file" name="uploaded_file" >
        <input type="submit" value="Upload Resume">
		
    </form>
</div>

</body>
</html>
