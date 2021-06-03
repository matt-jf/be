<?
session_start();
if ( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi&display=swap" rel="stylesheet">
    <title>About | Billie Eilish</title>
    <style type="text/css">
    .container{
       
    }
    * {
        font-family:'Redressed';
      }
    body{
      font-family:'Redressed';
        background-color: #BDAFA2;
          height: 100%;
          width: 100%;
      }  
      p{
        font-family:'Redressed';
        color : black;

    }
    .topnav {
      width: 100%;
      margin-top: -10px;
      margin-left:-10px;
        font-family: 'Redressed';
  overflow: hidden;
  background-image: url("gold_bg.png");
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 8px 10px;
  text-decoration: none;
  font-size: 17px;
  background-image: url("gold_bg.png");
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-image: url("gold_bg.png");
  color: #D0BBA2;
}

.topnav .icon {
  display: none;
}
.topnav-right {
  float: right;
}

@media screen and (max-width: 200%) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 200%) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
.footer {
  position: static;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  text-align: center;
  color:white;
}

    </style>
  </head>
  <body class="h-vh-100 bg-brandColor2">
  <div class="topnav" id="myTopnav">
  <a style="color: #D0BBA2; font-size: 140%; font-weight: 6;">Billie Eilish</a>
  <div class="topnav-right">
  <a style="color: #442813;font-size: 130%;"href="home.php">Home</a>
  <a class="active" style="font-size: 130%;" href="about.php">About</a>
  <a style="color: #442813;font-size: 130%;" href="album.php">Album</a>
  <a style="color: #442813;font-size: 130%;" href="galery.php">Galery</a>
  <a style="color: #442813;font-size: 130%;" href="tour.php">Tour</a>
  <a style="color: #442813;font-size: 130%;" href="logout.php">Logout</a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<div class="container">
<center><p style="color: #442813;font-size: 200%">ABOUT</p></center>
<div class="about_arts" align="center">
    <img src="Don't_Smile_at_Me.png" style="width: 27%; height: 27%; ">
    <img src="happier_than_ever.jpg" style="width: 27%; height: 27%; padding-right: 5%; padding-left: 5%;">
    <img src="When_We_All_Fall_Asleep,_Where_Do_We_Go.png"   style="width: 27%; height: 27%;">
  </div>
    <center><p style="color: #684C37; font-size: 180%;">Billie Eilish</p></center>
    <center><p style="font-family: 'Reem Kufi'; color: #684C37; font-size: 140%; padding-right: 10%; padding-left: 10%;">Billie Eilish Pirate Baird O'Connell adalah seorang penyanyi dan penulis lagu asal Amerika Serikat. Pada 2016, Eilish merilis single debutnya, "Ocean Eyes" yang kemudian menjadi viral. EP Debutnya Don't Smile at Me dirilis pada bulan Agustus tahun 2017. Eilish dibesarkan di Highland Park, Los Angeles dari keluarga aktor dan musisi. Orang tuanya adalah Maggie Baird dan Patrick O'Connell. Ia memiliki keturunan Irlandia dan Skotlandia. Ia bersekolah di rumah dan bergabung dengan Paduan Suara Anak-anak Los Angeles pada usia delapan tahun. Pada usia 11 tahun, Eilish mulai menulis dan menyanyikan lagu-lagunya sendiri. Mengikuti jejak kakaknya, Finneas O'Connell yang sudah menulis dan memproduksi lagu-lagunya sendiri dengan bandnya.</p></center>
</div>

<div class="footer"><strong>© SNEE</strong></div>
</body>
</html>
