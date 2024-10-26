<?php
require "login.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: url('https://wallpapercave.com/wp/IUdnLRa.jpg') center/cover no-repeat fixed;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-blend-mode: multiply;
        }

        form {
            background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.7));
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 400px;
            width: 100%;
            backdrop-filter: blur(10px);
            border: 3px solid #6C3483;
            box-shadow: 0 0 10px rgba(108, 52, 131, 0.5);
        }

        h1 {
            color: #6C3483;
            font-size: 36px;
            margin-bottom: 20px;
        }

        h2 {
            color: #6C3483;
            margin-bottom: 30px;
            font-size: 28px;
            border-bottom: 2px solid #6C3483;
            padding-bottom: 10px;
        }

        h3 {
            color: #6C3483;
            margin-bottom: 15px;
            font-size: 24px;
        }

        label {
            display: block;
            margin: 20px 0 10px;
            color: #6C3483;
            /* Majestic Purple Text */
            font-size: 18px;
        }

        input {
            width: 100%;
            padding: 16px;
            margin-bottom: 25px;
            box-sizing: border-box;
            border: 1px solid #6C3483;
            /* Majestic Purple Border */
            border-radius: 10px;
            font-size: 18px;
            background-color: #f8f8f8;
        }

        button {
            background: linear-gradient(#6C3483, #512E5F);
            /* Majestic Purple Gradient */
            color: #fff;
            padding: 18px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 18px;
            transition: background 0.3s;
            margin-bottom: 15px;
        }

        button:hover {
            background: linear-gradient(#512E5F, #6C3483);
        }

        .register-link {
            display: inline-block;
            margin-top: 10px;
            padding: 12px 20px;
            font-size: 16px;
            color: #fff;
            background: linear-gradient(#6C3483, #512E5F);
            text-decoration: none;
            border-radius: 8px;
            transition: background 0.3s;
        }

        .register-link:hover {
            background: linear-gradient(#512E5F, #6C3483);
        }
        
    </style>
</head>

<body>

    <form action="" method="post">
        <h1>Welcome to Hogwarts Portal</h1>
        <h2>School Login</h2>
        <?php
        if (isset($_POST["login"])) {
           $username = $_POST["username"];
           $password = $_POST["password"];
            
            $sql = "SELECT * FROM useraccounts WHERE username = '$username'";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            if (mysqli_num_rows($result) > 0 ) {
                if ($password == $row["password"]) {
                   $_SESSION["index"]=true;
                   $_SESSION["id"] = $row["id"];
                   header("location: home.php");
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" name="login">Login</button>

        <h3>Don't have an account yet?</h3>
        <a href="register.php" class="register-link">Register Here</a>
    </form>

</body>

</html>