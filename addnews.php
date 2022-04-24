<?php
session_start();
if ( $_SESSION['email']==true) {
  # code...
}else
header('location:admin_login.php');
$page='category';
 include('include/header.php');
 ?>
  <div style=" width: 70%; margin-left: 25%; margin-top: 10%">
    <form action="addnews.php" method="post" enctype="multipart/form-data" name="categoryform" onsubmit="return validateform()">
    <h1>Add News</h1>
    <hr>
    <div class="form-group">
      <label for="email"> Title:</label>
      <input type="text" placeholder="Title..." name="title" class="form-control" id="email">
    </div>
    <div class="form-group">
        <label for="email"> Thumbnail:</label>
        <input type="file"  name="thumbnail" class="form-control img-thumbnail" id="email">
    </div>
    <div class="form-group">
        <label for="email"> Thumbnail2:</label>
        <input type="file"  name="thumbnail2" class="form-control img-thumbnail" id="email">
    </div>
    <div class="form-group">
        <label for="email"> Thumbnail3:</label>
        <input type="file"  name="thumbnail3" class="form-control img-thumbnail" id="email">
    </div>
    <div class="form-group">
        <label for="email"> Thumbnail4:</label>
        <input type="file"  name="thumbnail4" class="form-control img-thumbnail" id="email">
    </div>
    <div class="form-group">
      <label for="comment">Description:</label>
      <textarea class="form-control" placeholder="Description..." rows="5" name="description" id="comment">
      </textarea>
    </div>
    <div class="form-group">
      <label for="comment">Description2:</label>
      <textarea class="form-control" placeholder="Description2..." rows="5" name="description2" id="comment">
      </textarea>
    </div>
    <div class="form-group">
      <label for="comment">Description3:</label>
      <textarea class="form-control" placeholder="Description3..." rows="5" name="description3" id="comment">
      </textarea>
    </div>
    <div class="form-group">
      <label for="comment">Description4:</label>
      <textarea class="form-control" placeholder="Description4..." rows="5" name="description4" id="comment">
      </textarea>
    </div>
    <div class="form-group">
        <label for="email"> Date:</label>
        <input type="date"  name="date" class="form-control" id="email">
    </div>
    <div class="form-group">
      <label for="email"> Category:</label>
      <select class="form-control"  name="category" >
        <?php
        include('db/connection.php');
        $query=mysqli_query($conn,"select * from category");
        while($row=mysqli_fetch_array($query)){
        ?>
        <option value="<?php echo $row['category_name'];?>"><?php echo $row['category_name'];?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label for="admin">Admin</label>
      <input type="text" class="form-control" disabled value="<?php echo $_SESSION['email'];?>">
    </div>
    <div class="form-group">
      <label for="email"> Author:</label>
      <input type="text" placeholder="Author..." name="author" class="form-control" id="email">
    </div>
    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
  </form>
    <script>
       function validateform(){
         var x = document.forms['categoryform']['category'].value;
          if (x=="") {
            alert('Category Must Be Filled Out !');
            return false;
          }
      }
    </script>

  </div>
    <?php
 include('include/footer.php')
  ?>
  <?php
 include('db/connection.php');

if (isset($_POST['submit'])) {
  $title=$_POST['title'];

  $thumbnail=$_FILES['thumbnail']['name'];
  $tmp_thumbnail=$_FILES['thumbnail']['tmp_name'];

  $thumbnail2=$_FILES['thumbnail2']['name'];
  $tmp_thumbnail2=$_FILES['thumbnai2']['tmp_name'];

  $thumbnail3=$_FILES['thumbnail3']['name'];
  $tmp_thumbnail3=$_FILES['thumbnail3']['tmp_name'];

  $thumbnail4=$_FILES['thumbnail4']['name'];
  $tmp_thumbnail4=$_FILES['thumbnail4']['tmp_name'];

  $description=$_POST['description'];
  $description2=$_POST['description2'];
  $description3=$_POST['description3'];
  $description4=$_POST['description4'];

  $date=date('Y-m-d',strtotime($_POST['date']));
  $category=$_POST['category'];
  $admin=$_SESSION['email'];
  $author=$_POST['author'];

  move_uploaded_file($tmp_thumbnail,"images/$thumbnail");

  move_uploaded_file($tmp_thumbnail2,"images/$thumbnail2");

  move_uploaded_file($tmp_thumbnail3,"images/$thumbnail3");

  move_uploaded_file($tmp_thumbnail4,"images/$thumbnail4");

  $query2=mysqli_query($conn,"insert into news(title, description, date, category, thumbnail, admin, author, description2, description3, description4, thumbnail2, thumbnail3, thumbnail4)values('$title','$description','$date','$category','$thumbnail','$admin','$author','$description2','$description3','$description4','$thumbnail2','$thumbnail3','$thumbnail4')");

  if($query2){
     echo "<script> alert('news added Successfully')</script>";
  }else{
     echo "<script> alert('Please try Again')</script>";
  }
}



  ?>
