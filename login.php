<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi&display=swap" rel="stylesheet">
  <title>Login | Billie Eilish</title>
  <style>
    * {
      font-family: 'Reem Kufi';
    }

    input {
      padding: 12px 20px; 
      margin: 8px 0; 
      display: inline-block; 
      border: 1px solid #ccc; 
      box-sizing: border-box;
      width: 60%;
      border-radius: 10px;
    }

    input[type=submit] {
      background-color:#328fa8; 
      color: white; 
      padding: 8px 20px; 
      margin: 4px 0; 
      border: none; 
      cursor: pointer; 
      width: 60%;
    }

    body {
      background-image: url(gold_bg.png);
      text-align: center;
      height: 100%;
      width: 100%;
    }

    a {
      background-image: url("gold_bg.png");
      color: #FFE0C8;
      padding: 10px;
      text-decoration: none;
      font-family: 'Reem Kufi';
    }

    input[type=submit] {
      background-color: #FFE0C8; 
      color: #684C37; 
      padding: 10px ;
      border: none;
      font-family: 'Reem Kufi';
    }

    .isi {
      align-items: center;
      padding: 3%;
      background-color:white;
      text-align: center;
      width: 47%;
    }
  </style>
</head>
<body>
  <br>
  <center><div class="isi">
    <h3>Member Login</h3><br>
    <form action="login_process.php" method="post">
      <div class="username" data-validate="Username is required">
        <label >
          Username: <br>
          <input type="text" name="username" required>
        </label>
      </div>
      <div class="password" data-validate="password is required">
        <label>
          Password:<br>
          <input type="password" name="password" required>
        </label>
      </div>
      <br>
      <div class="container-login100-form-btn">
        <input type="submit" value="LOGIN">
      </div>
    </form>
    <br><br>
    <div class="text-center p-t-136">
      <p>Don't Have an Account?   <a href="register.php">
      Register
      <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
      </a>
    </div>
  </div></center>
</body>
</html>