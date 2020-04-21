<?php
session_start();
?>
<?php
$name=$_POST['test'];
$_SESSION['test']=$name;
header("Location:rules.php");
?>