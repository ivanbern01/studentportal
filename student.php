<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Students</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="icon" href="../logo.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <style>
    body {
      color: #404E67;
      background: #f2f5f8;
      font-family: 'Roboto', sans-serif;
    }

    .table-wrapper {
      width: 80%;
      margin: 30px auto;
      background: #fff;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
    }

    .table-title {
      padding-bottom: 20px;
      margin: 0 0 20px;
      border-bottom: 2px solid #e0e0e0;
    }

    .table-title h2 {
      margin: 10px 0 0;
      font-size: 28px;
      color: #4A148C;
    }

    .table-title .add-new {
      float: right;
      height: 40px;
      font-weight: bold;
      font-size: 16px;
      min-width: 120px;
      border-radius: 50px;
      line-height: 18px;
      margin-top: 10px;
      background-color: #FFD700;
      color: #4A148C;
      border: 2px solid #4A148C;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    .table-title .add-new:hover {
      background-color: #4A148C;
      color: #FFD700;
    }

    .search-box {
      text-align: center;
      margin-top: 20px;
    }

    .search-box input {
      height: 40px;
      border-radius: 50px;
      padding: 10px;
      font-size: 16px;
    }

    .search-box button {
      height: 40px;
      border-radius: 50px;
      padding: 10px 20px;
      margin-left: 10px;
      font-size: 16px;
      background-color: #4A148C;
      color: #FFD700;
      border: none;
      cursor: pointer;
    }

    table.table {
      table-layout: fixed;
      width: 100%;
    }

    table.table th,
    table.table td {
      border-color: #e0e0e0;
      padding: 15px;
      text-align: center;
      font-size: 16px;
    }

    table.table th i {
      font-size: 18px;
      margin: 0 5px;
      cursor: pointer;
    }

    table.table th:last-child {
      width: 100px;
    }

    table.table td a {
      cursor: pointer;
      display: inline-block;
      font-size: 18px;
    }

    table.table td a.add {
      color: #27C46B;
    }

    table.table td a.edit {
      color: #FFC107;
    }

    table.table td a.delete {
      color: #E34724;
    }

    table.table td i {
      font-size: 24px;
    }
  </style>

  <script>
    function searchTable() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("search");
      filter = input.value.toUpperCase();
      table = document.querySelector("table.table");
      tr = table.getElementsByTagName("tr");

      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
  </script>

  <script>
    function confirmDelete() {
      return confirm("Are you sure you want to delete this student?");
    }
  </script>
</head>

<body>
  <?php include "navbar.php"; ?>

  <div class="container-lg">
    <div class="table-responsive">
      <div class="table-wrapper">
        <div class="table-title">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2>Student <b>Details</b></h2>
            </div>
            <div class="col-sm-12 text-center">
              <div class="search-box">
                <input type="text" id="search" class="form-control" placeholder="Find Student">
                <button onclick="searchTable()" class="btn btn-primary" title="Search" data-toggle="tooltip">
                  <i class="fa fa-search"></i> Search
                </button>
              </div>
            </div>
            <div class="col-sm-12 text-center mt-3">
              <a type="button" href="student-add.php" class="btn btn-info add-new" title="Add" data-toggle="tooltip">
                <i class="fa fa-plus"></i> Add New
              </a>
            </div>
          </div>
        </div>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>id</th>
              <th>Name</th>
              <th>Year</th>
              <th>Section</th>
              <th>Course</th>
              <th>Records</th>
              <th>Edit/Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php
            require_once 'login.php';
            $sql = "SELECT * FROM `students` ";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?> </td>
                <td><?php echo $row['year'] ?> </td>
                <td><?php echo $row['section'] ?> </td>
                <td><?php echo $row['course'] ?> </td>
                <td><?php echo $row['records'] ?> </td>
                <td>
                  <a href="edit.php?editid=<?php echo $row['id']; ?>" class="btn btn-primary" title="Edit">
                    <i class="fa fa-pencil"></i>
                  </a>
                  <a href="delete.php?deleteid=<?php echo $row['id']; ?>" class="btn btn-danger" title="Delete" onclick="return confirmDelete();">
                    <i class="fa fa-trash"></i>
                  </a>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>
