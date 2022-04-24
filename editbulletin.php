<?php
session_start();
error_reporting(0);
if ( $_SESSION['email']==true) {
  # code...
}else
header('location:admin_login.php');
$page='bulletin';
 include('include/header.php');

  ?>

  <?php
 include('db/connection.php');
  $id=$_GET['edit'];

  $query=mysqli_query($conn,"select * from bulletin where id='$id' ");

 while ($row=mysqli_fetch_array($query)) {
 	 $bulletin=$row['bulletin'];
 }
 

  ?>

  <div style=" width: 70%; margin-left: 25%; margin-top: 10%">
  	   
  	
		<form action="editbulletin.php" method="post" name="categoryform" onsubmit=" return validateform() ">
			<h1>Update bulletin</h1>
			<hr>
		  <div class="form-group">
		    <label for="email"> bulletin:</label>
		    <input type="text" name="bulletin" value="<?php  echo $bulletin; ?>" class="form-control" id="email">
		  </div>
			<input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>" >
		  <input type="submit" name="submit" class="btn btn-primary" value=" Update bulletin">
		</form>
		<script>
			
       function validateform(){
         var x = document.forms['categoryform']['bulletin'].value;
          if (x=="") {
          	alert('bulletin Must Be Filled Out !');
          	return false;
          }
       }

		</script>

  </div>

  <?php
include('db/connection.php');
if (isset($_POST['submit'])) {
	$id=$_POST['id'];
     $bulletin =$_POST['bulletin'];

     $query1=mysqli_query($conn,"update bulletin set bulletin='$bulletin' where id='$id' ");
     if($query1){
     	echo "<script>alert('bulletin Updated Successfully !')</script>";
       echo "<script >window.location='http://localhost/news/bulletin.php' ;</script>";
     	

     }else{
     	echo "bulletin Not Update";
     }
}


  ?>

  <?php
 include('include/footer.php');

  ?>
