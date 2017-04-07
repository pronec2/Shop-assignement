<?php

 // creates the new record form
 function renderForm($first, $last, $error)
 {}
?>

 <html>
 <head>
 	<title>New Record</title>
    <link href="/stylesheets/bootstrap.min.css" rel="stylesheet">
    <link href="/stylesheets/business-casual.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

 </head>
 <body>

 <form action="" method="post">
 <div>

 <
 <strong>User Name:<strong> <input type="text" name="userName" value="<?php $userName; ?>" /><br/>
 <strong>User Email:</strong> <input type="text" name="userEmail" value="<?php $userEmail; ?>" /><br/>
 <strong>Password: </strong><input type="text" name="userPass" value="<?php $userPass; ?>" /><br/>




   <!-- <input type="text" name="catagory" value="<//?php $catagory; ?>" />

     <br/> !-->

 <input type="submit" name="submit" value="Submit">
 </div>
 </form>
 <?php



  	// connect to the database
  	mysql_connect('localhost', 'root', 'db2u0ycq');

 	mysql_select_db('dbtest');

 	 // check if the form has been submitted
  	if (isset($_POST['submit']))
  	{
  		// get form data
  		$userName = $_POST['userName'];
  		$userEmail = $_POST['userEmail'];
 		  $userPass = $_POST['userPass'];


  	  // check to make sure both fields are entered
  	  if ($userName == '' || $userEmail == '' || $userPass == ''  )
  	  {

 		 // if either field is blank, display the form again
  		renderForm($userName, $userEmail, $userPass, $error);
  	  }
  	  else
  	  {
  		// save the data to the database
  		mysql_query("INSERT INTO admin SET userName='$userName', userEmail='$userEmail', userPass='$userPass'");

  		// redirect back to table1
  		header("Location: admin.php");
  	  }
  	}
  	else
  	{
  		renderForm('','','');
  	}
    ?>
 </body>
 </html>
