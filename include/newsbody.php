<section >
    <div style="padding-left:10%;padding-right:10%;background-color:#ffffff;border-color:#F97300;">
      <div class="row">
        <div class="row" >
          <div class="p-3 mb-3 bg-light rounded">
            <center>
            <h4 style="color: #f97300">COVID-19 COUNT <a class="btn btn-light action-button" role="button" href="#" style="color:red;background-color:white">
                <b>CONFIRMED:- 1,14,09,600</b>
                </a><a class="btn btn-light action-button" role="button" href="#" style="color:#3090C7;background-color:white">
                    <b>ACTIVE:- 2,20,400</b></a><a class="btn btn-light action-button" role="button" href="#" style="color:green;background-color:white">
                        <b>RECOVERED:- 1,10,25,600</b><a class="btn btn-light action-button" role="button" href="#" style="color:gray;background-color:white">
                            <b>DEAD:- 1,58,947</b></a><p style="color: black;font-size: 10px">These are the Covid-19 figures of India</p>
            </h4>
          </center>
          </div>
        </div>
      </div>
    </div>
  </section>
<section >
  <div style="padding-left:10%;padding-right:10%;background-color:#ffffff;border-color:#F97300;">
    <div class="row">
      <div class="row" >
        <?php
        include('db/connection.php');
        $query1 =mysqli_query($conn,"select * from news order by date desc limit 0,6");
        while($row=mysqli_fetch_array($query1)){
          $category=$row['category'];
          $date=$row['date'];
          $author=$row['author'];
          $title=$row['title'];
          $thumbnail=$row['thumbnail'];
          ?>
          <a class="card-link col-lg-4" href="single_page.php?single=<?php echo $row['id'];?>">
            <div class="card mb-4 box-shadow rounded-0">
              <img class="card-img-top d-block rounded-0" style="width: 100%" src="images/<?php echo $thumbnail; ?>">
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