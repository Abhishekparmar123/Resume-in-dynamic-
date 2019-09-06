<!DOCTYPE html>
<html>
<head>
	<title>UPLOAD RESUME </title>
<link rel="stylesheet" type="text/css" href="resume.css">
</head>
<h1>are you uploaded resume this website.</h1>
<div>
<form  action="resume.php"  method="post" >
<p>
	<label>NAME : </label>
	<input type="text" name="name" name="name" id="name" placeholder="ENTER YOUR NAME " size="30" />
</p>
<p>
	<label>father NAME : </label>
	<input type="text" name="fname" name="fname" id="name" placeholder="ENTER YOUR FATHER NAME " size="30" />
</p>
<p>
	<label> DOB: </label>
	<input type="date" name="dob" id="dob" />
</p>
<p> select your gender :
	<select name="gender" name="gender" id="qualification">
		<option>select</option><option>M</option>
<option>F</option>
	</select>
</p>
<p>
	<label>Email id: </label>
	<input type="text" name="Email" name="Email" id="Email" placeholder="xyz@gmail.com " size="30" />
</p>
<p>
	<label>Mobile number: </label>
	<input type="text" name="num" name="num" id="Email " size="30" />
</p>


<p>Select  your qualification :
<select name="qualification" name="qualification" id="qualification">
	<option>select</option>
	<option>8<sup>th</sup></option>
	<option>10<sup>th</sup></option>
	<option>12<sup>th</sup></option>
		<option>Graduation</option>
			<option>Post Graduation</option>	
		
</select>

<p>
	<input type="submit" name="submit" value="submit">
</p>
</form>
</div>
<body>

</body>
</html>