<?php
$connection = mysqli_connect("localhost", "root", "", "demo");


$id = $_GET['id'];
$sql2="delete from receive where id = '$id'";

    $result = mysqli_query($connection, $sql2);
    
    if($result){
        
        echo '<script>alert("Deleted Successfully")</script>';
        echo '<script>window.location="http://localhost/pooja/healthstatus/pages/receive/view.php"</script>';
    } else
    echo "cant delete";

    mysqli_close($connection);


?>