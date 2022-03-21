<?php
session_start();

function filterEmail($field){
  // Sanitize e-mail address
  $field = filter_var(trim($field), FILTER_SANITIZE_EMAIL);
  
  // Validate e-mail address
  if(filter_var($field, FILTER_VALIDATE_EMAIL)){
      return $field;
  } else{
      return FALSE;
  }
}

// initializing variables
$firstname = "";
$lastname = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'demo');


// ----------------------------------------------------------------------------------------------------------------------

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $confirmpassword = mysqli_real_escape_string($db, $_POST['confirmpassword']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstname)) { array_push($errors, "Firstname is required"); }
  if (empty($lastname)) { array_push($errors, "Lastname is required"); }
  if (empty($email)) { 
    array_push($errors, "Email is required");}
    else {
      // $uppercase = preg_match('@[A-Z]@', $email);
      // $lowercase = preg_match('@[a-z]@', $email);
      // $number = preg_match('@[0-9]@', $email);
      
      $email1 = filterEmail($email);
      if($email1 == FALSE){
        array_push($errors, "Please enter a valid email address.");
      }
      // } else if (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email)){
      //   array_push($errors, "Invalid Email");
      // } 
    }
  
  
    
    $number = preg_match('@[0-9]@', $password);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    
  if (empty($password)) { array_push($errors, "Password is required"); }
  else if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars || strlen($password) > 8) {
    array_push($errors,"Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.");
  }else if ($password != $confirmpassword) {
	  array_push($errors, "The two passwords do not match");
  }

  if(empty($_POST["email"])){
    $emailErr = "Please enter your email address.";     
} else{
    $email = filterEmail($_POST["email"]);
    if($email == FALSE){
        $emailErr = "Please enter a valid email address.";
    }
}

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE firstname='$firstname' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['firstname'] === $firstname) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	//$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO user (firstname, lastname, email, password) 
  			  VALUES('$firstname', '$lastname', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ./login.php');
  }
}


// ----------------------------------------------------------------------------------------------------------------------


// LOGIN USER
if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($email)) {
        array_push($errors, "email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        
        $query = "select * from user where email='$email' and password='$password'";
        $results = mysqli_query($db, $query);
        
        $password = md5($password);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['email'] = $email;
          $_SESSION['success'] = "You are now logged in";
          header('location: ../index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  
  ?>