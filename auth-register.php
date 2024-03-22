<?php 
include "config.php";

ob_start();
if (isset($_POST['signup'])) {

    if ($_POST['password'] == $_POST['confirmpassword']) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $select = "SELECT `name` FROM `signup` WHERE `name`='$name'";
        $row = mysqli_query($conn, $select);

        // $check = mysqli_num_rows($row);
        // print_r($check);
        // die();

        if ( mysqli_num_rows($row) > 0 ) {

            $message = "email id is already exists";
        } 
        else
        {
            $sql = "INSERT INTO `signup`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
            //$row = mysqli_query($conn,$sql);

            if (mysqli_query($conn, $sql)) {
              // echo "New record created successfully";
                header("Location: index.php");
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        
    } else{

        $message = "Password and Confirm Password do not match";
    }

        
} 

?>

<!DOCTYPE html>
<html lang="en">


<!-- auth-register.html  21 Nov 2019 04:05:01 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Register</h4>
                <?php if (isset($message)) { ?>
                                <p class="text-center" style="font-weight: 700;color: #faa292;"><?php echo $message; ?></p>
                                <?php } ?>
              </div>
              <div class="card-body">
                <form method="POST" action="">
                  <div class="row">
                    <div class="form-group col-12">
                      <label for="name">Name</label>
                      <input  type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control"  name="email" placeholder="Email">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input type="password" class="form-control pwstrength" data-indicator="pwindicator"
                        name="password" placeholder="Password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" name="signup" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
              <div class="mb-4 text-muted text-center">
                Already Registered? <a href="auth-login.php">Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/auth-register.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- auth-register.html  21 Nov 2019 04:05:02 GMT -->
</html>