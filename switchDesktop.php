<?php session_start(); 
$_SESSION['mobile'] = 0;

if (isset($_GET['url'])) {
	$url = urlencode($_GET['url']);
	$url = str_replace('url=', '', $_GET['url']);
	header('location:'.$url);
}
?>