<?php
	session_start();
	$_SESSION["first_time"] = "false";
	if(!empty($_POST['data'])){
		$data = $_POST['data'];
		$fname = mktime() . ".txt";//generates random name
		$file = fopen("assets/js/livelli/".$_SESSION["nome_livello"]."/".$_SESSION['cod'].".js", 'w');//creates new file
		$_SESSION["update"] = "true";
		fwrite($file, $data);
		fclose($file);
	}
?>