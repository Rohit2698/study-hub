<?php 
 if(isset($_GET['msg1'])){
  echo '<script language="javascript">';
    echo 'alert("Already exist")';
    echo '</script>';
}
  ?>
<?php 
 if(isset($_GET['msg'])){
  echo '<script language="javascript">';
    echo 'alert("Account Sucessfully Created(--)")';
    echo '</script>';
}
  ?>

<!DOCTYPE html>
<html>
   <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
      <script>
        function myFunction() {
  confirm("Press a button!");
}
</script>
<style>

</style>
  <link rel="stylesheet" href="signup.css">
  <style>
a:hover {
  background-color: green;
}
</style>
</head>
<body >
<br>
<div class="container" background="1.jpeg">
<table width="55%" height="60%" align="center" bgcolor="#f1f1f1" frame="box">
<form action="action_page.php" method="POST" enctype="multipart/form-data">
<th>
 <h1><font size="8"><b>Register</b></font></h1>
    <p><font size="4"><b>Please fill in this form to create an account.<b></font></p>

    <label for="photo">Upload photo</label><br><br>
    <input type="file" name="myimage" id="photo" /><br>
    <br>

    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" required><br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required>
 

    <label for="psw-repeat"><b>Repeat Password</b></label><br>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>

   <b> Name</b><input type="text" placeholder="enter name" name="name" required><br>
    <label for="status"><b>Status</b></label><br>
     <input type="radio" name="status" value="Teacher">Teacher<br>
           <input type="radio" name="status" value="student">Student<br><br>

 
    <label for="phone">Enter your phone number:</label><br>

       <input type="tel" id="phone" name="phone" required>  <br><br>

       <label for="dt">Date Of Birth: </label><br><br>
	 <input name="dt" type="date"/><br><br>

 <button type="submit"  class="registerbtn" >Register</button><br>
<p>Already have an account? <a href="login1.php">Log in</a>.</p><br>
</th>
</form>
</table>
</div>
</body>
</html>