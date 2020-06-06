<?php
    
      include_once("connection.php");
    


    $del = $_GET['deleteid'];
    echo $del;
    $dell = "DELETE FROM tblproducts WHERE productid='$del' ";
    if( mysqli_query($dbcon, $dell)){
		header("location: viewproduct.php");
	}
?>