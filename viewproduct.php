<!DOCTYPE html>
<?php

include_once("connection.php");
?>
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
		  <a class="nav-item nav-link " href="addproduct.php" >Add Product</a>
		  <a class="nav-item nav-link  active" href="#">Veiw Products<span class="sr-only">(current)</span></a>
		  <a class="nav-item nav-link" href="logout.php">Log Out</a>
		</div>
		</div>
	</nav>
<?php
    $query = "SELECT * from tblproducts";
    $result = mysqli_query($dbcon, $query);
?>
<div class="container">
    <div class="row">
    <table class="table table-striped" border = "5">
  <thead>
<tr>
    <th>
        ID
    </th>
    <th>
        NAME
    </th>
    <th>
        PRICE
    </th>
    <th>
        CODE
    </th>
    <th>
        IN STOCK
    </th>
    <th>
        DISCOUNT
    </th>
    <th>
        SIZE
    </th>
    <th>
        DETAIL
    </th>
    <th>
        IMAGE
    </th>
    <th>
        ACTION
    </th>

</tr>

<?php

    while($fetc = mysqli_fetch_assoc($result)){
?>    
<tr>
    <td>
    <?php
        echo $fetc['productid'];
    ?>
    </td>
    <td>
    <?php
        echo $fetc['productname'];
    ?>
    </td>
    <td>
    <?php
        echo $fetc['productprice'];
    ?>
    </td>
    <td>
    <?php
        echo $fetc['productcode'];
    ?>
    </td>
    <td>
    <?php
        if($fetc['productinstock']==1)
            echo "Y";
        else
            echo "N";
    ?>
    </td>
    <td>
    <?php
        echo $fetc['productdiscount'];
    ?>
    </td>
    <td>
    <?php
        echo $fetc['productsizes'];
    ?>
    </td>
    <td>
    <?php
        echo $fetc['productdetails'];
    ?>
    </td>
    <td>
    <?php
        echo "<img src='../images/".$fetc['productprofile']."' width='100' height='100' >";
    ?>
    </td>
    <td>
        <a href="update.php?uid=<?php echo $fetc['productid']; ?>"> Edit </a>
        <a href="delete.php?deleteid=<?php echo $fetc['productid']; ?>"> Delete </a>    
    </td>
</tr>

<?php
};
?>
    </table>
    </div>
    </div>
	<div style="background-color:#1C2833; float:middle;height:150 ; margin:200px 10px 10px 10px" >
	<footer align=center >
		<p style="color:#FF0000">Posted by: Umar Ejaz</p>
		<p style="color:#FF0000">Contact information: <a href="https://www.gmail.com/" target=blank>
		uumerejaz@gmail.com</a></p>
		<p style="color:#FF0000" style="margin-top:100px" >All Rights Reserved</p>
	</footer>
		
	</div>


</body>
</html>