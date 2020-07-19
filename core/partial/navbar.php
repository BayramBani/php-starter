<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/"> Home </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample07">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link <?php if ($current_page == 'about'){echo 'active';} ?>" href="/about"> About </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($current_page == 'contact'){echo 'active';} ?>" href="/contact"> Contact </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($current_page == 'image'){echo 'active';} ?>" href="/image"> Image </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($current_page == 'font'){echo 'active';} ?>" href="/font"> Font </a>
        </li>
      </ul>
      <form class="form-inline my-2 my-md-0">
        <?php if(isset($_SESSION['username'])){?>
          <div class="dropdown">
            <a class="btn text-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $_SESSION['username'];?>
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="/profile"><i class="fas fa-user"></i> Profile</a>
              <a class="dropdown-item" href="/settings"><i class="fas fa-cog"></i> Settings</a>
              <a class="dropdown-item" href="./core/task/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
          </div>
          <?php }else{?>
          <a href="/login" class="btn btn-sm btn-success">Login</a>
          <?php } ?>
      </form>
    </div>
  </div>
</nav>
