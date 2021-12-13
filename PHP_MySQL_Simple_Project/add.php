
<?php

$name = $_POST["name"];
$pass = $_POST["pass"];

echo $name. "<br>". $pass. "<br>";


// Create connection
$con=mysqli_connect("localhost","db_user","cpsc471","patient_medication");

// Check connection
if (mysqli_connect_errno($con)){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
  
$sql = "INSERT INTO patient_medication.Doctor (MedID, Name, Password) VALUES ('". $medid."','". $name."','". $pass."')";
 
if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));
}
  
echo "1 record added";

mysqli_close($con);
?>

