<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        button {
            border: 0;
            outline: 0;
            cursor: pointer;
            background-color: #1a73e8;
            color: #fff;
            padding: 0.5rem 0.75rem;
            border-radius: 0.5rem;
            margin-left: 0.5rem;
        }
    </style>



</head>
<body>
<form method="post" action="post.php">
   <label for="number">Enter the Number </label>
    <input type="number" name="number" <?php if (isset($_POST["number"])){echo 'value="'. $_POST["number"].'"';} ?> placeholder = "Enter Number">
    <button type="submit">Send</button>
</form>
</body>
</html>


