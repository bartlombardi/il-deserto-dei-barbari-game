<?php
	session_start();
	if(!empty($_POST['data'])){
	  	$_SESSION["num_livello"] = intval($_POST['data']);
	  	$_SESSION["first_time"] = "true";
	  	$_SESSION["update"] = "true";
	  	$_SESSION["vittoria"] = "false";

		switch ($_SESSION["num_livello"]) {
		 	case 1:
			        $_SESSION['nome_livello'] = "livello_one";
			        $array =  array(0,28,29,80);
			        $_SESSION['editable_row'] = $array;
			        break;

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
	        	 $array = array(0,27);
		        $_SESSION['editable_row'] = $array;  
	        	break;        
	    }
	}
?>