<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 5px;
  font-size: 30px;
  width: 40px;
  text-align: center;
  text-decoration: none;
  margin: 5px 5px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}
.fa-download {
  background: #007bb5;
  color: white;
}
</style>
</head>
<body>

<a style="background: #007bb5;color: white;" href="http://www.instagram.com/thepoliticalflow/" class="fa fa-download"></a>

</body>
</html> 
























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




