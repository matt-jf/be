<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <style>
      .isi{
        background-color:white;
          text-align: center;
          width: 400px;
          border-radius: 10px;
      }
      input{
            padding: 12px 20px; 
            margin: 8px 0; 
            display: inline-block; 
            border: 1px solid #ccc; 
            box-sizing: border-box;
            width: 60%;
            border-radius: 10px;
        }
        input[type=submit]{
            background-color:#328fa8; 
            color: white; 
            padding: 8px 20px; 
            margin: 4px 0; 
            border: none; 
            cursor: pointer; 
            width: 60%;
        }
        body{
            background-image: url("original.jpg");
          text-align: center;
          height: 100%;
          width: 100%;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    </style>
</head>
<body>
    <center>
        <div class="cointaner">
            <br><br><br>
            <div class="isi">
                <br>
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
                  <p>Don't Have an Account?   <a class="txt2" href="register.php">
                        Register
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
                <br><br>
            </div>
            
        </div>
    </center>
    
    
 
</body>
</html>
