<?php
session_start();
if ( $_SESSION['email']==true) {
}else
header('location:admin_login.php');
$page='bulletin';
include('include/header.php');
?>
<div style=" width: 70%; margin-left: 25%; ">
  <form action="addbulletin.php" method="post" enctype="multipart/form-data" name="categoryform" onsubmit=" return validateform() ">
    <h1>Add Bulletin</h1>
    <hr>
    <div class="form-group">
      <label for="email"> bulletin:</label>
      <input type="text" placeholder="bulletin..." name="bulletin" class="form-control" id="email">
    </div>
    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
  </form>
  <script>
    function validateform(){
      var x = document.forms['categoryform']['bulletin'].value;
      if (x=="") {
        alert('Title Must Be Filled Out !');
        return false;
      }
    }
  </script>
</div>
<?php include('include/footer.php')?>
<?php
include('db/connection.php');
if (isset($_POST['submit'])) {
  $bulletin=$_POST['bulletin'];
  $query1=mysqli_query($conn,"insert into bulletin(bulletin)values('$bulletin')");
  if ($query1) {
    echo "<script>alert('bulletin uploaded Successfully !!')</script>  ";
  }else{
    echo "<script>alert('Please Try Again!!')</script>  ";
  }
}
?>