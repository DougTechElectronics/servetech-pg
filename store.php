<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Store</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="bootstrap/js/bootstrap.bundle.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/js/all.min.js"></script>
  <script src="js/script.js"></script>
</head>

<body>
  
<!-- Booking Modal -->



  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">ServeTech</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
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
            <a class="nav-link active" href="store.php">Store</a>
          </li>
        </ul>
        <button class="btn btn-outline-light d-none d-lg-block" id="loginRegisterBtn">Login/Register</button>
      </div>
    </div>
  </nav>

  <!-- Registration and Login Modal -->
 

  <!-- Main Content -->
  <div class="card text-bg-dark">
    <img src="images/shop.jpg" class="card-img" alt="...">
    <div class="card-img-overlay">
      <h1>Welcome to ICT Equipment Store</h1>
      <p>Your one-stop shop for all your ICT needs</p>
    </div>
  </div>

  <div class="container">
    <section class="horizontal-divider-section">
      <hr class="horizontal-divider">
    </section>
  </div>

  <!-- Categories Sections -->
  <section class="container category-section">
    <h2 class="text-center mb-4">Our Categories</h2>

    <!-- Laptops -->
    <div class="row mb-4" id="laptop-category">
      <div class="col-12">
        <h3>Laptops</h3>
        <p>Discover our range of laptops for every need, from basic office work to high-performance gaming.</p>
      </div>
      <div id="laptops" class="row">
        <!-- Laptop products will be dynamically loaded here -->
      </div>
    </div>

    <div class="container">
      <section class="horizontal-divider-section">
        <hr class="horizontal-divider">
      </section>
    </div>

    <!-- Desktops -->
    <div class="row mb-4" id="desktop-category">
      <div class="col-12">
        <h3>Desktops</h3>
        <p>Explore our selection of desktops for all types of computing tasks, from casual use to intense workloads.</p>
      </div>
      <div id="desktops" class="row">
        <!-- Desktop products will be dynamically loaded here -->
      </div>
    </div>

    <div class="container">
      <section class="horizontal-divider-section">
        <hr class="horizontal-divider">
      </section>
    </div>

    <!-- Hard Drives -->
    <div class="row mb-4" id="harddrive-category">
      <div class="col-12">
        <h3>Hard Drives</h3>
        <p>Find the perfect hard drive for storage, backup, and data management.</p>
      </div>
      <div id="harddrives" class="row">
        <!-- Hard Drive products will be dynamically loaded here -->
      </div>
    </div>

    <div class="container">
      <section class="horizontal-divider-section">
        <hr class="horizontal-divider">
      </section>
    </div>

    <!-- Network Equipment -->
    <div class="row mb-4" id="network-category">
      <div class="col-12">
        <h3>Network Equipment</h3>
        <p>Check out our range of network equipment for reliable and fast connectivity solutions.</p>
      </div>
      <div id="network" class="row">
        <!-- Network products will be dynamically loaded here -->
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

function handleBookNow(productId) {
    // Redirect to booking page with product ID
    window.location.href = `book_now.php?product_id=${productId}`;
}

// Handle form submission



document.addEventListener('DOMContentLoaded', function() {
    function loadProducts(category) {
        fetch(`fetch_products.php?category=${category}`)
            .then(response => response.json())
            .then(data => {
                const container = document.getElementById(category);
                container.innerHTML = '';

                data.forEach(product => {
                    const productDiv = document.createElement('div');
                    productDiv.className = 'col-md-4';
                    productDiv.innerHTML = `
                        <div class="card mb-4">
                            <img src="${product.image}" class="card-img-top" alt="${product.name}">
                            <div class="card-body">
                                <h5 class="card-title">${product.name}</h5>
                                <p class="card-text">${product.description}</p>
                                <p class="card-text"><strong>$${product.price}</strong></p>
                                <button class="btn btn-primary book-now-btn" data-product-id="${product.id}">Book Now</button>
                            </div>
                        </div>
                    `;
                    container.appendChild(productDiv);
                });

                // Add event listeners for the "Book Now" buttons
                document.querySelectorAll('.book-now-btn').forEach(button => {
                    button.addEventListener('click', function() {
                        const productId = this.getAttribute('data-product-id');
                        handleBookNow(productId);
                    });
                });
            })
            .catch(error => console.error('Error fetching products:', error));
    }

    function handleBookNow(productId) {
        // Handle the booking action, e.g., open a modal or redirect to a booking page
        console.log(`Book now clicked for product ID: ${productId}`);
        // Example: Redirect to a booking page with the product ID
        window.location.href = `book_now.php?product_id=${productId}`;
    }

    loadProducts('laptops');
    loadProducts('desktops');
    loadProducts('harddrives');
    loadProducts('network');
});
</script>

  

</body>

</html>
