<?php
require('config.php');
if(isset($_GET['id'])){
	$id = $_GET['id'];
		$del = mysqli_query($koneksi, "DELETE FROM product, category, cashier WHERE product.id='$id' && product.id_category=category.id && product.id_cashier=cashier.id");
		if($del){
			echo '<script>alert("Successfully to delete data"); document.location="index.php";</script>';
		}else{
			echo '<script>alert("Failed to delete data"); document.location="index.php";</script>';
        }
    }
?>