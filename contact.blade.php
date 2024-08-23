<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | Your Company Name</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .contact-page {
      padding: 60px 0;
    }
    .contact-info {
      margin-bottom: 30px;
    }
    .contact-info h4 {
      margin-bottom: 15px;
    }
    .contact-form {
      padding: 20px;
      background-color: #f9f9f9;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .contact-form .form-control:focus {
      box-shadow: none;
      border-color: #007bff;
    }
    .map-container {
      margin-top: 30px;
      position: relative;
      height: 400px;
    }
    .map-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 0;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <header>
    @include('header')
</header>
<br>

  <!-- Contact Us Section -->
  <section class="contact-page">
    <div class="container">
      <div class="row">
        <!-- Contact Information -->
        <div class="col-md-4 contact-info">
          <h4>Contact Information</h4>
          <p><strong>Address:</strong> 123 Main Street, City, Country</p>
          <p><strong>Phone:</strong> +1 (123) 456-7890</p>
          <p><strong>Email:</strong> <a href="mailto:info@yourcompany.com">info@yourcompany.com</a></p>
        </div>

        <!-- Contact Form -->
        <div class="col-md-8">
          <h4>Send Us a Message</h4>
          <div class="contact-form">
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Your Message" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Map -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.158915650391!2d-74.00594148459352!3d40.71277577933173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a1b4f5d5fef%3A0x6b4c5bfbfd4b66ff!2sNew%20York%2C%20NY%2010007!5e0!3m2!1sen!2sus!4v1603999755648!5m2!1sen!2sus" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
