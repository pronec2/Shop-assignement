<?php

 // creates the new record form
 function renderForm($first, $last, $error)
 {}
?>

 <html>
 <head>
 	<title>New Record</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="business-casual.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

 </head>
 <body>

 <form action="" method="post">
 <div>

 <strong>Product: </strong> <input type="text" name="product" value="<?php $product; ?>" /><br/>
 <strong>Code: </strong> <input type="text" name="code" value="<?php $code; ?>" /><br/>
 <strong>Price: </strong> <input type="text" name="price" value="<?php $price; ?>" /><br/>

 <input type="submit" name="submit" value="Submit">
 </div>
 </form>
 <?php



  	// connect to the database
  	mysql_connect('localhost', 'root', 'db2u0ycq');

 	mysql_select_db('test_db');

 	 // check if the form has been submitted
  	if (isset($_POST['submit']))
  	{
  		// get form data
  		$product = $_POST['product'];
  		$code = $_POST['code'];
 		$price = $_POST['price'];

  	  // check to make sure both fields are entered
  	  if ($product == '' || $code == '' || $price == '')
  	  {

 		 // if either field is blank, display the form again
  		renderForm($product, $code, $price, $error);
  	  }
  	  else
  	  {
  		// save the data to the database
  		mysql_query("INSERT INTO onlineShop2 SET product='$product', code='$code', price='$price'");

  		// redirect back to table1
  		header("Location: index.php");
  	  }
  	}
  	else
  	{
  		renderForm('','','');
  	}
    ?>
 </body>
 </html>
