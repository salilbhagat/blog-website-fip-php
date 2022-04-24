<?php include('include/mainheader.php')?>
<table class="table table-bordered">
  <?php
  include('db/connection.php');
  $query=mysqli_query($conn,"select * from category");
  while($row=mysqli_fetch_array($query)){
  ?>
  <tr style="color: #000000;">
    <td><?php echo $row['id'];?></td>
    <td><b><li><?php echo $row['category_name'];?></li></b></td>
    <td><a href="category_page.php?single=<?php echo$row['category_name'];?>"class="btn btn-info" style="background-color: #F97300;" ><b>VIEW</b></a></td>
  </tr>
<?php } ?>
</table>