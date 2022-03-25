<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="generator" content="RocketCake">
	<title></title>
	<link rel="stylesheet" type="text/css" href="members_html.css">
</head>
<body>
<div class="textstyle1">
<div id="container_23e78b93"><div class="textstyle2"><div id="container_21012002"><div id="container_21012002_padding" ><div class="textstyle1"><span class="textstyle3"><br/></span></div>
<div class="textstyle2"><div id="container_71ab4cf8"><div id="container_71ab4cf8_padding" ><div class="textstyle1">  <span class="textstyle4">Blockchain Technology Lab</span>
</div>
</div></div></div>
<div style="clear:both"></div></div></div><span class="textstyle5"><br/></span><div id="container_63ddebe7"><div class="textstyle1">  <a href="index.php" style="text-decoration:none"><div id="button_27960a10">
    <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle1">
        <span class="textstyle6">HOME</span>
        </div>
      <div class="textstyle2">
        </div>
      </div></div>
    </div></a>
  <a href="advisor.php" style="text-decoration:none"><div id="button_f857295">
    <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle2">
        </div>
      <div class="textstyle1">
        <span class="textstyle6">Advisor</span>
        </div>
      </div></div>
    </div></a>
  <a href="about.php" style="text-decoration:none"><div id="button_4855a03">
    <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle2">
        </div>
      <div class="textstyle1">
        <span class="textstyle6">About Lab</span>
        </div>
      <div class="textstyle2">
        </div>
      </div></div>
    </div></a>
  <a href="thesis.php" style="text-decoration:none"><div id="button_6c8a3dbe">
    <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle2">
        </div>
      <div class="textstyle1">
        <span class="textstyle6">Thesis</span>
        </div>
      </div></div>
    </div></a>
  <a href="members.php" style="text-decoration:none"><div id="button_4ab79b8">
    <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle2">
        </div>
      <div class="textstyle1">
        <span class="textstyle6">Members</span>
        </div>
      </div></div>
    </div></a>
</div>
</div></div>
<div class="textstyle1"><div id="container_72631e1e"><div id="container_72631e1e_padding" ><div class="textstyle1"><div id="container_6ef5689f"><div id="container_6ef5689f_padding" ><div class="textstyle2">  


<!--"博士生"表頭-->
  <span class="textstyle7">Ph.D student </span>
</div>
</div></div><div id="container_3fcb1e40"><div id="container_3fcb1e40_padding" ><div class="textstyle2"><table id="table_2a916278" cellpadding="3" cellspacing="1" >	<tr>
		<td width="21%" height="20px" style="vertical-align: top; overflow:hidden; background-color:#FF8000; ">  <div id="cell_4d8b545c">
    <div class="textstyle1">
      <span class="textstyle8">Name</span>
      </div>
    </div>
		</td>
		<td width="34%" height="20px" style="vertical-align: top; overflow:hidden; background-color:#FF8000; ">  <div id="cell_3647c505">
    <div class="textstyle1">
      <span class="textstyle8">contact details</span>
      </div>
    </div>
		</td>
		<td width="43%" height="20px" style="vertical-align: top; overflow:hidden; background-color:#FF8000; ">  <div id="cell_5fd15a29">
    <div class="textstyle1">
      <span class="textstyle8">Research Domain</span>
      </div>
    </div>
		</td>
	</tr>



  <!--顯示"博士生"表格-->
<?php
  require_once 'sql_config.php';

  $sql ="SELECT * FROM `members`";
  $result = mysqli_query($con, $sql);
  while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    if ($row[5]=='1'){
      echo "<tr>
        <td width='21%' height='81px' style='vertical-align: top; overflow:hidden; '>  <div id='cell_45286c53'>
        <div class='textstyle1'>";

        if($row[3]!='../rc_images/members/'){
          echo "<img src='$row[1]' id='img_5db600f5' alt='' title='' />";//如果沒有圖片不印出
        }
          echo "
          </div>
        </div>
        </td>

        <td width='34%' height='121px' rowspan='2' style='vertical-align: top; overflow:hidden; '>  <div id='cell_26814feb'>
        <div class='textstyle1'>
          <span class='textstyle8'>$row[3]</span>
          </div>
        </div>
        </td>

        <td width='43%' height='121px' rowspan='2' style='vertical-align: top; overflow:hidden; '>  <div id='cell_30618bd0'>
        <div class='textstyle2'>
          <span class='textstyle8'>";
          echo nl2br($row[4]);
          echo "
          </span></div>
        </div>
        </td>
      </tr>
      <tr>
        <td width='21%' height='31px' style='vertical-align: top; overflow:hidden; '>  <div id='cell_7b786532'>
        <div class='textstyle1'>
          <span class='textstyle8'>$row[2]</span>";
      //刪除鍵
      $delet_id=$row[0];
      echo "<form action='about_model/members_del.php' method='get' >";
      echo"<a href='members_model/members_del.php?id= $delet_id'>刪除</a></br></form>";

       echo "</div>
        </div>
        </td>
    </tr>";

      }
    }
?>
</table></div>


<!--顯示與隱藏新增"博士生"-->
<button type="button" onclick="showtext1()">新增博士生資訊</button>;
<script>
function showtext1()
{
  document.getElementById("file").style="display:block"
  document.getElementById("text1").style="display:block" 
  document.getElementById("text2").style="display:block" 
  document.getElementById("text3").style="display:block" 
  document.getElementById("submit").style="display:block"  

} 
</script>
<!--新增"博士生"資料-->
<form action="members_model/members_add.php" method="post" enctype="multipart/form-data" onSubmit="return InputCheck(this)">
    <input type="text" id="text1"  name="name" style="display:none" placeholder="請填入名字">
    <input type="text" id="text2"  name="contact" style="display:none" placeholder="請填入聯絡方式">
    <textarea          id="text3" name="field" rows=10% cols=100%   style="display:none"   placeholder="請填入內容"></textarea>
    <input type="file" id="file"  name="file" id="file" style="display:none">
    <input type="text"  name="identity" style="display:none"  value = '1'>
    <button type="submit" id="submit" style="display:none">新增</button> 
</form>



<!--"研究生"表頭-->
<div style="clear:both"></div></div></div><div id="container_256d8120"><div id="container_256d8120_padding" ><div class="textstyle2">  <span class="textstyle7">Master students</span>
</div>
</div></div><div id="container_6bdac23a"><div id="container_6bdac23a_padding" ><div class="textstyle2"><table id="table_50e330bf" cellpadding="3" cellspacing="1" >	
<tr>
		<td width="21%" height="20px" style="vertical-align: top; overflow:hidden; background-color:#FF8000; ">  <div id="cell_51020aee">
    <div class="textstyle1">
      <span class="textstyle8">Name</span>
      </div>
    </div>
		</td>
		<td width="34%" height="20px" style="vertical-align: top; overflow:hidden; background-color:#FF8000; ">  <div id="cell_38b3bd4a">
    <div class="textstyle1">
      <span class="textstyle8">contact details</span>
      </div>
    </div>
		</td>
		<td width="43%" height="20px" style="vertical-align: top; overflow:hidden; background-color:#FF8000; ">  <div id="cell_36c3f106">
    <div class="textstyle1">
      <span class="textstyle8">Research Domain</span>
      </div>
    </div>
		</td>
	</tr>
 <!--顯示"研究生"表格-->
<?php
  require_once 'sql_config.php';

  $sql ="SELECT * FROM `members`";
  $result = mysqli_query($con, $sql);
  while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    if ($row[5]=='2'){
      echo "<tr>
        <td width='21%' height='81px' style='vertical-align: top; overflow:hidden; '>  <div id='cell_45286c53'>
        <div class='textstyle1'>";

        if($row[3]!='../rc_images/members/'){
          echo "<img src='$row[1]' id='img_5db600f5' alt='' title='' />";//如果沒有圖片不印出
        }
          echo "
          </div>
        </div>
        </td>

        <td width='34%' height='121px' rowspan='2' style='vertical-align: top; overflow:hidden; '>  <div id='cell_26814feb'>
        <div class='textstyle1'>
          <span class='textstyle8'>$row[3]</span>
          </div>
        </div>
        </td>

        <td width='43%' height='121px' rowspan='2' style='vertical-align: top; overflow:hidden; '>  <div id='cell_30618bd0'>
        <div class='textstyle2'>
          <span class='textstyle8'>";
          echo nl2br($row[4]);
          echo "
          </span></div>
        </div>
        </td>
      </tr>
      <tr>
        <td width='21%' height='31px' style='vertical-align: top; overflow:hidden; '>  <div id='cell_7b786532'>
        <div class='textstyle1'>
          <span class='textstyle8'>$row[2]</span>";
      //刪除鍵
      $delet_id=$row[0];
      echo "<form action='about_model/members_del.php' method='get' >";
      echo"<a href='members_model/members_del.php?id= $delet_id'>刪除</a></br></form>";

       echo "</div>
        </div>
        </td>
    </tr>";

      }
    }
?>
</table></div>
<!--顯示與隱藏新增"研究生"-->
<button type="button" onclick="showtext2()">新增研究生資訊</button>;
<script>
function showtext2()
{
  document.getElementById("file1").style="display:block"
  document.getElementById("text4").style="display:block" 
  document.getElementById("text5").style="display:block" 
  document.getElementById("text6").style="display:block" 
  document.getElementById("submit1").style="display:block"  

} 
</script>
<!--新增"研究生"資料-->
<form action="members_model/members_add.php" method="post" enctype="multipart/form-data" onSubmit="return InputCheck(this)">
    <input type="text" id="text4"  name="name" style="display:none" placeholder="請填入名字">
    <input type="text" id="text5"  name="contact" style="display:none" placeholder="請填入聯絡方式">
    <textarea          id="text6" name="field" rows=10% cols=100%   style="display:none"   placeholder="請填入內容"></textarea>
    <input type="file" id="file1"  name="file" id="file" style="display:none">
    <input type="text"  name="identity" style="display:none"  value = '2'>
    <button type="submit" id="submit1" style="display:none">新增</button> 
</form>


<div style="clear:both"></div></div></div></div>
<div class="textstyle2"><span class="textstyle5"><br/><br/></span></div>
<div class="textstyle1"><div id="container_3f964b56"><div id="container_3f964b56_padding" ><div class="textstyle1"><span class="textstyle9">More info<br/>E-mail : 	yehloyao@ncu.edu.tw</span></div>
<div class="textstyle2"><span class="textstyle9"><br/><br/><br/></span></div>
</div></div><div id="container_1c4ecbc4"><div id="container_1c4ecbc4_padding" ></div></div></div>
<div class="textstyle2"><span class="textstyle5"><br/><br/><br/></span></div>
<div style="clear:both"></div></div></div></div>
</div>  </div>
</body>
</html>