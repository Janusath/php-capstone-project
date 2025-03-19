<main class="main">

<!-- Page Title -->
<div class="page-title" data-aos="fade">
  <div class="heading">
    <div class="container">
      <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-8">
          <h1>Trainers</h1>
          <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
        </div>
      </div>
    </div>
  </div>
  <nav class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="index.html">Home</a></li>
        <li class="current">Trainers</li>
      </ol>
    </div>
  </nav>
</div><!-- End Page Title -->


<?php      


$sql="SELECT * FROM trainers";
$result=mysqli_query($conn,$sql);

?>


<!-- Trainers Section -->
<section id="trainers" class="section trainers">

  <div class="container">

    <div class="row gy-5">
    <?php while($row=mysqli_fetch_assoc($result)):?>
      <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
        <div class="member-img">
          <img src="../public/images/<?php echo $row['image']?>" class="img-fluid" alt="">
          <div class="social">
            <a href="<?php echo $row['twitter_link']?>" target="_blank"><i class="bi bi-twitter-x"></i></a>
            <a href="<?php echo $row['facebook_link']?>" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="<?php echo $row['instagram_link']?>" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="<?php echo $row['linkedin_link']?>" target="_blank"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="member-info text-center">
          <h4><?php echo $row['name']?></h4>
          <span><?php echo $row['subject']?></span>
          <p><?php echo $row['description']?></p>
        </div>
      </div><!-- End Team Member -->
     <?php  endwhile;
     mysqli_close($conn);
     
     ?>


    </div>

  </div>

</section><!-- /Trainers Section -->

</main>