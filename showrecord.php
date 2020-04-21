<?php
session_start();
$email=$_SESSION['email'];
error_reporting(E_ERROR | E_PARSE);
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


  
//echo "$start_from";

$sql = "SELECT * FROM `$email` ";  
$rs_result = mysqli_query($conn, $sql); 
?>  
            
                <img src="<?php echo $photo ;?> " onmouseover="bigImg(this)" onmouseout="normalImg(this)" height="180dp" width="160dp">
</div>          
            

<?php
if(mysqli_num_rows($rs_result)>0){ 
?>
<table align="center" height="60%" width="80%" class="container4" bgcolor="#f1f1f1">

<tr>
<th><font size="5"><b><i>id</i></b></font></th>
<th><font size="5"><b><i>Marks</i></b></font></th>
<th><font size="5"><b><i>Test code</i></b></font></th>
<th><font size="5"><b><i>Time</i></b></font></th>

</tr> 

<?php  
while ($row = mysqli_fetch_array($rs_result)) {  
?>  
			
            <tr  onMouseover="this.bgColor='green'"onMouseout="this.bgColor='white'">  
             
            <td><font size="5"><b><i><?php echo $row['id']; ?></i></b></font></td>  
            <td><font size="5"><b><i><?php echo $row['marks']; ?></i></b></font></td>  
            <td><font size="5"><b><i><?php echo $row['test']; ?></i></b></font></td>
            <td><font size="5"><b><i><?php echo $row['time']; ?></i></b></font></td>
			</tr>  
			
            
<?php  
}  }
else
{
?>	<table width="70%" height="70%" align="center" bgcolor="#f1f1f1">  
        <td>
        <h1 align="center"><font size="8" color="black"><b>NO TEST IS GIVEN YET</b></font></h1>

<?php
}  
?> 
</table>
 
<br>

</body>

</html>