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
        background-color: black;
          height: 100%px;
          width: 100%;

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
div.gallery {
  margin: 30px;
  border: 1px solid ;
  float: left;
  width: 40%;
  font-size : 40px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
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
  <a href="about.php">About</a>
  <a class="active" href="album.php">Album</a>
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
<div class="gallery">
    <img src="happier_than_ever.jpg"  width="600" height="400">
  <div class="desc">
  <a target="_blank"style="color: white;" href="https://www.youtube.com/watch?v=66TYJJObd6E">Happier Than Ever</a>
  </div>
</div>

<div class="gallery">
    <img src="Live_at_Third_Man_Records.jpg"  width="600" height="400">
  <div class="desc">
  <a target="_blank" style="color: white;" href="https://www.youtube.com/watch?v=9F_YUo_UwG4">LIVE AT THIRD MAN RECORDS</a>
  </div>
</div>
<div class="gallery">
    <img src="When_We_All_Fall_Asleep,_Where_Do_We_Go.png"  width="600" height="400">
  <div class="desc">
  <a target="_blank" style="color: white;" href="https://www.youtube.com/watch?v=XJBUWZsT38c&list=OLAK5uy_kQbMBLWm9sUrVNnooayU8ilISrC7KintI">When We All Fall Asleep, Where Do We Go?</a>
  </div>
</div>

<div class="gallery">
    <img src="Don't_Smile_at_Me.png"  width="600" height="400">
  <div class="desc">
  <a target="_blank"style="color: white;" href="https://www.youtube.com/watch?v=ebb5AinKxWI&list=OLAK5uy_mYmH6NFnJ6IaH3Ln3wGeVimrFk8FXKzcA">Don't Smile at Me</a>
  </div>
</div>
  </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="footer"><strong>© SNEE</strong></div>

</body>
</html>