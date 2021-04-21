   <?php

	include 'header.php';

    ?>
	
	<div class="row">
		<div class="col-md-4">
			<div class="card mt-3">
				<div class="card-body">
						<h4 class="card-header bg-light"> <i class="fa fa-map"></i>  Les villes </h4>
						<ul class="list-group">
							<li class="list-group-item"> <a href=""> Paris</a> <span class="badge badge-dark float-right">5</span> </li>
							<li class="list-group-item"> <a href=""> Lion</a> <span class="badge badge-dark float-right">14</span></li>
							<li class="list-group-item"><a href=""> Monaco</a> <span class="badge badge-dark float-right">16</span> </li>
							<li class="list-group-item"><a href=""> Madrid</a> <span class="badge badge-dark float-right">16</span> </li>
							<li class="list-group-item"><a href=""> Lisbon</a> <span class="badge badge-dark float-right">16</span> </li>
						</ul>
				</div>
			</div>
		</div>
	<div class="col-md-8">	
		<div class="card mt-3">
			<div class="card-body">
				<h4 class="card-header bg-light"> <i class="fa fa-map"></i>  Products </h4>	
					<div class="card mt-3">	 
						<div class="card-deck">
						<?php  

							$result = get_all_product();

							while($row = mysqli_fetch_array($result)):
						
							?>
							<div class="card">
								<div class="card-body">
									<img src="includes/<?php   echo $row["product_image"]; ?>" class="card-img">		
									<h4 class="card-title"> <?php   echo $row["product_title"]; ?> </h4>
									<p class="card-text"><?php   echo $row["product_description"]; ?> </p>
									<p> <span class="badge badge-success"> <?php   echo $row["old_price"]; ?> </span> &nbsp  <span class="text-danger"><strike>  <?php   echo $row["product_price"]; ?> </strike></span></p>
			  						<a href="product.php?id=<?php   echo $row["product_id"]; ?>" class="btn btn-primary">Details</a>
								</div>
							</div>
							<?php   endwhile ; ?>
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