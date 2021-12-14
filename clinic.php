<html>
 <head>
  <title>CURL Request</title>
</head>
<body>
<?php
require __DIR__ . '/helper.php';

$url = "https://localhost:5001/api/clinics/AddClinic";
$data = ['ClinicNo' => $_GET['id'], 'Name' => $_GET['name'],'Address' => $_GET['address']];
make_curl_post_request($data, $url);

$url1 = "https://localhost:5001/api/pharmacies/AddPharmacy";
$data1 = ['name' => $_GET['pharmName'], 'location' => $_GET['pharmAddress'], 'clinic_no' => $_GET['id']];
make_curl_post_request($data1, $url1);

$url2 = "https://localhost:5001/api/worksAt/AddWorksAt";
$data2 = ['clinicNo' => $_GET['id'], 'medID' => $_GET['userID']];
make_curl_post_request($data2, $url2);

redirect('/PatientMedicationApplication/doctor.php?userID='.$_GET['userID']);
?> 
 </body>
</html>