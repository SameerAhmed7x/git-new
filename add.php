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
          <a class="nav-link " href="add.php">Add</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="edit.php">Update</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link " href="#">Delete</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>
<br>
<div class="container mt-5">
    <h2 class="text-center text-primary"><b>Add Student Records Here</b></h2>


    <form action="save.php" method="post">



    
        <br>
        <div class="form-group">
            <label for="name"><b>Name</b></label>
            <input type="text" class="form-control" id="name" name="sname" placeholder="Enter your name">
        </div>
        <br>
        <div class="form-group">
            <label for="name"><b>Address</b></label>
            <input type="text" class="form-control" id="address"  name="saddress" placeholder="Enter your address">
        </div>
        <br>
        <div class="form-group">
            <label for="dropdown"><b>Select Class</b></label>
            <select class="form-control" id="dropdown" name="sclass">
                <option> Select</option>
                <?php
                $conn = mysqli_connect("localhost","root","","employe");
                $sql = "SELECT * FROM emp_class";
                $result = mysqli_query($conn,$sql) or die("failed"); 
                while($row = mysqli_fetch_assoc($result)){
                
                
                
                ?>
                <option><?php echo $row['cid']?> . <?php echo $row['c_name']?></option>
                <?php
             }
             ?>
            </select>
      
        </div>
        <br>
        <div class="form-group">
            <label for="name"><b>Phone</b></label>
            <input type="text" class="form-control" id="phone" name="sphone" placeholder="Enter your phone">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Add student Record</button>
    </form>
</div>
</body>
</html>