
<?php

include 'header.php';

?>	
<div class="row">	
	<div class="col-md-12">
		<div class="card mt-3">
			<div class="card-body">
					<ol class="breadcrumb">
					  <li class="breadcrumb-item"><a href="#">Home</a></li>
					   <li class="breadcrumb-item"><a href="#">Product</a></li>
					  <li class="breadcrumb-item active"> <i class="fa fa-map"></i> All Products</li>
					</ol>
					<div class="card mt-3">
						<div class="card-deck">
						<?php  

							$id = $_GET['id'];
							$result = get_product_by_id($id);

							$row = mysqli_fetch_array($result);
						
							?>
						<div class="card text-center">
								<div class="card-body">
									<img src="includes/<?php   echo $row["product_image"]; ?>" class="rounded mx-auto d-block">		
									<h4 class="card-title"><?php   echo $row["product_title"]; ?></h4>
									<p class="card-text"><?php   echo $row["product_description"]; ?>
									</p>
									<p> <span class="badge badge-success"> <?php   echo $row["product_price"]; ?> </span> &nbsp  <span class="text-danger"><strike> <?php   echo $row["old_price"]; ?></strike></span></p>

									<form action="checkout.php" method="POST">
									<input type="hidden" name="title" value="<?php   echo $row["product_title"]; ?>" >
									<input type="hidden" name="id" value="<?php   echo $row["product_id"]; ?>" >
									<button type="submit" class="btn btn-primary">Add To Cart </button>
									</form>
								

			  						
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	</div>
</body>


<?php

    include 'footer.php';

?>