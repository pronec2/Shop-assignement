<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';

 // if session is not set this will redirect to login page
 if( !isset($_SESSION['admin']) ) {
  header("Location: index.php");
  exit;
 }
 // select loggedin users detail
 $res=mysql_query("SELECT * FROM admin WHERE userId=".$_SESSION['admin']);
 $userRow=mysql_fetch_array($res);
 //code from old index
 mysql_connect('localhost', 'root', 'db2u0ycq');

 mysql_select_db('test_db');

 $sql="SELECT * FROM onlineshop2";
 $records=mysql_query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome boss, Stocks and stock levels</title>

<link href="/stylesheets/bootstrap.min.css" rel="stylesheet">
<link href="/stylesheets/business-casual.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

</head>
<body>

<div class="tagline-upper text-center text-heading text-shadow text-white mt-4 hidden-md-down">Welcome, to the backend of the website </div>

<!-- Navigation bar for the Boss Differs from that of the customer !-->
  <nav class="navbar navbar-toggleable-md navbar-light navbar-custom bg-faded py-lg-4">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container">
          <a class="navbar-brand text-uppercase text-expanded font-weight-bold hidden-lg-up" href="index.php">Online Shop</a>


          <div class="collapse navbar-collapse" id="navbarExample">
              <ul class="navbar-nav mx-auto">
                  <li class="nav-item active px-lg-4">
                      <a class="nav-link text-uppercase text-expanded" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item px-lg-4">
                      <a class="nav-link text-uppercase text-expanded" href="logout.php">Logout</a>
                  </li>
                  <li class="nav-item px-lg-4">
                      <a class="nav-link text-uppercase text-expanded" href="add_staff.php">Add Staff</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>


 <div id="wrapper">
   <div class="container">


        <div class="row">
        <div class="col-lg-12">
          <div class="bg-faded p-4 my-4">
                          <hr class="divider">
                      <h2 class="text-center text-lg text-uppercase my-0"><strong>Welcome</strong></h2>
                      <hr class="divider">
                      <div class="row">

                          <div class="col-lg-6">

                                        <!-- Pulling user info from database personalised feel !-->
                                        <p1> Welcome: <?php echo $userRow['userEmail']; ?></p1>

                                        <table width="600" border="1" cellpadding="1" cellspacing="1">
                                          <tr>
                                            <th>ID</th>
                                            <th>Product</th>
                                            <th>Code</th>
                                            <th>Price</th>
                                              <tr>
                        <?php
                                                    while($onlineShop2=mysql_fetch_assoc($records))
                                                    {
                                                      echo "<tr>";
                                                      echo "<td>".$onlineShop2['id']."</td>";
                                                      echo "<td>".$onlineShop2['product']."</td>";
                                                      echo "<td>".$onlineShop2['code']."</td>";
                                                      echo "<td>".$onlineShop2['price']."</td>";
                                                      echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
                                                      echo '<td><a href="edit.php?id=' . $onlineShop2['id']. '"><input type ="Submit" name="Edit" value="Edit"></a></td>';
                                                      echo '<td><a href="delete.php?id=' .$onlineShop2['id']. '"><input type ="Submit" name="Delete" value="Delete"></a></td>';

                                                      echo "</tr>";


                                                    }


                            ?>

              </div>
            </div>
          </div>
        </hr>
      </hr>
        </div>
      </div>
    </div>




        <p><a href="add.php"><input type="submit" name="Insert" value="Insert"></a></p>
          <p><a href="logout.php"><input type="submit" name="Insert" value="logout"></a></p>







        </div>
      </div>







</body>
</html>
<?php ob_end_flush(); ?>
