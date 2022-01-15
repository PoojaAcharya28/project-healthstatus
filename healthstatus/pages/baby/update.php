<?php
    $connection = mysqli_connect("localhost", "root", "", "demo");

     //get id through query string
    $bno = $_GET['bno'];

    // $sql1 = "select * from baby where bno='$bno'";  //select query
    // $result = mysqli_fetch_array(($connection, $sql1) or die(mysqli_error($connection)));   //fetch array

    // echo "before update condition";
    if(isset($_POST['update'])) // when click on Update button
    {
        // $bno = $_POST['bno'];
        $bname = $_POST['bname'];
        $age = $_POST['age'];
        $mothername = $_POST['mothername'];
        $fathername = $_POST['fathername'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $gender = $_POST['gender'];

        // echo "before after condition";
        // echo "$bno";
        // echo "$bname";

        $sql = "update `baby` set bno = '$bno', bname = '$bname',  age ='$age' , mothername = '$mothername', fathername = '$fathername', weight = '$weight', height = '$height', gender = '$gender' where bno = '$bno'";

        $result = mysqli_query($connection, $sql);

        if($result){
            // echo "Updated";
            echo '<script>alert("Updated Successfully")</script>';
            echo '<script>window.location="http://localhost/pooja/healthstatus/pages/baby/view.php"</script>';
        } else{
            echo "cant update";
        }

       
    }

mysqli_close($connection);
?>



<!-- $id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from tblemp where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $fullname = $_POST['fullname'];
    $age = $_POST['age'];
	
    $edit = mysqli_query($db,"update tblemp set fullname='$fullname', age='$age' where id='$id'");

    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:all_records.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	 -->
	