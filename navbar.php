<style>
  .navbar {
    background: linear-gradient(to right, #4A148C, #6A1B9A);
    /* Royal Purple Gradient background */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    font-family: 'Cinzel', serif;
    /* Majestic Font */
    border-bottom: 2px solid #FFD700;
    /* Gold border at the bottom */
  }

  .navbar-nav .nav-link {
    color: #FFD700;
    /* Gold text color */
    font-weight: bold;
    transition: color 0.3s ease;  
    /* Smooth color transition */
  }

  .navbar-nav .nav-link:hover {
    color: #FF9100;
    /* Orange color on hover */
  }

  .navbar-toggler-icon {
    background-color: #FFF;
    /* White color of the toggler icon */
  }

  /* Add other styles as needed */

  /* Media query for responsiveness */
  @media (max-width: 768px) {
    .navbar-toggler-icon {
      background-color: #FFF;
      /* White color of the toggler icon for small screens */
    }
  }
</style>
</style>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand">
      <img src="image\Harry_Potter_HP.svg" width="40">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="navLinks">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="home.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="teacher.php">Teachers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="student.php">Students</a>
        </li>
      </ul>
      <ul class="navbar-nav me-right mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>