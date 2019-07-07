<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="text-align: center; ">
  <h2>Carousel Example</h2> 
<div style=" padding-left: 400px;" >  
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:300px; text-align: center; ">
    <!-- Indicators -->
    <ol class="carousel-indicators" style="text-align: center;">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="text-align: center;">
      <div class="item active" style="text-align: center;">
        <img src="1.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item" style="text-align: center;">
        <img src="2.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item" style="text-align: center;">
        <img src="3.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="text-align: center;">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next" style="text-align: center;">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
 </div>
</div>

</body>
</html>
