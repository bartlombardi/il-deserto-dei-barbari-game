<?php
	require_once __DIR__ . '/db_connect.php';
    $db = new DB_CONNECT();
	session_start();
    $username=mysql_real_escape_string($_POST['username']); //faccio l'escape dei caratteri dannosi
	$password=mysql_real_escape_string($_POST['password']); //sha1 cifra la password anche qui in questo modo corrisponde con quella del db
	$query = "SELECT * FROM login WHERE username = '$username' AND password = '$password' ";
	$ris = mysql_query($query) or die (mysql_error());
	$riga=mysql_fetch_array($ris);  
	/*Prelevo l'identificativo dell'utente */
	$cod=$riga['username'];
	/* Effettuo il controllo */
	if ($cod == NULL) 
		$trovato = 0 ;
	else 
		$trovato = 1;  
	/* Username e password corrette */
	if($trovato == 1) {
	 	/*Registro la sessione*/
		session_register('autorizzato');
	 	$_SESSION["autorizzato"] = 1;
	 	/*Registro il codice dell'utente*/
	 	$_SESSION['cod'] = $cod;
	 	/*Redirect alla pagina riservata*/
	   	echo '<script language=javascript>document.location.href="console.php"</script>';
	} 
	else {
		/*Username e password errati, redirect alla pagina di login*/	
	 	echo "<script>alert('Username o password errati!');window.location.href='index.php';</script>";
	}
?>