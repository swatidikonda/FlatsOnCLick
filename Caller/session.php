<?php
if(!empty($_SESSION['idcl']))
{
$session_id=$_SESSION['idcl'];
include $_SERVER['DOCUMENT_ROOT']."/caller/userClass.php";
$userClass = new userClass();
}
if(empty($session_id))
{
$url='index.php';
header("Location: $url");
}
?>