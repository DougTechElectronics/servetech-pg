<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="bootstrap/js/bootstrap.bundle.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    .response-message {
      margin-top: 15px;
      font-weight: bold;
    }
    .response-message.success {
      color: green;
    }
    .response-message.error {
      color: red;
    }
  </style>
</head>  
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">ServeTech</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="services.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
              Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="services.php#webdev">Web development</a></li>
              <li><a class="dropdown-item" href="services.php#ITEQ">Supply of IT equipment</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="services.php#netsh">Networking Solutions</a></li>
              <li><a class="dropdown-item" href="services.php#cyber">Cyber Security</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="store.php">Store</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="card text-bg-dark">
    <img src="images/serrv.jpg" class="card-img" alt="...">
    <div class="card-img-overlay">
      <h5 class="card-title">Our Services</h5>
    </div>
  </div>

  <div id="webdev">
    <section class="hero-section text-center">
      <div class="container">
        <h1 class="display-4 mb-4">Web Designing and Hosting</h1>
      </div>
    </section>

    <section class="services py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="service-item">
              <i class="bi bi-briefcase"></i>
              <h4 class="mt-3">Web Designing & Hosting</h4>
              <p>We design websites tailored to your needs and host them for you.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <i class="bi bi-code-slash"></i>
              <h4 class="mt-3">Website Maintenance</h4>
              <p>We remake websites to give them a perfect look and the best experience for you.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <i class="bi bi-graph-up-arrow"></i>
              <h4 class="mt-3">Database Management</h4>
              <p>We design and manage databases for our clients.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Booking Form for Web Development -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-5 d-flex align-items-center">
          <h1>Book Our Web Development Services</h1>
        </div>
        <div class="col-md-6 offset-md-1">
          <form id="webdevForm" method="POST" action="process_booking.php" class="mt-4 mt-md-0">
            <input type="hidden" name="service" value="Web Development">
            <div class="form-group">
              <label for="webdevName">Name</label>
              <input id="webdevName" class="form-control" type="text" name="name" required>
            </div>
            <div class="form-group">
              <label for="webdevEmail">E-mail</label>
              <input id="webdevEmail" class="form-control" type="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="webdevMessage">Enquiries</label>
              <textarea id="webdevMessage" class="form-control" name="message" placeholder="Enquiries" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Booking</button>
            <div id="webdevResponseMessage" class="response-message"></div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <section class="horizontal-divider-section">
      <hr class="horizontal-divider">
    </section>
  </div>

  <div id="ITEQ">
    <section class="hero-section text-center">
      <div class="container">
        <h1 class="display-4 mb-4">Supply of IT Equipment</h1>
      </div>
    </section>
    <section class="services py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="service-item">
              <i class="bi bi-briefcase"></i>
              <h4 class="mt-3">Computers</h4>
              <p>We supply different types of computers to our clients.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <i class="bi bi-router"></i>
              <h4 class="mt-3">Networking Equipment</h4>
              <p>We also supply different networking equipment for our clients.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <i class="bi bi-gear"></i>
              <h4 class="mt-3">Any Other IT Equipment</h4>
              <p>Contact us and let us know any specific equipment that you need.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Booking Form for IT Equipment -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-5 d-flex align-items-center">
          <h1>Book Our IT Equipment Services</h1>
        </div>
        <div class="col-md-6 offset-md-1">
          <form id="iteqForm" method="POST" action="process_booking.php" class="mt-4 mt-md-0">
            <input type="hidden" name="service" value="IT Equipment">
            <div class="form-group">
              <label for="iteqName">Name</label>
              <input id="iteqName" class="form-control" type="text" name="name" required>
            </div>
            <div class="form-group">
              <label for="iteqEmail">E-mail</label>
              <input id="iteqEmail" class="form-control" type="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="iteqMessage">Enquiries</label>
              <textarea id="iteqMessage" class="form-control" name="message" placeholder="Enquiries" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Booking</button>
            <div id="iteqResponseMessage" class="response-message"></div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <section class="horizontal-divider-section">
      <hr class="horizontal-divider">
    </section>
  </div>

  <div id="netsh">
    <section class="hero-section text-center">
      <div class="container">
        <h1 class="display-4 mb-4">Networking Solutions</h1>
      </div>
    </section>
    <section class="services py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="service-item">
              <i class="bi bi-briefcase"></i>
              <h4 class="mt-3">Networking Setup</h4>
              <p>We set up network systems to keep your business connected.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <i class="bi bi-shield-check"></i>
              <h4 class="mt-3">Network Security</h4>
              <p>We provide robust network security solutions to protect your data.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <i class="bi bi-tools"></i>
              <h4 class="mt-3">Maintenance</h4>
              <p>We offer ongoing maintenance to ensure your network operates smoothly.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Booking Form for Networking Solutions -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-5 d-flex align-items-center">
          <h1>Book Our Networking Solutions</h1>
        </div>
        <div class="col-md-6 offset-md-1">
          <form id="netshForm" method="POST" action="process_booking.php" class="mt-4 mt-md-0">
            <input type="hidden" name="service" value="Networking Solutions">
            <div class="form-group">
              <label for="netshName">Name</label>
              <input id="netshName" class="form-control" type="text" name="name" required>
            </div>
            <div class="form-group">
              <label for="netshEmail">E-mail</label>
              <input id="netshEmail" class="form-control" type="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="netshMessage">Enquiries</label>
              <textarea id="netshMessage" class="form-control" name="message" placeholder="Enquiries" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Booking</button>
            <div id="netshResponseMessage" class="response-message"></div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <section class="horizontal-divider-section">
      <hr class="horizontal-divider">
    </section>
  </div>

  <div id="cyber">
    <section class="hero-section text-center">
      <div class="container">
        <h1 class="display-4 mb-4">Cyber Security</h1>
      </div>
    </section>
    <section class="services py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="service-item">
              <i class="bi bi-shield-lock"></i>
              <h4 class="mt-3">Threat Detection</h4>
              <p>We provide advanced threat detection to safeguard your systems.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <i class="bi bi-shield-check"></i>
              <h4 class="mt-3">Vulnerability Assessment</h4>
              <p>We conduct thorough assessments to identify potential vulnerabilities.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <i class="bi bi-lock"></i>
              <h4 class="mt-3">Data Encryption</h4>
              <p>We ensure your data is encrypted and secure from unauthorized access.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Booking Form for Cyber Security -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-5 d-flex align-items-center">
          <h1>Book Our Cyber Security Services</h1>
        </div>
        <div class="col-md-6 offset-md-1">
          <form id="cyberForm" method="POST" action="process_booking.php" class="mt-4 mt-md-0">
            <input type="hidden" name="service" value="Cyber Security">
            <div class="form-group">
              <label for="cyberName">Name</label>
              <input id="cyberName" class="form-control" type="text" name="name" required>
            </div>
            <div class="form-group">
              <label for="cyberEmail">E-mail</label>
              <input id="cyberEmail" class="form-control" type="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="cyberMessage">Enquiries</label>
              <textarea id="cyberMessage" class="form-control" name="message" placeholder="Enquiries" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Booking</button>
            <div id="cyberResponseMessage" class="response-message"></div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <section class="footer">
    <footer class="text-center text-lg-start bg-body-tertiary text-muted">
      <!-- Section: Social media -->
      <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
          <span>Get connected with us on social networks:</span>
        </div>
        <!-- Right -->
        <div>
          <a href="" class="me-4 text-reset">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="bi bi-twitter"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="bi bi-google"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="bi bi-linkedin"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="bi bi-github"></i>
          </a>
        </div>
      </section>
      <!-- Section: Social media -->
      <section class="p-4">
        <div class="container text-center text-md-start">
          <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">
                Company name
              </h6>
              <p>
                Here you can use rows and columns here to organize your footer content.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, optio!
              </p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">
                Products
              </h6>
              <p>
                <a href="#!" class="text-reset">Product 1</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Product 2</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Product 3</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Product 4</a>
              </p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-3 mx-auto mb-md-0 mb-4">
              <h6 class="text-uppercase fw-bold mb-4">
                Useful links
              </h6>
              <p>
                <a href="#!" class="text-reset">Pricing</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Settings</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Orders</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Help</a>
              </p>
            </div>
          </div>
        </div>
      </section>
    </footer>
  </section>


  <script>
    document.addEventListener('DOMContentLoaded', function () {
      function handleFormSubmit(formId, responseMessageId) {
        const form = document.getElementById(formId);
        const responseMessage = document.getElementById(responseMessageId);

        form.addEventListener('submit', function (event) {
          event.preventDefault();
          
          const formData = new FormData(form);
          fetch('process_booking.php', {
            method: 'POST',
            body: formData
          })
          .then(response => response.text())
          .then(text => {
            responseMessage.textContent = text;
            responseMessage.className = 'response-message success';
          })
          .catch(error => {
            responseMessage.textContent = 'There was an error with your submission. Please try again.';
            responseMessage.className = 'response-message error';
          });
        });
      }

      handleFormSubmit('webdevForm', 'webdevResponseMessage');
      handleFormSubmit('iteqForm', 'iteqResponseMessage');
      handleFormSubmit('netshForm', 'netshResponseMessage');
      handleFormSubmit('cyberForm', 'cyberResponseMessage');
    });
  </script>

</body>
</html>
