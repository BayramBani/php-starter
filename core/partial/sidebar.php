<div class="nav flex-column nav-pills bg-light card">
  <a class="nav-link <?php if ($current_page == 'demo'){echo 'active';} ?>" href="index.php?page=demo">Demo</a>
  <a class="nav-link <?php if ($current_page == 'contact'){echo 'active';} ?>" href="index.php?page=contact&menu=demo">Contact</a>
  <a class="nav-link <?php if ($current_page == 'info'){echo 'active';} ?>" href="index.php?page=info&menu=demo">Info</a>
  <a class="nav-link" href="index.php?page=not-found">404</a>
</div>
