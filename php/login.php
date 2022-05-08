<?php
    session_start();
        if(isset($_POST["submit"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            if($username == "admin" && $password == "admin") {
                $_SESSION["login"] = true;
                header("Location: index.php");
                exit;
            } elseif($username != "admin" && $password == "admin") {
                $errorUser = "Maaf, username yang anda masukkan salah.";
            } elseif($username == "admin" && $password != "admin") {
                $errorPassword = "Maaf, password yang anda masukkan salah.";
            } elseif($username == "" && $password == "") {
                $errorKosong = "Form data masih kosong.";
            } else {
                $error = "Maaf, username dan password anda salah.";
            }
        }
        if(isset($_SESSION["login"])) {
            header("Location: index.php");
            exit;
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/logo.png" alt="" width="40%" class="img">
            <img src="../assets/sammy-workflow.png" alt="" width="50%" class="img">
            <h1>Your place to chill and relax</h1>
            <p>Enjoy yourself</p>
        </div>
        <div class="form">
            <form method="post">
                <center><div class="header">
                    <h1 style="color: rgb(49, 49, 49);">LOGIN FORM</h1>
                </div></center>
                <div class="username">
                    <label for="username">Username:</label><br>
                    <input type="text" name="username" autocomplete="off"><br>
                </div>
                <div class="password">
                    <label for="password">Password:</label><br>
                    <input type="password" name="password"><br>
                </div>
                <?php
                        if(isset($error)) { ?>
                            <p class="error"><?= $error ?></p>
                        <?php } elseif(isset($errorUser)) { ?> 
                            <p class="error"><?= $errorUser ?></p>
                        <?php } elseif(isset($errorPassword)) { ?> 
                            <p class="error"><?= $errorPassword ?></p>
                        <?php } elseif(isset($errorKosong)) { ?> 
                            <p class="error"><?= $errorKosong ?></p>
                        <?php } ?>         
                <center><div class="btn">
                    <button type="submit" name="submit" class="submit">Submit</button>
                </div></center>
            </form>
        </div>
    </div>
</body>
</html>