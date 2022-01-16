<?php

    $connection = mysqli_connect("localhost", "root", "", "demo");


    // INSERT DETAILS

    if (isset($_POST['add_data'])) {

        //ASSIGNING TO VARIABLE

        $bno = $_POST['bno'];
        $bname = $_POST["bname"];
        $age = $_POST["age"];
        $mothername = $_POST["mothername"];
        $fathername = $_POST["fathername"];
        $height = $_POST["height"];
        $weight = $_POST["weight"];
        $gender = $_POST["gender"];

        //INSERT QUERY

        $select =
        "insert into baby (bno, bname, age, mothername, fathername,weight, height, gender ) values('$bno', '$bname', '$age' ,'$mothername', '$fathername', '$weight', '$height', '$gender')";

        //to execute the query
        $result = mysqli_query($connection, $select);

        //to check whether inserted or not

        if($result){

            echo '<script>alert("Inserted Successfully")</script>';
            echo '<script>window.location="http://localhost/pooja/healthstatus/pages/baby/baby.html"</script>';

        } else
            echo "Not inserted successfully";
        
    }

    // UPDATE DETAILS

    if(isset($_POST['update'])) // when click on Update button
    {
        
        $bno = $_GET['bno'];
        $bname = $_POST['bname'];
        $age = $_POST['age'];
        $mothername = $_POST['mothername'];
        $fathername = $_POST['fathername'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $gender = $_POST['gender'];


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











    // $baby = $_POST["baby"];
    // $sql1 = "select * from baby";
    // $result1= mysqli_query($connection, $sql1);


    //     // $sql1 = "select bno, bname, age from baby";
    //     // $result1 = mysqli_query($connection, $sql1);
        
    //     if (mysqli_num_rows($result1) > 0) {
    //       //  TO Display the output data of each row

        
    //           echo "<table>";
    //                 echo"<tr>";
    //                     echo"<th>Bno</th>";
    //                     echo"<th>Bname</th>";
    //                     echo"<th>Age</th>";
    //                     echo"<th>Mother Name</th>";
    //                     echo"<th>Father Name</th>";
    //                     echo"<th>Weight</th>";
    //                     echo"<th>Height</th>";
    //                     echo"<th>Gender</th>";
    //                 echo"</tr>";
    //                     while($row = mysqli_fetch_assoc($result1)) {
    //                     echo"<tr>";
    //                     echo"<td>". $row['bno']."</td>";
    //                     echo"<td>". $row['bname']."</td>";
    //                     echo"<td>". $row['age']."</td>";
    //                     echo"<td>". $row['mothername']."</td>";
    //                     echo"<td>". $row['fathername']."</td>";
    //                     echo"<td>". $row['weight']."</td>";
    //                     echo"<td>". $row['height']."</td>";
    //                     echo"<td>". $row['gender']."</td>";
    //                 echo"</tr>";
    //                     }
    //          echo"</table>";
            
          
    //     } else {
    //                 echo "0 results";
    //             }

// //delation
    //     $bno = $_POST["bno"];
    // $sql2="delete from baby where bno=$bno";

    // $result = mysqli_query($connection, $sql2);
    
    // if($result){
    //     echo "deleted successfully";
    // } else
    // echo "cant delete";
//--------------------------------

//     $bno = $_POST["bno"];
//     $bname = $_POST["bname"];
//     $select11="update baby set bname=$bname where bno=$bno";

//     $result = mysqli_query($connection, $select11);
//     if($result){
//         echo "updated successfully";
//     } else
//     echo "cant update";


//     $bno = $_POST["bno"];
//     $age = $_POST["age"];
//     $select12="update baby set age=$age where bno=$bno";

//     $result = mysqli_query($connection, $select12);
//     if($result){
//         echo "updated successfully";
//     } else
//     echo "cant update";

//     $bno = $_POST["bno"];
//     $mothername = $_POST["mothername"];
//     $select13="update baby set mothername=$mothername where bno=$bno";

//     $result = mysqli_query($connection, $select13);
//     if($result){
//         echo "updated successfully";
//     } else
//     echo "cant update";

//     $bno = $_POST["bno"];
//     $fathername = $_POST["fathername"];
//     $select14="update baby set fathername=$fathername where bno=$bno";

//     $result = mysqli_query($connection, $select14);
//     if($result){
//         echo "updated successfully";
//     } else
//     echo "cant update";

//     $bno = $_POST["bno"];
//     $weight = $_POST["weight"];
//     $select15="update baby set weight=$weight where bno=$bno";

//     $result = mysqli_query($connection, $select15);
//     if($result){
//         echo "updated successfully";
//     } else
//     echo "cant update";

//     $bno = $_POST["bno"];
//     $height = $_POST["height"];
//     $select16="update baby set height=$height where bno=$bno";

//     $result = mysqli_query($connection, $select16);
//     if($result){
//         echo "updated successfully";
//     } else
//     echo "cant update";

//     $bno = $_POST["bno"];
//     $height = $_POST["height"];
//     $select17="update baby set height=$height where bno=$bno";

//     $result = mysqli_query($connection, $select17);
//     if($result){
//         echo "updated successfully";
//     } else
//     echo "cant update";

//     $bno = $_POST["bno"];
//     $gender = $_POST["gender"];
//     $select18="update baby set gender=$gender where bno=$bno";

//     $result = mysqli_query($connection, $select18);
//     if($result){
//         echo "updated successfully";
//     } else
//     echo "cant update";
    //to close database connection

    
?>

    