<?php include('server.php') ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    
    <title>Register</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous"
  />

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.12.0/css/all.css"
    />

    <link rel="stylesheet" href="../core-ui/main.css">
  </head>

  <body class="bg-gradient-primary">
    <div class="container">
      <div class="card shadow-lg o-hidden border-0 my-5">
        <div class="card-body p-0">
          <div class="row">
            <div class="col-lg-5 d-none d-lg-flex">
              <div
                class="flex-grow-1 bg-register-image"> 
                <img src="../assets/create.svg" alt="" style="background-size: cover; height: 500px; width: 450px; margin: auto; display: block;">
              </div>
            </div>
            <div class="col-lg-7">
              <div class="p-5">
                <div class="text-center">
                  <h4 class="text-dark mb-4">Create Account!</h4>
                </div>
                <form class="user" action="register.php" method="post">
                <?php include('errors.php'); ?>
                  <div class="form-group main-input">
                    <div class="row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input
                          class="form-control form-control-user"
                          type="text"
                          id="exampleFirstName"
                          placeholder="First Name"
                          name="firstname"
                          value="<?php echo $firstname; ?>"
                        />
                      </div>
                      <div class="col-sm-6">
                        <input
                          class="form-control main-input"
                          type="text"
                          id="exampleFirstName"
                          placeholder="Last Name"
                          name="lastname"
                          value="<?php echo $lastname; ?>"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="form-group main-input">
                    <input
                      class="form-control "
                      type="email"
                      id="exampleInputEmail"
                      aria-describedby="emailHelp"
                      placeholder="Email Address"
                      name="email"
                      value="<?php echo $email; ?>"
                    />
                  </div>
                  <div class="form-group main-input">
                    <div class="row">
                      <div class="col-sm-6">
                        <input
                          class="form-control form-control-user"
                          type="password"
                          id="examplePasswordInput"
                          placeholder="Password"
                          name="password"
                        />
                      </div>
                      <div class="col-sm-6">
                        <input
                          class="form-control form-control-user"
                          type="password"
                          id="exampleRepeatPasswordInput"
                          placeholder="Repeat Password"
                          name="confirmpassword"
                        />
                      </div>
                    </div>
                  </div>
                  <button
                    id="myBtn"
                    class="btn-login"
                    type="submit"
                    name="reg_user"
                  >
                    Register Account
                  </button>
                  <!-- <hr /> -->
                  <!-- <a
                    class="btn btn-primary btn-block text-white btn-google btn-user"
                    role="button"
                    ><i class="fab fa-google"></i>&nbsp; Register with Google</a> -->
                  <!-- <a
                    class="btn btn-primary btn-block text-white btn-facebook btn-user"
                    role="button"
                    ><i class="fab fa-facebook-f"></i>&nbsp; Register with
                    Facebook</a> -->
                  
                  <!-- <hr /> -->
                </form>
                <div class="link-container">
                  <!-- <div class="text-center">
                    <a class="small a-link" href="forgot-password.html">Forgot Password?</a>
                    
                  </div> -->
                  <div class="text-center">
                    <a class="small a-link" href="login.php">Already have an account?</a>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <!-- <script src="./js/main.js"></script> -->
  </body>
</html>
