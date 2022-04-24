<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <?php
      include('db/connection.php');
      $id=$_GET['single'];
      $query=mysqli_query($conn,"select * from news where id='$id'");
      while($row=mysqli_fetch_array($query)){
      $title=$row['title'];
      $date=$row['date'];
      $category=$row['category'];
      $author=$row['author'];
      $thumbnail=$row['thumbnail'];
      $description=$row['description'];
      $thumbnail2=$row['thumbnail2'];
      $description2=$row['description2'];
      $thumbnail3=$row['thumbnail3'];
      $description3=$row['description3'];
      $thumbnail4=$row['thumbnail4'];
      $description4=$row['description4'];
      }
      ?>
      <div class="blog-post">
        <h2 class="blog-post-title" style="font-size:30px;color:#F97300;"><?php echo $category; ?></h2>
        <h2 class="blog-post-title" style="font-size:30px; color: #000000;"><?php echo $title; ?></h2>
        <h6 style="color: #000000;">By:- <?php echo $author; ?></h6>
        <h6 class="blog-post-meta" style="color: #000000;"><?php echo $date; ?></h6>
        <?php include('include/socialshare.php')?>
        <p>
          <img class="card-img-top w-100 d-block rounded-0" src="images/<?php echo $thumbnail; ?>">
        </p>
        <hr>
        <b> 
        <blockquote style="color: #000000; white-space: pre-wrap;  white-space: -moz-pre-wrap; white-space: -pre-wrap; white-space: -o-pre-wrap;  word-wrap: break-word;" >
          <?php echo $description ;?>
        </blockquote>
        </b>
        <p>
          <img class="card-img-top w-100 d-block rounded-0" onerror="this.onerror=null;this.src='';" src="images/<?php echo $thumbnail2; ?>">
        </p>
        <hr>
        <b> 
        <blockquote style="color: #000000; white-space: pre-wrap;  white-space: -moz-pre-wrap; white-space: -pre-wrap; white-space: -o-pre-wrap;  word-wrap: break-word;" >
          <?php echo $description2 ;?>
        </blockquote>
        </b>
        <p>
          <img class="card-img-top w-100 d-block rounded-0" onerror="this.onerror=null;this.src='';" src="images/<?php echo $thumbnail3; ?>">
        </p>
        <hr>
        <b> 
        <blockquote style="color: #000000; white-space: pre-wrap;  white-space: -moz-pre-wrap; white-space: -pre-wrap; white-space: -o-pre-wrap;  word-wrap: break-word;" >
          <?php echo $description3 ;?>
        </blockquote>
        </b>
        <p>
          <img class="card-img-top w-100 d-block rounded-0" onerror="this.onerror=null;this.src='';" src="images/<?php echo $thumbnail4; ?>">
        </p>
        <hr>
        <b> 
        <blockquote style="color: #000000; white-space: pre-wrap;  white-space: -moz-pre-wrap; white-space: -pre-wrap; white-space: -o-pre-wrap;  word-wrap: break-word;" >
          <?php echo $description4 ;?>
        </blockquote>
        </b>

      </ol>
    </div><!-- /.blog-post -->
  </div><!-- /.blog-main -->
  <aside class="col-md-4 blog-sidebar">
    <div class="p-3 mb-3 bg-light rounded">
      <h4 class="font-italic">Support Us</h4>
      <p class="mb-0">Support us on patreon to access exclusive articles and monthly magazine edition</p>
      <a class="btn btn-light action-button" role="button" href="http://www.patreon.com/thepoliticalflow" style="color:rgb(255,255,255);background-color:#F97300"><b>PATREON</b></a>
    </div>
  </aside><!-- /.blog-sidebar -->
</div><!-- /.row -->
<hr style="height:2px;border-width:0;color:#F97300;background-color:#F97300">
<b class="navbar-brand" href="index.php" style="font-size: 30px; color: #000000">LATEST</b>
<hr style="height:2px;border-width:0;color:#F97300;background-color:#F97300">
</main><!-- /.container -->