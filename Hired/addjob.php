
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="postjob2.css">
<title>Hired | Post Job</title>
</head>
<body>

<div id="postjob">
    <div>
      <P>Post a Job</P>
    </div>      
	<h4>--------------------------------  Step 2  ---------------------------------<h4>
    <form name=myform onsubmit="return validatepwd()" action="postjob3.php" method="post">   
	<DIV ID="company_name">	
        Company Name<br><INPUT TYPE="TEXT" NAME="name" CLASS="input_field" required "autofocus"/>
	  </DIV>
	  <DIV id="company_description">
        <br>Company Description<br><INPUT TYPE="TEXT" NAME="cdescription" CLASS="input_description" />
      </DIV>
	  <div id="job_title">
        <br>Job Title<br><input type="text" name="jobtitle" class="input_field" required/>
      </div>
	  <div id="job_description">
        <br>Job Description<br><input type="text" name="jobdescription" class="input_description" required/>
      </div>
	  <br>Job Category
	  <select name="jobtype">
		<option value="1">IT service</option>
		<option value="2">Network</option>
		<option value="3">Civil</option>
		<option value="4">Electronics</option>
		<option value="5">Others</option>
	  </select>
	  <div id="location">
        <br>Location<br><input type="text" name="location" class="input_field" required/>
      </div>
	  <div id="salary">
        <br>Salary<br><input type="text" name="salary" class="input_field" required/>
      </div>
	  <div id="experience">
        <br>Experience<br><input type="text" name="experience" class="input_field" required/>
      </div>
	  <div id="positions">
        <br>No. of Positions<br><input type="text" name="position" class="input_field" required/>
      </div>
	  <div id="contact">
        <br>contact1<input type="text" name="contact1" class="input_contact" required/>
		preferred<input type="radio" name="preferred1"  checked><br>
      </div>
	  <div id="contact">
        <br>contact2<input type="text" name="contact2" class="input_contact" required/>
		preferred<input type="radio" name="preferred">
      </div>
	  <div>
        <p> <input type="submit" class="input_submit" value="Finish"></p>
      </div>
	  <input type="hidden" name="emailid" value=<?=$EmailId?>>
      </form>
</div>
</body>
</html>
