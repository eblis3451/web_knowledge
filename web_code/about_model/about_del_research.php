<?php
require_once 'sql_config.php';

$id = $_GET[id];
echo "$id";
$sql = "DELETE FROM `research` WHERE `id`= '$id' "; 
mysqli_query($con,$sql) ;
header( "location:../about.php");  //回index.php
?>