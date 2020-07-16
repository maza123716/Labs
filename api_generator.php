<?php

include_once 'dbConn.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
	//Prevents users from visting this page via url

	header('HTTP/1.0 403 Forbidden');
	echo "You are Forbidden";

}else{
	$api_key = null;
	$api_key = generateApiKey(64)//we generate a key that is 64  characters long
	header('Content-type: application/json');
	echo generateResponse($api_key);
}

//How we generate a key
function generateApiKey($str_length){
	//base 62 map
	$chars='0123456789abcdefghijklmnoopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

	//get enough random bits for base 64 encoding(and prevent '=' padding)....note that +1 is faster than ceil()

	$bytes= openssl_random_pseudo_bytes(3*$str_length/4+1);
	//convert base 64 to base 62 by mapping + and / to something from the base 62 map and use the 2 random bytes for the new characters

	$repl = unpack('C2', $bytes);
	$first = $chars[$repl[1]%[62]];
	$second = $chars[$repl[2]%[62]];
	return strtr(substr(base64_encode($bytes), 0,$str_length), '+/', "$first$second");
}
function saveApiKey(){
	//code to save
}

function generateResponse($api_key){
	if(saveApiKey()){
		$res = ['success' => 1,'message' => $api_key];
	}else{
		$res = ['success' => 0, 'message' => 'Something went wrong. Please generate the API key'];
	}
	return json_encode($res);
}



?>