<?php
include_once("connection.php");

if(isset($_POST['submit'])){

  $pname = $_POST['productname'];
  $pprice = $_POST['productprice'];
  $pcode = $_POST['productcode'];
  $stock = $_POST['productinstock'];
  $pdiscount = $_POST['productdiscount'];
  $size = $_POST['productsizes'];
  $pdetail = $_POST['productdetails'];
  $pimage = $_FILES['productprofile']['name'];

  $target = "../images/".basename($pimage);
  
  if(move_uploaded_file($_FILES['productprofile']['tmp_name'], $target)){
      $msg= "Successful";
  }
  else{
      $msg= "error";
  }


  $query = "UPDATE tblproducts SET productname='$pname',productprice='$pprice', productcode='$pcode',productinstock='$stock',
  productdiscount='$pdiscount', productsizes='$size', productdetails='$pdetail', productprofile='$pimage'
  WHERE productid='$id' ";

  if(mysqli_query($dbcon,$query)){
    header("location: viewproduct.php");
  }

}
    

?>