<?php
$connection = mysqli_connect("localhost", "root", "", "demo");


$eno = $_GET['eno'];
$sql2="delete from employee where eno = '$eno'";

    $result = mysqli_query($connection, $sql2);
    
    if($result){
        
        echo '<script>alert("Deleted Successfully")</script>';
        echo '<script>window.location="http://localhost/pooja/healthstatus/pages/employee/view.php"</script>';
    } else
    echo "cant delete";

    mysqli_close($connection);


?>