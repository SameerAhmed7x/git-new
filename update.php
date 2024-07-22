<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <style>
        body {
            background: lightgrey;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="add.php">Add</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="update.php">Update</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="delete.php">Delete</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <br>
    < class="container">
        <h2>Update Record via Id</h2>
        <form action="" method="post" class="form">
            <div class="form-group">
                <label><b>Id</b></label>
                <input type="text" class="form-control" name="sid">

            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="showbtn" value="show">Show</button>
            <br>


        </form>
        <?php
        if (isset($_POST["showbtn"])) {
            //creating connection 
            $conn = mysqli_connect("localhost", "root", "", "crudd") or die("error");
            $stu_id = $_POST["sid"];
            //sql command line
            $sql = "SELECT * FROM employee where emp_id = {$stu_id}";
            $result = mysqli_query($conn, $sql) or die("failed");
            //to check if there is any data inside $result command or not
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                    ?>



                    <form class="form" action="editdata.php" method="post">




                        <br>
                        <div class="form-group">

                            <input type="hidden" class="form-control" id="name" name="sid" value="<?php echo $row['emp_id']; ?>">
                            <label for="name"><b>Name</b></label>
                            <input type="text" class="form-control" id="name" name="sname" value="<?php echo $row['emp_name']; ?>">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="name"><b>Address</b></label>
                            <input type="text" class="form-control" id="address" name="saddress"
                                value="<?php echo $row['emp_address']; ?>">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="dropdown"><b>Select Class</b></label>
                            <?php
                            $sql1 = "SELECT * FROM emp_class";
                            $result1 = mysqli_query($conn, $sql1) or die("failed");
                            if (mysqli_num_rows($result1) > 0) {
                                echo "<select class='form-control' id='dropdown' name='sclass'>";
                                while ($row1 = mysqli_fetch_assoc($result1)) {
                                    if (
                                        $row['emp_dept'] == $row1['c_id']
                                    ) {
                                        $select = "selected";
                                    } else {
                                        $select = "";
                                    }

                                    echo "<option value='{$row1['c_id']}' {$select}>{$row1['c_name']}</option>";
                                }
                                echo "</select>";
                            }
                            ?>

                        </div>
                        <br>
                        <div class="form-group">
                            <label for="name"><b>Phone</b></label>
                            <input type="text" class="form-control" id="phone" name="sphone"
                                value="<?php echo $row['emp_contact']; ?>">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Update Record</button>
                    </form>
                    <?PHP
                }
            }
        }
        ?>


        </div>


        </div>
</body>

</html>