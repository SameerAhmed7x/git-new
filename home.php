<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<style>
body{
    background:lightgrey;
}
</style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">Add</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Update</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link " href="#">Delete</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>

<br>
<div class="container">
    <h2>All Student Records (READ)</h2>
    <?php
    //creating connection 
    $conn = mysqli_connect("localhost","root","","crudd") or die("error");

    //sql command line
    $sql = "SELECT * FROM employee join emp_class where employee.emp_dept=emp_class.c_id";

    $result = mysqli_query($conn, $sql) or die ("failed");
    //to check if there is any data inside $result command or not
    if(mysqli_num_rows($result) > 0){
    ?>

    
    <table class="table table-light table-bordered">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th colspan="2" class="text-center">Action</th>
        </thead>
        <tbody>
        <?php
   while($row = mysqli_fetch_assoc($result)){
   ?>
            <tr>

                <td><?php echo $row['emp_id']?></td>
                <td><?php echo $row['emp_name']?></td>
                <td><?php echo $row['emp_address']?></td>
                <td><?php echo $row['c_name']?></td>
                <td><?php echo $row['emp_phone']?></td>

                <td class="text-center">
                    <a href='' class="btn btn-primary">Edit</a>
                    
                </td>
                <td class="text-center">
                <a href='' class="btn btn-danger">Delete</a>
                </td>

            </tr>
<?php
   }
?>
        </tbody>
    </table>
<?php
}
?>

</div>
</div>  
</body>
</html>