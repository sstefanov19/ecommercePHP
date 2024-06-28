<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tech Ecommercs</title>
 
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <!-- Navbar -->
  <?php include 'header.php'; ?>
  
  <!-- Header Image -->
  <div class="header-img mt-6 w-100 position-relative">
    <img src="pictures/header-image.jpg" class="w-100" alt="Header Image">
    <button class="btn btn-primary buy-now-btn">Buy Now</button>
  </div>

  <!-- Page Content -->
  <div class="container mt-4">
    <h2 class="d-flex justify-content-center">Featured Products</h2>
    <div class="row">
      <!-- Product Items -->
      <div class="col-md-4">
        <div class="product-item">
          <img src="pictures/macbook air.jpg" alt="Macbook Air">
          <h4 class="mt-2">Macbook Air</h4>
          <a href="macbook.php" class="btn rounded-pill btn-dark">Buy Now</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="product-item">
          <img src="pictures/macbook-pro.jpg" alt="Macbook Pro">
          <h4 class="mt-2">Macbook Pro</h4>
          <a href="#" class="btn rounded-pill btn-dark">Buy Now</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="product-item">
          <img src="pictures/airpods.jpg" alt="Airpods">
          <h4 class="mt-2">Airpods</h4>
          <a href="#" class="btn rounded-pill btn-dark">Buy Now</a>
        </div>
      </div>
    </div>
    
  </div>
  <!-- /.container -->
  <div class="container mt-4">
    <div class="row">

      <div class="col-md-4">
        <div class="product-item">
          <img src="pictures/microsoft.jpg" alt="Macbook Air">
          <h4 class="mt-2">Microsoft</h4>
          <a href="#" class="btn rounded-pill btn-dark">Buy Now</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="product-item">
          <img src="pictures/gaming.jpg" alt="Macbook Pro">
          <h4 class="mt-2">Gaming</h4>
          <a href="#" class="btn rounded-pill btn-dark">Buy Now</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="product-item">
          <img src="pictures/razer.jpg" alt="Airpods">
          <h4 class="mt-2">Razer</h4>
          <a href="#" class="btn rounded-pill btn-dark">Buy Now</a>
        </div>
      </div>
    </div>
    
  </div>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <span class="text-muted">© 2024 Ecommerce Store. All rights reserved.</span>
    </div>
  </footer>

  <!-- Bootstrap JS, Popper.js, jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
