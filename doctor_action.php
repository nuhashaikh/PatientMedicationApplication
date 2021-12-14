<html>
 <head>
  <title>CURL Request</title>
</head>
<body>
<?php
require __DIR__ . '/helper.php';

$url = "https://localhost:5001/api/doctors/AddDoctor";
$data = ['id' => $_GET['medid'], 'name' => $_GET['name'],'password' => $_GET['psw']]; // data to send
make_curl_post_request($data, $url);

redirect('/PatientMedicationApplication/login.html');

?> 
 </body>
</html>