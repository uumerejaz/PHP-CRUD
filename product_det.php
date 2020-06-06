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
<body style="background-color:#DEB887">
<?php
      include_once("connection.php");
    ?>
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
		  <a class="nav-item nav-link" href="addproduct.php" >Add Product</a>
		  <a class="nav-item nav-link" href="viewproduct.php">Veiw Products</a>
		  <a class="nav-item nav-link" href="login.php">Log Out</a>
		</div>
		</div>
	</nav>
    <?php

if($_GET){

  $id = $_GET['uid'];


$query = "SELECT * FROM tblproducts WHERE productid = '$id' ";
$result = mysqli_query($dbcon,$query);
while($fetc = mysqli_fetch_assoc($result)){
?>
        <h1 style="margin:10px 10px 10px 10px" >
        <?php
        echo $fetc['productname'];
        ?>
        </h1>
        <div class="row">
            <div class="d-flex justify-content-center">
            <?php
        echo "<img src='../images/".$fetc['productprofile']."' height='250'  >";
    ?>
                <div class="float-right ml-5 mt-5">
                <ul class="list-unstyled">
                    <li>
                        Product Price: RS.<?php
        echo $fetc['productprice'];
    ?>
                    </li>
                    <li>
                        Product in Stock: <?php
        if($fetc['productinstock']==1)
            echo "Yes";
        else
            echo "No";
    ?>
                    </li>
                    <li>
                        Product Discount: <?php
        echo $fetc['productdiscount'];
    ?>%
                    </li>
                    <li>
                        Product Size: <?php
        echo $fetc['productsizes'];
    ?>
                    </li>
                </ul>
                </div>
        </div>
    </div>
    <div class="row" style="margin:10px 10px 10px 10px" >
        <h2 style="margin:10px 10px 10px 10px" >
            Product Description
        </h2>
        <p>
            <br/>
        <?php
        echo $fetc['productdetails'];
    ?>   
        </p>
        
    </div>
<?php
}}
?>
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