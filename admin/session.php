<?php
if(!empty($_SESSION['id']))
{
$session_id=$_SESSION['id'];
include $_SERVER['DOCUMENT_ROOT']."/admin/userClass.php";
$userClass = new userClass();
}
if(empty($session_id))
{
$url='index.php';
header("Location: $url");
}
?>