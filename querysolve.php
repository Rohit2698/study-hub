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
  <script>
function bigImg(x) {
  x.style.height = "300px";
  x.style.width = "220px";
}
function normalImg(x) {
  x.style.height = "180px";
  x.style.width = "160px";
}
</script>
</head>
<body >


<?php
$conn=mysqli_connect("localhost","root","","project");


$limit = 10;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
//echo "$start_from";

$sql = "SELECT * FROM `studentquery`  LIMIT $start_from, $limit";  
$rs_result = mysqli_query($conn, $sql); 
?>  
<table align="center" height="60%" width="80%" class="container4" bgcolor="#f1f1f1">

<tr>
<th><font size="5"><b><i>S.no</i></b></font></th>
<th><font size="5"><b><i>Email</i></b></font></th>
<th><font size="5"><b><i>SEE QUERY</i></b></font></th>
</tr> 
<?php  
while ($row = mysqli_fetch_array($rs_result)) {  
?>  
			<form method="post" action="answerquery.php" >
            <tr  onMouseover="this.bgColor='green'"onMouseout="this.bgColor='white'">  
            <td><font size="5"><b><i><?php echo $row["id"]; ?></i></b></font></td>  
            <td><font size="5"><b><i><?php echo $row["email"]; ?></i></b></font></td>  
            <input type="hidden" value="<?php echo $row["email"]; ?>" name="emailst">
			<td><input type="submit" name="Submit" value="ANSWER QUERIES"</td>
            </tr>  
			 </form>
            
<?php  
};  
?>  
 
</table>
 
<br>

<table align="center" height="100%" width="70%">
<tr>
<?php  
$sql = "SELECT COUNT(id) FROM login WHERE status='student'";  
$rs_result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<div class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {
  ?><td bgcolor="	green"><font size="5"><b><?php   
             /*$pagLink .=*/echo "<a href='recordst.php?page=".$i."'>".$i."</a>";
            ?><b></font></td><?php  
};  
echo $pagLink . "</div>";  
?>
</tr>
</body>

</html>