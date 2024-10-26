<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            background-color: #f4f4f4; /* Light gray background */
            color: #333; /* Dark gray text color */
            font-family: 'Arial', sans-serif; /* Font style */
        }

        .container {
            background-color: #fff; /* White container background */
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 50px;
        }

        .btn-dark, .btn-warning {
            font-size: 22px;
            padding: 20px;
            border-radius: 12px;
            transition: all 0.3s ease-in-out;
        }

        .btn-dark {
            background-color: #8e44ad !important; /* Royal purple background for buttons */
            color: #fff !important; /* White text for buttons */
        }

        .btn-warning {
            background-color: #e67e22 !important; /* Carrot orange background for logout button */
            color: #333 !important; /* Dark gray text for logout button */
        }

        .btn-dark:hover,
        .btn-warning:hover {
            opacity: 0.9; /* Increase opacity on hover for a subtle effect */
            transform: scale(1.05); /* Scale up on hover for a subtle zoom effect */
        }

        .fa {
            color: #333; /* Dark gray color for font-awesome icons */
            font-size: 36px; /* Larger font size for icons */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <a href="teacher.php" class="col btn btn-dark m-2 py-3">
                <i class="fa fa-user-md" aria-hidden="true"></i><br>
                Teachers
            </a>
            <a href="student.php" class="col btn btn-dark m-2 py-3">
                <i class="fa fa-graduation-cap" aria-hidden="true"></i><br>
                Students
            </a>
            <!-- Add other links here -->
        </div>
        <div class="row justify-content-center">
            <a href="logout.php" class="col btn btn-warning m-2 py-3 col-5">
                <i class="fa fa-sign-out" aria-hidden="true"></i><br>
                Logout
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
