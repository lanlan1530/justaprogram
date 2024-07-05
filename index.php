<?php $group_name_content = file_get_contents('GroupName');
$group_score_content = file_get_contents('GroupScore');
$group_scores = explode(' ', $group_score_content);
$group_names=explode(' ',$group_name_content)

 ?>
 <table border=1 cellpadding=0 cellspacing=0 width=360 style='border-collapse:
 collapse;table-layout:fixed;width:270pt'>
 <col width=36 span=10 style='width:54pt'>
 <tr height=19 style='height:14.25pt'>
  <td height=19 align=middle width=36 style='height:14.25pt;width:54pt'>Web v1.1</td>
  <td align=middle width=36 style='width:54pt'><?php echo $group_scores[0];?></td>
  <td align=middle width=36 style='width:54pt'><?php echo $group_scores[1];?></td>
  <td align=middle width=36 style='width:54pt'><?php echo $group_scores[2];?></td>
  <td align=middle width=36 style='width:54pt'><?php echo $group_scores[3];?></td>
  <td align=middle width=36 style='width:54pt'><?php echo $group_scores[4];?></td>
  <td align=middle width=36 style='width:54pt'><?php echo $group_scores[5];?></td>
  <td align=middle width=36 style='width:54pt'><?php echo $group_scores[6];?></td>
  <td align=middle width=36 style='width:54pt'><?php echo $group_scores[7];?></td>
  <td align=middle width=36 style='width:54pt'><?php echo $group_scores[8];?></td>
  <td align=middle width=36 style='width:54pt'><?php echo $group_scores[9];?></td> 
  <td align=middle width=36 style='width:54pt'><?php echo $group_scores[10];?></td>
</tr>
 <tr height=19 style='height:14.25pt'>
  <td height=19 align=middle style='height:14.25pt'>App v1.0.4</td>
  <td align=middle><?php echo $group_names[0];?></td>
  <td align=middle><?php echo $group_names[1];?></td>
  <td align=middle><?php echo $group_names[2];?></td>
  <td align=middle><?php echo $group_names[3];?></td>
  <td align=middle><?php echo $group_names[4];?></td>
  <td align=middle><?php echo $group_names[5];?></td>
  <td align=middle><?php echo $group_names[6];?></td>
  <td align=middle><?php echo $group_names[7];?></td>
  <td align=middle><?php echo $group_names[8];?></td>
  <td align=middle><?php echo $group_names[9];?></td>
  <td align=middle><?php echo $group_names[10];?></td>
 </tr>
<Button onclick='window.location.replace("index2.php")'>Edit</Button>