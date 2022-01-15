<?php
// $connection = mysqli_connect("localhost", "root", "", "demo");

// if(isset($_POST['login'])){
//     $username = $_POST['email'];
//     $password = $_POST['password'];

//     //if the user try to enter without typing anything.
//     if($email !=="" && $password !==""){
//         // /$password = sha1($password);/
//         $sql = "select * from user where email ='$email' and password='$password'";

//         $result=mysqli_query($connection, $sql) or die('Error');
//         if(mysqli_num_rows($result) > 0){

//             while($row = mysqli_fetch_assoc($result)){
//                 $uid = $row['uid'];
//                 // $firstname = $row['firstname'];
//                 // $lastname = $row['lastname'];
//                 $email = $row['email'];
//                 // $user_role = $row['user_role'];


//                 //Starting the session for the user
//                 $_SESSION['uid'] = $uid;
//                 // $_SESSION['firstname'] = $firstname;
//                 // $_SESSION['lastname'] = $lastname;
//                 $_SESSION['email'] = $email;
//                 // $_SESSION['user_role'] = $user_role;
//                 // if($user_role == admin){
                    // echo '<script>window.location="http://localhost/pooja/healthstatus/index.php"</script>';
                // }else{
                //     header('Location:user/userdashboard.php');
                // }
//             }
//         }else{
//             echo "Username or Password is incorrect!!";
//         }
//     }else{
//         echo "Please Enter Username and Password";
//     }
// }

?>

<?php include('server.php') ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <title>Login - Brand</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
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
      <div class="row justify-content-center">
        <div class="col-md-9 col-lg-12 col-xl-10">
          <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
              <div class="row">
                <div class="col-lg-6 d-none d-lg-flex">
                  <div
                    class="flex-grow-1 bg-login-image "> 
                    
                  <img src="../assets/createaccount.svg" alt="" style="background-size: cover; height: 500px; width: 450px; margin: auto; display: block;">
                </div>
                </div>
                <div class="col-lg-6">
                  <div class="p-5">
                    <div class="text-center">
                      <h4 class="text-dark mb-4">Welcome Back!</h4>
                    </div>
                    <form class="user" action="login.php" method="post">
                    <?php include('errors.php'); ?>
                      <div class="form-group main-input">
                        <input
                          class="form-control form-control-user"
                          type="email"
                          id="exampleInputEmail"
                          aria-describedby="emailHelp"
                          placeholder="Enter Email Address..."
                          name="email"
                        />
                      </div>
                      <div class="form-group main-input">
                        <input
                          class="form-control form-control-user"
                          type="password"
                          id="exampleInputPassword"
                          placeholder="Password"
                          name="password"
                        />
                      </div>
                      <div class="form-group main-input">
                        <div class="custom-control custom-checkbox small">
                          <div class="form-check">
                            <input
                              class="form-check-input custom-control-input"
                              type="checkbox"
                              id="formCheck-1"
                            /><label
                              class="form-check-label custom-control-label"
                              for="formCheck-1"
                              >Remember Me</label
                            >
                          </div>
                        </div>
                      </div>
                      
                      <button
                        class="btn-login"
                        type="submit"
                        name="login_user"
                      >
                        Login
                      </button>
                      <!-- <hr /> -->
                      <!-- <a
                        class="btn btn-primary btn-block text-white btn-google btn-user"
                        role="button"
                        ><i class="fab fa-google"></i>&nbsp; Login with
                        Google</a> -->
                      <!-- <a
                        class="btn btn-primary btn-block text-white btn-facebook btn-user"
                        role="button"
                        ><i class="fab fa-facebook-f"></i>&nbsp; Login with
                        Facebook</a> -->
                      
                      <hr />
                    </form>
                    <div class="link-container">
                      <div class="text-center">
                        <a class="small a-link" href="forgot-password.html">Forgot Password?</a>
                      </div>
                      <div class="text-center">
                        <a class="small a-link" href="register.php">Create an Account!</a>
                      </div>
                    </div>
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
    <script src="assets/js/script.min.js"></script>
  </body>
</html>
