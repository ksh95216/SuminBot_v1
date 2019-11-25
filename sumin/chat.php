<?php

include 'lib/functions.php';

$data = $_POST['data'];
$answer = "$data??? ".what();
$pass = 0;
session_start();

if(preg_match("/^help$/i",$data)){
	$answer = help();
	$pass = 1;
}

if(preg_match("/^hi~?$/i",$data)){
	
	$_SESSION['stat'] = "start";
	$_SESSION['q'] = 0;
	$answer = hi();
	$pass = 1;

}

if(preg_match("/^bye~?$/i",$data)){

	session_destroy();
	$answer = bye();
	$pass = 1;

}

if(preg_match("/^\?*$/i",$data)){
	$answer = guess($data);
}

if(preg_match("/^&#x1F3D3$/i",$data)){
	$answer = ping_pong();
}

if(preg_match("/^die\? (.*?)$/i",$data,$match)){
	
	$answer = ping($match[1]);
}

if(preg_match("/^request (.*?)$/i",$data, $match)){
	$answer = curl($match[1]);
}

if(preg_match("/^yasuo q$/i",$data)){
	$_SESSION['q'] += 1;
	$answer = q();
}
if(preg_match("/^yasuo w$/i",$data)){
	$answer = w();
}
if(preg_match("/^yasuo e$/i",$data)){
	$answer = e();
}
if(preg_match("/^yasuo r$/i",$data)){
	$answer = r();
}
if(preg_match("/^yasuo$/i",$data)){
	$answer = yasuo();
}
if($_SESSION['stat'] != "start" and $pass == 0){
	exit(what2());
}
echo $answer;

?>
