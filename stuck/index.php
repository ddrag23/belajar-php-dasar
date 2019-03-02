<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>belajar dasar php</title>
</head>
<h1>welcome to my agen</h1>

<body>
  
        <form action="" method="POST">
            <li><label for="username">username :</label>
                <input type="text" placeholder="masukkan username" name="username" id="username"></li>
            <li><label for="password">password :</label>
                <input type="password" placeholder="masukkan password" name="password" id="password"></li>
            <input type="submit" name="submit" value="login">
        </form>
    
    <?php
       if(isset($_POST["submit"])){
        if($_POST["username"] == "P" && $_POST["password"] == "1"){
                    header(["Location : belajar-dasar-php/data.php"]);
                    exit;
                } else {
                    echo '<script type="text/javascript">alert("salah");</script>';
                }
       }
    ?>
</body>

</html>