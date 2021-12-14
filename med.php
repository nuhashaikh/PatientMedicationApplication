<html>
 <head>
  <title>CURL Request</title>
</head>
<body>
<?php
require __DIR__ . '/helper.php';

$url = "https://localhost:5001/api/medication/AddMedication";
$data = ['dIN' => $_GET['din'], 'refillStatus' => 1,'expDate' => "12/12/2021 11:15:45",'dosage' => $_GET['dosage'],'time' => $_GET['time'],'leftoverAmount' => 100];
make_curl_post_request($data, $url);

$url1 = "https://localhost:5001/api/prescriptions/AddPrescription";
$data1 = ['healthcareNo' => $_GET['userID'], 'medicationId' => $_GET['din'],'doctorId' => 40,'pharmacyLocation' => "123 Main St",'pharmacyName' => "Smiths Pharmacy"];
make_curl_post_request($data1, $url1);

redirect('/PatientMedicationApplication/index.php?userID='.$_GET['userID']);

?> 
 </body>
</html>