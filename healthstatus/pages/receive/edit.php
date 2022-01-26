<?php
    if(isset($_GET['id'])){ // when click on Update button
        $id = $_GET['id'];
        $update = true;
        $connection = mysqli_connect("localhost", "root", "", "demo");

        $sql = "select * from receive where id='$id'";

        $result1 = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result1) > 0){

            while($row = mysqli_fetch_assoc($result1)){

                $id = $row['id'];
                $bname = $row['bname'];
                $vname = $row['vname'];
                $status = $row['status'];
                
            }

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
    <title>receive</title>
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
                        <li><a href="../vaccination/vaccination.php"><i class="fa fa-medkit" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Vaccination</span></a></li>
                        <li><a href="../hospital/hospital.php"><i class="fa fa-hospital-o" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Hospital</span></a></li>
                        <li ><a href="../employee/employee.php"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Employee</span></a></li>
                        <!-- <li class="active"><a href="../receive/receive.php"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Receive</span></a></li> -->
                        <li ><a href="../logs/logs.php"><i class="fa fa-list" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logs</span></a></li>
                        <li class="active" ><a href="../receive/receive.php"><i class="fa fa-files-o" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Receive</span></a></li>
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
                <form action="./server.php?id=<?php echo $id; ?>" method="post">
                        <h2>Update Details</h2>
                        <!-- <a href="./view.php">View Details</a> -->
                        <div class="rect-bar"></div>
                        <div class="form-container">
                            <div class="col-sm-6">
                                <div class="control-container">
                                    <label for="bname">baby name</label>
                                    <?php
                                                    $sql1 = "select bname from baby";
                                                    $result1= mysqli_query($connection, $sql1);
                                                        
                                                        if (mysqli_num_rows($result1) > 0) {
                                                        //  TO Display the output data of each row
                                                ?>
                                            <select class="form-control" type="text" id="bname" name="bname" value=<?php echo $bname; ?>>
                                                <option>Select Baby</option>
                                                <?php
                                                    while($row = mysqli_fetch_assoc($result1)) {
                                                ?>
                                                    <option><?php echo $row['bname']; ?></option>
                                                <?php } ?>
                                            </select>
                                            <?php } ?>
                                </div>
                                <div class="control-container">
                                    <label for="vname">vaccination name</label>
                                    <?php
                                                    $sql1 = "select vname from vaccination";
                                                    $result1= mysqli_query($connection, $sql1);
                                                        
                                                        if (mysqli_num_rows($result1) > 0) {
                                                        //  TO Display the output data of each row
                                                ?>
                                            <select class="form-control" type="text" id="vname" name="vname" value=<?php echo $vname; ?>>
                                                <option>Select Vacination</option>
                                                <?php
                                                    while($row = mysqli_fetch_assoc($result1)) {
                                                ?>
                                                    <option><?php echo $row['vname']; ?></option>
                                                <?php } ?>
                                            </select>
                                            <?php } ?>
                                </div>
                                <div class="control-container">
                                <label for="status">Status</label>
                                            <select class="form-control" type="text" id="status" name="status" required value=<?php echo $status; ?>>
                                                <option>Select Status</option>
                                                <option name="yes" value="yes">Vaccinated</option>
                                                <option name="No" value="No">Not Vaccinated</option>
                                            </select>
                                </div>
                                
                            </div>
                            
                            <div class="col-sm-12">
                                        <?php if ($update == true){ ?>
                                            <button name="update" type="submit">Update</button>
                                        <?php } else { ?>
                                            <button name="notupdate" type="submit" disabled="disabled" style="background: #333">Update</button>
                                        <?php } ?>
                                    </div>
                        </div>
                    </form>
                </div>
            </div>
            
            
        </div>
        

    </div>

    
    
</body>
</html>
<?php
        } else {
            echo "Not Found";
        }
        // mysqli_close($connection);
    }
?>