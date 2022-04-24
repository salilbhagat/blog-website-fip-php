<?php
 include('db/connection.php');
 $id=$_GET['del'];
 $query=mysqli_query($conn,"delete  from bulletin where id='$id'");
  if ($query) {
  	 echo "<script> alert('bulletin deleted !')</script> ";
  	   echo "<script >window.location='http://localhost/news/bulletin.php' ;</script>";

  }else{
  	echo "Please Try again";
  }


?>