<?php
session_start();
$table=$_SESSION['table'];
$name=$_POST['question'];
$question=$_POST['que'];

$conn=mysqli_connect("localhost","root","","project");
$query="UPDATE `$table` SET ans='$name' WHERE question='$question'";

mysqli_query($conn,$query);

mysqli_close($conn);
header("Location:querysolve.php?msg=$msg");
?>