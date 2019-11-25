<?php
function escape($data){

	$result = $data;
	$blacklist = ['"','\'','`',';','#','&'];	
	foreach($blacklist as $k => $v){
	
		$result = str_replace($v,"",$result);
	
	}
	return $result;

}
?>
