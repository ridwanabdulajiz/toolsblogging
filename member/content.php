<?php
error_reporting(0);
if(isset($_GET['page'])){
	$page=$_GET['page'];	
	$file="$page";
	
	if (!file_exists($file)){
		include ("awal.html");
	}else{
		include ("$page");
	}
}else{
	include ("awal.html");
}
?>