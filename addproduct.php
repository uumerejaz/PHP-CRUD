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
<body>
    
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
		  <a class="nav-item nav-link" href="index.php" >Home </a>
		  <a class="nav-item nav-link  active" href="#" >Add Product<span class="sr-only">(current)</span></a>
		  <a class="nav-item nav-link" href="viewproduct.php">Veiw Products</a>
		  <a class="nav-item nav-link" href="logout.php">Log Out</a>
		</div>
		</div>
	</nav>
    <div class="container">
    <div class="row">
    <div class="col-md-4">
      <form method="POST" action="addproduct_verify.php" enctype="multipart/form-data">
        <div class="form-group m-2">
            <input type="text" class="form-control" name="productid" placeholder="Product ID">
            <input type="text" class="form-control" name="productname" placeholder="Product Name">
            <input type="text" class="form-control" name="productprice" placeholder="Product Price">
            <input type="text" class="form-control" name="productcode" placeholder="Product Code">
            <label>In Stock: </label>
            <label class="radio-inline"><input type="radio" name="productinstock" value="1">Y</label>
            <label class="radio-inline"><input type="radio" name="productinstock" value="0"> N </label>
            <input type="text" class="form-control" name="productdiscount" placeholder="Product Discount">
            <input type="text" class="form-control" name="productsize" placeholder="Product Size">
            <input type="text" class="form-control" name="productdeatails" placeholder="Product details">
            <label>Choose Image: </label>
            <input type="file" class="form-control" name="productprofile">
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </div>
      </form>
    </div>
    </div>
    </div>    
	<div style="background-color:#1C2833; float:middle;height:150 ; margin:100px 10px 10px 10px" >
	<footer align=center >
		<p style="color:#FF0000">Posted by: Umar Ejaz</p>
		<p style="color:#FF0000">Contact information: <a href="https://www.gmail.com/" target=blank>
		uumerejaz@gmail.com</a></p>
		<p style="color:#FF0000" style="margin-top:100px" >All Rights Reserved</p>
	</footer>
		
	</div>

   
    </body>
</html>