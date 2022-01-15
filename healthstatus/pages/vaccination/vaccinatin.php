<?php
    // include "./pages/db/connection.php";-for connecting database
    //or
    // $connection = mysqli_connect($server, $username, $password, $db);
    //or
    

    $connection = mysqli_connect("localhost", "root", "", "demo");

    
    $vno = $_POST["vno"];
    $vname = $_POST["vname"];
    $preventdisease = $_POST["preventdisease"];
    $agefordose = $_POST["agefordose"];
    $hno = $_POST["hno"];


    $select =
    "insert into vaccination (vno, vname, preventdisease, agefordose, hno) values(''$vno','$vname', '$preventdisease','$agefordose','$hno')";

    $result = mysqli_query($connection, $select);

    if($result){
        echo "Successfully inserted";
    } else
        echo "Not inserted successfully";

        $hno = $_POST["vno"];
    $select8="delete from vaccination where vno=$vno";

    $result = mysqli_query($connection, $select8);
    if($result){
        echo "deleted successfully";
    } else
    echo "cant delete";

    
    mysqli_close($connection);
?>