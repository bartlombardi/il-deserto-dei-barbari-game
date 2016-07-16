<?php
	session_start();
	if(isset($_SESSION['update']) && !empty($_SESSION['update'])) {
		echo json_encode($_SESSION['update']." ".$_SESSION['nome_livello']." ".$_SESSION['first_time']." ".$_SESSION['cod']);	
	}
	else{
		$_SESSION['num_livello'] = 1;
		$_SESSION['nome_livello'] = "livello_one";
		$_SESSION['first_time'] = "true";
		$_SESSION["livello_max"] = 1;
		$_SESSION["vittoria"] = "false";
		$array =  array(0,28,29,80);
		$_SESSION['editable_row'] = $array;
		echo json_encode("false"." ".$_SESSION['nome_livello']." ".$_SESSION['first_time']);
  	}
?>