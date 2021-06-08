<?php
  include('koneksi.php');
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
    <title>Home | Billie Eilish</title>
    <style type="text/css">
      * {
        font-family: 'Redressed';
      }
      body{
        background-color: #BDAFA2;
          text-align: center;
          height: 100%;
          width: 100%;
      }  
      h1 {
        text-transform: uppercase;
        color: white;
        font-family: 'Redressed';
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
      background-color:white;
        font-family: 'Redressed';
    }
    table thead th {
        background-image: url("gold_bg.png");
        border: solid 1px #DDEEEE;
        color: #FFE0C8;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #FFE0C8;
        text-decoration: none;
        font-family: 'Redressed';
    }
    table tbody td {
      background-image: url("gold_bg.png");
        border: solid 1px #DDEEEE;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
        font-family: 'Redressed';
    }
    a {
      background-image: url("gold_bg.png");
      color: #FFE0C8;
      padding: 10px;
      text-decoration: none;
        font-family: 'Redressed';
    }
    input[type=submit]{
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
  background-color:black;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #328fa8;
  color: #D0BBA2;
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
  <body>
  <div class="topnav" id="myTopnav">
  <a style="color: #D0BBA2; font-size: 140%; font-weight: 6;">Billie Eilish</a>
  <div class="topnav-right">
  <a class="active" style="font-size: 130%;"href="home.php">Home</a>
  <a style="color: #442813;font-size: 130%;" href="about.php">About</a>
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
    <br>
    <img src='happier_than_ever.jpg' alt='Happier Than Ever' style="width: 40%;height: 40%;" />
    <center><p style="color: #684C37;font-family:'Redressed';font-size: 150%">Happier Than Ever</p><center>
    <center><p style="color: #684C37;font-family:'Redressed';font-size: 100%">Album Out July 30</p></center>
    <center><a style="background-image: none; font-size: 80%" href="https://billieeilish.lnk.to/HappierThanEver">Pre-Order</a></center>
    <br>
    <center><p style="color: #684C37;font-size: 200%">NOTES</p></center>
    <center><a style="font-size: 80%" href="create_note.php">Add Note</a><center>
    <br/>
    <table>
    <?php
      $result = $koneksi->query("SELECT * FROM note");
      if(!$result){
        echo 'No Notes';
      } else {
        while ($note = $result->fetch_object()) {
            echo "<p style=\"padding-right: 10%; padding-left: 10%; color: #442813;font-family:'Redressed';font-size: 150%\">$note->title_note</p>";
            echo "<p style=\"padding-right: 10%; padding-left: 10%; color: #442813;font-family:'Redressed';font-size: 100%\">$note->content_note</p>";
            echo "<a style=\"font-family:'Redressed'\" href=\"edit_note.php?id_note=$note->id_note\">Edit</a>";
            printf('<form action="delete_note.php" method="post"><input type="hidden" name="id_note" value="%d"><input type="submit" value="Delete"></form>', $note->id_note);
        }
      }
    ?>
    </table>
    </div>
    <div class="footer"><strong>© SNEE</strong></div>
  </body>
</html>
