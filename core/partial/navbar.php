<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">Starter</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample07">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link <?php if ($current_page == 'home'){echo 'active';} ?>" href="index.php?page=home"> Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($menu == 'demo'){echo 'active';} ?>" href="index.php?page=demo"> Demo </a>
        </li>
      </ul>
      <form class="form-inline my-2 my-md-0">
        <div class="dropdown">
          <a class="btn text-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Menu
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="index.php?page=profile">Profile <i class="fas fa-user"></i></a>
            <a class="dropdown-item" href="index.php?page=settings">Settings <i class="fas fa-cogs"></i></a>
            <a class="dropdown-item" href="./core/task/logout.php">Logout <i class="fas fa-sign-out-alt"></i></a>
          </div>
        </div>
      </form>
    </div>
  </div>
</nav>
<!--<span class="sr-only">(current)</span>-->
