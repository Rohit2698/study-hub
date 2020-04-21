<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
$email=$_SESSION['email'];
$table=$email."query";

$conn=mysqli_connect("localhost","root","","project");
$query = "SELECT * FROM `$table`";
$get=mysqli_query($conn,$query);
?>
<html>
<head></head>
<body>
<?php
if(mysqli_num_rows($get)>0)
{
	while($row=mysqli_fetch_array($get))
	{
		?> <table width="40%" height="40%" align="center" bgcolor="#f1f1f1">  
        <td>
        <h1 align="center"><font size="4" color="black"><b><?php echo $row['question']?></b></font></h1>
        <p align="center"><font size="4" color="black"><b><?php echo $row['ans']?></b></font></p><hr>
    
   
<?php
	}
}
else
{
?>
<table width="70%" height="70%" align="center" bgcolor="#f1f1f1">  
        <td>
        <h1 align="center"><font size="8" color="black"><b>THERE IS NO QUERY ASKED</b></font></h1>
<?php 
}
?>
</body>
</head>