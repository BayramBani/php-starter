<?php
if (isset($_SESSION['username'])) {
  header("location: index.php?page=home");
  exit;
}
require_once './core/App.php';
$conn = App::connect();
$username = $password = "";
$username_err = $password_err = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty(trim($_POST["username"]))) {
    $username_err = 'Please enter username.';
  } else {
    $username = trim($_POST["username"]);
  }
  if (empty(trim($_POST['password']))) {
    $password_err = 'Please enter your password.';
  } else {
    $password = trim($_POST['password']);
  }
  if (empty($username_err) && empty($password_err)) {
    if ($stmt = $conn->prepare("SELECT username, password FROM users WHERE username = :username")) {
      $stmt->bindParam(':username', $param_username);
      $param_username = $username;
      if ($stmt->execute()) {
        if ($stmt->rowCount() == 1) {
          $row = $stmt->fetch();
          $username = $row['username'];
          $hashed_password = $row['password'];
          if ($username != null) {
            if (password_verify($password, $hashed_password)) {
              $_SESSION['username'] = $username;
              header("location: index.php");
            } else {
              $password_err = 'The password you entered was not valid.';
            }
          }
        } else {
          $username_err = 'No account found with that username.';
        }
      } else {
        echo "Oops! Something went wrong. Please try again later.";
      }
    }

    // Close statement
    $stmt->closeCursor();
  }

  // Close connection
  $conn = null;
}

?>
<div class="container">
  <div class="row">
    <div class="col-md-4 offset-md-4">
      <div class="card card-login">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . "?page=login"; ?>" method="post">
            <div class="form-group">
              <input class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?> "
                     value="<?php echo $username; ?>" id="username" name="username" type="text"
                     aria-describedby="emailHelp" placeholder="Username">
              <div class="invalid-feedback"><?php echo $username_err; ?></div>
            </div>
            <div class="form-group">
              <input class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" id="password"
                     name="password" type="password" placeholder="Password">
              <div class="invalid-feedback"><?php echo $password_err; ?></div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <label class="form-check-label"><input class="form-check-input" type="checkbox"> Remember
                  Password</label>
              </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Login</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="index.php?page=register">Register an Account</a>
            <a class="d-block small" href="#">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
