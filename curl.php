<html>
 <head>
  <title>CURL Request</title>
</head>
<body>
<?php

function make_curl_post_request($data, $url){
	$data_string = json_encode($data);	
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FAILONERROR, true); 

	//disable SSL certification
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		'Content-Type: application/json',
		'Content-Length: ' . strlen($data_string))
	);
	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

	//execute post
	$result = curl_exec($ch);
	if (curl_errno($ch)) {
		$error_msg = curl_error($ch);
		print_r($error_msg);
	}
	curl_close($ch);

	if ($result === false) {
		print_r("\nError");
	} else {
		$result = json_decode($result,true); // get your results from $result here
		print_r($result);
	}
}

$url = "https://localhost:5001/api/doctors/AddDoctor";
$data = ['id' => 13406, 'name' => 'Drake','password' => '1234']; // data to send
make_curl_post_request($data, $url);
	?> 
 </body>
</html>