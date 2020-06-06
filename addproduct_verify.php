<?php

      include_once("connection.php");
    


$id = $_POST['productid'];
$name = $_POST['productname'];
$price = $_POST['productprice'];
$code = $_POST['productcode'];
$stock = $_POST['productinstock'];
$discount = $_POST['productdiscount'];
$size = $_POST['productsize'];
$detail = $_POST['productdeatails'];

$image = $_FILES['productprofile']['name'];
$target = "../images/".basename($image);

if(move_uploaded_file($_FILES['productprofile']['tmp_name'], $target)){
    $msg= "Successful";
}
else{
    $msg= "error";
}

$query = "INSERT INTO  tblproducts 
(productprofile, productid, productname, productprice, productcode, productinstock, productdiscount, productsizes, productdetails)
VALUES ('$image','$id','$name','$price','$code','$stock','$discount','$size','$detail') ";
$result = mysqli_query($dbcon, $query);

header("Location: addproduct.php");
?>