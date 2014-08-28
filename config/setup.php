<?php
	// Setup File:

	#Database Connection Here...
	$dbc = mysqli_connect('localhost', 'dev', '0744697257Fcc', 'atomcms') OR die('Could not connect to the database: ' . mysqli_connect_error());
	
	#Constants: 
	DEFINE('D_TEMPLATE', 'templates');
	
	#Functions: 
	include('functions/data.php');
	include('functions/template.php');
	$site_title = 'AtomCMS 2.0';
	
	if(isset($_GET['page'])){
		$pageid = $_GET['page']; //Set $pageid to equal the value in the URL
	}else{
		$pageid = 1; //Set $pageid equal to 1 or Home Page
	}
	
	#Page Setup: 
	$page = data_page($dbc, $pageid);
		
?>