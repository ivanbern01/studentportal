<?php
require 'login.php';
if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $year = $_POST["year"];
    $section = $_POST["section"];
    $course = $_POST["course"];
    $records = $_POST["records"];


$sql = "INSERT INTO students (name, year, section, course, records)
  Values ('$name', '$year', '$section', '$course', '$records')";
$result=mysqli_query($con,$sql);
if ($result) {
  header("location: student.php");
} else {
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Add Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            color: #404E67;
            background: #f2f5f8;
            font-family: 'Roboto', sans-serif;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
        }

        .form-w {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        h3 {
            color: #4A148C;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-label {
            color: #4A148C;
            font-weight: bold;
        }

        .form-control {
            border-radius: 5px;
        }

        .form-select {
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #4A148C;
            color: #FFD700;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #FFD700;
            color: #4A148C;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <form method="post" class="shadow p-3 mt-5 form-w" action="">
            <h3>Add New Student</h3>
            <div class="mb-3">
                <label class="form-label">Student name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Year</label>
                <select name="year" class="form-select" aria-label="Default select example" required>
                    <option selected>Select Year</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Section</label>
                <select name="section" class="form-select" aria-label="Default select example" required>
                    <option selected>Select Section</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Course</label>
                <select name="course" class="form-select" aria-label="Default select example" required>
                    <option selected>Select course</option>
                    <option value="BSCS">Bachelor of Science in Computer Science</option>
                    <option value="BSED">Bachelor of Science in Dentistry</option>
                    <option value="BSN">Bachelor of Science in Nursing</option>
                    <option value="BSEE">Bachelor of Science in Electrical Engineering</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Records</label>
                <textarea name="records" class="form-control" required></textarea>
            </div>

            <button name="submit" type="submit" class="btn btn-primary">Add Student</button>
        </form>
    </div>
</body>

</html>
        