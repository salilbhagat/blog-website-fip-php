<?php include('include/mainheader.php')?>
<section>
  <div style="padding-left: 15%;padding-right: 15%; background-color: #ffffff;  border-color: #F97300;">
    <div class="row">
      <div class="row" >
      <?php
      include('db/connection.php');
      if(isset($_POST['submit'])){
        $search=$_POST['search'];
        $query=mysqli_query($conn,"select * from news where title like '%$search%' order by date desc");
        while($row=mysqli_fetch_array($query)){
          $title=$row['title'];
          $date=$row['date'];
          $author=$row['author'];
          $category=$row['category'];
          $thumbnail=$row['thumbnail'];
          $description=$row['description'];
          ?>
          <div class="col-lg-4">
            <a class="card-link" href="single_page.php?single=<?php echo $row['id'];?>">
              <div class="card mb-4 box-shadow rounded-0">
                <img class="card-img-top w-100 d-block rounded-0" src="images/<?php echo $thumbnail;?>">
                <div class="card-body">
                  <h6 class="text-muted card-subtitle mb-2"><?php echo date("l, j F Y",strtotime($row['date']));?></h6>
                  <h6 class="text-muted card-subtitle mb-2"><?php echo $category; ?></h6>
                  <h4 style="color: #000000;" class="card-title"><b><?php echo $title; ?></b></h4>
                  <h6 class="text-muted card-subtitle mb-2">By:- <?php echo $author; ?></h6>
                </div>
              </div>
            </a>
          </div>
      <?php }} ?>
    </div>
  </div>
</div>
</section>
