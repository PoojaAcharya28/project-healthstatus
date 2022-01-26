<?php

    $connection = mysqli_connect("localhost", "root", "", "demo");


    // INSERT DETAILS

    if (isset($_POST['add_data'])) {

        //ASSIGNING TO VARIABLE
        
        $bname = $_POST["bname"];
        $vname = $_POST["vname"];
        $status = $_POST["status"];
        
        //INSERT QUERY

        $select =
        "insert into receive (bname, vname,status) values('$bname', '$vname','$status')";

        //to execute the query
        $result = mysqli_query($connection, $select);

        //to check whether inserted or not

        if($result){

            echo '<script>alert("Inserted Successfully")</script>';
            echo '<script>window.location="http://localhost/pooja/healthstatus/pages/receive/receive.php"</script>';

        } else
            echo "Not inserted successfully";
        
    }

    // UPDATE DETAILS

    if(isset($_POST['update'])) // when click on Update button
    {
        
        $id = $_GET['id'];
        $bname = $_POST['bname'];
        $vname = $_POST['vname'];
        $status = $_POST['status'];
        

        $sql = "update `receive` set id = '$id', bname='$bname', vname = '$vname',status='$status'  where id = '$id'";

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

    