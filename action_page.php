<html>
 <head>
  <title>CURL Request</title>
</head>
<body>
<?php
require __DIR__ . '/helper.php';

$url = "https://localhost:5001/api/patients/GetPatients";
$arr = make_curl_get_request($url);

foreach($arr["value"] as $key=>$value){
    if($value["name"] == $_POST['name'] && $value["password"] == $_POST['psw']){
        echo "patient has been found";
        echo $value["id"] . "=>" . $value["name"] . "<br>";
        redirect('/PatientMedicationApplication');
    }
}

$url = "https://localhost:5001/api/doctors/GetDoctors";
$arr = make_curl_get_request($url);

foreach($arr["value"] as $key=>$value){
    //echo $key . "=>" . $value["name"] . "<br>";
    if($value["name"] == $_POST['name'] && $value["password"] == $_POST['psw']){
        echo "doctor has been found";
        echo $value["id"] . "=>" . $value["name"] . "<br>";
        redirect('/PatientMedicationApplication');
    }
}

redirect('/PatientMedicationApplication/login.html'); //go back to login page, user wasnt found

?> 
 </body>
</html>