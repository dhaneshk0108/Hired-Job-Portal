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

if(isset($_POST["emailid"])) $emailid=$_POST["emailid"];
if(isset($_POST["password"])) $password=$_POST["password"];

$conn = new mysqli('localhost', 'root', 'india123', 'hired');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }

		$sql1 = "SELECT Id, FirstName, PersonType FROM `person` WHERE `EmailId` = '$emailid' AND `Password` = '$password' ";

$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
     if($row = $result1->fetch_assoc()) {
         $personid = $row["Id"];
		 $firstname = $row["FirstName"];
		 $persontype = $row["PersonType"];
     }
} else {
     echo "0 results";
}

if(isset($_POST["status"])) 
{	
$status=$_POST["status"];
if(isset($_POST["status"])) $id = $_POST["id"];

$sql2 = "UPDATE `hired`.`jobdetails` SET `StatusId` = '$status' WHERE `jobdetails`.`Id` = '$id'";

$result2 = $conn->query($sql2);
}

if($persontype === "jobseeker")
{
	echo "<center>You have successfully logged in<br>";
	
?>	

	<center><a href="index.html?id=<?=$personid?>&name=<?=$firstname?>&type=<?=$persontype;?>">Click here to hunt for jobs</a></center>
	
<?php
	
}
else if($persontype === "employer")
{
	$sql = "select a.Id, a.JobTitle, b.CompanyName, a.Description from `jobdetails` a, `companydetails` b, `employerdetails` c
where c.PersonId = '$personid'
and b.Id = c.CompanyId
and a.Id = c.JobId";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
	 echo '<center><br><table><th>Job Title</th><th>Company</th><th>Job Description</th>';
     while($row = mysqli_fetch_assoc($result)) {
		 $id = $row["Id"];
         $jobtitle = $row["JobTitle"];
		 $companyname = $row["CompanyName"];
		 $description = $row["Description"];
		 
?>		
<form action="loggedin.php" method="post">
<tr><td><a href="job.php?id=<?=$id;?>"><?=$jobtitle?></a></td><td><?=$companyname?></td><td><?=$description?></td>
<td><select name="status">
		<option value="1">open</option>
		<option value="2">paused</option>
		<option value="3">closed</option>
	  </select></td>
	  <td><input type="submit" class="input_submit" value="Change Status"></td></tr>
	  <input type="hidden" name="id" value=<?=$id?>>
	  <input type="hidden" name="emailid" value=<?=$emailid?>>
	  <input type="hidden" name="password" value=<?=$password?>>
	  <input type="hidden" name="persontype" value=<?=$persontype?>>
</form>
<?php	
	//	echo '<tr><td><a href=job.php?&jobcode=$id>' .$jobtitle. '</a>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>'.$companyname.'&nbsp;&nbsp;&nbsp;&nbsp;</td><td>'.$description.'</td></tr>';
	
     }
} else {
     echo "0 results";
}

echo "</table></center>";
}
	
$conn->close();
	
?>

</body>
</html>