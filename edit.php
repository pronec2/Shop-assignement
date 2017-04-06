
<?php

function renderForm($id, $product, $code, $price, $error)
 {
?>
 <html>
 <head>
 	<title>Edit Record</title>
 </head>
 <body>

 <form action="" method="post">
 <input type="hidden" name="id" value="<?php echo $id; ?>"/>
 <div>

 <p><strong>ID:</strong> <?php echo $id; ?></p>
 <strong>Product: </strong> <input type="text" name="product" value="<?php echo $product; ?>" /><br/>
 <strong>Code:</strong> <input type="text" name="code" value="<?php echo $code; ?>" /><br/>
 <strong>Price </strong> <input type="text" name="price" value="<?php echo $price; ?>" /><br/>

 <input type="submit" name="submit" value="Submit">
 </div>
 </form>

 </body>
 </html>

<?php
 }

	// connect to the database
	mysql_connect('localhost', 'root', 'db2u0ycq');

	mysql_select_db('test_db');

	//check if form is submitted
	if (isset($_POST['submit']))
 	{ //open1

 	  if (is_numeric($_POST['id']))
 	  { //open2

 		// get form data,
 		$id = $_POST['id'];
 		$product = $_POST['product'];
 		$code = $_POST['code'];
		$price = $_POST['price'];


 	    if ($product == '' || $code == '' || $price == '')
 	    { //open3

 		    $error = 'ERROR: Please fill in all required fields!';

 		    //display form
 		    renderForm($id, $product,$price, $code,  $error);
 	    }
 	    else
 	    {
 		    // save the data to the database
		    mysql_query("UPDATE onlineShop2 SET product='$product', price='$price',code='$code'  WHERE id='$id'");

 		    // go back to Table1.php
 		    header("Location: admin.php");
	    } //close3

	  }
 	  else
 	  {
 		  echo 'Error!';
 	  } //close 2
	}
 	else
	{
		if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
 		{ //open1.1

 			$id = $_GET['id'];
 			$result = mysql_query("SELECT * FROM onlineShop2 WHERE id=$id");
 			$row = mysql_fetch_array($result);

 		  // check that the id matches up with a row in the databse
 		  if($row)
 		  { //open1.2

 			$product = $row['product'];
 			$code = $row['code'];
			$price = $row['price'];

 			// show form
 			renderForm($id, $product, $code, $price, '');
 		  }
 		  else
 		  {
 			echo "No results!";
 		  } //close1.2

 		}
 		else
 		{
			// if the 'id' isn't valid, display an error
 			echo 'Error!';
 		} //close1.1

 	} //close1
?>
