<?php
mysql_connect('localhost', 'root', 'db2u0ycq');

mysql_select_db('test_db');

$sql="SELECT * FROM onlineshop2";
$records=mysql_query($sql);

 ?>
 <html>
		<head>
			<title>Patricia's Online Shop</title>
      <link href="bootstrap.min.css" rel="stylesheet">
      <link href="business-casual.css" rel="stylesheet">

      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

		</head>
			<body>
        <div class="tagline-upper text-center text-heading text-shadow text-white mt-4 hidden-md-down">Online Shop </div>
        <br>
  <!-- <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-4 hidden-md-down">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div> No need for sub header, push product range up higher -->

<!-- Main Menu signin, home page php basket !-->
<!-- Navigation -->
    <nav class="navbar navbar-toggleable-md navbar-light navbar-custom bg-faded py-lg-4">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <a class="navbar-brand text-uppercase text-expanded font-weight-bold hidden-lg-up" href="index.php">Online Shop</a>
            <a class="navbar-brand text-uppercase text-expanded font-weight-bold hidden-lg-up" href="products.php"> All Products</a>
            <a class="navbar-brand text-uppercase text-expanded font-weight-bold hidden-lg-up" href="signin.php">Sign In</a>
            <a class="navbar-brand text-uppercase text-expanded font-weight-bold hidden-lg-up" href="register.php">Register</a>

            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="products.php">All Products</a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="signin.php">Sign In</a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="register.php">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="bg-faded p-4 my-4">
                <hr class="divider">
                <h2 class="text-center text-lg text-uppercase my-0"><strong>Our Product Range</strong></h2>
                <hr class="divider">
                <div class="row">

              <!--  Display effects code still good,
                  <div class="col-lg-6">
                      <p>You  may search either by first or last name</p>
                        <form  method="post" action="search.php?go"  id="searchform">
     	                    <input  type="text" name="name">
                          <input  type="submit" name="submit" value="Search">
                        </form>

                    </div>
                </div>
                !-->
                <!-- Shop Catagories !-->
                <hr class="divider">

                <div class="row">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="card h-100">
                            <img class="card-img-top img-fluid" src="/images/Barista.jpg" alt="Person making coffee the traditionl way. Click here for our selection of drink beverages">
                            <div class="card-block text-center">
                                <h4 class="card-title m-0">Drinks <small class="text-muted">All things liquid</small></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="card h-100">
                            <img class="card-img-top img-fluid" src="/images/Food.jpg" alt="">
                            <div class="card-block text-center">
                                <h4 class="card-title m-0">Food <small class="text-muted">All things solid</small></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img class="card-img-top img-fluid" src="/images/Sports.jpg" alt="">
                            <div class="card-block text-center">
                                <h4 class="card-title m-0">Sport <small class="text-muted">All things active</small></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>




                    <footer class="bg-faded text-center py-5">
                            <div class="container">
                                <p class="m-0">Copyright &copy; Patricia's Online Shop 2017</p>
                            </div>
                        </footer>






			</body>
</html>
