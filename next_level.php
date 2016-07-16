<?php

	session_start();
	$_SESSION["num_livello"] = $_SESSION["num_livello"] + 1;
	$_SESSION["first_time"] = "true";
	$_SESSION["livello_max"] = max($_SESSION["livello_max"],$_SESSION["num_livello"]);
	switch ($_SESSION["num_livello"]) {
	    case 2:
	        $_SESSION['nome_livello'] = "livello_two";
	        $array = array(0,26,27,32);
	        $_SESSION['editable_row'] = $array;
	        break;
	   
	    case 3:
	        $_SESSION['nome_livello'] = "livello_three";
	        $array = array(0,36,37,46);
	        $_SESSION['editable_row'] = $array; 
	        break;
	   
	    case 4:
	        $_SESSION['nome_livello'] = "livello_four";
	         $array = array(0,23);
	        $_SESSION['editable_row'] = $array;  
	        break;
	    
	    case 5:
        	$_SESSION['nome_livello'] = "livello_five";
        	 $array = array(0,16);
	        $_SESSION['editable_row'] = $array;  
        	break;
        
        case 6:
        	$_SESSION['nome_livello'] = "livello_six";
        	 $array = array(0,18);
	        $_SESSION['editable_row'] = $array;  
        	break;
        
        case 7:
        	$_SESSION['nome_livello'] = "livello_seven";
        	 $array = array(0,29);
	        $_SESSION['editable_row'] = $array;  
        	break;
        
        case 8:
        	$_SESSION['nome_livello'] = "livello_eight";
        	 $array = array(0,27);
	        $_SESSION['editable_row'] = $array;  
        	break;
        
        case 9:
        	$_SESSION['nome_livello'] = "livello_nine";
        	 $array = array(0,24);
	        $_SESSION['editable_row'] = $array;  
        	break;

        case 10:
        	$_SESSION['nome_livello'] = "livello_ten";
        	$_SESSION["vittoria"] = "true";
        	 $array = array(0,27);
	        $_SESSION['editable_row'] = $array;  
        	break;
        
	}
?>