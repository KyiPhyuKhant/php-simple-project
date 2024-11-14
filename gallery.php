<?php include 'header.php'; ?>

<div class="container mx-auto px-4 py-6">
  <h1 class="text-3xl font-bold mb-4">Gallery</h1>
  <section class="gallery grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
    <div class="overflow-hidden rounded-lg shadow-lg">
      <img src="images/image1.jpg" alt="Image 1"
        class="w-full h-auto object-cover transform hover:scale-105 transition duration-300">
    </div>
    <div class="overflow-hidden rounded-lg shadow-lg">
      <img src="images/image2.jpg" alt="Image 2"
        class="w-full h-auto object-cover transform hover:scale-105 transition duration-300">
    </div>
    <div class="overflow-hidden rounded-lg shadow-lg">
      <img src="images/image3.jpg" alt="Image 3"
        class="w-full h-auto object-cover transform hover:scale-105 transition duration-300">
    </div>
  </section>
</div>

<?php include 'footer.php'; ?>