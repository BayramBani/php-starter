<?php
require_once './core/App.php';
$conn = App::connect();
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty(trim($_POST["username"]))) {
    $username_err = "Please enter a username.";
  } else {
    $username = trim($_POST["username"]);
    if ($stmt = $conn->prepare("SELECT id FROM users WHERE username = :username")) {
      $stmt->bindParam(':username', $param_username);
      $param_username = trim($_POST["username"]);

      if ($stmt->execute()) {

        if ($stmt->rowCount() == 1) {
          $username_err = "This username is already taken.";
        }
      } else {
        echo "Oops! Something went wrong. Please try again later.";
      }
    }
    $stmt->closeCursor();
  }

  // Validate password
  if (empty(trim($_POST['password']))) {
    $password_err = "Please enter a password.";
  } elseif (strlen(trim($_POST['password'])) < 4) {
    $password_err = "Password must have atleast 4 characters.";
  } else {
    $password = trim($_POST['password']);
  }

  // Validate confirm password
  if (empty(trim($_POST["confirm_password"]))) {
    $confirm_password_err = 'Please confirm password.';
  } else {
    $confirm_password = trim($_POST['confirm_password']);
    if ($password != $confirm_password) {
      $confirm_password_err = 'Password did not match.';
    }
  }

  if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {


    if ($stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, username, password) VALUES (:firstname, :lastname, :email, :username,:password)")) {
      // Bind variables to the prepared statement as parameters
      $stmt->bindParam(':firstname', $param_firstname);
      $stmt->bindParam(':lastname', $param_lastname);
      $stmt->bindParam(':email', $param_email);
      $stmt->bindParam(':username', $param_username);
      $stmt->bindParam(':password', $param_password);


      // Set parameters
      $param_firstname = trim($_POST["username"]);
      $param_lastname = trim($_POST["lastname"]);
      $param_email = trim($_POST["useremail"]);
      $param_username = $username;
      $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

      // Attempt to execute the prepared statement
      if ($stmt->execute()) {
        // Redirect to login page
        header("location: index.php");
      } else {
        echo "Something went wrong. Please try again later.";
      }
    }

    $stmt->closeCursor();
  }
  $conn = null;
}
?>
<div class="container">
  <div class="col-md-6 offset-md-3">
    <div class="card">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . "?page=register"; ?>" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="firstname">First name</label>
                <input class="form-control" id="firstname" name="firstname" type="text"
                       aria-describedby="nameHelp" placeholder="First name">
              </div>
              <div class="col-md-6">
                <label for="lastname">Last name</label>
                <input class="form-control" id="lastname" name="lastname" type="text"
                       aria-describedby="nameHelp" placeholder="Last name">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="useremail">Email address</label>
            <input class="form-control" id="useremail" name="useremail" type="email"
                   aria-describedby="emailHelp" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" id="username"
                   name="username" type="text" aria-describedby="emailHelp"
                   placeholder="Username" value="<?php echo $username; ?>">
            <div class="invalid-feedback"><?php echo $username_err; ?></div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="password">Password</label>
                <input class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" id="password"
                       name="password" type="password"
                       placeholder="Password" value="<?php echo $password; ?>">
                <div class="invalid-feedback"><?php echo $password_err; ?></div>
              </div>
              <div class="col-md-6">
                <label for="confirm_password">Confirm password</label>
                <input class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>"
                       id="confirm_password" name="confirm_password" type="password"
                       placeholder="Confirm password" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Register</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="./index.php?page=login">Login Page</a>
          <a class="d-block small" href="#">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
</div>
