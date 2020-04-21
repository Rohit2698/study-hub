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

$sql = "SELECT * FROM testtable ";  
$rs_result = mysqli_query($conn, $sql); 
?>  
<table align="center" height="60%" width="80%" class="container4" bgcolor="#f1f1f1">
<form method="post" action="table.php" >
<tr>
<th><font size="5"><b><i>TEST CODE</i></b></font></th>
<th><font size="5"><b><i>TEST TIME</i></b></font></th>
</tr> 
<?php  
while ($row = mysqli_fetch_array($rs_result)) {  
?>  
    
            <tr  onMouseover="this.bgColor='green'"onMouseout="this.bgColor='white'">    
            <td><font size="5"><b><i><?php echo $row["test"]; ?></i></b></font></td>  
            <td><font size="5"><b><i><?php echo $row["time"]; ?></i></b></font></td>  
            </tr>  
            
<?php  
};  
?>  

 </form>
</table> 
<br>
<div style="background-color:#8ebf42">
  <h3><font size="5">You have to use the test code to give the online test</h3>
  <p><a href=logtest1.php target="_blank">CLICK HERE TO GO TO ATTEMPT A QUIZ!!!!!!</a></p>
</div> 


</body>

</html>