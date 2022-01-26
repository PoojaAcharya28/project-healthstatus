<?php
    $connection = mysqli_connect("localhost", "root", "", "demo");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../../core-ui/general_ui.css">
    <link rel="stylesheet" href="../../core-ui/style.css">
    <title>Infant</title>
</head>
<body>
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                   
                    <h1>Child Health Status</h1>
                </div>
                <div class="navi">
                    <ul>
                        <li ><a href="../../index.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">DashBoard</span></a></li>
                        <li class="active"><a href="../baby/baby.php"><i class="fa fa-child" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Baby</span></a></li>
                        <li><a href="../vaccination/vaccination.php"><i class="fa fa-medkit" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Vaccination</span></a></li>
                        <li><a href="../hospital/hospital.php"><i class="fa fa-hospital-o" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Hospital</span></a></li>
                        <li ><a href="../employee/employee.php"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Employee</span></a></li>
                        <li ><a href="../logs/logs.php"><i class="fa fa-list" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logs</span></a></li>
                        <li ><a href="../receive/receive.php"><i class="fa fa-files-o" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Receive</span></a></li>
                    
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                            
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <li class="hidden-xs"><a href="../../login/logout.php" class="add-project" data-toggle="modal" data-target="#add_project">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
                <div class="main-container">
                    <form action="./server.php" method="post">
                        <h2>baby registration form</h2>
                        <a href="./view.php">View Details</a>
                        <div class="rect-bar"></div>
                        <div class="form-container">
                            <div class="col-sm-6">
                                <div class="control-container">
                                    <label for="bno">baby number</label>
                                    <?php

                                        $sql1 = "select bno from baby ORDER BY bno DESC LIMIT 1;";
                                        $result1= mysqli_query($connection, $sql1);
                                                
                                            if (mysqli_num_rows($result1) > 0) {
                                            //  TO Display the output data of each row
                                            $row = mysqli_fetch_assoc($result1);
                                            $bno = $row['bno'] + 1;
                                    ?>
                                    <input class="form-control" type="text" id="bno" name="bno" value=<?php echo $bno; ?> disabled>
                                    <?php } ?>
                                </div>
                                <div class="control-container">
                                    <label for="bname">baby Name</label>
                                    <input class="form-control" type="text" id="name" name="bname" placeholder="Enter the baby name" required>
                                </div>
                                <div class="control-container">
                                    <label for="age">baby age <small style="font-size: 10px; color : #666; letter-spacing: 1px">( in months )</small></label>
                                    <input class="form-control" type="number" id="age" name="age" min="0" placeholder="Enter the Age" required value="0">
                                </div>
                                <div class="control-container">
                                    <label for="mothername">mother's name</label>
                                    <input class="form-control" type="text" id="mothername" name="mothername" placeholder="Enter the mother name" required>
                                </div>
                                <div class="control-container">
                                    <label>hospital Name</label>
                                    <?php

                                        $sql2 = "select hname from hospital";
                                        $result2= mysqli_query($connection, $sql2);
                                                
                                            if (mysqli_num_rows($result2) > 0) {
                                            //  TO Display the output data of each row
                                    ?>
                                    <select class="form-control" type="text" id="hname" name="hname" value=<?php $row['hname']; ?> required>
                                        <option>Select Hospital</option>
                                        <?php
                                            while($row = mysqli_fetch_assoc($result2)) {
                                        ?>
                                            <option><?php echo $row['hname']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="control-container">
                                    <label for="fathername">father's name</label>
                                    <input class="form-control" type="text" id="fathername" name="fathername" placeholder="Enter the father name" required>
                                </div>
                                <div class="control-container">
                                    <label for="weight">baby's weight <small style="font-size: 10px; color : #666; letter-spacing: 1px">( in kg )</small></label>
                                    <input class="form-control" type="number" id="weight" name="weight" placeholder="Enter the weight" min="2.5" value="2.5" required>
                                </div>
                                <div class="control-container">
                                    <label for="height">baby's height <small style="font-size: 10px; color : #666; letter-spacing: 1px">( in cm )</small></label>
                                    <input class="form-control" type="number" id="height" name="height" placeholder="Enter the height" min="45.6" value="45.6" required>
                                </div>
                                <div class="control-container">
                                    <label for="gender">baby's gender</label>
                                    <select class="form-control" type="text" id="gender" name="gender" required>
                                        <option>Select Gender</option>
                                        <option name="female" value="female">Female</option>
                                        <option name="male" value="male">Male</option>
                                    </select>
                                </div>
                                <!-- <div class="control-container">
                                    <label for="gender">vaccination no</label>
                                    <input class="form-control" type="text" id="vno" name="vno" placeholder="Enter the vaccination no" required>
                                </div> -->
                               
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" name="add_data">Submit</button>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        

    </div>
    
</body>
</html>