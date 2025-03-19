
<?php
 
 $page=isset($_GET['page']) ? $_GET['page']:'';
//  echo "$page"; 
 
 ?>
 <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Mentor</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="?page=home/home" class="<?php echo($page=='home/home') ? 'active' : '' ?>">Home<br></a></li>
          <li><a href="?page=about/about" class="<?php echo($page=='about/about') ? 'active' : '' ?>">About</a></li>
          <li><a href="?page=course/course" class="<?php echo($page=='course/course') ? 'active' : '' ?>">Courses</a></li>
          <li><a href="?page=trainer/trainer" class="<?php echo($page=='trainer/trainer') ? 'active' : '' ?>">Trainers</a></li>
          <li><a href="?page=event/event" class="<?php echo($page=='event/event') ? 'active' : '' ?>">Events</a></li>
          <li><a href="pricing.html" class="<?php echo($page=='trainer/add_trainer') ? 'active' : '' ?>">Pricing</a></li>
          <li class="dropdown"><a href="#" class="<?php echo($page=='trainers/add_trainer') ? 'active' : '' ?>"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="?page=contact/contact" class="<?php echo($page=='contact/contact') ? 'active' : '' ?>">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="courses.html">Get Started</a>

    </div>
  </header>