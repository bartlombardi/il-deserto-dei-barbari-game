<?php
	session_start();
	$array=$_SESSION['editable_row'];
	for ($i=0 ; $i < count($array); $i++ ) {
		$stringa = $stringa." ".$array[$i];
	}
	echo json_encode($stringa);
?>