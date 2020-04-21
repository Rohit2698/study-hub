<?php
session_start();
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <link rel="stylesheet" href="qa.css">
</head>
<body >

<br><br>


<?php
$conn=mysqli_connect("localhost","root","","project");


$limit = 10;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
//echo "$start_from";

$sql = "SELECT * FROM questionbank  LIMIT $start_from, $limit";  
$rs_result = mysqli_query($conn, $sql); 
?>  
<table align="center" height="100%" width="100%" class="class="container4"" bgcolor="#f1f1f1">
<form method="post" action="table.php" >
<tr>
<th><font size="4">S.no</font></th>
<th><font size="4">Question</font></th>
<th><font size="4">Answer</font></th>
</tr> 
<?php  
while ($row = mysqli_fetch_array($rs_result)) {  
?>  
            <tr onMouseover="this.bgColor='white'"onMouseout="this.bgColor='#f1f1f1'">  
            <td><font size="3"><?php echo $row["id"]; ?></font></td>  
            <td><font size="3"><?php echo $row["question"]; ?></font></td>  
            <td><font size="3"><?php echo $row["ans"]; ?></font></td>  
            </tr>  
            
<?php  
};  
?>  
 </form>
</table> 
<br>

<table align="center" height="100%" width="70%">
<tr>
<?php  
$sql = "SELECT COUNT(id) FROM questionbank";  
$rs_result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<div class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {
  ?><td bgcolor="	green"><font size="5"><b><?php   
             /*$pagLink .=*/echo "<a href='qa.php?page=".$i."'>".$i."</a>";
            ?><b></font></td><?php  
};  
echo $pagLink . "</div>";  
?>
</tr>
</table> 
</body>

</html>