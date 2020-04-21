<?php
session_start();
?>
<?php
$name=$_SESSION['name'];
$email=$_SESSION['email'];

$conn=mysqli_connect("localhost","root","","project");
$ques=$_POST['question'];

echo $a;
$table=$email.query;
$query1="CREATE TABLE `$table`( `id` INT NOT NULL AUTO_INCREMENT ,`question` VARCHAR(300),PRIMARY KEY (`id`),`ans` VARCHAR(300))";
mysqli_query($conn,$query1);
$query="INSERT INTO `$table` (`id`, `question`) VALUES (NULL, '$ques')";
mysqli_query($conn,$query);
$query2="CREATE TABLE `studentquery`( `id` INT NOT NULL AUTO_INCREMENT ,`email` VARCHAR(300),PRIMARY KEY (`id`)) ENGINE = InnoDB; ";
mysqli_query($conn,$query2);
$query3="INSERT INTO `studentquery` (`id`, `email`) VALUES (NULL, '$email')";
mysqli_query($conn,$query3);
$msg = "wrong";

header("Location:query.php?msg=$msg");


mysqli_close($conn);

?>