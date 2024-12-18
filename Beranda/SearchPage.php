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
        <title>Search Page</title>
        <link rel="stylesheet" href="layout/css/searchPage_style.css"/>
    </head>
    <body>
      <!-- Menu -->
        <?php include "layout/header.html"?>


  <div class="product-grid">
    
    <!-- Barang 1 -->
    <div class="product-card" data-aos="zoom-in">
      <img src="IMG/Buku.png" alt="Buku" />
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
    </div>

    <!--Barang 2-->
    <div class="product-card" data-aos="zoom-in">
      <img src="IMG/Topi.jpg" alt="Topi" />
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
</div>

<!--Barang 3-->
    <div class="product-card" data-aos="zoom-in">
      <img src="IMG/Kemeja.jpg" alt="Kemeja" />
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
  </div>

  <!--Barang 4-->
    <div class="product-card" data-aos="zoom-in">
      <img src="IMG/Rok.jpg" alt="Rok" />
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
    </div>

   <!--Barang 5--> 
    <div class="product-card" data-aos="zoom-in">
      <img src="IMG/Kaos.jpg" alt="Kaos" />
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
    </div>
    <!--Barang 6-->
    <div class="product-card" data-aos="zoom-in">
      <img src="IMG/Sandal.jpg" alt="Sandal" />
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
    </div>

    <!--Barang 7-->
    <div class="product-card" data-aos="zoom-in">
      <img src="IMG/Pulpen.jpg" alt="Pulpen" />
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
    </div>
    <!--Barang 8-->
    <div class="product-card" data-aos="zoom-in">
      <img src="IMG/Handphone.jpeg" alt="HP" />
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
    </div>
  </div>

    <!-- Footer -->
    <?php include "layout/footer.html"?>
</body>
</html>
