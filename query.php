<?php
session_start();
?>
<?php 
 if(isset($_GET['msg'])){
  echo '<script language="javascript">';
    echo 'alert("QUERY Deposited")';
    echo '</script>';
}
  ?>
<!DOCTYPE html>
<html>
   
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" href="template.css">
</head>
<body >     
<div class="bg-text">
<br>

<form action="queryteacher.php" method="POST" id="template">
<table width="70%" height="70%" align="center" bgcolor="#f1f1f1">  
<td>
 <h1 align="center"><font size="8" color="black"><b>QUERY</b></font></h1>
    <p align="center"><font size="4" color="black"><b></b>Bank<b></font></p><hr>
    
    <textarea cols="130" rows="5" maxlength="300" placeholder="Qusetion" name="question"></textarea><br>
    <button type="submit" align="center" class="registerbtn">ASK QUERY FROM EXPERTS</button><br>
</td>
</table>
</form>
</div>
</body>
</html>