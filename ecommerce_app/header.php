<?php


include 'includes/config.php';
include 'includes/functions.php';





?>

<!DOCTYPE html>
<html>
<head>

	<title> E-commerce APP </title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/united/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="includes/css/style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
	
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
			<a href="index.php" class="btn btn-link"> <h1> Imene's shop </h1>  </a>
		</div>
		<div class="col-md-8">
			<div class="float-right mt-4">
				<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
			  <button type="button" class="btn btn-light"> <i class="fa fa-user"></i> MY Account</button>
			 <div class="btn-group" role="group">
			    <button id="btnGroupDrop4" type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
				<?php if(isset($_SESSION['logged']) && $_SESSION['logged'] == true): ?>
			    <div class="dropdown-menu" aria-labelledby="btnGroupDrop4">
			      <a class="dropdown-item" href="register.php"> <i class="fa fa-user"></i>  <?php echo $_SESSION['email'] ; ?></a>
			      <a class="dropdown-item" href="logout.php"> <i class="fa fa-sign-out"></i> Logout </a>
				</div>
				<?php else : ?>
				<div class="dropdown-menu" aria-labelledby="btnGroupDrop4">
			      <a class="dropdown-item" href="register.php"> <i class="fa fa-user-plus"></i>  Register</a>
			      <a class="dropdown-item" href="login.php"> <i class="fa fa-sign-in"></i>  Login</a>
				</div>
				<?php endif; ?>
  			</div>
			
			</div>

			<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
			  <button type="button" class="btn btn-light"> <i class="fa fa-shopping-cart"></i> MY Cart</button>
			 <div class="btn-group" role="group">
			    <button id="btnGroupDrop4" type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
			    <div class="dropdown-menu" aria-labelledby="btnGroupDrop4">
			      <a class="dropdown-item" href="#">0 Product </a>
 			    </div>
  			</div>
			</div>
			</div>
		</div>
	</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">

    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
  <button type="button" class="btn btn-primary">Categories</button>
  <div class="btn-group" role="group">
    <button id="btnGroupDrop3" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop3" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
	
	 <?php  
	 
	 	$result = get_categories();

		while($row = mysqli_fetch_array($result)):

	?>
	  <a class="dropdown-item" href="#"><?php   echo $row["cat_title"]; ?></a>
     <?php endwhile ; ?>
    </div>
  </div>
</div>
      <li class="nav-item">
        <a class="nav-link" href="product.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
      <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0"  type="submit">Search</button>
    </form>
  </div>
</nav>