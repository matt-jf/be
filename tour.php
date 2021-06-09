<?php
  include('koneksi.php');
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi&display=swap" rel="stylesheet">
  <title>Tour | Billie Eilish</title>
  <style type="text/css">
    body {
      background-color: #BDAFA2;
      text-align: center;
      height: 100%;
      width: 100%;
      font-family: 'Redressed';
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
      font-family: 'Reem Kufi'
    }

    table thead th {
      background-image: url("gold_bg.png");
      color: #FFE0C8;
      padding: 10px;
      text-align: center;
      text-decoration: none;;
    }

    table tbody td {
      color: #442813;
      text-align: center;
      padding: 10px;S;
    }

    a {
      background-image: url("gold_bg.png");
      color: #FFE0C8;
      padding: 10px;
      text-decoration: none;
      font-size: 12px;
      font-family: 'Redressed';
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
      .topnav a:not(:first-child) {
        display: none;
      }
      .topnav a.icon {
        float: right;
        display: block;
      }
    }

      @media screen and (max-width: 600px) {
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
      <a style="color: #442813;font-size: 130%;"href="home.php">Home</a>
      <a style="color: #442813;font-size: 130%;" href="about.php">About</a>
      <a style="color: #442813;font-size: 130%;" href="album.php">Album</a>
      <a style="color: #442813;font-size: 130%;" href="galery.php">Galery</a>
      <a class="active" style="font-size: 130%;" href="tour.php">Tour</a>
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
    <br>
    <img src='tour-name.png' alt='Happier Than Ever Tour' style="width: 40%;" />
    <p style="font-size: 110%; color: #684C37; padding-left: 10%;padding-right: 10%;">North America: Verified Fan pre-sale begins on Wednesday 5/26 at 12pm local time. Public on-sale begins Friday 5/28 at 12pm local time.</p>
    <p style="color: #684C37; font-size: 110%;padding-left: 10%;padding-right: 10%;">UK & Europe: The pre-sale is now open for Billie’s 2022 shows in the UK & Europe. Public on sale begins Friday 5/28 at 10am local time.</p>
    <table>
      <thead>
        <tr>
          <th>Date</th>
          <th>Name</th>
          <th>Location</th>
          <th>Link</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $query = "SELECT * FROM tour ORDER BY id_tour ASC";
          $result = mysqli_query($koneksi, $query);
          if(!$result){
            die ("Query Error: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
          }
          $no = 1;
          while($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
              <td><?php echo $row['date_tour']; ?></td>
              <td><?php echo $row['name_tour']; ?></td>
              <td><?php echo $row['location_tour']; ?></td>
              <td><a href="<?php echo $row['link_tour']; ?>">Tickets</a> </td>          
            </tr>
        <?php
            $no++;
          }
        ?>
      </tbody>
    </table>
  </div>
  <div class="footer"><strong>© SNEE</strong></div>
</body>
</html>
