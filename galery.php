<?php
  ini_set('error_reporting()', E_ALL);
  ini_set('display_errors', true);
  include('koneksi.php');
  session_start();
  if (!empty($_SESSION['app123_logged_in'])) {
  } else {
    header('Location: login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Galery | Billie Eilish</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@300&display=swap" rel="stylesheet">
  <style type="text/css">    
    body {
      background-color: black;
      font-family: 'Advent Pro';
      color: white;
      height: 100%;
      width: 100%;
    }

    a {
      background-image: url("gold_bg.png");
      padding: 10px;
      color: white;
      text-decoration: none;
    }

    input[type=submit] {
      background-color: #FFE0C8; 
      color: #684C37; 
      padding: 10px ;
      border: none; 
      font-family: Redressed;
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
      .topnav a:not(:first-child) {
        display: none;
      }
      .topnav a.icon {
        float: right;
        display: block;
      }
    }

    @media screen and (max-width: 200%) {
      .topnav.responsive {
        position: relative;
      }

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

    .grid-container{
      display: grid;
      padding-top: 5%;
      padding-left: 2%;
      grid-gap: 3%;
      align-content: center;
      align-items: center;
      grid-template-columns: 30% 30% 30%;
    }

    .footer {
      position: static;
      right: 0;
      bottom: 0;
      left: 0;
      padding: 1 rem;
      text-align: center;
      color:white;
    }
  </style>
</head>
<body>
  <div class="topnav" id="myTopnav">
    <a style="color: #D0BBA2; font-size: 140%; font-weight: 6;">Billie Eilish</a>
    <div class="topnav-right">
      <a style="color: #442813;font-size: 130%;"href="home.php">Home</a>
      <a style="color: #442813;font-size: 130%;" href="about.php">About</a>
      <a style="color: #442813;font-size: 130%;" href="album.php">Album</a>
      <a class="active" style="font-size: 130%;" href="galery.php">Galery</a>
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
  <div class="container" align="center">
    <p style="color: white;font-size: 200%">GALERY</p>
    <a style="font-size: 100%;" href="create_galery.php">Add Photo</a>
    <?php
      $query = "SELECT * FROM galery";
      $result = mysqli_query($koneksi, $query);
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
      }
    ?>
    <div class="grid-container">
    <?php
      while ($galery = $result->fetch_object()) {
        echo "<div class=\"item\">";
        echo "<img width = \"100%\" src='".$galery->photo_galery."'/>";
        echo "<br>";
        echo "<p style =\"color: white;font-size: 120%;\">$galery->name_galery</p>";
        echo "<a style=\"font-family:'Redressed'\" href=\"edit_galery.php?id_galery=$galery->id_galery\">Edit</a>";
        printf('<form action="delete_galery.php" method="post"><input type="hidden" name="id_galery" value="%d"><input type="submit" value="Delete"></form>', $galery->id_galery);
        echo "</div>";
      }
    ?>
    </div>
  </div>
  <br>
  <div class="footer"><strong>© SNEE</strong></div>
</body>
</html>
