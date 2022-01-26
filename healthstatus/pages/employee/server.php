<?php
    
    

    $connection = mysqli_connect("localhost", "root", "", "demo");

    // INSERT DETAILS

    if (isset($_POST['add_data'])) {

        //ASSIGNING TO VARIABLE

    $ename = $_POST["ename"];
    $age = $_POST["age"];
    $designation = $_POST["designation"];
    $gender = $_POST["gender"];
    $hname =$_POST["hname"];

    //INSERT QUERY

    $select =
    "insert into employee (ename, age, designation, gender, hname) values('$ename',  '$age', '$designation', '$gender', '$hname')";

    //TO EXECUTE QUERY

    $result = mysqli_query($connection, $select);

    //TO CHECK WHETHER INSERTED OR NOT

    if($result){

        echo '<script>alert("Inserted Successfully")</script>';
        echo '<script>window.location="http://localhost/pooja/healthstatus/pages/employee/employee.php"</script>';

    } else
        echo "Not inserted successfully";


}


//update details

if(isset($_POST['update'])) // when click on Update button
{
    $eno = $_GET["eno"];
    $ename = $_POST["ename"];
    $age = $_POST["age"];
    $designation = $_POST["designation"];
    $gender = $_POST["gender"];
    $hname =$_POST["hname"];

    $sql = "update `employee` set eno = '$eno', ename = '$ename',  age ='$age' , designation = '$designation', gender = '$gender', hname = '$hname' where eno = '$eno'";
    
    $result = mysqli_query($connection, $sql);
    
    if($result){
        // echo "Updated";
        echo '<script>alert("Updated Successfully")</script>';
        echo '<script>window.location="http://localhost/pooja/healthstatus/pages/employee/view.php"</script>';
    } else{
        echo "cant update";
    }
}




?>