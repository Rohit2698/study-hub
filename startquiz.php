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
$testname=$_SESSION['test'];
$conn=mysqli_connect("localhost","root","","project");


$sql = "SELECT * FROM $testname  LIMIT 1, 10";  
$rs_result = mysqli_query($conn, $sql); 
?>  
<table align="center" height="100%" width="100%" class="class="container4"" bgcolor="#f1f1f1">
<form method="post" action="tt1.php" >
<?php  
while ($row = mysqli_fetch_array($rs_result)) {  
?>  
           <tr><td bgcolor="green"><font size="5"><b><?php echo $row["question"];?></b></font></td></tr><br>
            <tr><td><font size="5"><b><input type="radio" name="num[]" value="<?php echo $row["a"] ?>"><?php echo $row["a"]; ?></b></font></td></tr>
            <tr><td><font size="5"><b><input type="radio" name="num[]" value="<?php $row["b"]; ?>"><?php echo $row["b"]; ?></b></font></td></tr>
            <tr><td><font size="5"><b><input type="radio" name=" num[]" value="<?php $row["c"]; ?>"><?php echo $row["c"]; ?></b></font></td></tr>
            <tr><td><font size="5"><b><input type="radio" name="num[]" value="<?php $row["d"]; ?>"><?php echo $row["d"]; ?></b></font></td></tr>
           
            
            
<?php  
};  
?>  
 <button type="submit">Submit</button><br>
 </form>
</table> 
<br>
</tr>
</table> 
</body>

</html>