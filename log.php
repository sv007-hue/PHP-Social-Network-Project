<html>
<head>
</head>
<body>
<form method="post" >

		 <?PHP 
  		$link = mysql_connect('localhost','root',"");
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db(facebook);
	if(!$db) {
		die("Unable to select database");
	}
 
			if (isset($_POST['btnlog'])) 
			{ 			
				$user_name = $_POST['login'];			
				$user_pass = $_POST['password'];	
				
					
					// sending query		
				$result = mysql_query("SELECT * FROM members WHERE UserName='$user_name' AND Password='".md5($_POST['password'])."'");
				
					
						if (!$result) 
						{
						die("Query to show fields from table failed");
						}		
						If ($numberOfRows == 0) 
							{
							echo " <font color= 'red'>Invalid username and password!</font>";
						
							} 
				 	else if ($numberOfRows > 0) 
							{
							session_register('is');
							$_SESSION['is']['btnlog']    = TRUE;
							$_SESSION['is']['user_name'] = $_POST['login'];
							$session = "1";	
					echo"success";
							//header("location:edit.php");				 	
					}
				}
		?>


</form>
</body>
</html>
