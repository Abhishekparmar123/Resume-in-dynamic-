<?php


session_start();

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername,$username,$password);

	mysqli_select_db($conn,"userlogin");

$NAME = $_POST['name'];
$FNAME = $_POST['fname'];

$DOB = $_POST['dob'];
$GENDER = $_POST['gender'];
$EMAIL = $_POST['Email'];
$MOBILE = $_POST['num'];

$QUALIFICATION = $_POST['qualification'];




$s = "SELECT * FROM userlogin ";
$result = mysqli_query($conn,$s);



  
if ($result == 1)
     {
	echo "Already login" ;
	}
	else{
		$login = "INSERT INTO resume(NAME,FATHER_NAME,DOB,GENDER,EMAIL,MOBILE,QUALIFICATION) VALUES ('$NAME','$FNAME','$DOB','$GENDER','$EMAIL',$MOBILE,'$QUALIFICATION') ";
		mysqli_query($conn, $login);
		
	}
?>

<html>
<link rel="stylesheet" type="text/css" href="php.css">
<body>
	<div>
<h1 id="one">YOUR RESUME </h1>

	<h1> NAME : <?php echo  $NAME ?> </h1>
<h1> FATHER NAME :  <?php echo $FNAME ?> </h1>
<h1>DATE OF BIRTH :<?php echo "$DOB"; ?></h1>
<h1>GENDER : <?php echo "$GENDER"; ?></h1>
<H1>EMAIL ID : <?php echo "$EMAIL"; ?></H1>
<h1>MOBILE NUMBER : <?php echo $MOBILE; ?></h1>
<h1>QUALIFICATION : <?php echo "$QUALIFICATION"; ?></h1>


</div>
</body>

