<?php 
 if(isset($_GET['msg'])){
  echo '<script language="javascript">';
    echo 'alert("msg")';
    echo '</script>';
}
  ?>

<!DOCTYPE html>
<html>
   <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<style>

</style>
  <link rel="stylesheet" href="pass.css">
</head>
<body background="1.jpeg">

<br><br><br><br><br>
<div class="container" background="1.jpeg">
<table width="40%" height="70%" align="center" bgcolor="#f1f1f1" frame="box">
<form action="pass.php" method="POST">
<th>
 <h1><font size="8"><b>Update</b></font></h1>

    <label for="psw"><b>Current Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="currentpassword" required>
 

    <label for="psw-repeat"><b>New Password</b></label><br>
    <input type="password" placeholder="Password" name="newpassword" required><br>
 

 <button type="submit" class="registerbtn">Update</button><br>
</th>
</form>
</table>
</div>
</body>
</html>