<?php
$connection = mysqli_connect("localhost", "root", "", "demo");


$hno = $_GET['hno'];
$sql2="delete from hospital where hno = '$hno'";

    $result = mysqli_query($connection, $sql2);
    
    if($result){
        
        echo '<script>alert("Deleted Successfully")</script>';
        echo '<script>window.location="http://localhost/pooja/healthstatus/pages/hospital/view.php"</script>';
    } else
    echo "cant delete";

    mysqli_close($connection);


?>