<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
$email=$_SESSION['emailof'];
$time=$_SESSION['time'];
$question = $_SESSION['ques'];
   $con = mysqli_connect('localhost','root','','project');
   	
	$code=$_SESSION['code'];
   	
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style type="text/css">
	.animateuse{
			animation: leelaanimate 0.5s infinite;
		}

@keyframes leelaanimate{
			0% { color: red },
			10% { color: yellow },
			20%{ color: blue }
			40% {color: green },
			50% { color: pink }
			60% { color: orange },
			80% {  color: black },
			100% {  color: brown }
		}
</style>

   </head>
   <body>
     <div class="container text-center" >
     	<br><br>
    	<h1 class="text-center text-success text-uppercase animateuse" > STUDY HUB Quiz World</h1>
    	<br><br><br><br>
      <table class="table text-center table-bordered table-hover">
      	<tr>
      		<th colspan="2" class="bg-dark"> <h1 class="text-white"> Results </h1></th>
      		
      	</tr>
      	<tr>
		      	<td>
		      		Questions Attempted
		      	</td>

	         <?php
         $counter = 0;
         $Resultans = 0;
            $i=1;
			if(isset($_POST['submit'])){
            if(!empty($_POST['quizcheck'])) {
            // Counting number of checked checkboxes.
            $checked_count = count($_POST['quizcheck']);
            
            ?>

        	<td>
            <?php
            echo "Out of ".$question.", You have attempt ".$checked_count." option."; ?>
            </td>
        
          	
            <?php
            // Loop to store and display values of individual checked checkbox.
            $selected = $_POST['quizcheck'];
            
            $q1= "SELECT ans FROM $code ";
            $ansresults = mysqli_query($con,$q1);
			
            
            while($rows = mysqli_fetch_array($ansresults)) {
              
            	
            	$checked = $rows['ans'] == $selected[$i];
            			if($checked){
            							
            				$counter++;
            				$Resultans++;

            			}else{
            				$counter++;
            				
            			}					
            		$i++;		
            	}
            	?>
            	
    		
    		<tr>
    			<td>
    				Your Total score
    			</td>
    			<td colspan="2">
	    	<?php 
	            echo " Your score is ". $Resultans.".";
	            }
	            else{
	            echo "<b>Please Select Atleast One Option.</b>";
	            }
	            } 
	          ?>
	          </td>
            </tr>

            <?php 

            $name = $_SESSION['nameof'];
            $finalresult = "INSERT INTO `$email` (`id`, `marks`, `test`, `time`) VALUES (NULL, '$Resultans', '$code', '$time');";
            $queryresult= mysqli_query($con,$finalresult); 
            
            ?>


      </table>

      	<a href="login.html" target="_blank" class="btn btn-success"> LOGOUT </a>
      </div>
   </body>
</html>
 