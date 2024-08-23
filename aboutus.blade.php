<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us | Your Company Name</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .about-section {
      padding: 60px 0;
    }
    .about-section h2 {
      margin-bottom: 30px;
    }
    .team-member {
      text-align: center;
      margin-bottom: 30px;
    }
    .team-member img {
      border-radius: 50%;
      width: 150px;
      height: 150px;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <header>
    @include('header')
</header>
<br>

  <!-- About Us Section -->
  <section class="about-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2>About Us</h2>
          <p>Welcome to <strong>Your Company Name</strong>! We are dedicated to providing top-notch [product/service] that meet your needs. Our mission is to [briefly state your mission or purpose]. With a team of experts, we are committed to [describe what sets you apart or your main goal].</p>
          <p>Founded in [Year], our journey started with a vision to [describe initial inspiration]. Today, we’ve grown to [mention current status], and we continue to thrive thanks to our incredible customers and team.</p>
          <p>We offer [briefly describe your products/services], ensuring quality and innovation in every [product/service]. Our core values include:</p>
          <ul>
            <li><strong>Quality</strong>: We ensure every [product/service] meets the highest standards.</li>
            <li><strong>Customer-Centric</strong>: Your satisfaction is our priority.</li>
            <li><strong>Innovation</strong>: We constantly seek new ways to improve.</li>
          </ul>
        </div>
        <div class="col-lg-6">
          <h3>Meet the Team</h3>
          <div class="row">
            <div class="col-md-4 team-member">
              <img src="https://via.placeholder.com/150" alt="Team Member Name">
              <h5>John Doe</h5>
              <p>CEO & Founder</p>
            </div>
            <div class="col-md-4 team-member">
              <img src="https://via.placeholder.com/150" alt="Team Member Name">
              <h5>Jane Smith</h5>
              <p>Lead Designer</p>
            </div>
            <div class="col-md-4 team-member">
              <img src="https://via.placeholder.com/150" alt="Team Member Name">
              <h5>Mike Johnson</h5>
              <p>Marketing Director</p>
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
