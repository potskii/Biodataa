<!DOCTYPE html>
<html>
<head></head>
	<title>BIODATA</title>
	<h2 style="text-align:center;color: white; background-color: black;">BIODATA</h2>  
<body style="background-color: green; margin-left: 30px; font-family: sans-serif; ">


	<form action="BIODATA.php" method="POST">
		
<h4>

	Name
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
	<input type="text" placeholder size="50" name="name">
</td>

<br>
<br>

	Present Address
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
		<input type="text" placeholder size="50" name="add">
<br>
<br>
	Permanent Address    &nbsp;&nbsp;&nbsp;&nbsp;:
		<input type="text" placeholder size="50" name="padd">
<br>
<br>

	Date of Birth
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
	<input type="text" placeholder size="50" name="date">

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	Religion        &nbsp; &nbsp;&nbsp;:
	<input type="text" placeholder size="" name="religion">
<br>
<br>

	Civil Status
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
	<input type="text" placeholder size="50" name="cstatus">

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
	Age             &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;:

	<input type="number" placeholder size="50" name="age">
<br>
<br>

	Citizenship
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
	<input type="text" placeholder size="50" name="ship">

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;


	Weight          &nbsp; &nbsp;&nbsp;&nbsp;:
	<input type="number" placeholder size="50" name="weight">
<br>
<br>

	Place of Birth
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
	<input type="text" placeholder size="50" name="birth">

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
	Height          &nbsp; &nbsp;&nbsp;&nbsp;:
	<input type="text" placeholder size="" name="height">
<br>
<br>

	Name of Father
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;:
	<input type="text" placeholder size="50" name="father">
<br>
<br>

	Name of Mother
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
	<input type="text" placeholder size="50" name="Mother">
<br>
<br>

	Address
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
	<input type="text" placeholder size="50" name="Add">
<br>
<br>

	Language or Dialects Spoken
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
	<input type="text" placeholder size="70" name="spoken">
<br>
<br>

	Person to be notified In Case of Emergency 
					&nbsp;
					:
	<input type="text" placeholder size="70" name="emergency">
<br>
<br>

<p style=" color: white; background-color: black; text-align: center">EDUCATIONAL BACKGROUND</p><br>

			<p>
			Elementary:	&nbsp;
						<input type="text" placeholder size="30" name="elem">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Year Graduated:
						<input type="number"  name="year">
						<br>
						<br>
			High School:&nbsp;
						<input type="text" placeholder size="30" name="high">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Year Graduated:
						<input type="number"  name="year">
						<br>
						<br>
			College:	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" placeholder size="30" name="college">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Year Graduated:
						<input type="number"  name="year">
						<br><br>
			Course:		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" placeholder size="30"name="course">
						<br><br>
			Special Skills:
						<input type="text" placeholder size="30"name="skills">					
					</p>
					<br><br>


	<center><button style="background-color: black">
			<input type="submit" name="submit">
		</button>
	</center>
</h4>
</form>

<?php
if(isset($_POST['submit'])){

echo "Name:".$_POST["name"]."<br>";

echo "Present Address:".$_POST["add"]."<br>";

echo "Permanent Address:".$_POST["padd"]."<br>";

echo "Date of Birth:".$_POST["date"]."<br>";

echo "Civil Status:".$_POST["cstatus"]."<br>";

echo "Citizenship:".$_POST["ship"]."<br>";

echo "Place of Birth:".$_POST["birth"]."<br>";

echo "Name of Father:".$_POST["father"]."<br>";

echo "Name of Mother:".$_POST["Mother"]."<br>";

echo "Address:".$_POST["Add"]."<br>";

echo "Language or Dialects Spoken:".$_POST["spoken"]."<br>";

echo "Religion:".$_POST["religion"]."<br>";

echo "Age:".$_POST["age"]."<br>";

echo "Weight:".$_POST["weight"]."<br>";

echo "Height:".$_POST["height"]."<br>";

echo "Elementary:".$_POST["elem"]."<br>";
echo "Year Graduated:".$_POST["year"]."<br>";

echo "High School:".$_POST["high"]."<br>";
echo "Year Graduated:".$_POST["year"]."<br>";

echo "College:".$_POST["college"]."<br>";
echo "Year Graduated:".$_POST["year"]."<br>";

echo "Course:".$_POST["elem"]."<br>";
echo "Special Skills:".$_POST["skills"]."<br>";

}
?> 

</body>
</html>
