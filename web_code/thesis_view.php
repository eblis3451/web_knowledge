<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="generator" content="RocketCake">
	<title></title>
	<link rel="stylesheet" type="text/css" href="thesis_html.css">
</head>
<body>
<div class="textstyle1">
<div id="container_8294f55"><div class="textstyle2"><div id="container_465fee16"><div id="container_465fee16_padding" ><div class="textstyle1"><span class="textstyle3"><br/></span></div>
<div class="textstyle2"><div id="container_531a072a"><div id="container_531a072a_padding" ><div class="textstyle1">  <span class="textstyle4">Blockchain Technology Lab</span>
</div>
</div></div></div>
<div style="clear:both"></div></div></div><span class="textstyle5"><br/></span><div id="container_639a229a"><div class="textstyle1">  <a href="index_view.php" style="text-decoration:none"><div id="button_10bc54f8">
    <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle1">
        <span class="textstyle6">HOME</span>
        </div>
      <div class="textstyle2">
        </div>
      </div></div>
    </div></a>
  <a href="advisor_view.php" style="text-decoration:none"><div id="button_73838185">
    <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle2">
        </div>
      <div class="textstyle1">
        <span class="textstyle6">Advisor</span>
        </div>
      </div></div>
    </div></a>
  <a href="about_view.php" style="text-decoration:none"><div id="button_9663379">
    <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle2">
        </div>
      <div class="textstyle1">
        <span class="textstyle6">About Lab</span>
        </div>
      <div class="textstyle2">
        </div>
      </div></div>
    </div></a>
  <a href="thesis_view.php" style="text-decoration:none"><div id="button_69cdf215">
    <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle2">
        </div>
      <div class="textstyle1">
        <span class="textstyle6">Thesis</span>
        </div>
      </div></div>
    </div></a>
  <a href="members_view.php" style="text-decoration:none"><div id="button_358eafcd">
    <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle2">
        </div>
      <div class="textstyle1">
        <span class="textstyle6">Members</span>
        </div>
      </div></div>
    </div></a>
</div>
</div></div>
<div class="textstyle1"><div id="container_4a2f61ca"><div id="container_4a2f61ca_padding" ><div class="textstyle1"><div id="container_6b753925"><div id="container_6b753925_padding" ><div class="textstyle2">  <span class="textstyle7">Here is the graduate thesis written by Past student</span>
</div>
</div></div><div id="container_6c4ac3bb"><div id="container_6c4ac3bb_padding" ><div class="textstyle1"><table id="table_5c92c4e6" cellpadding="3" cellspacing="1" >	<tr>
		<td width="16%" height="22px" style="vertical-align: top; overflow:hidden; background-color:#FF8040; ">  <div id="cell_51d96f85">
    <div class="textstyle1">
      <span class="textstyle8">publisher</span>
      </div>
    </div>
		</td>
		<td width="69%" height="22px" style="vertical-align: top; overflow:hidden; background-color:#FF8040; ">  <div id="cell_43d29f40">
    <div class="textstyle1">
      <span class="textstyle8">The name of the paper</span>
      </div>
    </div>
		</td>
		<td width="13%" height="22px" style="vertical-align: top; overflow:hidden; background-color:#FF8040; ">  <div id="cell_7d766d63">
    <div class="textstyle1">
      <span class="textstyle8">link</span>
      </div>
    </div>
		</td>
	</tr>


  <?php
  require_once 'sql_config.php';

  $sql ="SELECT * FROM `thesis`";
  $result = mysqli_query($con, $sql);
  while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {

    echo "
	<tr>
		<td width='16%' height='22px' style='vertical-align: top; overflow:hidden; '>  <div id='cell_39c561f7'>
    <div class='textstyle1'>
      <span class='textstyle8'>";
      echo nl2br($row[1]);
         echo "</span>
      </div>
    </div>
		</td>
		<td width='69%' height='22px' style='vertical-align: top; overflow:hidden; '>  <div id='cell_7fa4a591'>
    <div class='textstyle2'>
      </div>
    <div class='textstyle1'>
      <span class='textstyle6'>$row[2]</span>
      </div>
    </div></a>
		</td>
		<td width='13%' height='22px' style='vertical-align: top; overflow:hidden; background-color:#21201C; '>
      <div class='textstyle1'>
      <a href='$row[3]'>檢視</a>
      </div>
		</td>
	</tr>
  ";
 }
?>
</table></div>






<div style="clear:both"></div></div></div></div>
<div class="textstyle2"><span class="textstyle5"><br/><br/></span></div>
<div class="textstyle1"><div id="container_775225c5"><div id="container_775225c5_padding" ><div class="textstyle1"><span class="textstyle9">More info<br/>E-mail : 	yehloyao@ncu.edu.tw</span></div>
<div class="textstyle2"><span class="textstyle9"><br/><br/><br/></span></div>
</div></div><div id="container_5dc0995e"><div id="container_5dc0995e_padding" ></div></div></div>
<div class="textstyle2"><span class="textstyle5"><br/><br/><br/></span></div>
<div style="clear:both"></div></div></div></div>
</div>  </div>
</body>
</html>