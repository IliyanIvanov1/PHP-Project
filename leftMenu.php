<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link href="style1.css" rel="stylesheet" type="text/css"/>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
		<script src="js/jquery-2.1.4.js" type="text/javascript"></script>
	</head>
	<body>
		<div class="div1" >
			<a id="link1" class="" href="?page=home"><img src="logo.jpg" alt="Smiley face" height="42" width="200"></a>
			<a id="link1" class="btn btn-outline-secondary" href="?page=home">Home</a>
			<a id="link1" class="btn btn-outline-secondary" href="?page=contact">Contacts</a>
				<?php
					if(!isset($_COOKIE['user'])){
							echo "<a id='link1' class='btn btn-outline-secondary' href='?page=login'>Login</a>" ;
						}else{
							echo "<a id='link1' class='btn btn-outline-secondary' href='?page=addemployee'>Add Contact</a>" ;
							echo "<a id='link1' class='btn btn-outline-secondary' href='?page=showcontacts'>Show Contacts</a>" ;
							echo "<a id='link1' class='btn btn-outline-secondary' href='?page=admin'>Admin Panel</a>";
							echo "<a id='link1' class='btn btn-outline-secondary' href='?page=logout'>Logout</a>" ;
							}
				?>
		</div>
	</body>
</html>



