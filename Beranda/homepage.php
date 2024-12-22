<?php
session_start();
include 'Koneksi.php';
// Pastikan session untuk Username ada
$username = isset($_SESSION['Username']) ? $_SESSION['Username'] : 'Guest';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"/>
    <!-- AOS CSS for Animations -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet"/>
    <link rel="stylesheet" href="layout/css/homepage_style.css"/>
  </head>
  <body>
    <!-- Header -->
    <header class="header">
      <div class="logo">Cihuy Store</div>
      <div class="profile">
        <i class="fas fa-shopping-cart" data-bs-toggle="tooltip" title="Cart"></i>
        <i class="fas fa-bell" data-bs-toggle="tooltip" title="Notifications"></i>
        <i class="fas fa-user" 
          id="profileDropdown"
          data-bs-toggle="dropdown"
          aria-expanded="false"
          data-bs-toggle="tooltip"
          title="<?php echo $username; ?>" 
      <!-- Tooltip menampilkan email -->
        </i>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="profileDropdown"
        >
          <li><a class="dropdown-item" href="Profile.php">Akun Saya</a></li>
          <li><a class="dropdown-item" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </header>

    <!-- Carousel Section -->
    <section id="carouselSection">
      <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#heroCarousel"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#heroCarousel"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#heroCarousel"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="IMG/Hi.png"
              class="d-block w-100"
              alt="Slide 1"
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>Welcome to Cihuy Store</h5>
              <p>Discover our latest products!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="IMG/background2.jpeg"
              class="d-block w-100"
              alt="Slide 2"
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>Hot Deals</h5>
              <p>Hot deals for the summer season.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="IMG/background3.jpeg"
              class="d-block w-100"
              alt="Slide 3"
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>Exclusive Offers</h5>
              <p>Don't miss out on our exclusive offers.</p>
            </div>
          </div>  
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#heroCarousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#heroCarousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <!-- Hero Section with Search -->
    <section class="background">
      <div class="search-container" data-aos="fade-up">
        <form action="script.js" method="GET">
          <div class="input-container">
            <input
              type="text"
              class="search-input"
              placeholder="Search Here..."
              aria-label="Search"
            />
            <button type="submit" class="search-button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </form>
      </div>
    </section>

    <!-- Products Section -->
    <section class="featured">
      <h2 data-aos="fade-up">Produk Kami</h2>
      <div class="product-grid">
        <!-- Example Product Card -->
        <div class="product-card" data-aos="zoom-in">
          <img src="IMG/Kaos.jpg" alt="Product 1" />
          <span
            class="badge bg-success position-absolute"
            style="top: 10px; left: 10px"
            >New</span
          >
          <h3>Kaos</h3>
          <p>Rp. 50.000</p>
          <i
            class="fas fa-shopping-cart cart-icon"
            data-bs-toggle="tooltip"
            title="Add to Cart"
          ></i
          ><a href="Buy1.html" class="buy-now-btn">
            Buy Now </a>
        </div>
        <div class="product-card" data-aos="zoom-in">
          <img src="IMG/Buku.jpg" alt="Product 1" />
          <span
            class="badge bg-success position-absolute"
            style="top: 10px; left: 10px"
            >New</span
          >
          <h3>Buku</h3>
          <p>Rp.30.000</p>
          <i
            class="fas fa-shopping-cart cart-icon"
            data-bs-toggle="tooltip"
            title="Add to Cart"
          ></i
          ><a href="Buy2.html" class="buy-now-btn">
            Buy Now </a>
        </div>
        <div class="product-card" data-aos="zoom-in">
          <img src="IMG/Kemeja.jpg" alt="Product 1" />
          <span
            class="badge bg-success position-absolute"
            style="top: 10px; left: 10px"
            >New</span
          >
          <h3>Kemeja</h3>
          <p>Rp. 100.000</p>
          <i
            class="fas fa-shopping-cart cart-icon"
            data-bs-toggle="tooltip"
            title="Add to Cart"
          ></i
          ><a href="Buy3.html" class="buy-now-btn">
            Buy Now </a>
        </div>
        <div class="product-card" data-aos="zoom-in">
          <img src="IMG/Kaos.jpg" alt="Product 1" />
          <span
            class="badge bg-success position-absolute"
            style="top: 10px; left: 10px"
            >New</span
          >
          <h3>Kaos</h3>
          <p>Rp. 50.000</p>
          <i
            class="fas fa-shopping-cart cart-icon"
            data-bs-toggle="tooltip"
            title="Add to Cart"
          ></i
          ><a href="Buy4.html" class="buy-now-btn">
            Buy Now </a>
        </div>
        <div class="product-card" data-aos="zoom-in">
          <img src="IMG/Pulpen.jpg" alt="Product 1" />
          <span
            class="badge bg-success position-absolute"
            style="top: 10px; left: 10px"
            >New</span
          >
          <h3>Pulpen</h3>
          <p>Rp. 10.000</p>
          <i
            class="fas fa-shopping-cart cart-icon"
            data-bs-toggle="tooltip"
            title="Add to Cart"
          ></i
          ><a href="Buy5.html" class="buy-now-btn">
            Buy Now </a>
        </div>
        <div class="product-card" data-aos="zoom-in">
          <img src="IMG/Rok.jpg" alt="Product 1" />
          <span
            class="badge bg-success position-absolute"
            style="top: 10px; left: 10px"
            >New</span
          >
          <h3>Rok</h3>
          <p>Rp. 90.000</p>
          <i
            class="fas fa-shopping-cart cart-icon"
            data-bs-toggle="tooltip"
            title="Add to Cart"
          ></i
          ><a href="Buy6.html" class="buy-now-btn">
            Buy Now </a>
        </div>
        <div class="product-card" data-aos="zoom-in">
          <img src="IMG/Sandal.jpg" alt="Product 1" />
          <span
            class="badge bg-success position-absolute"
            style="top: 10px; left: 10px"
            >New</span
          >
          <h3>Sandal</h3>
          <p>Rp. 50.000</p>
          <i
            class="fas fa-shopping-cart cart-icon"
            data-bs-toggle="tooltip"
            title="Add to Cart"
          ></i
          ><a href="Buy7.html" class="buy-now-btn">
            Buy Now </a>
        </div>
        <div class="product-card" data-aos="zoom-in">
          <img src="IMG/Topi.jpg" alt="Product 1" />
          <span
            class="badge bg-success position-absolute"
            style="top: 10px; left: 10px"
            >New</span
          >
          <h3>Topi</h3>
          <p>Rp. 75.000</p>
          <i
            class="fas fa-shopping-cart cart-icon"
            data-bs-toggle="tooltip"
            title="Add to Cart"
          ></i
          ><a href="Buy8.html" class="buy-now-btn">
            Buy Now </a>
        </div>
        <div class="product-card" data-aos="zoom-in">
          <img src="IMG/Topi.jpg" alt="Product 1" />
          <span
            class="badge bg-success position-absolute"
            style="top: 10px; left: 10px"
            >New</span
          >
          <h3>Topi</h3>
          <p>Rp. 75.000</p>
          <i
            class="fas fa-shopping-cart cart-icon"
            data-bs-toggle="tooltip"
            title="Add to Cart"
          ></i
          ><a href="Buy9.html" class="buy-now-btn">
            Buy Now </a>
        </div>
        <div class="product-card" data-aos="zoom-in">
          <img src="IMG/Sandal.jpg" alt="Product 1" />
          <span
            class="badge bg-success position-absolute"
            style="top: 10px; left: 10px"
            >New</span
          >
          <h3>Sandal</h3>
          <p>Rp. 50.000</p>
          <i
            class="fas fa-shopping-cart cart-icon"
            data-bs-toggle="tooltip"
            title="Add to Cart"
          ></i
          ><a href="Buy10.html" class="buy-now-btn">
            Buy Now </a>
        </div>
        <div class="product-card" data-aos="zoom-in">
          <img src="IMG/Pulpen.jpg" alt="Product 1" />
          <span
            class="badge bg-success position-absolute"
            style="top: 10px; left: 10px"
            >New</span
          >
          <h3>Pulpen</h3>
          <p>Rp. 10.000</p>
          <i
            class="fas fa-shopping-cart cart-icon"
            data-bs-toggle="tooltip"
            title="Add to Cart"
          ></i
          ><a href="Buy11.html" class="buy-now-btn">
            Buy Now</a>
        </div>
        <div class="product-card" data-aos="zoom-in">
          <img src="IMG/Rok.jpg" alt="Product 1" />
          <span
            class="badge bg-success position-absolute"
            style="top: 10px; left: 10px"
            >New</span
          >
          <h3>Rok</h3>
          <p>Rp. 90.000</p>
          <i
            class="fas fa-shopping-cart cart-icon"
            data-bs-toggle="tooltip"
            title="Add to Cart"
          ></i
          ><a href="Buy12.html" class="buy-now-btn">
            Buy Now</a>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
      <h2 data-aos="fade-up">Testimonials</h2>
      <div class="container">
        <div class="row">
          <div class="col-md-4" data-aos="zoom-in">
            <div class="testimonial-card">
              <p>
                "Cihuy Shop has the best products at the best prices. Highly
                recommend!"
              </p>
              <h5>- Nuaiman</h5>
            </div>
          </div>
          <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="testimonial-card">
              <p>
                "Fantastic customer service and quick delivery. Will shop
                again."
              </p>
              <h5>- Musa</h5>
            </div>
          </div>
          <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="testimonial-card">
              <p>"A seamless shopping experience from start to finish."</p>
              <h5>- Asyif</h5>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <?php include "layout/footer.html"?>

    <!-- Bootstrap JS and Dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS JS for Animations -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <script>
      // Initialize AOS
      AOS.init({
        duration: 1000,
        once: true,
      });

      // Initialize Bootstrap tooltips
      var tooltipTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="tooltip"]')
      );
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
      });

       // Variabel untuk menghitung jumlah produk di keranjang
      let cartCount = 0;

      // Fungsi untuk memperbarui jumlah di keranjang
      function updateCartCount() {
      const cartCountElement = document.getElementById('cart-count');
      cartCountElement.textContent = cartCount;
    }

      // Tambahkan event listener pada ikon produk
      document.querySelectorAll('.fas fa-shopping-cart cart-icon').forEach(icon => {
      icon.addEventListener('click', () => {
      cartCount++; // Tambahkan jumlah produk
      updateCartCount(); // Perbarui tampilan keranjang
      });
  });

    </script>
  </body>
</html>
