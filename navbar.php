<?php include ('header.php') ?>

<section class="w3l-bootstrap-header">
  <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2">
    <div class="container">
     
    <a class="navbar-brand" href="index.html">
        <img src="assets/images/logo.png" alt="Your logo" title="Your logo">
    </a> 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">

        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  SUBJECTS
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Physics</a>
    <a class="dropdown-item" href="#">Chemistry</a>
    <a class="dropdown-item" href="#">Mathmatics</a>
  </div>
</div>
          <li class="nav-item">
            <a class="nav-link" href="index.html">FIND TUTORING JOBS
</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">
FIND A TUTOR</a>
          </li>
          <div class="notif-sec">
                           <a href="#"><img src="assets/images/bell.png"><span>02</span></a>
                       </div>
                     
        </ul>
        <div class="form-inline position-relative my-2 my-lg-0">
      	<button type="submit" class="btn btn-secondary btn-theme2">Sign in</button>
</div>
<div class="form-inline position-relative my-2 my-lg-0">
<button type="submit" class="btn btn-secondary btn-theme2">Register</button>
</div>
      </div>
    </div>
  </nav>
</section>
<?php include ('script.php') ?>