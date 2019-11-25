<?php
include 'protect.php';

$ch = rand(1,3);

function hi(){

	global $ch;
	if($ch == 1){
		return "Hi~~";
	}
	if($ch == 2){
		return "hi~~";
	}
	if($ch == 3){
		return "hi~";
	}
}

function bye(){

	global $ch;

	if($ch == 1){
		return "Bye~";
	}
	if($ch == 2){
		return "Bye~~";
	}
	if($ch == 3){
		return "bye~";
	}
}

function guess($data){

	$length	= strlen($data)*2;
	if($length >= 20){
	
		return "EEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEhyu~~~~~~!!!!!!";

	}
	return str_repeat("?", $length);
	
}

function what(){

	global $ch;

	if($ch == 1){
		return "Ehyu~!";
	}
	if($ch == 2){
		return "Ahyu~!";
	}
	if($ch == 3){
		return "Euhyu~!";
	}
}

function what2(){

	global $ch;

	if($ch == 1){
		return "muyo!";
	}
	if($ch == 2){
		return "Why?";
	}
	if($ch == 3){
		return "Fxxk";
	}

}

function ping_pong(){

	global $ch;

	
	if($ch == 1){
		return "Nha!\n\u{1F3D3}";
	}
	if($ch == 2){
		return "Euha!\n\u{1F3D3}";
	}
	if($ch == 3){
		return "Haa!\n\u{1F3D3}";
	}

}

function help(){

	return file_get_contents("help.txt");

}

function ping($data){

	$data = escape($data);
	$live = shell_exec('/bin/ping -c 1 -w 1 "'.$data.'" | head -n -4');
	if($live){

		return "Live!<br>".$live;
	
	}
	else{

		return "Probably dead!";	

	}

}

function curl($data){

	$data = escape($data);
	$result = shell_exec('/usr/bin/curl "'.$data.'"');
	return $result;

}
function q(){

	global $ch;
	
	if($_SESSION['q'] != 3){
	
		if($ch == 1){

			return "Hasagi!";
	
		}
		if($ch == 2){
		
			return "Ha";

		}
		if($ch == 3){		
			return "Hasag";
		}
	}
	else{
		if($ch == 1){
	
			$_SESSION['q'] = 0;
			return "Don!";

		}
		if($ch == 2){
	
			$_SESSION['q'] = 0;
			return "Ton!";

		}
		if($ch == 3){
	
			$_SESSION['q'] = 0;
			return "don!";

		}
	}
}

function w(){
	return "Balameul majala!";
}
function e(){
	return "shing~";	
}
function r(){
	global $ch;
	if($ch == 1){
		return "Sorye ge ton!";
	}
	if($ch == 2){
		return "Sorye~";
	}
	if($ch == 3){
		return "Igei ton!";
	}
}
function yasuo(){

	global $ch;

        if($ch == 1){
                return "LoL?";
        }
        if($ch == 2){
                return "LOL go?";
        }
        if($ch == 3){
                return "lol go??";
        }

}
?>
