<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>FREE INDIA POST</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Card-Group1-Shadow.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
</head>
<body style="background-color: #ffffff;">
  <nav class="navbar navbar-light navbar-expand-md sticky-top border rounded navigation-clean-search" style="background-color: #ffffff;">
    <div class="container">
      <a href="index.php">
        <input type="image" style="width:250px;height:50px;" src="images/logofip.jpg">
      </a>
      <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="background-color: #ffffff;">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon"></span>
      </button><!--<?php include('include/clock.php')?>-->
      <div class="collapse navbar-collapse d-md-flex justify-content-md-end" id="navcol-1">
        <a class="list-unstyled"><?php include('include/socials.php')?></a>
        <?php include('include/downloadbutton.php')?>
        <form action="search.php" method="post">
          <div class="input-group sm-3">
            <input type="text" name="search" class="form-control" placeholder="Search">
            <div class="input-group-append">
              <button style="background-color: #ffffff;color: #000000;" class="btn btn-success" name="submit" type="submit">Go</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </nav>
  <nav class="navbar navbar-light navbar-expand-md border rounded navigation-clean-search" style="background-color: #ffffff;">
    <div class="container">
      <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2" style="background-color: #ffffff;">
        <span class="sr-only">Toggle navigation</span>
        <span class="toggler">FILTER</span>
      </button>
      <a class="btn btn-light action-button" role="button" href="allcategories.php" style="background-color:#F97300"><b>All Categories</b>
          </a>
      <div class="collapse navbar-collapse d-md-flex justify-content-md-end" id="navcol-2">
        <ul class="nav navbar-nav" style="text-align: center;">
          <?php
          include('db/connection.php');
          $query1=mysqli_query($conn,"select * from category limit 0,10");
          while($row=mysqli_fetch_array($query1)){
          ?>
          <li class="nav-item" role="presentation">
            <a class="nav-link" href="category_page.php?single=<?php echo$row['category_name'];?>" style="font-size: 13px; color: #000000">
              <b><?php echo $row['category_name']; ?></b>
            </a>
          </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
  <marquee  class="form-control-plaintext border rounded" style=" background-color: #ffffff;color: #990000;font-size: 20px;"  type="text" ; readonly="">
    <?php
    include('db/connection.php');
    $query1 =mysqli_query($conn,"select * from bulletin");
    while($row=mysqli_fetch_array($query1)){
      $bulletin=$row['bulletin'];
      ?>
      <a class="btn btn-light action-button" style="color: #990000;"><?php echo $bulletin; ?></a>
    <?php } ?>
  </marquee>
  <br>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
