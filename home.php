<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';

 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: index.php");
  exit;
 }
 // select loggedin users detail
 $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
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
<title>Welcome </title>

<link href="/stylesheets/bootstrap.min.css" rel="stylesheet">
<link href="/stylesheets/business-casual.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

</head>
<body>


 <div id="wrapper">
   <div class="container">


        <div class="row">
        <div class="col-lg-12">
        <h1> Welcome to our Coffee shop </h1>

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


                      echo "</tr>";


                    }


                 ?>


          <p><a href="logout.php"><input type="submit" name="Insert" value="logout"></a></p>






        </div>
        </div>

    </div>

    </div>



</body>
</html>
<?php ob_end_flush(); ?>
