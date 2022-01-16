<?php

    $connection = mysqli_connect("localhost", "root", "", "demo");


    // INSERT DETAILS

    if (isset($_POST['add_data'])) {

        //ASSIGNING TO VARIABLE

        $bno = $_POST['bno'];
        $vno = $_POST["vno"];
        $date = $_POST["date"];
        
        //INSERT QUERY

        $select =
        "insert into receive (bno, vno, date ) values('$bno', '$vno', '$date')";

        //to execute the query
        $result = mysqli_query($connection, $select);

        //to check whether inserted or not

        if($result){

            echo '<script>alert("Inserted Successfully")</script>';
            echo '<script>window.location="http://localhost/pooja/healthstatus/pages/receive/receive.html"</script>';

        } else
            echo "Not inserted successfully";
        
    }

    // UPDATE DETAILS

    if(isset($_POST['update'])) // when click on Update button
    {
        
        $bno = $_GET['bno'];
        $vno = $_GET["vno"];
        $date = $_POST["date"];
        

        $sql = "update `receive` set bno = '$bno', vno='$vno', date = '$date'  where bno = '$bno'";

        $result = mysqli_query($connection, $sql);

        if($result){
            // echo "Updated";
            echo '<script>alert("Updated Successfully")</script>';
            echo '<script>window.location="http://localhost/pooja/healthstatus/pages/receive/view.php"</script>';
        } else{
            echo "cant update";
        }
       
    }


    
    
?>

    