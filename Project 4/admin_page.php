<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Doctor's page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Hi, <span>Admin</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      
	  <?php 
	  
	  $avaliable;
	  
	  if($_SESSION['Availability'] == 1){
		  $avaliable = "Available";
	  }else{
		   $avaliable = "Not Available";
	  }?>
	  
	  
	  <p>I am <b> <?php echo $avaliable?></b></p>
	  
	  
	  <form action="" method="post">      
      <input type="text" value = "1" name="ava" hidden>
      <input type="submit" name="submit" value="Available" class="btn"> </form>
	  <br>
      <form action="" method="post">      
      <input type="text" value = "0" name="ava" hidden>
      <input type="submit" name="submit" value="Not Available" class="btn">    
       </form>
<br>	   
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>

<?php 

if(isset($_POST['submit'])){
  $name = $_SESSION['admin_name'];
  $ava = ($_POST['ava']);
   if (!empty($name)) {
     
      //Done
  $connection = mysqli_connect("localhost","root","","user_db");
 
  //Done
  $results = $connection->query("UPDATE user_form SET Availability = '".$ava."' WHERE name = '".$name."'");
  
  $_SESSION['Availability'] = $ava;
   header('location:admin_page.php');
   }
}
?>