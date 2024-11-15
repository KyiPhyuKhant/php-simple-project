<?php include 'header.php'; ?>

<div class="container">
  <h1>Welcome to Our Website</h1>
  <section>
    <p>This is the home page where you can find general information about our website.</p>
  </section>

  <!-- Slider Section -->
  <section class="slider-section">
    <div class="slider">
      <div><img src="images/image1.jpg" alt="Image 1 Description"></div>
      <div><img src="images/image2.jpg" alt="Image 2 Description"></div>
      <div><img src="images/image3.jpg" alt="Image 3 Description"></div>
      <!-- Add more slides as needed -->
    </div>
  </section>

  <!-- Shop Section -->
  <section class="shop-section">
    <h2>Shop With Us</h2>
    <p>Explore our wide range of products.</p>
    <?php include 'products.php'; ?>
  </section>
  
</div>

<?php include 'footer.php'; ?>