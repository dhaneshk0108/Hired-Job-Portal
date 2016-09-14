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
if(isset($_GET["id"])) $id=$_GET["id"];
if(isset($_POST["id"])) $id=$_POST["id"];
if(isset($_POST["emailid"])) $emailid=$_POST["emailid"];
if(isset($_POST["password"])) $password=$_POST["password"];
if(isset($_POST["persontype"]))
{
	$persontype=$_POST["persontype"];
}
else{ $persontype="guest"; 
$emailid = "";
}

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

$sql = "select a.JobTitle, b.CompanyName, a.Description, a.Location, a.Experience, a.Salary, a.Vacancies, b.CompanyDescription  from `jobdetails` a, `companydetails` b, `employerdetails` c
where b.Id = c.CompanyId
and a.Id = c.JobId
and a.StatusId = 1
and a.Id = $id";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
	 echo '<center><br><table>';
     while($row = mysqli_fetch_assoc($result)) {
         $jobtitle = $row["JobTitle"];
		 $companyname = $row["CompanyName"];
		 $description = $row["Description"];
		 $location = $row["Location"];
		 $experience = $row["Experience"];
		 $salary = $row["Salary"];
		 $vacancies = $row["Vacancies"];
		 $companydescription = $row["CompanyDescription"];
		 
		 
		 echo '<tr><td><u><b>Jobtitle:</b></u><br>'.$jobtitle.'</td></tr><tr><td><u><b>Company:</b></u><br>'.$companyname.'</td></tr><tr><td><u><b>Job Description:</b></u><br>'.$description.'</td></tr><tr><td><u><b>Location:</b></u><br>'.$location.'</td></tr><tr><td><u><b>Experience:</b></u><br>'.$experience.'</td></tr><tr><td><u><b>Salary:</b></u><br>'.$salary.'</td></tr><tr><td><u><b>No. of Positions:</b></u><br>'.$vacancies.'</td></tr><tr><td><u><b>About Company:</b></u><br>'.$companydescription.'</td></tr>';

	
     }
} else {
     echo "0 results";
}



mysqli_close($conn);

echo "</table></center>";
//echo "<center><br><a href=index.html>Go back to homepage</a></center>";


?>
<form action="findjob.php" method="post">
<?php

if($persontype === "employer")
{
	continue;
}
    else{
		?>
	
	<div class="jobtitle" action="findjob.php" method="post">
      <center><input type="submit" class="Apply" value="Apply">
	  <input type="hidden" name="persontype" value=<?=$persontype?>>
	  <input type="hidden" name="jobid" value=<?=$id?>>
	  <input type="hidden" name="apply" value="apply">
	  <input type="hidden" name="emailid" value=<?=$emailid?>>
	</div>
	<?php } ?>
</form>


</body>
</html>