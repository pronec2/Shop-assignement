<html>
<head>
<meta http-equiv="Refresh" content="5;url=admin.php"
</head>

<body>
<p> This is the delete page. Please wait while your selection is being deleted: <a href="table1.php"></p>

<?php




	mysql_connect('localhost', 'root', 'db2u0ycq');

	//select our database
	mysql_select_db('test_db');

 	// check id and if its its valid
 	if (isset($_GET['id']) && is_numeric($_GET['id']))
 	{
 		// get id value
 		$id = $_GET['id'];

 		// delete the entry
 		$result = mysql_query("DELETE FROM onlineShop2 WHERE id=$id");

 	}
 	else
 	{
 		print("There was a problem buddy");
 	}

?>
