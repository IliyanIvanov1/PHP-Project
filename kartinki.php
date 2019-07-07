<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 300px;
      height: 300px;
  }
  </style>
</head>
<body>
	<div style="text-align: center; ">
		
	</div>
<div style=" padding-left: 30%;">
	<div id="demo" class="carousel slide" data-ride="carousel" style="width:300px; text-align: center;">
		<!-- Indicators -->
		<ul class="carousel-indicators" style="text-align: center;">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
		</ul>
	  
		<!-- The slideshow -->
		<div class="carousel-inner" style="text-align: center;">
			<div class="carousel-item active" style="text-align: center;">
			  <img src="1.jpg" alt="Los Angeles" width="1100" height="500">
			</div>
			<div class="carousel-item" style="text-align: center;">
			  <img src="2.jpg" alt="Chicago" width="1100" height="500">
			</div>
			<div class="carousel-item" style="text-align: center;">
			  <img src="3.jpg" alt="New York" width="1100" height="500">
			</div>
		</div>
	  
		  <!-- Left and right controls -->
		  <a class="carousel-control-prev" href="#demo" data-slide="prev" style="text-align: center;">
			<span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next" style="text-align: center;">
			<span class="carousel-control-next-icon"></span>
		  </a>
	</div>
</div>
</body>
</html>