<?php
$con = mysqli_connect('localhost','root','');
if(!$con || !mysqli_select_db($con, 'bank management system'))
{	$error='Cant connect';
	die($error);
}
?>
