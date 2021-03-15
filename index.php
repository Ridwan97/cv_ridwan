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
  <style>
    a {
      text-decoration: none;
      color: black;
    }
  </style> 
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
  <title>CV | Muhammad Ridwan</title>
</head>
<body>
 <!-- Navbar -->

 <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-nav">
  <div class="container">
    <a class="navbar-brand" href="#">Muhammad Ridwan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#pendidikan">Pendidikan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#kerja">Pengelaman Kerja</a>
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
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0DCAF0" fill-opacity="1" d="M0,128L48,154.7C96,181,192,235,288,229.3C384,224,480,160,576,149.3C672,139,768,181,864,181.3C960,181,1056,139,1152,138.7C1248,139,1344,181,1392,202.7L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
<?php include "about.php" ?>

<!-- Pendidikan -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0DCAF0" fill-opacity="1" d="M0,128L48,154.7C96,181,192,235,288,229.3C384,224,480,160,576,149.3C672,139,768,181,864,181.3C960,181,1056,139,1152,138.7C1248,139,1344,181,1392,202.7L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
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
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0DCAF0" fill-opacity="1" d="M0,192L26.7,186.7C53.3,181,107,171,160,144C213.3,117,267,75,320,96C373.3,117,427,203,480,229.3C533.3,256,587,224,640,186.7C693.3,149,747,107,800,117.3C853.3,128,907,192,960,224C1013.3,256,1067,256,1120,250.7C1173.3,245,1227,235,1280,234.7C1333.3,235,1387,245,1413,250.7L1440,256L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>
<section class="portofolio bg-info">
  <div class="container">
    <h1>Portofolio</h1>
    <hr class="col-2">  
    <div class="row justify-content-start">
      <div class="col-8">
        <ul>
          <li>
            <a href="#"> 
              <h4 data-bs-toggle="modal" data-bs-target="#portofolio1">
                <b>Aplikasi E-Commerce Berbasis Website</b>
              </h4>
            </a>
          </li>
          <li>
            <a href="#">
              <h4 data-bs-toggle="modal" data-bs-target="#portofolio2">
                <b>Rancang bangun Ruangan Lab E-commerce </b></h4>
              </a>
            </li>
            <li>
             <a href="#"> <h4 data-bs-toggle="modal" data-bs-target="#portofolio3"><b>Wordpress Website Sistem Informasi</b></h4></a>
           </li>
           <li>        
             <a href="#"> <h4 data-bs-toggle="modal" data-bs-target="#portofolio4"><b>Video Teaser Unsia Sistem Informasi</b></h4></a>
           </li>
           <li>
             <a href="#"> <h4 data-bs-toggle="modal" data-bs-target="#portofolio5"><b>IG Unsia Sistem Informasi</b></h4></a>
           </li>
           <li>
             <a href="#"> <h4 data-bs-toggle="modal" data-bs-target="#portofolio6"><b>Website Marketplace</b></h4></a>
           </li>
           <li>
             <a href="#"><h4 data-bs-toggle="modal" data-bs-target="#portofolio7"><b>Aplikasi Payroll</b></h4></a>
           </li>
         </ul>
       </div>
     </div>
     <div class="modal fade" id="portofolio1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Website E-Commerce</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img src="assets/img/01.png" class="img-fluid img-thumbnail" >
            <p class="justify">
              Website ini dibuat akhir tahun 2018.
              sebagai persyaratan untuk masuk sebagai asisten labolaotrium info 1 (sekarang jadi lab e-commerce).
              lalu dikembangkan lagi pada tahun 2020.
              untuk mengikuti seertifkiasi bnsp.
              <br> <br>
              Untuk tampilan admin menggunakan template <a href="https://www.free-css.com/free-css-templates/page204/binary-admin" target="_blank"> binary admin.</a><br>
              menggunakan database mysql, php 7 native, framework css bootstrap 4, sedikit sentuhan javascript. 
              Untuk tampilan pelanggan menggunakan template parallax dari <a href="  https://materializecss.com/templates/parallax-template/preview.html" target="_blank"> materialize</a>
              <br>
              menggunakan database mysql, php 7 native, framework css materialize, sedikit sentuhan javascript.
              <br> <br>
              Jika ada kritik dan saran yang membangun silahkan email saya : <b>Ridwan.Satrawijaya@gmail.com</b>
              <br>*ps silahkan download & pelajari website ini secara gratis. tidak untuk diperjualbelikan / komersial.</p>
            </div>
            <div class="modal-footer">
             link : <a href="https://github.com/Ridwan97/E-Commerce" target="_blank"> E-Commerce</a>
           </div>
         </div>
       </div>
     </div>

     <div class="modal fade" id="portofolio2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Rancang Bangun Ruangan Lab E - Commerce</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img src="assets/img/02.png" class="img-fluid img-thumbnail" >
            <p class="justify">Rancang Bangun Lab E-Commerce meggunakan software Sketchup 8 dengan skala 1 : 1</p>
          </div>
          <div class="modal-footer">
            link : <a href="https://www.youtube.com/watch?v=R_Oa1qOZJsk" target="_blank">Rancang Bangun Ruangan Lab E-Commerce</a>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="portofolio3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Wordpress FTKI - SI</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img src="assets/img/03.png" class="img-fluid img-thumbnail" >
            <p class="justify">
              Memabatu Melakukan Memodifikasi, Penambahan, fitur / tools Website Fakultas Teknologi Komunikasi dan Informatika Prodi Sistem Informasi Universitas Nasional.
            </p>
          </div>
          <div class="modal-footer">
            <p>
             Link : <a href="http://si.ftki.unas.ac.id/" target="_blank">FTKI - SI</a>
           </p>
         </div>
       </div>
     </div>
   </div>

   <div class="modal fade" id="portofolio4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Video Teaser Sistem Informasi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="assets/img/04.png" class="img-fluid img-thumbnail" >
          <p>
            Pembuatan Akun Youtube UNSIA Sistem Informasi sebagai media promosi digital dimana sudah ada 2 Video yang telah dibuat seperti <a href="https://www.youtube.com/watch?v=nH_vbBhTxuA" target="_blank">Mengapa memilih UNSIA Sistem Informasi </a> dan <a href="youtube.com/watch?v=MozcWe_hoNM&t=29s" target="_blank"> Pengenalan Dosen dan Aktivitas pembelajaran</a>
          </p>
        </div>
        <div class="modal-footer">
          <p>link : <a href="https://www.youtube.com/channel/UC_ODfTwlB-Bxs4flbuWQpcA" target="_blank">Youtube UNSIA Sistem Informasi</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="portofolio5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Instagram Pordi Sistem Informasi UNSIA</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="assets/img/05.png" class="img-fluid img-thumbnail" >
          <p class="justify">
            Sebagai sarana promosi Program Studi Sistem Informasi Universitas Siber Asia di bidang digital maka diperlukannya official akun Instagram tersebut. Agar dapat dikenal orang banyak, dan mengedukasi alasan mengapa kuliah di prodi sistem informasi Universitas Siber Asia  pembuatan thumbnail ini menggunkana tools Adobe Photoshop dan Canva.
          </p>
        </div>
        <div class="modal-footer">
          <p>link : <a href="#" target="_blank">Instagram Sistem Infortmasi Siber Asia</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="portofolio6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Website Marketplace</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="assets/img/06.png" class="img-fluid img-thumbnail" >
          <p class="justify">
            Website ini merupakan pengembangan dari website e-commerce, menjadi Marketplace.
            Website ini memiliki 4 aktor yaitu, pelanggan, pengunjung, penjual dan admin.
            Website Marketplace ini sebagai tugas akhir saya. 
            Dan sudah saya buat dalam bentuk jurnal dan sudah di publish : <a href="              http://journal.lembagakita.org/index.php/jtik/article/view/209/pdf" target="_blank">JTIK</a>
            <br><br>
            menggunakan database mysql, php 7 native, framework css materialize, sedikit sentuhan javascript.
            menggunakan API RajaOngkir, mpdf
            <br><br>
            *ps silahkan download & pelajari website ini secara gratis. tidak untuk diperjualbelikan / komersial. <br>
            Jika ada kritik dan saran yang membangun silahkan email saya : <b>Ridwan.Satrawijaya@gmail.com </b>
          </p>
        </div>
        <div class="modal-footer">
         <p>link : <a href="https://github.com/Ridwan97/marketplace" target="_blank"><b>Marketplace</b></a></p>
       </div>
     </div>
   </div>
 </div>

 <div class="modal fade" id="portofolio7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Aplikasi Payroll</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="assets/img/07.png" class="img-fluid img-thumbnail" >
        <p class="justify">
          Website ini adalah website sistem penggajian / payroll.
          yang berisi tetang sistem penggajian selama setahun yang dimana telah terhitung juga perhitungan Pajak Penghasilan Pasal 21, Penghasilan Tidak Kena Pajak, Perhitungan THR, BPJSTK, BPJS Kesehatan, BPJS Jaminan Hari Tua, BPJS Keceleakaan Kerja. <br> 
          Website ini menggunakan tempalate admin : 
          <a href="https://github.com/rahmato/free-materialize-material-design-admin-template" target="_blank"> template</a>

          menggunakan database mysql, php 7 native, framework css materialize, sedikit sentuhan javascript.
          menggunakan API mpdf.
          <br><br>
          *ps silahkan download & pelajari website ini secara gratis. tidak untuk diperjualbelikan / komersial.
          Jika ada kritik dan saran yang membangun silahkan email saya : <b>Ridwan.Satrawijaya@gmail.com</b>
        </p>
      </div>
      <div class="modal-footer">
        <p>link : <a href="https://github.com/Ridwan97/payroll" target="_blank"><b>Payroll</b></a></p>
      </div>
    </div>
  </div>
</div>
​

</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0DCAF0" fill-opacity="1" d="M0,64L26.7,74.7C53.3,85,107,107,160,112C213.3,117,267,107,320,128C373.3,149,427,203,480,202.7C533.3,203,587,149,640,122.7C693.3,96,747,96,800,117.3C853.3,139,907,181,960,170.7C1013.3,160,1067,96,1120,69.3C1173.3,43,1227,53,1280,69.3C1333.3,85,1387,107,1413,117.3L1440,128L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path></svg>


<div class="container">
  <div class="row  align-items-center">
    <div class="col-1">

    </div>
    <div class="col-4">
      <a class="btn btn-primary btn-lg mb-3" data-bs-toggle="collapse" href="#software" role="button" aria-expanded="false" aria-controls="software">Software</a>  
    </div>
    <div class="col-5">
      <button class="btn btn-primary btn-lg mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#proramming" aria-expanded="false" aria-controls="proramming">Programming</button>  
    </div>
    <div class="col-2">
      <button class="btn btn-primary btn-lg mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#skills" aria-expanded="false" aria-controls="skills">Skills</button>  
    </div>
    
    
    
  </div>
  <div class="row ">
    <div class="col-md-3">
      <div class="collapse multi-collapse" id="software">
        <div class="card card-body tiga mb-3">
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
    <div class="col-md-5">
      <div class="collapse multi-collapse" id="proramming">
        <div class="card card-body tiga mb-3">
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
    <div class="col-md-4">
      <div class="collapse multi-collapse" id="skills">
        <div class="card card-body tiga mb-3">
         <h5>
          <li>Komunikasi</li>
          <li>Kerjasama</li>
          <li>Fleksibel</li>
        </h5>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Footer -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0DCAF0" fill-opacity="1" d="M0,320L48,272C96,224,192,128,288,122.7C384,117,480,203,576,250.7C672,299,768,309,864,282.7C960,256,1056,192,1152,186.7C1248,181,1344,235,1392,261.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>


<nav class="navbar sticky-bottom navbar-light bg-info">
  <div class="container">
    <div class="row justify-content-start col-md-12">
      <div class="col-5">
        <h5><b>CV Muhammad Ridwan </b></h5>
        <hr class="bg-warning col-3">
        <p class="justify strong">Saya adalah seorang lulusan mahasiswa sistem informasi yang mempunyai passion dibidang IT khususnya dibidang website, dan juga design. Saya dapat bekerja secara individu maupun kelompok. Berikut saya lampirkan daftar riwayat hidup saya selama ini. Agar menjadi pertimpangan bapak/ibu.</p>
      </div>
      <div class="col-3">
        <h5><b>Social Media</b></h5>
        <hr class="bg-warning col-1">
        <div class="mb-3">
         <a href="https://www.linkedin.com/in/ridwan08/" target="_blank">
          <ion-icon name="logo-linkedin" size="large"></ion-icon>
          <span class="h3">Lindkedin</span> <br>
        </a>
      </div>
      <div class="mb-3">
        <a href="https://www.facebook.com/Sastrawijaya97/" target="_blank">
          <ion-icon name="logo-facebook" size="large"></ion-icon>
          <span class="h3">Facebook</span> <br>
        </a>
      </div>
      <div class="mb-3">
        <a href="https://www.instagram.com/ridwan.sastrawijaya/" target="_blank">
          <ion-icon name="logo-instagram" size="large"></ion-icon>
          <span class="h3">Instagram</span> <br>
        </a>
      </div>
    </div>
    <div class="col-4">
      <h5><b>Contact Me</b></h5>
      <hr class="bg-warning col-1 strong">
      <div class="mb-3">
        <a href="https://github.com/Ridwan97" target="_blank">
          <ion-icon name="logo-github" size="large"></ion-icon>
          <span class="h3">Ridwan97</span> <br>
        </a>
      </div>
      <div class="mb-3"> 
        <a href="" target="_blank">
          <ion-icon name="logo-whatsapp" size="large"></ion-icon>
          <span class="h3">0851 5642 4144</span> <br>
        </a>     
      </div>
      <div class="mb-3">
        <a href="" target="_blank">
          <ion-icon name="mail-sharp" size="large"></ion-icon>
          <span class="h5">Ridwan.Sastrawijaya@gmail.com</span> <br>
        </a>
      </div>
    </div>

    <div class="row mt-3">
      <div class="h6 text-end">
        ©2021 Copyright Design & Text <a class="" href="https://github.com/Ridwan97/cv_ridwan" target="_blank"> Muhammad Ridwan</a>
      </div>
      <span class="text-muted text-end">Ridwan.Sastrawijaya@gmail.com</span>
    </div>

   

  </div>    
</nav>



<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</body>
</html>