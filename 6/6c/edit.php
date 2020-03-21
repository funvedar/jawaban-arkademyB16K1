<?php require('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="container" style="margin-top:20px">
		<h2>Edit Menu</h2>
		
		<hr>
		
		<?php
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$select = mysqli_query($koneksi, "SELECT product.id, cashier.name, product.name, category.name, product.price FROM product INNER JOIN category ON product.id_category=category.id INNER JOIN cashier ON product.id_cashier=cashier.id WHERE product.id='$id'");
			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">ID is not in the database</div>';
				exit();
			}else{
				$data = mysqli_fetch_assoc($select);
			}
        }
        
		if(isset($_POST['submit'])){
			$cashier = $_POST["cashier"];
			$product = $_POST["product"];
			$category = $_POST["category"];
			$price = $_POST["price"];
            
            $query = "UPDATE product SET name='$product', price='$price'";
            $query2 = "UPDATE category SET name='$category";
            $query3 = "UPDATE cashier SET name='$cashier'";
            $sql = mysqli_query($koneksi, $query);
            $sql2 = mysqli_query($koneksi, $query2);
            $sql3 = mysqli_query($koneksi, $query3);
			
			if($sql){
				echo '<script>alert("Successfully updated data"); document.location="edit.php?id='.$id.'";</script>';
			}else{
				echo '<div class="alert alert-warning">Failed to update data</div>';
			}
		}
		?>
		
		<form action="edit.php?id=<?php echo $id; ?>" method="post">
        <div class="form-group row">
				<label class="col-sm-2 col-form-label">Cashier</label>
				<div class="col-sm-10">
					<input type="text" name="cashier" class="form-control" size="4" value="<?= $data[1] ?>" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Category</label>
				<div class="col-sm-10">
					<select name="category" class="form-control" required> 
						<option value="Food">Food</option>
						<option value="Drink">Drink</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Product</label>
				<div class="col-sm-10">
                        <input type="text" name="product" class="form-control" value="<?= $data[3] ?>" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Price</label>
				<div class="col-sm-10">
                        <input type="number" name="price" class="form-control" value="<?= $data[4] ?>" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">&nbsp;</label>
				<div class="col-sm-10">
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="index.php" class="btn btn-secondary" role="button" >Back</a>
				</div>
			</div>
		</form>
		
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</body>
</html>