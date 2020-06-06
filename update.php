<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css"  >
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</style>
<body style="background-color:#DEB887" >
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
		  <a class="nav-item nav-link active" href="#" >Home <span class="sr-only">(current)</span></a>
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

$total = mysqli_num_rows($result);

if($total>0){

  while($row = mysqli_fetch_assoc($result)){
    $id = $row['productid'];
$name = $row['productname'];
$price = $row['productprice'];
$code = $row['productcode'];
$stock = $row['productinstock'];
$discount = $row['productdiscount'];
$size = $row['productsizes'];
$detail = $row['productdetails'];

$image = $row['productprofile'];
    

?>


    <div class="container">
    <div class="row">
    <div class="col-md-4">
      <form method="POST" action="update_verify.php" enctype="multipart/form-data">
        <div class="form-group m-2">
            <input type="text" class="form-control" name="productid" placeholder="Product ID" value="<?php echo $id; ?> " readonly>
            <input type="text" class="form-control" name="productname" placeholder="Product Name" value="<?php echo $name; ?>">
            <input type="text" class="form-control" name="productprice" placeholder="Product Price" value="<?php echo $price; ?>">
            <input type="text" class="form-control" name="productcode" placeholder="Product Code" value="<?php echo $code; ?>">
            <label>In Stock: </label>
            <?php
            if ($stock==1){
              ?>
              <label class="radio-inline"><input type="radio" name="productinstock" value="1" checked>Y</label>
              <label class="radio-inline"><input type="radio" name="productinstock" value="0"> N </label>
              <?php
            }
            else{
              ?>
              <label class="radio-inline"><input type="radio" name="productinstock" value="1">Y</label>
              <label class="radio-inline"><input type="radio" name="productinstock" value="0" checked> N </label>
              <?php
            }
            ?>
            <input type="text" class="form-control" name="productdiscount" placeholder="Product Discount" value="<?php echo $discount; ?>">
            <input type="text" class="form-control" name="productsize" placeholder="Product Size" value="<?php echo $size; ?>">
            <input type="text" class="form-control" name="productdeatails" placeholder="Product details" value="<?php echo $detail; ?>">
            <label>Choose Image: </label>
            <input type="file" class="form-control" name="productprofile" value="<?php echo $image; ?>">
            <br>
            <?php
        echo "<img src='../images/".$row['productprofile']."' width='100' height='100' >";
    ?>
            <br><button type="submit" name="submit" class="btn btn-primary mt-3">Update</button>
        </div>
        <?php
        }}}
        ?>
      </form>
    </div>
    </div>
    </div>

<?php
  include_once '../includes/footer.php';
?>
    
</body>
</html>