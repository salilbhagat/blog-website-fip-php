<section >
  <div style="padding-left:10%;padding-right:10%;background-color:#ffffff;border-color:#F97300;">
    <hr style="height:4px;border-width:0;color:#F97300;background-color:#F97300">
    <div class="row">
      <div class="row" >
        <?php
        include('db/connection.php');
        $query1 =mysqli_query($conn,"select * from news order by date desc limit 6,12");
        while($row=mysqli_fetch_array($query1)){
          $category=$row['category'];
          $date=$row['date'];
          $author=$row['author'];
          $title=$row['title'];
          $thumbnail=$row['thumbnail'];
          ?>
          <a class="card-link col-lg-12" href="single_page.php?single=<?php echo $row['id'];?>">
            <div class="card mb-4 box-shadow rounded-0">
              <div class="card-body">
                <!-- <h6 class="text-muted card-subtitle mb-2"><?php echo date("l, j F Y",strtotime($row['date']));?></h6>
                <h6 class="text-muted card-subtitle mb-2"><?php echo $category; ?></h6> -->
                <h4 style="color: #000000;" class="card-title">
                  <b><?php echo $title; ?></b>
                </h4>
                <h6 class="text-muted card-subtitle mb-2"><?php echo date("l, j F Y",strtotime($row['date']));?></h6>
                <!--<h6 class="text-muted card-subtitle mb-2">By:- <?php echo $author; ?></h6>-->
              </div>
            </div>
          </a>
          <br>
        <?php } ?>
      </div>
    </div>
  </div>
</section>