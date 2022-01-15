<?php
    // include "./pages/db/connection.php";-for connecting database
    //or
    // $connection = mysqli_connect($server, $username, $password, $db);
    //or
    

    $connection = mysqli_connect("localhost", "root", "", "demo");

    
    $hno = $_POST["hno"];
    $hname = $_POST["hname"];
    $location= $_POST["location"];
    $phone = $_POST["phone"];
    

    $select =
    "insert into hospital (hno, hname, location, phone) values('$hno', '$hname', '$location' ,'$phone')";

    $result = mysqli_query($connection, $select);

    if($result){
        echo "Successfully inserted";
    } else
        echo "Not inserted successfully";


        $hno = $_POST["hno"];
    $select7="delete from hospital where hno=$hno";

    $result = mysqli_query($connection, $select7);
    if($result){
        echo "deleted successfully";
    } else
    echo "cant delete";
    
    mysqli_close($connection);
?>