<!DOCTYPE html>
<html >
  	<head>
    	<meta charset="UTF-8">
    	<title>Ranking List</title>
        <link rel="stylesheet" href="css/style.css">
	</head>
	<style></style>
	<body>
	  	<?php
        	header('Location: index.php');
          	die;
      	?>
    <div class="wrapper">
		<div class="container">
			<h1>Welcome</h1>
			
			<form  class="form" action="login_control.php" method="post" role="form">
				<input name="username" type="text" placeholder="Username">
				<input name="password" type="password" placeholder="Password">
				<button type="submit">Login</button>
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
  </body>
</html>