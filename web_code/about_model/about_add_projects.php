<?php

require_once 'sql_config.php';

$years = $_POST[years];
$name = $_POST[name];
$money = $_POST[money];
$government = $_POST[government];
echo "<script>alert('新增:$name 成功')</script>";
echo "$subject";
$sql = "INSERT INTO `projects`( `years`, `name`, `money`, `government`) VALUES ('$years','$name','$money','$government')";
mysqli_query($con,$sql) ;

header( "location:../about.php");  //回index.php

?>

