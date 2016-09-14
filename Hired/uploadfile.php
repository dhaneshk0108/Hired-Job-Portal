<?php

if(isset($_POST["contact1"])) $contact1=$_POST["contact1"];
if(isset($_POST["preferred1"]))
{	$preferred1="Y";
}
else{
	$preferred1="N";
}
if(isset($_POST["contact2"])) $contact2=$_POST["contact2"];
if(isset($_POST["preferred2"])) 
	{	$preferred2="Y";
}
else{
	$preferred2="N";
}
if(isset($_POST["emailid"])) $emailid=$_POST["emailid"];

$dbLink = new mysqli('localhost', 'root', 'india123', 'hired');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }

		$sql2 = "SELECT Id FROM `person` WHERE `EmailId` = '$emailid' ";

$result2 = $dbLink->query($sql2);

if ($result2->num_rows > 0) {
     if($row = $result2->fetch_assoc()) {
         $personid = $row["Id"];
     }
} else {
     echo "0 results";
}

$sql3 = "INSERT INTO `hired`.`phone` (`PhoneId`, `PersonId`, `Number`, `Prefered`) VALUES (NULL, '$personid', '$contact1', '$preferred1')";
$sql4 = "INSERT INTO `hired`.`phone` (`PhoneId`, `PersonId`, `Number`, `Prefered`) VALUES (NULL, '$personid', '$contact2', '$preferred2')";

if ($dbLink->query($sql3) === TRUE) {
    echo "<br><br><center><H1>Congratulation! You have created the Hired Account. ";
} else {
    echo "Error: " . $sql3 . "<br>" . $dbLink->error;
}
if($dbLink->query($sql4) === TRUE){
	echo "<a href='index.html'>click here</a> to continue your job search</H1></center>";
}else {
    echo "Error: " . $sql4 . "<br>" . $dbLink->error;
}
		
// Check if a file has been uploaded
if(isset($_FILES['uploaded_file'])) {
    // Make sure the file was sent without errors
    if($_FILES['uploaded_file']['error'] == 0) {
        // Connect to the database
     //   $dbLink = new mysqli('localhost', 'root', 'india123', 'hired');
     //   if(mysqli_connect_errno()) {
      //      die("MySQL connection failed: ". mysqli_connect_error());
     //   }
 
        // Gather all required data
        $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['uploaded_file']['tmp_name']));
 
        // Create the SQL query
        $query = "
            INSERT INTO `jobseeker` (
                `personid`, `data`
            )
            VALUES (
                '{$personid}', '{$data}'
            )";
 
        // Execute the query
        $result = $dbLink->query($query);
 
        // Check if it was successfull
        if($result) {
           continue;// echo 'Success! Your file was successfully added!';
        }
        else {
            echo 'Error! Failed to insert the file'
               . "<pre>{$dbLink->error}</pre>";
        }
    }
    else {
        echo 'An error accured while the file was being uploaded. '
           . 'Error code: '. intval($_FILES['uploaded_file']['error']);
    }
 
    // Close the mysql connection
    $dbLink->close();
}
else {
    echo 'Error! A file was not sent!';
}
 
// Echo a link back to the main page
//echo "<br><br><center><H1>Congratulation! You have created the Hired Account. <a href='index.html'>click here</a> to continue your job search</H1></center>";
?>