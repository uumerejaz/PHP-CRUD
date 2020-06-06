<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css"  >
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</style>
</head>
<body style="background-color:#DEB887" >
	<div style="background-color: #1C2833; float:middle ; margin:10px 10px 10px 10px" >
		<img src="logo.png" height=150 width=250 >
		<a href="https://www.facebook.com/" target=blank><img src="fb.png" height=50 width=50 style="float:right; margin-top:100px" ><a>
		<a href="https://www.twitter.com/" target=blank><img src="twit.png" height=50 width=50 style="float:right; margin-top:100px" ><a>
		<a href="https://www.instagram.com/" target=blank><img src="insta.png" height=35 width=35 style="float:right; margin-top:105px" ><a>
	</div>
	<nav style="margin:10px 10px 10px 10px" class="navbar-dark bg-dark navbar navbar-expand-lg navbar-light bg-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
		  <a class="nav-item nav-link active" href="#" >Home <span class="sr-only">(current)</span></a>
		  <a class="nav-item nav-link" href="addproduct.php" >Add Product</a>
		  <a class="nav-item nav-link" href="viewproduct.php">Veiw Products</a>
		  <a class="nav-item nav-link" href="login.php">Log Out</a>
		</div>
		</div>
	</nav>
	<div class="container">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
		  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		  <li data-target="#myCarousel" data-slide-to="1"></li>
		  <li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner">
		  <div class="item active">
			<img src="s202.jpg" style="width:100%;">
		  </div>
		  <div class="item">
			<img src="s20.jpg" style="width:100%;">
		  </div>
		  <div class="item">
			<img src="s201.jpg" style="width:100%;">
		  </div>
		</div>
		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		  <span class="glyphicon glyphicon-chevron-left"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
		  <span class="glyphicon glyphicon-chevron-right"></span>
		  <span class="sr-only">Next</span>
		</a>
		</div>
	</div>
    <?php
      include_once("connection.php");
    ?>
    
      <div class="jumbotron ">
          <h1 class="d-flex justify-content-center">
              Samsung
          </h1>
          <p class="d-flex justify-content-center">
              
          </p>
      </div>
      <div class="container">
          <h1>Latest Products</h1>
        <div class="card-deck">
          <?php
          $query = "SELECT * from tblproducts";
          $result = mysqli_query($dbcon, $query);
          while($fetc = mysqli_fetch_assoc($result)){
          ?>
            <div class="card">
            <?php
        echo "<img src='../images/".$fetc['productprofile']."' height='300' >";
    ?>
                <div class="card-body">
                <h4 class="card-title"><?php echo $fetc['productname']; ?></h4>
                <a href="product_det.php?uid=<?php echo $fetc['productid']; ?>" class="btn btn-primary stretched-link">Veiw Details</a>
                </div>
            </div>
          <?php
           }
          ?>
        </div>
      </div>
	  <div style="background-color:#1C2833; float:middle;height:150 ; margin:10px 10px 10px 10px" >
	<footer align=center >
		<p style="color:#FF0000">Posted by: Umar Ejaz</p>
		<p style="color:#FF0000">Contact information: <a href="https://www.gmail.com/" target=blank>
		uumerejaz@gmail.com</a></p>
		<p style="color:#FF0000" style="margin-top:100px" >All Rights Reserved</p>
	</footer>
		
	</div>
    </body>
</html>