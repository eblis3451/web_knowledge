<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="generator" content="RocketCake">
	<title></title>
	<link rel="stylesheet" type="text/css" href="index_html.css">
</head>
<body>
  <div class="textstyle1">
    <div id="container_62839c11"><div class="textstyle2"><div id="container_203a3bda"><div id="container_203a3bda_padding" ><div class="textstyle1"><span class="textstyle3"><br/></span></div>
    <div class="textstyle2"><div id="container_536d4b65"><div id="container_536d4b65_padding" ><div class="textstyle2">  <span class="textstyle4">Blockchain Technology Lab</span>
    </div>
  </div></div></div>
  <div style="clear:both"></div></div></div><span class="textstyle5"><br/></span><div id="container_6bb43660"><div class="textstyle1">  <a href="" style="text-decoration:none"><div id="button_61d52a47">
    <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle1">
      <span class="textstyle6">HOME</span>
    </div>
    <div class="textstyle2">
    </div>
  </div></div>
</div></a>
<a href="advisor.php" style="text-decoration:none"><div id="button_39fbfba2">
  <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle2">
  </div>
  <div class="textstyle1">
    <span class="textstyle6">Advisor</span>
  </div>
</div></div>
</div></a>
<a href="about.php" style="text-decoration:none"><div id="button_73614d28">
  <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle2">
  </div>
  <div class="textstyle1">
    <span class="textstyle6">About Lab</span>
  </div>
  <div class="textstyle2">
  </div>
</div></div>
</div></a>
<a href="thesis.php" style="text-decoration:none"><div id="button_8eb390d">
  <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle2">
  </div>
  <div class="textstyle1">
    <span class="textstyle6">Thesis</span>
  </div>
</div></div>
</div></a>
<a href="members.php" style="text-decoration:none"><div id="button_193f8526">
  <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle2">
  </div>
  <div class="textstyle1">
    <span class="textstyle6">Members</span>
  </div>
</div></div>
</div></a>
</div>
</div></div>
<div class="textstyle1"><div id="container_5cfb26f9"><div id="container_5cfb26f9_padding" ><div class="textstyle1"><div id="container_5ea16a8f"><div id="container_5ea16a8f_padding" ><div class="textstyle1">  <span class="textstyle7">Welcome to Blockchain Technology Lab!</span>
</div>
</div></div><div id="container_2ab55714"><div id="container_2ab55714_padding" ><div class="textstyle2">



<!--lab簡介-->
<!--資料庫相關-->
<?php
require_once 'sql_config.php';

// 取得自介資料
$sql ="SELECT `Introduction` FROM `home_index` WHERE `id`= 1";
$result = mysqli_query($con, $sql);


// --- 顯示資料 --- //
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    echo "<span class=\"textstyle8\">$row[0]</span>";
    $introduction = $row[0];//自介資料
}?>




<!--顯示與隱藏要修改的介紹文-->
<button type="button" onclick="showtext()">修改</button>;
<script>
function showtext()
{
  document.getElementById("text").style="display:block" 
  document.getElementById("sumbittext").style="display:block" 
} 
</script>
<!--介紹文與提交送出-->  
<form action="index.php" method="post" >
  <textarea id="text" rows=10% cols=100%   style="display:none" name="textbox"  ><?php echo "$introduction"?></textarea><br>
  <input type="submit" id="sumbittext" style="display:none">';
</form>


<!--修改介紹資料的sql(model)-->
<?php
error_reporting(0); 
if(($_POST['textbox']!= null)){
  $textbox = $_POST['textbox'];
  $sql ="UPDATE `home_index` SET `Introduction`= '$textbox'  WHERE `id`='1'";
  $result = mysqli_query($con, $sql);
  header("Location: index.php");
}
?>



<br><br/>

<!--科目顯示-->
<br><br/><span class="textstyle9">輸入專業科目名稱<br/></span>
<!--科目刪除-->
<form action="index_model/index_del_subject.php" method="get" >
<?php
  $sql="SELECT `id` ,`subject`FROM `home_index`";
  $result = mysqli_query($con, $sql);
  while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    $delet_id=$row[0];
    $delet_subject=$row[1];
    echo "";
    echo "<span class=\"textstyle9\">◇$row[1]</span>";
    echo "<input value='$delet_subject' id =$delet_id  style='display:none'  name = $delet_id  >";
    echo"<a href='index_model/index_del_subject.php?id= $delet_id'>刪除</a></br>";
  }
?>
</form>


<!--新增科目的表單-->
<form action="index_model/index_add_subject.php" method="get" >
  <input id="subject" name="subjectbox"  >
  <input type="submit" value="新增">
</form>






</div></div></div></div>
<div class="textstyle2"><span class="textstyle5"><br/><br/><br/><br/></span></div>
<div class="textstyle1"><div id="slide_909dc1d">
	<script type="text/javascript" src="rc_images/wsp_slideshow.js"></script>
	<script type="text/javascript">
		var js_slide_909dc1d= new wsp_slideshow('slide_909dc1d',['rc_images/2019041110570221898.jpeg', 'rc_images/2019041110570879336.jpeg', 'rc_images/img_0314_608x405.jpg'], 'fade', 3000, 250, 'width', null);
	</script>
</div></div>
<div class="textstyle2"><span class="textstyle5"><br/><br/></span></div>
<div class="textstyle1"><div id="container_47cbe72f"><div id="container_47cbe72f_padding" ><div class="textstyle1"><span class="textstyle10">More info<br/>E-mail : 	yehloyao@ncu.edu.tw</span></div>
<div class="textstyle2"><span class="textstyle10"><br/><br/><br/></span></div>
</div></div><div id="container_65f35e80"><div id="container_65f35e80_padding" ></div></div></div>
<div class="textstyle2"><span class="textstyle5"><br/><br/><br/></span></div>
<div style="clear:both"></div></div></div></div>
</div>  </div>
</body>
</html>