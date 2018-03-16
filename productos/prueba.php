
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>E-SHOP HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="../css/productos/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="../css/productos/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="../css/productos/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="../css/productos/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- jQuery Plugins -->
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/slick.min.js"></script>
	<script src="../js/nouislider.min.js"></script>
	<script src="../js/jquery.zoom.min.js"></script>
    <script src="../js/main.js"></script>
    
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.php">Company name</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="logout.php">Sign out</a>
        </li>
      </ul>
    </nav>


<!--  Product Details -->
<div class="product product-details clearfix">
					<div class="col-md-6">
						<div id="product-main-view">
						<div data-slick-index="0" aria-hidden="false" style="width: 555; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1; overflow: hidden;" tabindex="0">
								<?php 
									include('cosa.php');
									echo $photo;
								?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="product-body">
                            <h2 class="product-name">
                                <?php
                                include('cosa.php');
                                echo $name;
                                ?>
                            </h2>
                            <h3 class="product-price">
                                <?php
                                include('cosa.php');
                                echo "$prize €";
                                ?>
                            </h3>
                            <!--<del class="product-old-price">$45.00</del>-->
							
							<p><strong>Disponibilidad:</strong> En Stock</p>
							<p><strong>Brand:</strong> E-SHOP</p>
							<p>
                                <?php
                                include('cosa.php');
                                echo $descrip;
                                ?>
                            </p>
							
							<div class="product-btns">
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="product-tab">
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Descripción</a></li>
								<li><a data-toggle="tab" href="#tab1">Detalles</a></li>
							</ul>
							<div class="tab-content">
								<div id="tab1" class="tab-pane fade in active">
									<p>
                                        <?php
                                        include('cosa.php');
                                        echo $descrip;
                                        ?>
                                    </p>
								</div>
								
							</div>
						</div>
					</div>

				</div>
                <!-- /Product Details -->

    </head>
    </body>