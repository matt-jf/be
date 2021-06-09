<?php
    $id_note = $_GET['id_note'];
    if (!$id_note) {
        header('Location: home.php');
        die;
    }
    include_once 'koneksi.php';
    $query = "SELECT * FROM note WHERE id_note = $id_note";
    $result = $koneksi->query($query);
    if (!$result->num_rows) {
        header('Location: home.php');
    }
    $note = $result->fetch_object();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Note</title>
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
            font-family: "Redressed";
        }

        h1 {
            text-transform: uppercase;
            color: white;
        }

        button {
            background-color: #442813;
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
    <center><h1>Edit Note</h1><center>
    <div class="container">
        <?php if (isset($_GET['invalid'])): ?>
        <h3>Please complete the form</h3>
        <?php endif; ?>
        <form action="edit_note_process.php" method="post">
            <input type="hidden" name="id_note" value="<?php echo $note->id_note; ?>">
            <label>
                Title:
                <input type="text" name="title_note" value="<?php echo $note->title_note; ?>" autofocus>
            </label>
            <br>
            <label>
                Content:
                <textarea name="content_note" cols="30" rows="10" ><?php echo $note->content_note; ?></textarea>
            </label>
            <br>
            <button type="submit">Save Changes</button>
        </form>
    </div>
</body>
</html>
