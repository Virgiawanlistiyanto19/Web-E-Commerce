<?php
// Data produk contoh
$recommended_products = [
["name" => "Kaos", "price" => 100000, "image" => "IMG/sepatu.jpeg"], 
["name" => "Sepatu", "price" => 110000, "image" => "IMG/sepatu.jpeg"], 
["name" => "Hoodie","price" => 120000, "image" => "IMG/sepatu.jpeg"], 
["name" => "Celana", "price" => 130000, "image" => "IMG/sepatu.jpeg"], 
["name" => "Tas", "price" => 140000, "image" => "IMG/sepatu.jpeg"], 
["name" => "Kacamata", "price" => 150000, "image" => "IMG/sepatu.jpeg"] ]; 
$all_products = [
["name" => "Baju","price" => 105000, "image" => "IMG/Baju.jpg"], 
["name" => "Celana","price" => 115000, "image" => "IMG/Baju.jpg"], 
["name" => "Baju","price" => 130000, "image" => "IMG/Baju.jpg"], 
["name" => "Celana","price" => 140000, "image" => "IMG/Baju.jpg"], 
]; ?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cihuy Store</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"/>
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet"/>
    <link rel="stylesheet" href="layout/css/halamanUtama_style.css"/>
  </head>
  <body>
    <?php include "layout/header.html"?>

    <div class="container mt-4">
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="IMG/background.jpeg" class="d-block w-100" alt="Promo 1" />
        <div class="carousel-caption">
          <h3>Promo Spesial!</h3>
          <p>Diskon hingga 50%!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="IMG/background2.jpeg" class="d-block w-100" alt="Promo 2" />
        <div class="carousel-caption">
          <h3>Produk Terbaru Kami</h3>
          <p>Jangan lewatkan koleksi terbaru.</p>
        </div>
      </div>
    </div>
    <!-- Left Control -->
    <button
      class="carousel-control-prev"
      type="button"
      data-bs-target="#carouselExample"
      data-bs-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <!-- Right Control -->
    <button
      class="carousel-control-next"
      type="button"
      data-bs-target="#carouselExample"
      data-bs-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>


    <div class="container">
      <section id="recommendation" data-aos="fade-up">
        <h2>Rekomendasi Produk</h2>
        <div class="product-grid">
          <?php foreach ($recommended_products as $product): ?>
          <div class="product-card">
            <img
              src="<?= $product['image']; ?>"
              alt="<?= $product['name']; ?>"
            />
            <h3><?= $product['name']; ?></h3>
            <p>Rp<?= number_format($product['price'], 0, ',', '.'); ?></p>
            <a href ="Login.php" class="btn btn-buy">Buy Now</a>
          </div>
          <?php endforeach; ?>
        </div>
      </section>
    </div>

    <div class="container">
      <section id="all-products">
        <h2>Semua Produk</h2>
        <div class="product-grid">
          <?php foreach ($all_products as $product): ?>
          <div class="product-card">
            <img
              src="<?= $product['image']; ?>"
              alt="<?= $product['name']; ?>"
            />
            <h3><?= $product['name']; ?></h3>
            <p>Rp<?= number_format($product['price'], 0, ',', '.'); ?></p>
            <a href ="Login.php" class="btn btn-buy">Buy Now</a>
          </div>
          <?php endforeach; ?>
        </div>
      </section>
    </div>

    <?php include "layout/footer.html"?>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      AOS.init({ duration: 1000, once: true });
    </script>
  </body>
</html>
