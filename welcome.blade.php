<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{

            background-position: center;
            background-repeat: no-repeat;
            backdrop-filter: blur(20px) ;
            background-size: cover;
        }
    </style>
</head>
<body>
    <header>
        @include('header')
    </header>
    <br>
      <br>
      <h1 class="text-center">welcome page</h1>
      <br>
      <br>
<div class="container d-flex justify-content-center px-4">
    <div class="container px-4">
      <div class="card gx-5" style="width: 18rem;">
        <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
      <br>
      <div class="container px-4">
      <div class="card  gx-5" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
      <br>
      <div class="container px-4">
      <div class="card gx-5" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    </div>
</body>
</html>
