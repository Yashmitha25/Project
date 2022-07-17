<!DOCTYPE html>
<html> 
  <body> 
  <form action="" method="post">      
      <input type="text" value = "1" name="ava" hidden>
      <input type="submit" name="submit" value="Available" class="form-btn">    
    </form>
  <form action="" method="post">      
      <input type="text" value = "0" name="ava" hidden>
      <input type="submit" name="submit" value="Not Available" class="form-btn">    
    </form>  
    
  </body>
</html>
<?php 

session_start();

if(isset($_POST['submit'])){
  $name = $_SESSION['name'];
  $ava = ($_POST['ava']);
   if (!empty($name)) {
     
      //Done
  $connection = mysqli_connect("localhost","root","","doctorAccounts");
 
  //Done
  $results = $connection->query("UPDATE doctorAccounts SET available = '".$ava."' WHERE name = '".$name."'");
  
     
   }
}
?>