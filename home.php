<?php
  include('koneksi.php');
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>Home</title>
    <style type="text/css">
      * {
        font-family: Redressed, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      }
      body{
        background-image: url("gold_bg.png");
          text-align: center;
          height: 100%;
          width: 100%;
      }  
      h1 {
        text-transform: uppercase;
        color: white;
        font-family: Redressed;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
      background-color:white;
        font-family: Redressed;
    }
    table thead th {
        background-image: url("gold_bg.png");
        border: solid 1px #DDEEEE;
        color: #FFE0C8;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #FFE0C8;
        text-decoration: none;
        font-family: Redressed;
    }
    table tbody td {
      background-image: url("gold_bg.png");
        border: solid 1px #DDEEEE;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
        font-family: Redressed;
    }
    a {
      background-image: url("gold_bg.png");
      color: #FFE0C8;
      padding: 10px;
      text-decoration: none;
      font-size: 12px;
        font-family: Redressed;
    }
    input[type=submit]{
      background-color: #FFE0C8; 
      color: #684C37; 
      padding: 10px ;
      border: none; 
        font-family: Redressed;
    }
    .topnav {
      margin-top: -10px;
      margin-left:-10px;
        font-family: Redressed;
  overflow: hidden;
  background-image: url("gold_bg.png");
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
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
  <a>Billie Eilish</a>
  <div class="topnav-right">
  <a class="active" href="home.php">Home</a>
  <a href="about.php">About</a>
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
    <img src='happier_than_ever.jpg' alt='Happier Than Ever'/>
    <center><h2 style="font-family:Redresser">Happier Than Ever</h1><center>
    <center><h4 style="font-family:Redresser">Album Out July 30</h4></center>
    <center><h4 style="font-family:Redresser"><a href="https://billieeilish.lnk.to/HappierThanEver">Pre-Order</a>
    <br>
    <center><h1>Notes</h1><center>
    <center><a href="create_note.php">+ &nbsp; Add Note</a><center>
    <br/>
    <table>
    <?php
      $result = $koneksi->query("SELECT * FROM note");
      if(!$result){
        echo 'No Notes';
      } else {
        while ($note = $result->fetch_object()) {
            echo "<h3 style=\"font-family:Redresser\">$note->title_note</h3>";
            echo "<p style=\"font-family:Redresser\">$note->content_note</p>";
            echo "<a style=\"font-family:Redresser\" href=\"edit_note.php?id_note=$note->id_note\">Edit</a>";
            printf('<form action="delete_note.php" method="post"><input type="hidden" name="id_note" value="%d"><input type="submit" value="Delete"></form>', $note->id_note);
        }
      }
    ?>
    </table>
    </div>
    <div class="footer"><strong>© SNEE</strong></div>

  </body>
</html>
