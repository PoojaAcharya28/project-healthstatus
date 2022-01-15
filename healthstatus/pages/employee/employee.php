<?php
    // include "./pages/db/connection.php";-for connecting database
    //or
    // $connection = mysqli_connect($server, $username, $password, $db);
    //or
    

    $connection = mysqli_connect("localhost", "root", "", "demo");

    
    $eno = $_POST["eno"];
    $ename = $_POST["ename"];
    $age = $_POST["age"];
    $designation = $_POST["designation"];
    $gender = $_POST["gender"];
    $hno =$_POST["hno"];

    $select =
    "insert into employee (eno, ename, age, designation, gender, hno) values('$eno', '$ename',  '$age', '$designation', '$gender', '$hno')";

    $result = mysqli_query($connection, $select);

    if($result){
        echo "Successfully inserted";
    } else
        echo "Not inserted successfully";

        $eno = $_POST["eno"];
        $select9="delete from employee where eno=$eno";
    
        $result = mysqli_query($connection, $select9);
        if($result){
            echo "deleted successfully";
        } else
        echo "cant delete";
    
    
    mysqli_close($connection);
?>