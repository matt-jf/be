<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Add New Song of One Direction</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      body{
          background-image: url("original.jpg");
          text-align: center;
          height: 100%;
          width: 100%;
      }  
      h1 {
        text-transform: uppercase;
        color: white;
      }
    button {
          background-color: #328fa8;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: #328fa8;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Add New Photo of One Direction</h1>
      <center>
      <form method="POST" action="proses_tambah_gallery.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Title</label>
          <input type="text" name="judul" autofocus="" required="" />
        </div>
        <div>
          <label>Photo of One Direction</label>
         <input type="file" name="foto" required="" />
        </div>
        <div>
         <button type="submit">Save</button>
        </div>
        </section>
      </form>
  </body>
</html>