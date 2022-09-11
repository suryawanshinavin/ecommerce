<?php
// database connection
include "db_config.php";
include "function.php";

if (isset($_POST['login'])) {

  $name = $_POST['name'];
  $pass = $_POST['pass'];

  $name = mysqli_real_escape_string($con, $name);
  $pass = mysqli_real_escape_string($con, $pass);

  $user_row = findUser($con, $name);

  if ($user_row === null) { //Name not in database

    echo "<script>alert('User does not exist!');</script>";
  } else if ($pass != $user_row['password']) { // Password incorrect

    echo "<script>alert('Password is incorrect!');</script>";
  } else if ($user_row['user_role'] === 'admin') {

    $_SESSION['id'] = $user_row['id'];
    $_SESSION['username'] = $user_row['username'];
    $_SESSION['user_role'] = $user_row['user_role'];
    echo "<script>alert('Login!');</script>";
    header("Location: admin/dashboard.php");
  }
  else {
    $_SESSION['id'] = $user_row['id'];
    $_SESSION['username'] = $user_row['username'];
    $_SESSION['user_role'] = $user_row['user_role'];
    echo "<script>alert('Login!');</script>";
    header("Location: index.php");
  }
}
?>

<?php include ('include/header.php') ?>

<body>
  <div class="container">
    <div class="row justify-content-center align-content-center vh-100">
      <div class="col-7 col-sm-6 col-md-5 col-lg-4 col-xl-4 col-xxl-5">
        <div class="border border-1 border-dark p-4 rounded-4 shadow bg-secondary">
          <form action="" method="post">
            <!-- Email input -->
            <h3 class="mb-4 text-center text-info">Login Form</h3>
            <hr>
            <div class="form-outline mb-3">
              <label class="form-label text-info" for="form1Example1">Username</label>
              <input type="text" id="form1Example1" name="name" class="form-control" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
              <label class="form-label text-info" for="form1Example2">Password</label>
              <input type="password" id="form1Example2" name="pass" class="form-control" />
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
              <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                  <label class="form-check-label  text-info" for="form1Example3"> Remember me </label>
                </div>
              </div>

              <div class="col">
                <!-- Simple link -->
                <a href="#" class="nav-link text-info">Forgot password?</a>
              </div>
            </div>

            <!-- Submit button -->
            <button type="submit" name="login" class="w-100 btn btn-light shadow fw-bold text-info">Sign in</button>
          </form>
        </div>
      </div>
    </div>
  </div> <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>