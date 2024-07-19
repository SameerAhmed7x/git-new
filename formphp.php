<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
       <style>
        body{
            background-image: url("https://w.wallhaven.cc/full/zy/wallhaven-zyj8gw.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
        }
        .form-label{
            color:white;
        }
        .form-text{
            color:grey; 
        }
        h1{
            color:brown;
            font-size:50px;
            font-style:bold;
        }
        .form-check-label{
            color:grey;
        }
        hr{
          color:white;
        }
        form{
            background-color:rgba(0,0,0,0.5);
            color:white;
            padding:20px;
            border-radius:20px;
            margin-top:100px;
            margin-bottom:100px;
            margin-left:300px;
            margin-right:300px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius:20px;
            font-size:20px;
            font-style:bold;
            font-weight:bold;
            text-align:center;
            font-family:cursive;
            font-weight:bold;
            font-style:bold;
            
        }
        form:HOVER{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            color:white;
            border-radius:10px;
            font-size:20px;
        transition: ;
        }
        button{
            background-color:brown;
            color:white;
            border-radius:10px;
            font-size:20px;
            font-style:bold;
            font-weight:bold;
            text-align:center;
            font-family:cursive;
            font-weight:bold;
            font-style:bold;
        }
       </style>  
    </head>
    <body>
        <h1 class="text-center">LOGIN FORM</h1>
        
      <div class="container"> 
      <hr> 
      
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
  
  
    <div class="ms-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <br>
  <div class="ms-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <br>
  
  <br>
  <div class="ms-3">
  <button type="submit"  name="save" >Submit</button>
      </div>
      <?php
if(isset($_POST['save'])){
    echo $_POST['email']."<br>";
    echo $_POST['password']."<br>";
}

?>
</form>


 </div>     
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>