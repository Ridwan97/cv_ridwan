<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <link rel="stylesheet" href="assets/css/style.css">

  <title>CV | Muhammad Ridwan</title>
</head>
<body>
 <!-- Navbar -->

 <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-nav">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Muhammad Ridwan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pendidikan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pengelaman Kerja</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- Jumbotron -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0DCAF0" fill-opacity="1" d="M0,64L30,96C60,128,120,192,180,218.7C240,245,300,235,360,213.3C420,192,480,160,540,128C600,96,660,64,720,42.7C780,21,840,11,900,32C960,53,1020,107,1080,138.7C1140,171,1200,181,1260,160C1320,139,1380,85,1410,58.7L1440,32L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>
<?php include "jumbotron.php" ?>

<!-- About -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#0DCAF0" fill-opacity="1" d="M0,224L30,192C60,160,120,96,180,74.7C240,53,300,75,360,85.3C420,96,480,96,540,101.3C600,107,660,117,720,128C780,139,840,149,900,154.7C960,160,1020,160,1080,138.7C1140,117,1200,75,1260,96C1320,117,1380,203,1410,245.3L1440,288L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
</svg>
<?php include "about.php" ?>

<!-- Pendidikan -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0DCAF0" fill-opacity="1" d="M0,224L30,192C60,160,120,96,180,74.7C240,53,300,75,360,85.3C420,96,480,96,540,101.3C600,107,660,117,720,128C780,139,840,149,900,154.7C960,160,1020,160,1080,138.7C1140,117,1200,75,1260,96C1320,117,1380,203,1410,245.3L1440,288L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg> 
<?php include "pendidikan.php" ?>

<!-- Kerja -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0DCAF0" fill-opacity="1" d="M0,0L30,10.7C60,21,120,43,180,74.7C240,107,300,149,360,149.3C420,149,480,107,540,112C600,117,660,171,720,170.7C780,171,840,117,900,101.3C960,85,1020,107,1080,112C1140,117,1200,107,1260,90.7C1320,75,1380,53,1410,42.7L1440,32L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
<?php include "kerja.php" ?>

<!-- Side Project -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0DCAF0" fill-opacity="1" d="M0,288L30,277.3C60,267,120,245,180,213.3C240,181,300,139,360,138.7C420,139,480,181,540,165.3C600,149,660,75,720,74.7C780,75,840,149,900,192C960,235,1020,245,1080,234.7C1140,224,1200,192,1260,192C1320,192,1380,224,1410,240L1440,256L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>
<?php include "project.php" ?>


<!-- Panitia -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0DCAF0" fill-opacity="1" d="M0,0L10.9,21.3C21.8,43,44,85,65,106.7C87.3,128,109,128,131,138.7C152.7,149,175,171,196,202.7C218.2,235,240,277,262,261.3C283.6,245,305,171,327,128C349.1,85,371,75,393,85.3C414.5,96,436,128,458,138.7C480,149,502,139,524,144C545.5,149,567,171,589,181.3C610.9,192,633,192,655,197.3C676.4,203,698,213,720,218.7C741.8,224,764,224,785,229.3C807.3,235,829,245,851,218.7C872.7,192,895,128,916,112C938.2,96,960,128,982,122.7C1003.6,117,1025,75,1047,96C1069.1,117,1091,203,1113,240C1134.5,277,1156,267,1178,224C1200,181,1222,107,1244,90.7C1265.5,75,1287,117,1309,133.3C1330.9,149,1353,139,1375,133.3C1396.4,128,1418,128,1429,128L1440,128L1440,320L1429.1,320C1418.2,320,1396,320,1375,320C1352.7,320,1331,320,1309,320C1287.3,320,1265,320,1244,320C1221.8,320,1200,320,1178,320C1156.4,320,1135,320,1113,320C1090.9,320,1069,320,1047,320C1025.5,320,1004,320,982,320C960,320,938,320,916,320C894.5,320,873,320,851,320C829.1,320,807,320,785,320C763.6,320,742,320,720,320C698.2,320,676,320,655,320C632.7,320,611,320,589,320C567.3,320,545,320,524,320C501.8,320,480,320,458,320C436.4,320,415,320,393,320C370.9,320,349,320,327,320C305.5,320,284,320,262,320C240,320,218,320,196,320C174.5,320,153,320,131,320C109.1,320,87,320,65,320C43.6,320,22,320,11,320L0,320Z"></path></svg>
<?php include "panitia.php" ?>




<!-- sertifikat -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0DCAF0" fill-opacity="1" d="M0,256L17.1,256C34.3,256,69,256,103,234.7C137.1,213,171,171,206,144C240,117,274,107,309,122.7C342.9,139,377,181,411,170.7C445.7,160,480,96,514,69.3C548.6,43,583,53,617,58.7C651.4,64,686,64,720,69.3C754.3,75,789,85,823,96C857.1,107,891,117,926,149.3C960,181,994,235,1029,256C1062.9,277,1097,267,1131,240C1165.7,213,1200,171,1234,170.7C1268.6,171,1303,213,1337,240C1371.4,267,1406,277,1423,282.7L1440,288L1440,0L1422.9,0C1405.7,0,1371,0,1337,0C1302.9,0,1269,0,1234,0C1200,0,1166,0,1131,0C1097.1,0,1063,0,1029,0C994.3,0,960,0,926,0C891.4,0,857,0,823,0C788.6,0,754,0,720,0C685.7,0,651,0,617,0C582.9,0,549,0,514,0C480,0,446,0,411,0C377.1,0,343,0,309,0C274.3,0,240,0,206,0C171.4,0,137,0,103,0C68.6,0,34,0,17,0L0,0Z"></path></svg>
<?php include "sertifikat.php" ?>




<!-- Portofolio -->
<section class="portofolio">
  <div class="container">
    <h1>Portofolio</h1>
    <hr class="col-2">  
    <div class="row justify-content-start">
      <div class="col-8">
        <h4><b>Aplikasi E-Commerce Berbasis Website</b></h4>
        <h4><b>Aplikasi Marketplace Berbasis Website </b></h4>
        <h4><b>Wordpress Website Sistem Informasi</b></h4>
        <h4><b>Aplikasi Penggajian Menggunakan PPH 21 Berbasis Website</b></h4>
        <h4><b>Rancang Bangun Lab E-Commerce  </b></h4>
        <h4><b>Video Teaser Unsia Sistem Informasi</b></h4>
        <h4><b>IG Unsia Sistem Informasi</b></h4>
      </div>
    </div>
    <?php   include "portofolio.php" ?>

    ​

  </section>

  <!-- Software -->
  <section class="software">
   <div class="container">
    <h1>Software</h1>
    <hr class="col-2">  
    <div class="row justify-content-start">
      <div class="col-8">
        <h4><b>Microsoft Office</b></h4>
        <h4><b>Adobe Photoshop</b></h4>
        <h4><b>Adobe Ilustator</b></h4>
        <h4><b>Vegas Pro 17</b></h4>
        <h4><b>Sketchup Pro 8</b></h4>
      </div>
    </div>
  </div>
</section>

<!-- Programming -->
<section class="programming">
 <div class="container">
  <h1>Programming</h1>
  <hr class="col-2">  
  <div class="row justify-content-start">
    <div class="col-8">
      <h4><b>HTML 5 Intermediate</b></h4>
      <h4><b>CSS Fundamental</b></h4>
      <h4><b>Javascript Fundamaental</b></h4>
      <h4><b>PHP Fundamental</b></h4>
      <h4><b>MySql</b></h4>
      <h4><b>Framework CSS :Bootstrap</b></h4>
      <h4><b>Framework CSS :Materialize</b></h4>
      <h4><b>CMS Wordpress</b></h4>
    </div>
  </div>
</div>
</section>

<!-- Skills -->
<section class="skills">
 <div class="container">
  <h1>Skills</h1>
  <hr class="col-2">  
  <div class="row justify-content-start">
    <div class="col-8">
      <h4><b>Komunikasi</b></h4>
      <h4><b>Kerjasama</b></h4>
      <h4><b>Fleksibel</b></h4>
    </div>
  </div>
</div>
</section>
<div class="container">
  <div class="row">
    <div class="col-2">
      <span class="material-icons">mode_edit</span>
    </div>
    <div class="col-10">
      <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
      </div>        
    </div>
  </div>
  <i class="material-icons">cloud</i>
  

</div>

<div class="container">
  <p>
    <a class="btn btn-primary btn-lg" data-bs-toggle="collapse" href="#software" role="button" aria-expanded="false" aria-controls="software">Software</a>
    <button class="btn btn-primary btn-lg" type="button" data-bs-toggle="collapse" data-bs-target="#proramming" aria-expanded="false" aria-controls="proramming">Programming</button>
    <button class="btn btn-primary btn-lg" type="button" data-bs-toggle="collapse" data-bs-target="#skills" aria-expanded="false" aria-controls="skills">Skills</button>
    <button class="btn btn-primary btn-lg" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="software proramming">Toggle both elements</button>
  </p>
  <div class="row">
    <div class="col">
      <div class="collapse multi-collapse" id="software">
        <div class="card card-body">
          <ul>
            <h5>
              <li>Adobe Photoshop</li>
              <li>Adobe Ilustator</li>
              <li>Vegas Pro 17</li>
              <li>Sketchup Pro 8</li>
              <li>Figma</li>
            </h5>
          </ul>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="collapse multi-collapse" id="proramming">
        <div class="card card-body">
          <h5>
            <li>HTML 5 </li>
            <li>CSS </li>
            <li>PHP </li>
            <li>MySql</li>
            <li>Framework CSS : Bootstrap, Materiallize</li>
            <li>Framework PHP : Codeigniter</li>
            <li>CMS Wordpress</li>
          </h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="collapse multi-collapse" id="skills">
        <div class="card card-body">
          <li>Komunikasi</li>
          <li>Kerjasama</li>
          <li>Fleksibel</li>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br><br><br>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</body>
</html>