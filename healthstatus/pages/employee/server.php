<?php
    // include "./pages/db/connection.php";-for connecting database
    //or
    // $connection = mysqli_connect($server, $username, $password, $db);
    //or
    

    $connection = mysqli_connect("localhost", "root", "", "demo");

    // INSERT DETAILS

    if (isset($_POST['add_data'])) {

        //ASSIGNING TO VARIABLE


    
    $eno = $_POST["eno"];
    $ename = $_POST["ename"];
    $age = $_POST["age"];
    $designation = $_POST["designation"];
    $gender = $_POST["gender"];
    $hno =$_POST["hno"];

    //INSERT QUERY

    $select =
    "insert into employee (eno, ename, age, designation, gender, hno) values('$eno', '$ename',  '$age', '$designation', '$gender', '$hno')";

    //TO EXECUTE QUERY

    $result = mysqli_query($connection, $select);

    //TO CHECK WHETHER INSERTED OR NOT

    if($result){

        echo '<script>alert("Inserted Successfully")</script>';
        echo '<script>window.location="http://localhost/pooja/healthstatus/pages/employee/employee.html"</script>';

    } else
        echo "Not inserted successfully";


}


//update details

if(isset($_POST['update'])) // when click on Update button
{
    $eno = $_GET["eno"];
    $ename = $_POST["ename"];
    $age = $_POST["age"];
    $designation = $_POST["designation"];
    $gender = $_POST["gender"];
    $hno =$_POST["hno"];

    $sql = "update `employee` set eno = '$eno', ename = '$ename',  age ='$age' , designation = '$designation', gender = '$gender', hno = '$hno' where eno = '$eno'";
    
    if($result){
        // echo "Updated";
        echo '<script>alert("Updated Successfully")</script>';
        echo '<script>window.location="http://localhost/pooja/healthstatus/pages/employee/view.php"</script>';
    } else{
        echo "cant update";
    }
}




?>