<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
     border: 1px solid black;
}
td,th{ padding: 7px;}

</style>
</head>
<body bgcolor="#CCCCCC">

<?php

if(isset($_POST["jobtitle"])) $jobtitle=$_POST["jobtitle"];
if(isset($_POST["emailid"])) $emailid=$_POST["emailid"];
if(!isset($jobtitle)) $jobtitle="";
if(isset($_POST["location"])) $location=$_POST["location"];
if(!isset($location)) $location="";
if(isset($_POST["jobid"])) $jobid=$_POST["jobid"];

if(isset($_POST["persontype"]))
{
	
	$persontype=$_POST["persontype"];
}
else{
	
	$persontype="guest";
}
	
if(isset($_POST["id"])) $id=$_POST["id"];


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

$sql = "select a.Id, a.JobTitle, b.CompanyName, a.Description from `jobdetails` a, `companydetails` b, `employerdetails` c
where b.Id = c.CompanyId
and a.Id = c.JobId
and a.StatusId = 1
and a.Location = '$location'
and a.JobTitle LIKE '%$jobtitle%'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
	 echo '<center><br><table><th>Job Title</th><th>Company</th><th>Job Description</th>';
     while($row = mysqli_fetch_assoc($result)) {
		 $jobid = $row["Id"];
         $jobtitle = $row["JobTitle"];
		 $companyname = $row["CompanyName"];
		 $description = $row["Description"];
		 
?>		

<tr><td><a href="job.php?id=<?=$jobid;?>"><?=$jobtitle?></a></td><td><?=$companyname?></td><td><?=$description?></td></tr>

<?php	
	//	echo '<tr><td><a href=job.php?&jobcode=$id>' .$jobtitle. '</a>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>'.$companyname.'&nbsp;&nbsp;&nbsp;&nbsp;</td><td>'.$description.'</td></tr>';
	
     }
} else {
     echo "0 results";
}

if(isset($_POST["emailid"]))
{
$sql3 = "SELECT Id from `Person` WHERE `EmailId` = '$emailid'";

$result3 = mysqli_query($conn, $sql3);

if (mysqli_num_rows($result3) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result3)) {
        $personid = $row["Id"];
    }
} else {
    echo "0 results";
}

}


if(isset($_POST["apply"])) 
{
	
	$sql2 = "INSERT INTO `hired`.`jobsapplied` (`PersonId`, `JobId`) VALUES ('$personid', '$jobid')";


if ($conn->query($sql2) === TRUE) {
		
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}

	
}


mysqli_close($conn);

echo "</table></center>";
echo "<center><br><a href=index.html>Go back to homepage</a></center>";

?>

</body>
</html>