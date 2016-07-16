<!DOCTYPE html>
<html>
  	<head>
    <meta charset="UTF-8">
    <title>Login</title>
     	<link rel="icon shortcut" href="assets/images/nave.ico">
        <link rel="stylesheet" href="assets/stylesheets/login_style.css">
	</head>
	<style>
	h4{
		margin-top: 20px;
		font-family: 'Lato', sans-serif;
	}
	a{
		font-family: 'Lato', sans-serif;
		color: yellow;
	}
  	</style>
	<body>
		<?php
        	session_start();
         	if (session_is_registered('autorizzato')) {
            	echo "<script>window.location.href='console.php';</script>";
              	die;
            }
       	?>
	<div class="wrapper">
		<div class="container">
			<h1>Benvenuto</h1>
			
			<form  class="form" action="login_control.php" method="post" role="form">
				<input name="username" type="text" placeholder="Username">
				<input name="password" type="password" placeholder="Password">
				<button type="submit">Login</button>
				<h4> Per registrarsi inviare una mail a <a href="mailto:simone.scala3@studio.unibo.com">simone.scala3@studio.unibo.com</a> </h4>
		<h4> Complila il questionaro al seguente <a href="https://docs.google.com/forms/d/1yxhdIGwD7K-oIwIdHqg7TzUIez1smSCngcbYTg17Br4/viewform">link</a> </h4>
			</form>
		</div>
		
		<ul class="bg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
	</body>
</html>