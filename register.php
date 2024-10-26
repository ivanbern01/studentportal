<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Register</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap">
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
            border: 3px solid #6C3483; /* Majestic Purple Border */
            box-shadow: 0 0 10px rgba(108, 52, 131, 0.5); /* Majestic Purple Shadow */
        }

        h2 {
            color: #6C3483; /* Majestic Purple Text */
            margin-bottom: 30px;
            font-size: 28px;
            border-bottom: 2px solid #6C3483; /* Majestic Purple Underline */
            padding-bottom: 10px;
        }

        label {
            display: block;
            margin: 20px 0 10px;
            color: #6C3483; /* Majestic Purple Text */
            font-size: 18px;
        }

        input {
            width: 100%;
            padding: 16px;
            margin-bottom: 25px;
            box-sizing: border-box;
            border: 1px solid #6C3483; /* Majestic Purple Border */
            border-radius: 10px;
            font-size: 18px;
            background-color: #f8f8f8;
        }

        button {
            background: linear-gradient(#6C3483, #512E5F); /* Majestic Purple Gradient */
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

        .login-link {
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

        .login-link:hover {
            background: linear-gradient(#512E5F, #6C3483); 
        }
        
        h3 {
            color: #6C3483; /* Majestic Purple Text */
            margin-bottom: 15px;
            font-size: 24px;
        }

    </style>
</head>
<body>

    <form action="insert.php" method="post">
        <h2>School Register</h2>
        <label for="username">Username:</label>
        <input type="text" name="username" class="form-control" value="">

        <label for="email">Email:</label>
        <input type="email" name="email" class="form-control" value="">

        <label for="password">Password:</label>
        <input type="password" name="password" class="form-control" value="">

        <button type="submit">Register</button>

        <h3>Already have an account?<h3>

        <a href="index.php" class="login-link">Login here</a>
    </form>

</body>
</html>
