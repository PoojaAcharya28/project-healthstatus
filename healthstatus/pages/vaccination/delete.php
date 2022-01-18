<?php
$connection = mysqli_connect("localhost", "root", "", "demo");


$vno = $_GET['vno'];
$sql2="delete from vaccination where vno = '$vno'";

    $result = mysqli_query($connection, $sql2);
    
    if($result){
        
        echo '<script>alert("Deleted Successfully")</script>';
        echo '<script>window.location="http://localhost/pooja/healthstatus/pages/vaccination/view.php"</script>';
    } else
    echo "cant delete";

    mysqli_close($connection);


?>