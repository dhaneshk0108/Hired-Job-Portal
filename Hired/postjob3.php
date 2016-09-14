<!DOCTYPE html>
<html>
<head>
<style>
table, tr, td {
     border: 1px solid black;
}
td,th{ padding: 7px;}

</style>
</head>
<body bgcolor="#CCCCCC">

<?php
if(isset($_POST["name"])) $name=$_POST["name"];
if(isset($_POST["cdescription"])) $cdescription=$_POST["cdescription"];
if(isset($_POST["jobtitle"])) $jobtitle=$_POST["jobtitle"];
if(isset($_POST["jobdescription"])) $jobdescription=$_POST["jobdescription"];
if(isset($_POST["location"])) $location=$_POST["location"];
if(isset($_POST["salary"])) $salary=$_POST["salary"];
if(isset($_POST["jobtype"])) $jobtype=$_POST["jobtype"];
if(isset($_POST["position"])) $position=$_POST["position"];
if(isset($_POST["experience"])) $experience=$_POST["experience"];
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

$conn = new mysqli('localhost', 'root', 'india123', 'hired');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }

		$sql1 = "SELECT Id FROM `person` WHERE `EmailId` = '$emailid' ";

$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
     if($row = $result1->fetch_assoc()) {
         $personid = $row["Id"];
     }
} else {
     echo "0 results";
}

$date = date("Y-m-d");

$sql2 = "INSERT INTO `hired`.`jobdetails` (`Id`, `JobTitle`, `Location`, `JobTypeId`, `Description`, `Vacancies`, `Experience`, `Salary`, `StatusId`, `JobPostedDate`) VALUES (NULL, '$jobtitle', '$location', '$jobtype', '$jobdescription', '$position', '$experience', '$salary', '1', '$date')";
$sql3 = "INSERT INTO `hired`.`companydetails` (`Id`, `CompanyName`, `CompanyDescription`) VALUES (NULL, '$name', '$cdescription')";
$sql4 = "INSERT INTO `hired`.`phone` (`PhoneId`, `PersonId`, `Number`, `Prefered`) VALUES (NULL, '$personid', '$contact1', '$preferred1')";
$sql5 = "INSERT INTO `hired`.`phone` (`PhoneId`, `PersonId`, `Number`, `Prefered`) VALUES (NULL, '$personid', '$contact2', '$preferred2')";
$sql6 = "SELECT Id from `companydetails` WHERE `CompanyName` = '$name' AND `CompanyDescription` = '$cdescription'";
$sql7 = "SELECT Id from `jobdetails` WHERE `JobTitle` = '$jobtitle' AND `Location` = '$location' AND `JobTypeId` = '$jobtype' AND `Description` = '$jobdescription' AND `StatusId` = 1 AND `JobPostedDate` = '$date'";


if ($conn->query($sql2) === TRUE) {
		 echo '<center>Your Job has been posted successfully';
		 echo '<table><tr><td><u><b>Jobtitle:</b></u><br>'.$jobtitle.'</td></tr><tr><td><u><b>Company:</b></u><br>'.$name.'</td></tr><tr><td><u><b>Job Description:</b></u><br>'.$jobdescription.'</td></tr><tr><td><u><b>Location:</b></u><br>'.$location.'</td></tr><tr><td><u><b>Experience:</b></u><br>'.$experience.'</td></tr><tr><td><u><b>Salary:</b></u><br>'.$salary.'</td></tr><tr><td><u><b>No. of Positions:</b></u><br>'.$position.'</td></tr><tr><td><u><b>About Company:</b></u><br>'.$cdescription.'</td></tr>';

} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}

echo "</table></center>";

if ($conn->query($sql3) === TRUE) {
		
} else {
    echo "Error: " . $sql3 . "<br>" . $conn->error;
}

if ($conn->query($sql4) === TRUE) {
		
} else {
    echo "Error: " . $sql4 . "<br>" . $conn->error;
}

if ($conn->query($sql5) === TRUE) {
		
} else {
    echo "Error: " . $sql5 . "<br>" . $conn->error;
}


$result2 = $conn->query($sql6);

if ($result2->num_rows > 0) {
     while($row = $result2->fetch_assoc()) {
         $companyid = $row["Id"];
     }
} else {
     echo "0 results";
}

$result3 = $conn->query($sql7);

if ($result3->num_rows > 0) {
     while($row = $result3->fetch_assoc()) {
         $jobid = $row["Id"];
     }
} else {
     echo "0 results";
}


$sql8 = "INSERT INTO `hired`.`employerdetails` (`PersonId`, `CompanyId`, `JobId`) VALUES ('$personid', '$companyid', '$jobid')";


if ($conn->query($sql8) === TRUE) {
		
} else {
    echo "Error: " . $sql8 . "<br>" . $conn->error;
}

$conn->close();
		 


echo "<center><br><a href=index.html>Go back to homepage</a></center>";


?>
<form action="addjob.php" method="post">
    <div class="postjob">
      <center><input type="submit" name="postjob" value="Post Another Job"></center>
	</div>
	<input type="hidden" name="personid" value=<?=$personid?>>
</form>


</body>
</html>