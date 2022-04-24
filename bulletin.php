<?php
session_start();
if ( $_SESSION['email']==true) {
  # code...
}else
header('location:admin_login.php');
$page='bulletin';
 include('include/header.php');
 ?>

  <div style=" width: 70%; margin-left: 25%; margin-top: 10%">
  	    <div class="text-right">
  	    <a   class="btn btn-primary" href="addbulletin.php">Add bulletin</a> 
  	    	
   </div>
    <table class="table table-bordered">
       <tr>
         <th>Id</th>
         <th>bulletin</th>
       </tr>
        <?php
        include('db/connection.php');
        $query=mysqli_query($conn,"select * from bulletin");
        while($row=mysqli_fetch_array($query)){

        ?>
        <tr>
          <td><?php echo $row['id'];?></td>
           <td><?php echo $row['bulletin'];?></td>
            <td> <a href="editbulletin.php?edit=<?php echo $row['id']; ?>" class="btn btn-info" >edit</a></td>
            <td> <a href="deletebulletin.php?del=<?php echo $row['id']; ?>" class="btn btn-danger" >delete</a></td>
        </tr>
       <?php } ?>  
    </table>

  </div>

  <?php
 include('include/footer.php')

  ?>