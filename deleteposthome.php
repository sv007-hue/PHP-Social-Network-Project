<?php
include("dbcon.php");
if(isset($_GET['id']))
{
	$messages_id=$_GET['id'];
	//$result = mysql_query("SELECT * FROM friendlist WHERE friends_id = $member_id");
	mysql_query("DELETE FROM message WHERE messages_id='$messages_id'");
	header("location:lol.php");
	exit();
}
?>