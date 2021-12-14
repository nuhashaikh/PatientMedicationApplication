<html>
 <head>
  <title>CURL Request</title>
</head>
<body>
<?php
require __DIR__ . '/helper.php';

$url = "https://localhost:5001/api/patients/AddPatient";
$data = ['healthcareNo' => $_GET['health_no'], 'name' => $_GET['name'],'phoneNo' => $_GET['phone'],'doctorId' => $_GET['doctor'], 'password' => $_GET['psw']];
make_curl_post_request($data, $url);

redirect('/PatientMedicationApplication/login.html');

?> 
 </body>
</html>