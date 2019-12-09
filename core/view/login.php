<?php
if (isset($_SESSION['username'])) {
  header("location: index.php?page=home");
  exit;
}
$username = $password = "";

if (isset($_POST["username"]) and isset($_POST["password"])){
  require_once './core/App.php';
  $login = App::login($_POST["username"], $_POST["password"]);
  $username = $login["user"];
  if ($login["status"] == 1){
    header("location: /home");
  }
}
?>
<div class="container">
  <div class="row">
    <div class="col-md-4 offset-md-4">
      <div class="card card-login">
        <!--<div class="card-header">Login</div>-->
        <div class="card-body">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . "?page=login"; ?>" method="post" class="mt-3">
            <div class="form-group">
              <input class="form-control form-control-sm <?php echo (!empty($login["user_msg"])) ? 'is-invalid' : ''; ?> "
                     value="<?php echo $username; ?>" id="username" name="username" type="text"
                     aria-describedby="emailHelp" placeholder="Username">
              <div class="invalid-feedback"><?php echo $login["user_msg"]; ?></div>
            </div>
            <div class="form-group">
              <input class="form-control form-control-sm <?php echo (!empty($login["pass_msg"])) ? 'is-invalid' : ''; ?>" id="password"
                     name="password" type="password" placeholder="Password">
              <div class="invalid-feedback"><?php echo $login["pass_msg"]; ?></div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <label class="form-check-label"><input class="form-check-input" type="checkbox"> Remember
                  Password</label>
              </div>
            </div>
            <button class="btn btn-primary btn-block btn-sm" type="submit">Login</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="/register">Register an Account</a>
            <a class="d-block small" href="#">Forgot Password?</a>
            <a class="d-block small" href="/">Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
