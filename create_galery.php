<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Galery</title>
    <style>
        .container {
            padding: 24px;
            border: 1px solid black;
            width:500px;
            height:540px;
            margin:10px;
            background: #ededed;  
        }

        input {
            padding: 6px;
            width: 100%;
            box-sizing: border-box;
            background: #f8f8f8;
            border: 2px solid #ccc;
            outline-color: #328fa8;
        }

        textarea {
            padding: 6px;
            width: 100%;
            height: 400px;
            box-sizing: border-box;
            background: #f8f8f8;
            border: 2px solid #ccc;
            outline-color: #328fa8;
        }

        label {
            margin-top: 10px;
            float: left;
            text-align: left;
            width: 100%;
        }

        body {
            background-image: url("gold_bg.png");
            text-align: center;
            height: 100%;
            width: 100%;
            font-family: "Trebuchet MS";
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
    </style>
</head>
<body>
    <center><h1>Add Photo</h1><center>
    <div class="container">
        <?php if (isset($_GET['invalid'])): ?>
        <h3>Please complete the form</h3>
        <?php endif; ?>
        <form action="create_galery_process.php" method="post">
            <label>
                Title:
                <input type="text" name="name_galery" required autofocus>
            </label>
            <br>    
            <label>
                Insert:
                <input type="file" name="photo_galery">
            </label>
            <br>
            <button type="submit"> Posting </button>
        </form>
    </div>
</body>
</html>
