<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ServeTech</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="bootstrap/js/bootstrap.bundle.js" defer></script>
  <script src="script.js" defer></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    /* Rotating icon CSS */
    

    /* Service details CSS */
    .service-details {
      display: none;
      background-color: #f8f9fa;
      border: 1px solid #ddd;
      border-radius: 5px;
      padding: 15px;
      position: relative;
    }
    .service-details.show {
      display: block;
    }
    .service-list .btn {
      margin-top: 10px;
    }
    .back-button {
      margin-top: 15px;
    }
    .service-details h3 {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
    }
    .service-details h3 i {
      margin-right: 10px;
    }
    .service-details a {
      display: block;
      margin-top: 20px;
    }

    /* Custom styles for horizontal divider */
    .horizontal-divider {
      border: 0;
      height: 1px;
      background: #ddd;
    }

    /* Responsive map iframe */
    .map-responsive {
      overflow: hidden;
      padding-top: 56.25%; /* 16:9 aspect ratio */
      position: relative;
    }
    .map-responsive iframe {
      border: 0;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }

    .navbar {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
      transition: top 0.3s; /* Smooth transition */
    }

    /* Footer styles */
    .footer {
      margin-top: 2rem;
      background-color: #f8f9fa;
      padding: 2rem 0;
    }
  </style>
</head>
<body>

  <div class="container">
    <section class="horizontal-divider-section">
      <hr class="horizontal-divider">
    </section>
  </div>
  <div class="container">
    <section class="horizontal-divider-section">
      <hr class="horizontal-divider">
    </section>
  </div>
  <div class="container">
    <section class="horizontal-divider-section">
      <hr class="horizontal-divider">
    </section>
  </div>
  <div class="container">
    <section class="horizontal-divider-section">
      <hr class="horizontal-divider">
    </section>
  </div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ServeTech</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="services.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">Services</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="services.php#webdev">Web Development</a></li>
            <li><a class="dropdown-item" href="services.html#ITEQ">Supply of IT Equipment</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="services.html#netsh">Networking Solutions</a></li>
            <li><a class="dropdown-item" href="services.html#cyber">Cyber Security</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="store.php">Store</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section id="hero" class="mt-3">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/comm.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/pc.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/shop.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Buy Products</h5>
            <p class="card-text">Place your orders here.</p>
            <button type="button" class="btn btn-outline-success">Order here</button>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Work with Us</h5>
            <p class="card-text">Feel free to contact our team.</p>
            <a href="#" class="btn btn-outline-success">Contact here</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container my-5 bg-body-tertiary">
  <div class="card text-bg-dark">
    <img src="images/your-image.jpg" class="card-img" alt="...">
    <div class="card-img-overlay">
      <h1 class="card-title">Our Services</h1>
      <p class="card-text"></p>
      <!-- Icon Container -->
      <div class="icon-container">
        <!-- Development Tools Icons -->
        <i class="bi bi-code-slash" title="Code"></i>
        <i class="bi bi-bag" title="Terminal"></i>
        <i class="bi bi-shield-check" title="Braces"></i>
      </div>
    </div>
  </div>
</div>

<section class="services">
  <div class="container">
    <div class="d-flex flex-column flex-md-row">
      <!-- Left Column for Service List -->
      <div class="services-list d-flex flex-column align-items-start order-1 order-md-1 col-md-6">
        <div class="service-item p-3 mb-2 border-bottom">
          <i class="bi bi-database"></i>
          <h3>Website Development & Hosting</h3>
          <button type="button" class="btn btn-outline-success" data-service="1">More Info</button>
        </div>
        <div class="service-item p-3 mb-2 border-bottom">
          <i class="bi bi-pc-display"></i>
          <h3>Supply of ICT Equipment & More</h3>
          <button type="button" class="btn btn-outline-success" data-service="2">More Info</button>
        </div>
        <div class="service-item p-3 mb-2 border-bottom">
          <i class="bi bi-hdd-network"></i>
          <h3>Networking System Solutions etc.</h3>
          <button type="button" class="btn btn-outline-success" data-service="3">More Info</button>
        </div>
        <div class="service-item p-3 mb-2 border-bottom">
          <i class="bi bi-shield-fill-exclamation"></i>
          <h3>Cyber Security and CCTV Systems</h3>
          <button type="button" class="btn btn-outline-success" data-service="4">More Info</button>
        </div>
      </div>

      <!-- Right Column for Service Details -->
      <div class="order-2 order-md-2 col-md-6">
        <div class="service-details" id="service-details">
          <h3><i class="bi bi-info-circle"></i> Service Overview</h3>
          <p id="service-description"></p>
          <h3><i class="bi bi-gear"></i> What We Offer</h3>
          <p id="service-offer"></p>
          <h3><i class="bi bi-people"></i> Why Choose Us</h3>
          <p id="service-choose"></p>
          <a href="services.html" class="btn btn-outline-primary">See All Services</a>
          <button type="button" class="btn btn-outline-danger back-button" id="back-button">Back</button>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <section class="horizontal-divider-section">
    <hr class="horizontal-divider">
  </section>
</div>

<div class="container-fluid">
  <section class="horizontal-divider-section">
    <hr class="horizontal-divider">
  </section>
</div>


<div class="card-img-overlay">
  <h1 class="card-title">Welcome to our page</h1>
  <p class="card-text">Your One IT stop</p>
  <!-- Rotating Bootstrap Store Icon -->
  
</div>

<div class="container-fluid">
  <div class="card text bg-body-tertiary">
   
   

      <div class="row">
        <!-- Product Item 1 -->
        <div class="col-md-4">
          <div class="product-item">
            <img src="images/cab.jpg" style="height: 500px; width: 400px;" alt="Product 1">
            <h5>Product 1</h5>
            <p>k1000,000</p>
          </div>
        </div>
        <!-- Product Item 2 -->
        <div class="col-md-4">
          <div class="product-item">
            <img src="images/cab.jpg" style="height: 500px; width: 410px;" alt="Product 2">
            <h5>Product 2</h5>
            <p>k500,000</p>
          </div>
        </div>
        <!-- Product Item 3 -->
        <div class="col-md-4">
          <div class="product-item">
            <img src="images/cab.jpg" style="height: 500px; width: 450px;" alt="Product 3">
            <h5>Product 3</h5>
            <p>k1,000,000</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>



<div class="container">
  <section class="horizontal-divider-section">
    <hr class="horizontal-divider">
  </section>
</div>

<section class="contact-us py-5 bg-body-tertiary">
  <div class="container">
    <h2 class="text-center mb-5"></h2>
    <div class="row">
      <div class="col-lg-6">
        <h4>Our Contact Details</h4>
        <p><i class="bi bi-house-door"></i> <strong>Address:</strong> Juleka House, Area 4, Near Road Traffic, Lilongwe, Malawi</p>
        <p><i class="bi bi-telephone"></i> <strong>Phone:</strong> +123 456 7890</p>
        <p><i class="bi bi-envelope"></i> <strong>Email:</strong> contact@company.com</p>
      </div>
      <div class="col-lg-6">
        <h4>Our Location</h4>
        <div class="map-responsive">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.419611893309!2d33.78328677672282!3d-13.973067476695953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1921d24054c9ba05%3A0x5e478e7c0f5e0a4f!2sJuleka%20House%2C%20Area%204%2C%20Lilongwe%2C%20Malawi!5e0!3m2!1sen!2sus!4v1690831119111!5m2!1sen!2sus"
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
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
        <a href="#" class="me-4 text-reset">
          <i class="bi bi-facebook"></i>
        </a>
        <a href="#" class="me-4 text-reset">
          <i class="bi bi-twitter"></i>
        </a>
        <a href="#" class="me-4 text-reset">
          <i class="bi bi-google"></i>
        </a>
        <a href="#" class="me-4 text-reset">
          <i class="bi bi-instagram"></i>
        </a>
        <a href="#" class="me-4 text-reset">
          <i class="bi bi-linkedin"></i>
        </a>
        <a href="#" class="me-4 text-reset">
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
              Here you can use rows and columns to organize your footer content.
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
  document.addEventListener('DOMContentLoaded', function() {
  // Existing functionality for service details
  const serviceButtons = document.querySelectorAll('.service-item button');
  const serviceDetails = document.getElementById('service-details');
  const serviceDescription = document.getElementById('service-description');
  const serviceOffer = document.getElementById('service-offer');
  const serviceChoose = document.getElementById('service-choose');
  const backButton = document.getElementById('back-button');

  let previousScrollPosition = 0;

  serviceButtons.forEach(button => {
    button.addEventListener('click', function() {
      previousScrollPosition = window.scrollY; // Save current scroll position
      const serviceId = this.getAttribute('data-service');
      let description, offer, choose;

      switch(serviceId) {
        case '1':
          description = 'Comprehensive website development and hosting services to help you establish a strong online presence.';
          offer = 'Custom websites tailored to your needs, SEO optimization, and ongoing support.';
          choose = 'Our experienced team ensures high-quality development and reliable hosting.';
          break;
        case '2':
          description = 'Wide range of ICT equipment and accessories for all your technology needs.';
          offer = 'Latest laptops, desktops, printers, and other accessories at competitive prices.';
          choose = 'We offer expert advice and competitive pricing on top brands.';
          break;
        case '3':
          description = 'Expert solutions for designing and implementing network systems tailored to your requirements.';
          offer = 'Network setup, configuration, and maintenance services.';
          choose = 'Our certified technicians ensure a secure and efficient network infrastructure.';
          break;
        case '4':
          description = 'Robust cyber security measures and CCTV systems to safeguard your business and data.';
          offer = 'Comprehensive security audits, firewall setups, and CCTV installations.';
          choose = 'We provide cutting-edge technology and proactive security measures.';
          break;
      }

      serviceDescription.textContent = description;
      serviceOffer.textContent = offer;
      serviceChoose.textContent = choose;
      serviceDetails.classList.add('show');

      if (window.innerWidth < 768) { // Check if device is small
        document.getElementById('service-details').scrollIntoView({ behavior: 'smooth' });
      }
    });
  });

  backButton.addEventListener('click', function() {
    serviceDetails.classList.remove('show');
    window.scrollTo({ top: previousScrollPosition, behavior: 'smooth' });
  });

  // New functionality for navbar hide/show on scroll
  let lastScrollTop = 0;
  let isScrolling;

  const navbar = document.querySelector('.navbar'); // Adjust selector based on your navbar class

  window.addEventListener('scroll', function() {
    const currentScrollTop = window.scrollY;

    if (currentScrollTop > lastScrollTop) {
      // Scrolling down
      navbar.style.top = '-130px'; // Adjust based on your navbar height
    } else {
      // Scrolling up
      navbar.style.top = '0';
    }

    lastScrollTop = currentScrollTop;

    // Clear the timeout if it exists
    clearTimeout(isScrolling);

    // Set a timeout to show the navbar after scrolling stops
    isScrolling = setTimeout(function() {
      navbar.style.top = '0'; // Show navbar when scrolling stops
    }, 100); // Adjust timeout duration as needed
  });
});
</script>

</body>
</html>