<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, Arkademyan</title>
  </head>
  <body>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-12 col-xs-12">
			    <h1>Hello, world!</h1>

			    <table class="table table-striped">
				  <thead>
				    <tr>
				      <th scope="col">ID</th>
				      <th scope="col">Nama Produk</th>
				      <th scope="col">Kategori</th>
				    </tr>
				  </thead>
				  <tbody>

				  	<!-- PHP -->

				  	<?php

						$conn = mysqli_connect('localhost','root','','bootcamp');

						if (mysqli_connect_errno())
						  {
						  	echo "Gagal koneksi ke Mysql: " . mysqli_connect_error();
						  }

						$query = "SELECT products.id, products.name, product_categories.name as kategori
						FROM products
						INNER JOIN product_categories ON products.category_id=product_categories.id";

						$res = $conn->query($query);
						if ($res->num_rows > 0) {
								while ($produk = $res->fetch_assoc()) {
									?>
											    <tr>
											      <th scope="row"><?php echo $produk['id']?></th>
											      <td><?php echo $produk['name']?></td>
											      <td><?php echo $produk['kategori']?></td>
											    </tr>
								<?	
								}
						}
						?>

						<!-- PHP END -->
				  </tbody>
				</table>
			</div>
		</div>
	</div>
		<script type="text/javascript">
	window.onload = function(){//window.addEventListener('load',function(){...}); (for Netscape) and window.attachEvent('onload',function(){...}); (for IE and Opera) also work
	    alert('PASTIKAN ANDA KONEK DENGAN INTERNET JIKA MEMBUKA HALAMAN INI, KARENA HALAMAN INI MEMBUTUHKAN RESOURCE DARI SERVERNYA');
	}
	</script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

