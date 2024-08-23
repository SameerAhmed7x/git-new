<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Navbar Example</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body{
        background: rgb(255,198,82);
background: -moz-linear-gradient(90deg, rgba(255,198,82,1) 0%, rgba(194,157,63,1) 35%, rgba(255,119,0,1) 100%);
background: -webkit-linear-gradient(90deg, rgba(255,198,82,1) 0%, rgba(194,157,63,1) 35%, rgba(255,119,0,1) 100%);
background: linear-gradient(90deg, rgba(255,198,82,1) 0%, rgba(194,157,63,1) 35%, rgba(255,119,0,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#ffc652",endColorstr="#ff7700",GradientType=1);
    }
    nav{
        background-color: #ff6b33;
    }
    .navbar-brand {
      font-weight: bold;
    }
    .nav-link {
      font-size: 1.1rem;
    }
  </style>
</head>
<body>


  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Your Company</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/welcome')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/aboutus')}}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/contact')}}">contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/gallary')}}">gallary</a>
          </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            More
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Blog</a>
            <a class="dropdown-item" href="#">Careers</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Contact</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container mt-4">
    <h1>Welcome to Our Website</h1>
    <p>This is a sample page with a responsive navbar.</p>
  </div>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
