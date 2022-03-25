<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="RocketCake">
  <title></title>
  <link rel="stylesheet" type="text/css" href="about_html.css">
</head>
<body>
<div class="textstyle1">
<div id="container_b53fb0b"><div class="textstyle2"><div id="container_2109bf05"><div id="container_2109bf05_padding" ><div class="textstyle1"><span class="textstyle3"><br/></span></div>
<div class="textstyle2"><div id="container_1fa3c76"><div id="container_1fa3c76_padding" ><div class="textstyle1">  <span class="textstyle4">Blockchain Technology Lab</span>
</div>
</div></div></div>
<div style="clear:both"></div></div></div><span class="textstyle5"><br/></span><div id="container_45e06dfd"><div class="textstyle1">  <a href="index_view.php" style="text-decoration:none"><div id="button_1e1f61ba">
    <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle1">
        <span class="textstyle6">HOME</span>
        </div>
      <div class="textstyle2">
        </div>
      </div></div>
    </div></a>
  <a href="advisor_view.php" style="text-decoration:none"><div id="button_77609974">
    <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle2">
        </div>
      <div class="textstyle1">
        <span class="textstyle6">Advisor</span>
        </div>
      </div></div>
    </div></a>
  <a href="about_view.php" style="text-decoration:none"><div id="button_6e4fb690">
    <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle2">
        </div>
      <div class="textstyle1">
        <span class="textstyle6">About Lab</span>
        </div>
      <div class="textstyle2">
        </div>
      </div></div>
    </div></a>
  <a href="thesis_view.php" style="text-decoration:none"><div id="button_77038817">
    <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle2">
        </div>
      <div class="textstyle1">
        <span class="textstyle6">Thesis</span>
        </div>
      </div></div>
    </div></a>
  <a href="members_view.php" style="text-decoration:none"><div id="button_4cf5c0b1">
    <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle2">
        </div>
      <div class="textstyle1">
        <span class="textstyle6">Members</span>
        </div>
      </div></div>
    </div></a>
</div>
</div></div>

    </div></a>
</div>



<div style="clear:both"></div></div></div></div>
<div class="textstyle1">


<div id="container_5cc9d471"><div id="container_5cc9d471_padding" >
<div class="textstyle2">


<!--新聞顯示--> 
<span class="textstyle8">NEWS<br/></span></div>
<?php
  require_once 'sql_config.php';

  //顯示
  $sql ="SELECT * FROM `news`";
  $result = mysqli_query($con, $sql);
  while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    echo "    <div id='container_958acde'>
        <div id='container_958acde_padding' >
    <div class='textstyle1'>
            <div id='container_42e5494b'>
              <div id='container_42e5494b_padding' >
                <div class='textstyle2'>";
    //新消息的標題
    echo "<span class=\"textstyle9\">$row[1]<br/></span>";
    echo"<span class='textstyle10'><br/></span>";

    //新消息的內文
    echo "<span class=\"textstyle11\">";
    echo nl2br($row[2]);
    echo "$row[2]<br/></span>";
    echo "<br/><br/><br/>";

    //新消息的日期
    echo "<span class=\"textstyle11\">$row[4]<br/></span>";
    echo "</span>
                </div>
              </div>
            </div>";
  
    //新消息的圖片
  if($row[3]!='../rc_images/about/news/'){
    echo "<img src='$row[3]' width=20% height=20%>";
  }
    echo "  </div>
            </div>
            <div style='clear:both'></div></div>";


    } 
?>














<!--計畫表格開頭-->

<div id="container_5cc9d471"><div id="container_5cc9d471_padding" >
<div class="textstyle2">



<div style="clear:both"></div></div></div><div id="container_10db2fb0"><div id="container_10db2fb0_padding" ><div class="textstyle2"><span class="textstyle8">Projects<br/></span></div>
<div class="textstyle1"><div id="container_346d1876"><div id="container_346d1876_padding" ><div class="textstyle1"><table id="table_4d5376c2" cellpadding="3" cellspacing="1" > <tr>
    <td width="18%" height="20px" style="vertical-align: top; overflow:hidden; background-color:#FF8040; ">  <div id="cell_373652be">
    <div class="textstyle1">
      <span class="textstyle12">&#24180;&#24230;</span>
      </div>
    </div>
    </td>
    <td width="45%" height="20px" style="vertical-align: top; overflow:hidden; background-color:#FF8040; ">  <div id="cell_52d54537">
    <div class="textstyle1">
      <span class="textstyle12">&#30740;&#31350;&#35336;&#30059;&#21517;&#31281;</span>
      </div>
    </div>
    </td>
    <td width="21%" height="20px" style="vertical-align: top; overflow:hidden; background-color:#FF8040; ">  <div id="cell_6426444b">
    <div class="textstyle1">
      <span class="textstyle12">&#35336;&#30059;&#32147;&#36027;</span>
      <span class="textstyle5"> </span>
      </div>
    </div>
    </td>
    <td width="14%" height="20px" style="vertical-align: top; overflow:hidden; background-color:#FF8040; ">  <div id="cell_3ee130ad">
    <div class="textstyle13">
      <span class="textstyle12">&#35036;&#21161;&#21934;&#20301;</span>
      </div>
    </div>
    </td>
  </tr>


<!--顯示"計畫"-->
<?php
  $sql ="SELECT * FROM `projects`";
  $result = mysqli_query($con, $sql);
  while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
 
  echo "<tr>
    <td width='18%' height='48px' style='vertical-align: top; overflow:hidden; '>  <div id='cell_36092453'>
    <div class='textstyle2'>
      <span class='textstyle14'>$row[1]</span>
      </div>
    </div>
    </td>
    <td width='45%' height='48px' style='vertical-align: top; overflow:hidden; '>  <div id='cell_4eca213d'>
    <div class='textstyle2'>
      <span class='textstyle15'>$row[2]</span>
      </div>
    </div></a>
    </td>
    <td width='21%' height='48px' style='vertical-align: top; overflow:hidden; background-color:#21201C; '>  <div id='cell_71a7ebef'>
    <div class='textstyle2'>
      <span class='textstyle14'>$row[3]</span>
      </div>
    </div>
    </td>
    <td width='14%' height='48px' style='vertical-align: top; overflow:hidden; background-color:#21201C; '>  <div id='cell_7402ce10'>
    <div class='textstyle2'>
      <span class='textstyle14'>$row[4]</span>
      </div>
    </div>";



    echo "</tr>";



  }
?>
</table></div>





<div style="clear:both"></div></div></div></div></div></div>
  <div class="textstyle2"><span class="textstyle8">Research<br/></span></div>
<!--"研究項目"顯示--> 
<?php
  require_once 'sql_config.php';

  //顯示
  $sql ="SELECT * FROM `research`";
  $result = mysqli_query($con, $sql);
  while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    echo "    <div id='container_958acde'>
        <div id='container_958acde_padding' >
    <div class='textstyle1'>
            <div id='container_42e5494b'>
              <div id='container_42e5494b_padding' >
                <div class='textstyle2'>";
    //"研究項目"的標題
    echo "<span class=\"textstyle9\">$row[1]<br/></span>";
    echo"<span class='textstyle10'><br/></span>";

    //"研究項目"的內文
    echo "<span class=\"textstyle11\">";
    echo nl2br($row[2]);
    echo "$row[2]<br/></span>";
    echo "<br/><br/><br/>";

    echo "
                </div>
              </div>
            </div>";

    //"研究項目"的圖片
  if($row[3]!='../rc_images/about/research/'){
    echo "<img src='$row[3]' width=50% height=100%>";
  }
      echo "  </div>
            </div>
            <div style='clear:both'></div></div>";
} 
?>













<div style="clear:both"></div></div></div></div>
<div style="clear:both"></div></div></div></div>
<div class="textstyle2"><span class="textstyle5"><br/><br/></span></div>
<div class="textstyle1"><div id="container_1e42030"><div id="container_1e42030_padding" ><div class="textstyle1"><span class="textstyle15">More info<br/>E-mail :   yehloyao@ncu.edu.tw</span></div>
<div class="textstyle2"><span class="textstyle15"><br/><br/><br/></span></div>
</div></div><div id="container_1b67dbf0"><div id="container_1b67dbf0_padding" ></div></div></div>
<div class="textstyle2"><span class="textstyle5"><br/><br/><br/></span></div>
<div style="clear:both"></div></div></div></div>
</div>  </div>
</body>
</html>