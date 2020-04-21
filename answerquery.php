<?php
session_start();
$email=$_POST['emailst'];
$table=$email."query";
$_SESSION['table']=$table;
$conn=mysqli_connect("localhost","root","","project");
$sql = "SELECT * FROM `$table`";  
$rs_result = mysqli_query($conn, $sql);
?>
<html>
<head></head>
<body>
<?php
while ($row = mysqli_fetch_array($rs_result)) { 
?>
<form method="post" action="querysubmit.php" >
<?php
echo $row['question'];
?>
<br>
<textarea cols="130" rows="5" maxlength="300" placeholder="Qusetion" name="question"></textarea>
<input type="hidden" value="<?php echo $row["question"]?>" name="que">
<input type="submit" name="Submit" value="ANSWER QUERIES">
<br>
</form>
<?php
}
?>
<?php
mysqli_close($conn);
?>
</body>
</html>