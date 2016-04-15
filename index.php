<?php
session_start();
if (isset($_POST["lang"]))
{
	$_SESSION["lang"]=	$_POST["lang"];
	header("location: ". $_SERVER['REQUEST_URI']);
	exit();
}

include_once "trans.php";
include_once "functions.php";
include_once "app_list.php";
if(isset($_GET['module']))
{
	$app = $_GET['module'];
}
else
{
	$app = 'homepage';
}

include_once "header.php";


if($app != 'homepage')
{
	include_once "content.php";
	include_once "sidebar.php";
}
else
{
	include_once "homepage.php";
}
include_once "footer.php";

?>