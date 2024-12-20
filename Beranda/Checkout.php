<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_ecommerce";


$conn = mysqli_connect($servername, $username, $password, $dbname);

$productId1 = 1;
$productId2 = 3;

// Query untuk mengambil harga produk
$sql = "SELECT productPrice FROM products WHERE productId IN ($productId1, $productId2)";
$result = $conn->query($sql);

$total = 0;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $total += $row["productPrice"];
    }
} else {
    echo "Produk tidak ditemukan.";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Check Out</title>
        <link rel="stylesheet" href="layout/css/checkout_style.css"/>
    </head>
    <body>

     <!-- Header -->

    <?php include "layout/header.html"?>

     <!-- Item 1 -->
     <div style="display: flex;">
     <div class="product-card" data-aos="zoom-in">
      <img src="IMG/Celana" alt="Product" />
      <div class="Deskripsi">
      <h3><?php
$sql = "SELECT productName FROM products WHERE productId = 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Output data
  $row = mysqli_fetch_assoc($result);
  echo $row["productName"];
} else {
  echo "Barang Kosong";
}
?></h3>
      <p style="vertical-align: top; width: 650px;">Celana jeans straight cut dengan potongan yang rapi dan elegan. Bahan d
        enim tebal dan kuat, cocok untuk acara semi-formal. Padukan dengan kemeja dan 
        sepatu pantofel untuk tampilan yang lebih profesional.</p>
        </div>
      <p class="price" style="text-align: right; margin-top: 80px; margin-left: 30px; margin-right: 10px;"><?php
$sql = "SELECT productPrice FROM products WHERE productId = 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  echo "Rp " . number_format($row["productPrice"], 0, ',', '.');
} else {
  echo "Harga Tidak Ditemukan";
}
?></p>
    </div>

    <!--Tambah Barang Button-->
  <div style="display: flex; margin-top: 70px; margin-left: 25px;">
  <button onclick="decrement1()" id="btnDecrement1">-</button>
  <span id="jumlah1" style="margin-top: 30px;">0</span>
  <button onclick="increment1()" id="btnIncrement1">+</button>
    
  <script>
      function increment1() {
    let jumlah1 = document.getElementById("jumlah1");
    jumlah1.textContent = parseInt(jumlah1.textContent) + 1;
}

function decrement1() {
    let jumlah1 = document.getElementById("jumlah1");
    let nilaiSekarang = parseInt(jumlah1.textContent);
    if (nilaiSekarang > 0) {
        jumlah1.textContent = nilaiSekarang - 1;
    }
}
  </script>
    
  </div>
  </div>

    <!-- Item 2 -->
     <div style="display: flex;">
    <div class="product-card" data-aos="zoom-in">
      <img src="d:\GitHub\Web-E-Commerce\Beranda\IMG\Baju.jpg" alt="Product" />
      <div class="Deskripsi">
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
      <p style="vertical-align: top; width: 650px;">Dapatkan tampilan yang bersih dan elegan dengan kemeja polos terbaru kami. 
        Terbuat dari bahan katun premium yang lembut dan menyerap keringat. 
        Pilihan warna beragam, mulai dari putih klasik hingga warna-warna pastel 
        yang trendy. Desain timeless yang cocok dipadukan dengan berbagai gaya.</p>
    </div>
    <p class="price" style="text-align: right; margin-top: 80px; margin-left: 30px; margin-right: 10px;"><?php
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

  <!--Tambah Barang Button-->
  <div style="display: flex; margin-top: 70px; margin-left: 25px;">
    <button onclick="decrement2()" id="btnDecrement2">-</button>
<span id="jumlah2" style="margin-top: 30px;">0</span>
<button onclick="increment2()" id="btnIncrement2">+</button>
    
    <script>
      function increment2() {
    let jumlah2 = document.getElementById("jumlah2");
    jumlah2.textContent = parseInt(jumlah2.textContent) + 1;
}

function decrement2() {
    let jumlah2 = document.getElementById("jumlah2");
    let nilaiSekarang = parseInt(jumlah2.textContent);
    if (nilaiSekarang > 0) {
        jumlah2.textContent = nilaiSekarang - 1;
    }
}
</script>
</div>
</div>

   <!-- Input Alamat -->
     <div class="alamat">
   <h2>Masukkan Alamat Anda</h2>
    <form>
      <label for="jalan">Jalan:</label>
      <input type="text" id="jalan" name="jalan" placeholder="Nama jalan, nomor rumah, RT/RW">
    
      <label for="komplek">Komplek/Perumahan (opsional):</label>
      <input type="text" id="komplek" name="komplek" placeholder="Nama komplek/perumahan">
    
      <label for="kota">Kota:</label>
      <input type="text" id="kota" name="kota" autocomplete="city">
    
      <label for="provinsi">Provinsi:</label>
      <input type="text" id="provinsi" name="provinsi" autocomplete="region">
    
      <label for="kodePos">Kode Pos:</label>
      <input type="text" id="kodePos" name="kodePos" pattern="[0-9]{5}" title="Masukkan 5 angka">
    
      <label for="negara">Negara:</label>
      <input type="text" id="negara" name="negara" autocomplete="country">
      <input type="submit" value="Kirim">
    </form>
  </div>
<div style="display: flex;">
  <!-- kode promo -->
 <div class="promo">
  <h2>Ingin Memakai Promo?</h2>
      <form>
      <label for="kodepromo" style="display: block;">Masukkan Kode Promo:</label>
      <input type="text" id="kodepromo" name="kodepromo" pattern="[0-9]{6}" title="Masukkan 6 angka" style="margin-left: 20px;">
      <input type="submit" value="Kirim">
      </form>
 </div>

 <!-- Ekspedisi -->
<div class="bayar">
  <h2>Pilih Ekspedisi</h2>
  <form action="" method="post" class="method">
    <select name="pilihan">
      <option value="JNE">JNE</option>
      <option value="TIKI">TIKI</option>
      <option value="J&T">J&T</option>
      <option value="WAHANA">WAHANA</option>
    </select>
    <input type="submit" value="Simpan">
  </form>
</div>

  <!-- Metode Pembayaran -->
<div class="bayar">
    <h2>Pilih Metode Pembayaran</h2>
    <form action="" method="post" class="method">
      <select name="pilihan">
        <option value="BCA">BCA</option>
        <option value="Mandiri">Mandiri</option>
        <option value="Dana">Dana</option>
        <option value="Ovo">Ovo</option>
        <option value="Gopay">Gopay</option>
      </select>
      <input type="submit" value="Simpan">
    </form>
</div>
</div>

<!--Checkout Container-->
<div id="checkout">
  <h2 class="price" style="font-size: 25px; margin-left: 730px; margin-top: 30px;">Total :</h2>
  <h2 class="price" style="font-size: 25px; margin-top: 30px;"><?php echo $total; ?></h2>
  <a href="#" class="buy-now-btn">
    Bayar Sekarang </a>
</div>
<!--Footer-->
<footer>
  <div
    class="footer d-flex flex-wrap justify-content-around align-items-start py-4"
  >
    <div class="toko">
      <h4>Cihuy Store</h4>
      <p>Belanja dengan harga murah, mudah, dan cepat.</p>
    </div>
    <div class="menu">
      <h4>Menu</h4>
      <ul class="list-unstyled">
        <li>Tentang Kami</li>
        <li>Hubungi Kami</li>
      </ul>
    </div>
    <div class="bantuan">
      <h4>Bantuan</h4>
      <ul class="list-unstyled">
        <li>FAQ</li>
        <li>Support</li>
      </ul>
    </div>
    <div class="contact">
      <h4>Hubungi Kami</h4>
      <ul class="list-unstyled">
        <li>Email: support@cihuy store.com</li>
        <li>Phone: +62 123 4567</li>
      </ul>
    </div>
    <div class="icons text-center">
      <i class="fab fa-google mx-2"></i>
      <i class="fab fa-instagram mx-2"></i>
      <i class="fab fa-facebook mx-2"></i>
      <i class="fab fa-twitter mx-2"></i>
    </div>
  </div>
  <div class="text-center py-2">
    <p class="m-0">&copy; 2024 Cihuy Store. All rights reserved.</p>
  </div>
</footer>
    </body>
