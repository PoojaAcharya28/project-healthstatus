<?php

    $connection = mysqli_connect("localhost", "root", "", "demo");


    // INSERT DETAILS

    if (isset($_POST['add_data'])) {

        //ASSIGNING TO VARIABLE

        $hno = $_POST["hno"];
        $hname = $_POST["hname"];
        $location= $_POST["location"];
        $phone = $_POST["phone"];
        

        //INSERT QUERY

        $select =
        "insert into hospital (hno, hname, location, phone) values('$hno', '$hname', '$location' ,'$phone')";

        //to execute the query
        $result = mysqli_query($connection, $select);

        //to check whether inserted or not

        if($result){

            echo '<script>alert("Inserted Successfully")</script>';
            echo '<script>window.location="http://localhost/pooja/healthstatus/pages/hospital/hospital.html"</script>';

        } else
            echo "Not inserted successfully";
        
    }

    // UPDATE DETAILS

    if(isset($_POST['update'])) // when click on Update button
    {
        
        $hno = $_GET["hno"];
        $hname = $_POST["hname"];
        $location= $_POST["location"];
        $phone = $_POST["phone"];


        $sql = "update `hospital` set hno = '$hno', hname = '$hname',  location ='$location' , phone = '$phone'  where hno = '$hno'";

        $result = mysqli_query($connection, $sql);

        if($result){
            // echo "Updated";
            echo '<script>alert("Updated Successfully")</script>';
            echo '<script>window.location="http://localhost/pooja/healthstatus/pages/hospital/view.php"</script>';
        } else{
            echo "cant update";
        }
       
    }


    
?>

    