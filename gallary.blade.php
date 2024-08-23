<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery | Your Company Name</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .gallery-item {
      position: relative;
      overflow: hidden;
      border-radius: 8px;
    }
    .gallery-item img {
      transition: transform 0.5s ease;
      width: 100%;
      height: auto;
    }
    .gallery-item:hover img {
      transform: scale(1.1);
    }
    .gallery-item .overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5);
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      transition: opacity 0.3s ease;
      text-align: center;
    }
    .gallery-item:hover .overlay {
      opacity: 1;
    }
    .overlay h5 {
      margin: 0;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <header>
    @include('header')
</header>
<br>

  <!-- Gallery Section -->
  <section class="gallery py-5">
    <div class="container">
      <h2 class="text-center mb-4">Gallery</h2>
      <div class="row">
        <!-- Gallery Item -->
        <div class="col-md-4 mb-4">
          <div class="gallery-item">
            <img src="https://via.placeholder.com/600x400" alt="Gallery Image 1" class="img-fluid">
            <div class="overlay">
              <h5>Image Title 1</h5>
            </div>
          </div>
        </div>
        <!-- Gallery Item -->
        <div class="col-md-4 mb-4">
          <div class="gallery-item">
            <img src="https://via.placeholder.com/600x400" alt="Gallery Image 2" class="img-fluid">
            <div class="overlay">
              <h5>Image Title 2</h5>
            </div>
          </div>
        </div>
        <!-- Gallery Item -->
        <div class="col-md-4 mb-4">
          <div class="gallery-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSW0rrTjVtrP6j2G5d9CH-00UFyqVe-N7KHUg&s" alt="Gallery Image 3" class="img-fluid">
            <div class="overlay">
              <h5>Image Title 3</h5>
            </div>
          </div>
        </div>
        <!-- Additional Gallery Items -->
        <div class="col-md-4 mb-4">
          <div class="gallery-item">
            <img src="data:image/jpeg;base64,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" alt="Gallery Image 4" class="img-fluid">
            <div class="overlay">
              <h5>Image Title 4</h5>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="gallery-item">
            <img src="https://via.placeholder.com/600x400" alt="Gallery Image 5" class="img-fluid">
            <div class="overlay">
              <h5>Image Title 5</h5>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="gallery-item">
            <img src="https://via.placeholder.com/600x400" alt="Gallery Image 6" class="img-fluid">
            <div class="overlay">
              <h5>Image Title 6</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-4">
    <div class="container text-center">
      <p>&copy; 2024 Your Company Name. All rights reserved.</p>
      <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
      <p>Follow us on
        <a href="#" class="text-dark">Facebook</a>,
        <a href="#" class="text-dark">Twitter</a>, and
        <a href="#" class="text-dark">Instagram</a>.
      </p>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
