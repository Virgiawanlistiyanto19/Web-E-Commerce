<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_ecommerce";


$conn = mysqli_connect($servername, $username, $password, $dbname);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Buy1</title>
        <link rel="stylesheet" href="layout/css/productDetails_style.css"/>
    </head>
    <body>
      <!-- Menu -->
        <?php include "layout/header.html"?>
          

          <!-- Item Individu -->
          <div class="item">
    <img style="position: sticky; right: 100;" src="IMG/Topi.jpg" width="600" height="100%"/>
   
    <div class="container">
      <h2 style="font-size: 38px;"><?php
$sql = "SELECT productName FROM products WHERE productId = 2";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Output data
  $row = mysqli_fetch_assoc($result);
  echo $row["productName"];
} else {
  echo "Barang Kosong";
}
?></h2>
   
      <p style="vertical-align: top;"><b style="font-size: 20px;">Deskripsi:</b>
      </br>
      Celana jeans straight cut dengan potongan yang rapi dan elegan. Bahan denim tebal dan 
      kuat, cocok untuk acara semi-formal. Padukan dengan kemeja dan sepatu pantofel untuk 
      tampilan yang lebih profesional.</p>

    <!--Tambah Barang Button-->
    <div style="display: flex; margin-top: 70px; margin-left: 25px;">
      <button onclick="decrement()">-</button>
      <span id="jumlah" style="margin-top: 30px;">0</span>
      <button onclick="increment()">+</button>
      
      <script>
        function increment() {
            let jumlah = document.getElementById("jumlah");
            jumlah.textContent = parseInt(jumlah.textContent) + 1;
        }

        function decrement() {
            let jumlah = document.getElementById("jumlah");
            let nilaiSekarang = parseInt(jumlah.textContent);
            if (nilaiSekarang > 0) {
                jumlah.textContent = nilaiSekarang - 1;
            }
        }
    </script>
    </div>
    <!--Price-->
<h2 style="margin-top: 60px; margin-left: 600px; color: #e74c3c;"><?php
$sql = "SELECT productPrice FROM products WHERE productId = 2";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  echo "Rp " . number_format($row["productPrice"], 0, ',', '.');
} else {
  echo "Harga Tidak Ditemukan";
}
?></h2>
  </div>
</div>

   <!--Logo Buy & Cart-->
<div style="display: flex; justify-content: flex-end; margin-bottom: 10px; margin-right: 10px;">
 <div style="margin-right: 30px;">
    <a href=""><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <i class="fas fa-shopping-cart" style="margin-top: 9px;"></i></a>
</div>
<a href="Checkout.php" class="buy-now-btn">Buy Now</a>
</div>

<!-- saran produk -->
<!-- Products Section -->
<section class="featured" style="margin-top: 100px;">
  <h2 data-aos="fade-up">Produk Lainnya</h2>
  <div class="product-grid">
    
    <!-- Example Product Card -->
    <div class="product-card" data-aos="zoom-in">
      <img src="IMG/Buku.png" alt="Buku" />
      <span
        class="badge bg-success position-absolute"
        style="top: 10px; left: 10px"
        >New</span
      >
      <h3><?php
$sql = "SELECT productName FROM products WHERE productId = 9";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Output data
  $row = mysqli_fetch_assoc($result);
  echo $row["productName"];
} else {
  echo "Barang Kosong";
}
?></h3>
      <p><?php
$sql = "SELECT productPrice FROM products WHERE productId = 9";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  echo "Rp " . number_format($row["productPrice"], 0, ',', '.');
} else {
  echo "Harga Tidak Ditemukan";
}
?></p>
      <i
        class="fas fa-shopping-cart cart-icon"
        data-bs-toggle="tooltip"
        title="Add to Cart"
      ></i
      ><a href="Buy9.php" class="buy-now-btn">
        Buy Now </a>
    </div>
    <div class="product-card" data-aos="zoom-in">
      <img src="IMG/Topi.jpg" alt="Topi" />
      <span
        class="badge bg-success position-absolute"
        style="top: 10px; left: 10px"
        >New</span
      >
      <h3><?php
$sql = "SELECT productName FROM products WHERE productId = 2";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Output data
  $row = mysqli_fetch_assoc($result);
  echo $row["productName"];
} else {
  echo "Barang Kosong";
}
?></h3>
      <p><?php
$sql = "SELECT productPrice FROM products WHERE productId = 2";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  echo "Rp " . number_format($row["productPrice"], 0, ',', '.');
} else {
  echo "Harga Tidak Ditemukan";
}
?></p>
      <i
        class="fas fa-shopping-cart cart-icon"
        data-bs-toggle="tooltip"
        title="Add to Cart"
      ></i
      ><a href="Buy2.php" class="buy-now-btn">
        Buy Now </a>
    </div>
    <div class="product-card" data-aos="zoom-in">
      <img src="IMG/Kemeja.jpg" alt="Kemeja" />
      <span
        class="badge bg-success position-absolute"
        style="top: 10px; left: 10px"
        >New</span
      >
      <h3><?php
$sql = "SELECT productName FROM products WHERE productId = 3";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Output data
  $row = mysqli_fetch_assoc($result);
  echo $row["productName"];
} else {
  echo "Barang Kosong";
}
?></h3>
      <p><?php
$sql = "SELECT productPrice FROM products WHERE productId = 3";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  echo "Rp " . number_format($row["productPrice"], 0, ',', '.');
} else {
  echo "Harga Tidak Ditemukan";
}
?></p>
      <i
        class="fas fa-shopping-cart cart-icon"
        data-bs-toggle="tooltip"
        title="Add to Cart"
      ></i
      ><a href="Buy3.php" class="buy-now-btn">
        Buy Now </a>
    </div>
    <div class="product-card" data-aos="zoom-in">
      <img src="IMG/Rok.jpg" alt="Rok" />
      <span
        class="badge bg-success position-absolute"
        style="top: 10px; left: 10px"
        >New</span
      >
      <h3><?php
$sql = "SELECT productName FROM products WHERE productId = 4";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Output data
  $row = mysqli_fetch_assoc($result);
  echo $row["productName"];
} else {
  echo "Barang Kosong";
}
?></h3>
      <p><?php
$sql = "SELECT productPrice FROM products WHERE productId = 4";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  echo "Rp " . number_format($row["productPrice"], 0, ',', '.');
} else {
  echo "Harga Tidak Ditemukan";
}
?></p>
      <i
        class="fas fa-shopping-cart cart-icon"
        data-bs-toggle="tooltip"
        title="Add to Cart"
      ></i
      ><a href="Buy4.php" class="buy-now-btn">
        Buy Now </a>
    </div>
    <div class="product-card" data-aos="zoom-in">
      <img src="IMG/Kaos.jpg" alt="Kaos" />
      <span
        class="badge bg-success position-absolute"
        style="top: 10px; left: 10px"
        >New</span
      >
      <h3><?php
$sql = "SELECT productName FROM products WHERE productId = 5";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Output data
  $row = mysqli_fetch_assoc($result);
  echo $row["productName"];
} else {
  echo "Barang Kosong";
}
?></h3>
      <p><?php
$sql = "SELECT productPrice FROM products WHERE productId = 5";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  echo "Rp " . number_format($row["productPrice"], 0, ',', '.');
} else {
  echo "Harga Tidak Ditemukan";
}
?></p>
      <i
        class="fas fa-shopping-cart cart-icon"
        data-bs-toggle="tooltip"
        title="Add to Cart"
      ></i
      ><a href="Buy5.php" class="buy-now-btn">
        Buy Now </a>
    </div>
    <div class="product-card" data-aos="zoom-in">
      <img src="IMG/Sandal.jpg" alt="Sandal" />
      <span
        class="badge bg-success position-absolute"
        style="top: 10px; left: 10px"
        >New</span
      >
      <h3><?php
$sql = "SELECT productName FROM products WHERE productId = 7";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Output data
  $row = mysqli_fetch_assoc($result);
  echo $row["productName"];
} else {
  echo "Barang Kosong";
}
?></h3>
      <p><?php
$sql = "SELECT productPrice FROM products WHERE productId = 7";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  echo "Rp " . number_format($row["productPrice"], 0, ',', '.');
} else {
  echo "Harga Tidak Ditemukan";
}
?>
</p>
      <i
        class="fas fa-shopping-cart cart-icon"
        data-bs-toggle="tooltip"
        title="Add to Cart"
      ></i
      ><a href="Buy7.php" class="buy-now-btn">
        Buy Now </a>
    </div>
    <div class="product-card" data-aos="zoom-in">
      <img src="IMG/Pulpen.jpg" alt="Pulpen" />
      <span
        class="badge bg-success position-absolute"
        style="top: 10px; left: 10px"
        >New</span
      >
      <h3><?php
$sql = "SELECT productName FROM products WHERE productId = 10";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Output data
  $row = mysqli_fetch_assoc($result);
  echo $row["productName"];
} else {
  echo "Barang Kosong";
}
?></h3>
      <p><?php
$sql = "SELECT productPrice FROM products WHERE productId = 10";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  echo "Rp " . number_format($row["productPrice"], 0, ',', '.');
} else {
  echo "Harga Tidak Ditemukan";
}
?></p>
      <i
        class="fas fa-shopping-cart cart-icon"
        data-bs-toggle="tooltip"
        title="Add to Cart"
      ></i
      ><a href="Buy10.php" class="buy-now-btn">
        Buy Now </a>
    </div>
    <div class="product-card" data-aos="zoom-in">
      <img src="IMG/Handphone.jpeg" alt="HP" />
      <span
        class="badge bg-success position-absolute"
        style="top: 10px; left: 10px"
        >New</span
      >
      <h3><?php
$sql = "SELECT productName FROM products WHERE productId = 11";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Output data
  $row = mysqli_fetch_assoc($result);
  echo $row["productName"];
} else {
  echo "Barang Kosong";
}
?></h3>
      <p><?php
$sql = "SELECT productPrice FROM products WHERE productId = 11";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  echo "Rp " . number_format($row["productPrice"], 0, ',', '.');
} else {
  echo "Harga Tidak Ditemukan";
}
?></p>
      <i
        class="fas fa-shopping-cart cart-icon"
        data-bs-toggle="tooltip"
        title="Add to Cart"
      ></i
      ><a href="Buy11.php" class="buy-now-btn">
        Buy Now </a>
    </div>
  </div>

    <!-- Footer -->
    <?php include "layout/footer.html"?>
</body>
</html>
