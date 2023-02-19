<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docment</title>
</head>
<body>
    <form action="sendMail.php" method="post">
        <input type="textarea" name="msg" id="msg"> <br><br>
        <input type="email" name="email" id="email" placeholder="Your email"><br><br>
        <input type="email" name="id" id="id" value=<?php echo $_POST['id']; ?> hidden> <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>