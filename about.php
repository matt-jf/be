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
  <link href='https://fonts.googleapis.com/css?family=Reem Kufi' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Redressed" />
    <title>Album</title>
    <style type="text/css">
    .container{
       margin-left:10%;
       
    }
    * {
        font-family:'Redressed';
      }
    body{
        background-image: url("gold_bg.png");
          height: 100%;
          width: 100%;
      }  
      p{
        font-family: 'Reem Kufi';
        color : black;

    }
    .topnav {
      margin-top: -10px;
      margin-left:-10px;
  overflow: hidden;
  background-color: #8E6F55;
}

.topnav a {
  float: left;
  display: block;
  color: #442813;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  background-color:#8E6F55;
}

.topnav a:hover {
  background-color: #ddd;
  color: #8E6F55;
}

.topnav a.active {
 
  color: white;
}

.topnav .icon {
  display: none;
}
.topnav-right {
  float: right;
}
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
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
div.about {
  margin: 30px;
  float: left;
  padding: 15px;
  width: 25%;
}
div.about_title {
  margin: 200px;
  text-align: center;
  width:60%;
  padding: 200px;
}


div.about img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
.footer {
  position: static;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  text-align: center;
  color:black;
}

    </style>
  </head>
  <body class="h-vh-100 bg-brandColor2">
  <div class="topnav" id="myTopnav">
  <a style="color: white;">Billie Eilish</a>
  <div class="topnav-right">
  <a href="home.php">Home</a>
  <a class="active" href="about.php">About</a>
  <a href="album.php">Album</a>
  <a href="galery.php">Galery</a>
  <a href="tour.php">Tour</a>
    <a href="logout.php">Logout</a>
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
<center><h1>ABOUT</h1></center>
    <img src="Don't_Smile_at_Me.png"  width="300" height="300">
    <img src="happier_than_ever.jpg"  width="300" height="300">
    <img src="When_We_All_Fall_Asleep,_Where_Do_We_Go.png"  width="300" height="300">
    <center><h2>Billie Eilish</h1></center>
    <center><h4>Billie Eilish Pirate Baird O'Connell adalah seorang penyanyi dan penulis lagu asal Amerika Serikat. Pada 2016, Eilish merilis single debutnya, "Ocean Eyes" yang kemudian menjadi viral. EP Debutnya Don't Smile at Me dirilis pada bulan Agustus tahun 2017. Eilish dibesarkan di Highland Park, Los Angeles dari keluarga aktor dan musisi. Orang tuanya adalah Maggie Baird dan Patrick O'Connell. Ia memiliki keturunan Irlandia dan Skotlandia. Ia bersekolah di rumah dan bergabung dengan Paduan Suara Anak-anak Los Angeles pada usia delapan tahun. Pada usia 11 tahun, Eilish mulai menulis dan menyanyikan lagu-lagunya sendiri. Mengikuti jejak kakaknya, Finneas O'Connell yang sudah menulis dan memproduksi lagu-lagunya sendiri dengan bandnya.</h4></center>
</div>

<div class="footer"><strong>© SNEE</strong></div>
</body>
</html>