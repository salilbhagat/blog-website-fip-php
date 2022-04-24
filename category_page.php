<!DOCTYPE html>
<html >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>company name</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Card-Group1-Shadow.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
</head>
<?php include('include/mainheader.php')?>
<!-------------vvvvvvsomething wrong after this dont know dont carevvvvvv------------------>
<body style="background-color: #ffffff;">
        <div class="container">
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                  <?php
                  include('db/connection.php');
                  $id=$_GET['single'];
                  $query1=mysqli_query($conn,"select * from category");
                  while($row=mysqli_fetch_array($query1)){
                  ?>
                  <?php } ?>
                </ul>
              </div>
        </div>
    <section>
      <div  style="padding-left: 10%;padding-right: 10%; background-color: #ffffff;  border-color: #F97300;">
        <div class="row">
          <div class="row" >
            <?php
            include('db/connection.php');
            $query1 =mysqli_query($conn,"select * from news where category='$id' order by date desc ");
            while($row=mysqli_fetch_array($query1)){
              $category=$row['category'];
              $date=$row['date'];
              $author=$row['author'];
              $title=$row['title'];
              $thumbnail=$row['thumbnail'];
              ?>
              <div class="col-lg-4">
                <a class="card-link" href="single_page.php?single=<?php echo $row['id'];?>">
                  <div class="card mb-4 box-shadow rounded-0">
                    <img class="card-img-top w-100 d-block rounded-0" src="images/<?php echo $thumbnail; ?>">
                    <div class="card-body">
                      <h6 class="text-muted card-subtitle mb-2"><?php echo $category; ?></h6>
                      <h4 style="color: #000000;" class="card-title"><b><?php echo $title; ?></b></h4>
                      <h6 class="text-muted card-subtitle mb-2"><?php echo date("l, j F Y",strtotime($row['date']));?></h6>
                    </div>
                  </div>
                </a>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php include('include/termspopup.php')?>