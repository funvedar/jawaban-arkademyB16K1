<?php
require("config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu List</title>
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
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container" style="margin-top:20px">
	<hr>
	<a href="add.php" class="btn btn-secondary" role="button" >Add</a>
	<br><br>
		<table class="table table-striped table-hover table-sm table-bordered">
			<thead class="thead-light">
				<tr>
					<th>No</th>
					<th>Cashier</th>
					<th>Product</th>
					<th>Category</th>
					<th>Price</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$query = "SELECT product.id, cashier.name, product.name, category.name, product.price FROM product INNER JOIN category ON product.id_category=category.id INNER JOIN cashier ON product.id_cashier=cashier.id";
                $sql = mysqli_query($koneksi, $query);
				if(mysqli_num_rows($sql) > 0) : ?>
					<?php $no = 1; ?>
					<?php while($data = mysqli_fetch_row($sql)) : ?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $data[1] ?></td>
							<td><?= $data[2] ?></td>
							<td><?= $data[3] ?></td>
							<td><?= $data[4] ?></td>
							<td>
								<a href="edit.php?id=<?= $data[0] ?>" class="badge badge-primary">Edit</a>
								<a href="delete.php?id=<?= $data[0] ?>" class="badge badge-danger" onclick="return confirm('Are you sure want to delete this data?')">Delete</a>
							</td>
						</tr>
						<?php $no++; ?>
                    <?php endwhile; ?>
				<?php endif ?>
			<tbody>
		</table>
	</div>
	
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>\

</body>
</html>