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
    <title>Vaccination</title>
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
                        <li ><a href="../baby/baby.php"><i class="fa fa-child" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Baby</span></a></li>
                        <li class="active"><a href="../vaccination/vaccination.php"><i class="fa fa-medkit" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Vaccination</span></a></li>
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
                    <h2>Vaccination status of a Baby</h2>
                    <a href="./view.php">View Details</a>
                    <div class="rect-bar"></div>
                    <div class="form-container">
                        <div class="col-sm-6">
                            <div class="control-container">
                                <label for="vno">vaccination number </label>
                                <?php

                                        $sql1 = "select vno from vaccination ORDER BY vno DESC LIMIT 1;";
                                        $result1= mysqli_query($connection, $sql1);
                                                
                                            if (mysqli_num_rows($result1) > 0) {
                                            //  TO Display the output data of each row
                                            $row = mysqli_fetch_assoc($result1);
                                            $vno = $row['vno'] + 1;
                                ?>
                                <input class="form-control" type="text" id="vno" name="vno" value=<?php echo $vno; ?> disabled>
                                <?php } ?>
                            </div>
                            <div class="control-container">
                                <label for="vname">vaccination name</label>
                                <input class="form-control" type="text" placeholder="Vaccination Name   " id="vname" name="vname" required>
                            </div>
                            <div class="control-container">
                                <label for="preventdisease">Prevent disease</label>
                                <textarea class="form-control" type="text" id="preventdisease" name="preventdisease" required></textarea>
                            </div>
                            
                        </div>
                        <div class="col-sm-6">
                            <div class="control-container">
                                    <label for="agefordose">Age for dose <small style="font-size: 10px; color : #666; letter-spacing: 1px">( in months )</small></label>
                                    <input class="form-control" type="text" id="agefordose" name="agefordose" min="0" value="0" required>
                                </div>
                                <div class="control-container">
                                    <label for="hno">Hospital name</label>
                                    <?php

                                        $sql2 = "select hno, hname from hospital";
                                        $result2= mysqli_query($connection, $sql2);
                                                
                                            if (mysqli_num_rows($result2) > 0) {
                                            //  TO Display the output data of each row
                                    ?>
                                    <select class="form-control" type="text" id="hno" name="hno" value=<?php $row['hno']; ?> required>
                                        <option>Select Hospital</option>
                                        <?php
                                            while($row = mysqli_fetch_assoc($result2)) {
                                        ?>
                                            <option><?php echo $row['hno']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <?php } ?>
                                </div>
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