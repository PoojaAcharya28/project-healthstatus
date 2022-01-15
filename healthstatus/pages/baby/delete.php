<?php
$connection = mysqli_connect("localhost", "root", "", "demo");


$bno = $_GET['bno'];
$sql2="delete from baby where bno = '$bno'";

    $result = mysqli_query($connection, $sql2);
    
    if($result){
        
        echo '<script>alert("Deleted Successfully")</script>';
        echo '<script>window.location="http://localhost/pooja/healthstatus/pages/baby/view.php"</script>';
    } else
    echo "cant delete";

    mysqli_close($connection);


?>