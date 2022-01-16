<?php

    $connection = mysqli_connect("localhost", "root", "", "demo");


    // INSERT DETAILS

    if (isset($_POST['add_data'])) {

        //ASSIGNING TO VARIABLE

        $vno = $_POST["vno"];
        $vname = $_POST["vname"];
        $preventdisease = $_POST["preventdisease"];
        $agefordose = $_POST["agefordose"];
        $hno = $_POST["hno"];
        //INSERT QUERY

        $select =
    "insert into vaccination (vno, vname, preventdisease, agefordose, hno) values(''$vno','$vname', '$preventdisease','$agefordose','$hno')";

        //to execute the query
        $result = mysqli_query($connection, $select);

        //to check whether inserted or not

        if($result){

            echo '<script>alert("Inserted Successfully")</script>';
            echo '<script>window.location="http://localhost/pooja/healthstatus/pages/vaccination/vaccination.html"</script>';

        } else
            echo "Not inserted successfully";
        
    }

    // UPDATE DETAILS

    if(isset($_POST['update'])) // when click on Update button
    {
        
        $vno = $_GET["vno"];
        $vname = $_POST["vname"];
        $preventdisease = $_POST["preventdisease"];
        $agefordose = $_POST["agefordose"];
        $hno = $_POST["hno"];


        $sql = "update `vaccination` set vno = '$vno', vname = '$vname',  preventdisease ='$preventdisease' , agefordose = '$agefordose', hno = '$hno' where vno = '$vno'";

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

    