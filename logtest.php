<?php
session_start();
?>
<?php
$code=$_POST['code'];
$email=$_POST['email'];
$pas=$_POST['psw'];
$_SESSION['code']=$code;
$conn=mysqli_connect("localhost","root","","project");


$query1="SELECT * FROM testtable where test='$code'";
$get=mysqli_query($conn,$query1);
if(mysqli_num_rows($get)>0)
{

    $query2="SELECT * FROM testtable where test='$code'";
    $get=mysqli_query($conn,$query2);
    $record=mysqli_fetch_array($get);

    $testname=$record['test'];
    $time=$record['time'];
    $_SESSION['testname']=$testname;
    $_SESSION['time']=$time;
	
	}
else
{
  $msg1 = "Invalid";
  header("Location:logtest1.php?msg1=$msg1");
}
$query="SELECT * FROM login WHERE email='$email' and password='$pas'";
$get=mysqli_query($conn,$query);
if(mysqli_num_rows($get)>0)
{   
    $record=mysqli_fetch_array($get);
    $name=$record['name'];
    $id=$record['email'];
    $dob=$record['dob'];
    $status=$record['status'];
    $phone=$record['phoneno'];
    $id1=$record['id'];
    $pass=$record['password'];
	

    $_SESSION['nameof']=$name;
    $_SESSION['emailof']=$id;
    $_SESSION['dob']=$dob;
    $_SESSION['status']=$status;
    $_SESSION['phone']=$phone;
    $_SESSION['idof']=$id1;
    $_SESSION['password']=$pass;

    
    header("Location:tt.php");
}
else
{
  $msg1 = "Invalidu";
  header("Location:logtest1.php?msg=$msg1");
}


?>