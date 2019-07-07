<html>
	<head>
		<title>TODO supply a title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="style1.css" rel="stylesheet" type="text/css"/>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
		<script src="js/jquery-2.1.4.js" type="text/javascript"></script>
	</head>
	<body>
        <div class="container">
        <div class="row">
		<div class="div_contact1 col-md-6 mt-2">
			<h1 class="title">Свържете се с нас:</h1>
			<div class="div_contact2">
					<h4>Contact with Us</h4>
					Телефон: 056/02 04 92 или 0887 381 739<br>
					Факс:   (+359 2) 829 72 71<br>
					<a href="mailto:cwu@yahoo.com">cwu@yahoo.com</a><br>&nbsp;
			</div><br>
			<div class="">Адрес: ул. „Цар Самуил“ 62, 8000 Бургас<br>&nbsp;
			</div><br>
		</div>
		<hr>
	
		<div class="col-md-6 mt-2">
			<div id="flip"><h2>Press for feedback.</h2></div>
			<div id="panel">
				<form name="problemForm" method="POST" class="form-group">
					<fieldset>
						<legend>Give us Feedback please.</legend>
							Names:<br>
						<input type="text" name="names" placeholder="Enter your name."><br>  
							Email:<br>
						<input type="email" name="email" placeholder="Enter your Email."><br>
							Problem description:<br>
						<textarea class="form-control" rows="5" id="problem" name="problem"></textarea><br><br>
						<input class="btn btn-danger" type="reset" name="reset" value="Reset" />
						<input class="btn btn-success" type="submit" name="submit" value="Send" />
					</fieldset>
				</form>
				
			</div>
		</div>
        </div>
        </div>
        
	
		<?php
			if(isset($_POST["submit"])){
					$names=$_POST["names"];
					$email=$_POST["email"];
					$comment=$_POST["problem"];
				if(empty($names) || empty($email) || empty($comment)){
					echo "<script type='text/javascript'>alert('Please fill all the blank fileds')</script>";
				}else{
					include('connection.php');
					$queryResult=mysqli_query($con,"INSERT INTO problems(names_from,email_from,comment) VALUES('".$names."','".$email."','".$comment."')");
					if($queryResult){
						echo "<script type='text/javascript'>alert('Thank you for your feedback!')</script>";
					}else{
						echo "<script type='text/javascript'>alert('Sowwy :(')</script>";
						}
					}
				}
		?>
		
		<script>
			$(document).ready(function(){
				$("#flip").click(function(){
					$("#panel").slideToggle("slow");
				});
			});
		</script>
	</body>
</html>

