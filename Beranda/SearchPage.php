<?php
  include "koneksi.php";
  include "control.php";
?>
<!DOCTYPE html>
  <html>
    <head>
      <title>Search Page</title>
      <link rel="stylesheet" href="layout/css/searchPage_style.css"/>
    </head>
    <body>
      <?php include "layout/header.html"?>
      <div class="product-grid">
      <?php
        global $datas;
        $productArray = fetchData(count($datas));
      
        foreach ($productArray as $productData) {?>
          <div class="product-card" data-aos="zoom-in">
            <img src=<?php echo $productData['productImage']?> alt=<?php echo $productData['productName']?> />
            <h3>
              <?php echo $productData['productName'] ?>
            </h3>
            <p>
              <?php echo "Rp " . number_format($productData["productPrice"], 0, ',', '.')?>
            </p>
          </div>
        <?php }?>
      </div>
    <?php include "layout/footer.html"?>
    </body>
  </html>
