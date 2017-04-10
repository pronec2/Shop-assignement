<?php
mysql_connect('localhost', 'root', 'db2u0ycq');

mysql_select_db('test_db');

$sql="SELECT * FROM onlineshop2";
$records=mysql_query($sql);

 ?>
 <html>
		<head>
			<title>tits</title>
      <link href="bootstrap.min.css" rel="stylesheet">
      <link href="business-casual.css" rel="stylesheet">

      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

		</head>
			<body>
        <div class="tagline-upper text-center text-heading text-shadow text-white mt-4 hidden-md-down">Online Shop </div>

<!-- Main Menu signin, home page php basket !-->
<!-- Navigation -->
    <nav class="navbar navbar-toggleable-md navbar-light navbar-custom bg-faded py-lg-4">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <a class="navbar-brand text-uppercase text-expanded font-weight-bold hidden-lg-up" href="#">Start Bootstrap</a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="products.php">Products</a>
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
                <h2 class="text-center text-lg text-uppercase my-0"><strong>Welcome</strong></h2>
                <hr class="divider">
                <div class="row">

                    <div class="col-lg-6">

                      <table width="600" border="1" cellpadding="1" cellspacing="1">
              					<tr>
              						<th>ID</th>
              						<th>Product</th>
              						<th>Price</th>
              						<th>Code</th>
                          <th>Catagories</th>
              							<tr>
              								<?php
              										while($onlineShop2=mysql_fetch_assoc($records))
              										{
              											echo "<tr>";
              											echo "<td>".$onlineShop2['id']."</td>";
              											echo "<td>".$onlineShop2['product']."</td>";
              											echo "<td>".$onlineShop2['code']."</td>";
              											echo "<td>".$onlineShop2['price']."</td>";
                                    echo "<td>".$onlineShop2['catagory']."</td>";

              											echo "</tr>";


              										}


              								 ?>
                    </div>
                </div>
            </div>









			</body>
</html>
