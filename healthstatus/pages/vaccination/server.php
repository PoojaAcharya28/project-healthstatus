<?php

    $connection = mysqli_connect("localhost", "root", "", "demo");


    // INSERT DETAILS

    if (isset($_POST['add_data'])) {

        //ASSIGNING TO VARIABLE

        $vname = $_POST["vname"];
        $preventdisease = $_POST["preventdisease"];
        $agefordose = $_POST["agefordose"];
        $hname = $_POST["hname"];
        //INSERT QUERY

        $select =
        "insert into vaccination (vname, preventdisease, agefordose, hname) values('$vname', '$preventdisease','$agefordose','$hname')";

        //to execute the query
        $result = mysqli_query($connection, $select);

        //to check whether inserted or not

        if($result){

            echo '<script>alert("Inserted Successfully")</script>';
            echo '<script>window.location="http://localhost/pooja/healthstatus/pages/vaccination/vaccination.php"</script>';

        } else
            echo "Not inserted successfully";
        
    }

    // UPDATE DETAILS

    if(isset($_POST['update'])) // when click on Update button
    {
        $vno = $_GET['vno'];
        $vname = $_POST['vname'];
        $preventdisease = $_POST['preventdisease'];
        $agefordose = $_POST['agefordose'];
        $hname = $_POST['hname'];


        $sql = "update `vaccination` set vname = '$vname',  preventdisease ='$preventdisease' , agefordose = '$agefordose', hname = '$hname' where vno = '$vno'";

        $result = mysqli_query($connection, $sql);

        if($result){
            // echo "Updated";
            echo '<script>alert("Updated Successfully")</script>';
            echo '<script>window.location="http://localhost/pooja/healthstatus/pages/vaccination/view.php"</script>';
        } else{
            echo "cant update";
        }
       
    }


    
?>

    