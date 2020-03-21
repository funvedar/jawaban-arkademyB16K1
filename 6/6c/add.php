<?php require("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Menu</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
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
		<h2>Add menu</h2>
		
		<?php
		if(isset($_POST['submit'])){
			$cashier = $_POST["cashier"];
			$product = $_POST["product"];
			$category = $_POST["category"];
			$price = $_POST["price"];
			
            $query = "INSERT INTO product VALUES ('', '$product', '$price', '', '')";
            $query2 = "INSERT INTO category VALUES ('', '$category')";
            $query3 = "INSERT INTO cashier VALUES ('', '$cashier')";
            mysqli_query($koneksi, $query);
            mysqli_query($koneksi, $query2);
            mysqli_query($koneksi, $query3);
            
		}
		?>
		
		<form action="" method="post">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Cashier</label>
				<div class="col-sm-10">
					<input type="text" name="cashier" class="form-control" size="4" required>
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
                        <input type="text" name="product" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Price</label>
				<div class="col-sm-10">
                        <input type="number" name="price" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">&nbsp;</label>
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary" name="submit">Add</button>
				</div>
			</div>
		</form>
		
	</div>
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>\

</body>
</html>