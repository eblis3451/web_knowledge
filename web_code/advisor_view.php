<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="generator" content="RocketCake">
	<title></title>
	<link rel="stylesheet" type="text/css" href="advisor_html.css">
</head>
<body>
<div class="textstyle1">
<div id="container_44cd065"><div class="textstyle2"><div id="container_1da27e3"><div id="container_1da27e3_padding" ><div class="textstyle1"><span class="textstyle3"><br/></span></div>
<div class="textstyle2"><div id="container_3e4c6bf"><div id="container_3e4c6bf_padding" ><div class="textstyle1">  <span class="textstyle4">Blockchain Technology Lab</span>
</div>
</div></div></div>
<div style="clear:both"></div></div></div><span class="textstyle5"><br/></span><div id="container_261211a2"><div class="textstyle1">  <a href="index_view.php" style="text-decoration:none"><div id="button_64589801">
    <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle1">
        <span class="textstyle6">HOME</span>
        </div>
      <div class="textstyle2">
        </div>
      </div></div>
    </div></a>
  <a href="advisor_view.php" style="text-decoration:none"><div id="button_33ab7473">
    <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle2">
        </div>
      <div class="textstyle1">
        <span class="textstyle6">Advisor</span>
        </div>
      </div></div>
    </div></a>
  <a href="about_view.php" style="text-decoration:none"><div id="button_9faa198">
    <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle2">
        </div>
      <div class="textstyle1">
        <span class="textstyle6">About Lab</span>
        </div>
      <div class="textstyle2">
        </div>
      </div></div>
    </div></a>
  <a href="thesis_view.php" style="text-decoration:none"><div id="button_18bafa13">
    <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle2">
        </div>
      <div class="textstyle1">
        <span class="textstyle6">Thesis</span>
        </div>
      </div></div>
    </div></a>
  <a href="members_view.php" style="text-decoration:none"><div id="button_12299969">
    <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle2">
        </div>
      <div class="textstyle1">
        <span class="textstyle6">Members</span>
        </div>
      </div></div>
    </div></a>
</div>
</div></div>
<div class="textstyle1"><div id="container_40cee31b"><div id="container_40cee31b_padding" ><div class="textstyle1"><div id="container_424bac86"><div id="container_424bac86_padding" ><div class="textstyle2"><span class="textstyle7"><br/></span><span class="textstyle8">Lo-Yao Yeh  Ph. D</span><span class="textstyle9"><br/>&#33865;&#32645;&#22575; &#21338;&#22763;</span></div>
</div></div><div id="container_11784358"><div id="container_11784358_padding" ><div class="textstyle2"><img src="rc_images/selfie.jpg" id="img_60459909" alt="" title="" />
</div>




<div class="textstyle1"><div id="container_373db2b9"><div id="container_373db2b9_padding" ><div class="textstyle2">






<!--"頭銜"部分---->
<?php
//連接資料庫
require_once 'sql_config.php';

// 取得"頭銜"sql
$sql ="SELECT `title` FROM `advisor` WHERE `id`= 1";
$result = mysqli_query($con, $sql);
// --- 顯示資料 --- //
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    echo "<span class=\"textstyle10\">";
    echo nl2br($row[0]);
    echo "</span><br/>";
    $title = $row[0];//頭銜資料
}?>






</span><span class="textstyle11">National Central University<br/></span></div>
</div></div></div>
<div style="clear:both"></div></div></div><div id="container_6c4cca11"><div id="container_6c4cca11_padding" ><div class="textstyle1"><div id="container_1e69e5c9"><div id="container_1e69e5c9_padding" ><div class="textstyle2"><span class="textstyle12">Biography</span></br>

<!--"自介文"部分---->
<?php
//連接資料庫
require_once 'sql_config.php';

// 取得"自介文"sql
$sql ="SELECT `biography` FROM `advisor` WHERE `id`= 1";
$result = mysqli_query($con, $sql);
// --- 顯示資料 --- //
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    echo "<span class=\"textstyle10\">";
    echo nl2br($row[0]);
    echo "</span><br/>";
    $title = $row[0];//頭銜資料
}?>






<br/><br/></span>  <a href="https://sites.google.com/site/yehloyao/home" style="text-decoration:none"><div id="button_594183a4">
    <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle2">
        </div>
      <div class="textstyle1">
        <span class="textstyle7">More about </span>
        </div>
      </div></div>
    </div></a>
</div>
<div style="clear:both"></div></div></div></div>
<div style="clear:both"></div></div></div><div id="container_a846825"><div id="container_a846825_padding" ><div class="textstyle2"><span class="textstyle14">Course Teaching<br/></span><div id="container_4b35f039"><div id="container_4b35f039_padding" ><div class="textstyle2">  

<!--"課程"部分---->
<?php
//連接資料庫
require_once 'sql_config.php';

// 取得"課程"sql
$sql ="SELECT `course` FROM `advisor` WHERE `id`= 1";
$result = mysqli_query($con, $sql);
// --- 顯示資料 --- //
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    echo "<span class=\"textstyle10\">";
    echo nl2br($row[0]);
    echo "</span><br/>";
    $course = $row[0];//"課程"資料
}?>







</div>
</div></div><span class="textstyle5"><br/></span><span class="textstyle14">Awards &amp; Honors</span><span class="textstyle15"><br/></span><div id="container_65bb95e9"><div id="container_65bb95e9_padding" ><div class="textstyle2">  <span class="textstyle10">

<!--"得獎"部分---->
<?php
//連接資料庫
require_once 'sql_config.php';

// 取得"得獎"sql
$sql ="SELECT `awards` FROM `advisor` WHERE `id`= 1";
$result = mysqli_query($con, $sql);
// --- 顯示資料 --- //
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    echo "<span class=\"textstyle10\">";
    echo nl2br($row[0]);
    echo "</span><br/>";
    $awards = $row[0];//"得獎"資料
}?>







</div>
</div></div></div>
<div style="clear:both"></div></div></div></div>
<div class="textstyle2"><span class="textstyle5"><br/><br/></span></div>
<div class="textstyle1"><div id="container_78250f0d"><div id="container_78250f0d_padding" ><div class="textstyle1"><span class="textstyle7">More info<br/>E-mail : 	yehloyao@ncu.edu.tw</span></div>
<div class="textstyle2"><span class="textstyle7"><br/><br/><br/></span></div>
</div></div><div id="container_76e667a9"><div id="container_76e667a9_padding" ></div></div></div>
<div class="textstyle2"><span class="textstyle5"><br/><br/><br/></span></div>
<div style="clear:both"></div></div></div></div>
</div>  </div>
</body>
</html>