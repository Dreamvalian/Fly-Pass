<?php

session_start();
include('server/connection.php');
include 'includes/header.php';

$sql = "SELECT * FROM  wines";
$result = mysqli_query($conn, $sql);

if (isset($_POST['search'])) {
  $keyword = $_POST['keyword'];
  $q = "SELECT * FROM wines WHERE name LIKE '%$keyword%' OR  type LIKE '%$keyword%'";
} else {
  $q = "SELECT * FROM wines ";
}

$result = mysqli_query($conn, $q);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/layout.css">
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Vino Vault</title>
</head>

<body>


  <!-- Hero -->
  <section class="hero" id="hero">
    <div class="left-hero">
      <h1>Vino Vault</h1>
      <h3>A Nectar of Truth - In Vino Veritas</h3>

      <form method="POST" class="search-item" action="<?php echo $_SERVER['PHP_SELF'] ?>#search-item-2">
        <div class="mb-3">
          <label for="search" class="form-label">Search Item</label>
          <input type="search" name="keyword" class="form-control">
        </div>
        <button name="search" type="submit" class="btn btn-primary btn-lg">Search</button>
      </form>
    </div>
    <div class="right-hero">
    </div>
  </section>


  <!-- About -->
  <section class="about" id="about">
    <div class="about">
      <div class="marquee-text">
        <span>
          As a versatile and beloved beverage, Whether you prefer red, white, rosé, or sparkling, there's a wine
          out there to suit every taste and occasion. 🍷
        </span>
      </div>
      <div class="about-content">
        <div class="content">
          <h3>
            Leading vault of Wine Product:
          </h3>
          <p>
            With VinoVault, you can easily add new wines to your inventory, update wine quantities, and view
            detailed reports on your inventory and sales. Our user-friendly interface and powerful features make
            it easy to manage your wine warehouse, so you can focus on what you do best - providing your
            customers with the finest wines and the best service.
            <br><br>
            Whether you are a small independent wine retailer or a large wine distributor, VinoVault is the
            perfect tool to help you manage your wine inventory and sales more efficiently. Sign up now and
            experience the benefits of VinoVault for yourself!
          </p><br>
        </div>
        <div class="about-image">
          <div class="img-about">
            <img src="./img/about-image1.jpg" alt="image-carousel-1">
          </div>
          <div class="img-about">
            <img src="./img/about-image2.jpg" alt="image-carousel-2">
          </div>
          <div class="img-about">
            <img src="./img/about-image3.jpg" alt="image-carousel-3">
          </div>
          <div class="img-about">
            <img src="./img/about-image4.jpg" alt="image-carousel-4">
          </div>
          <div class="img-about">
            <img src="./img/about-image5.jpg" alt="image-carousel-5">
          </div>
        </div>

      </div>
    </div>
    </div>
  </section>


  <!-- Search -->
  <section class="search">

    <form method="POST" class="search-item" id="search-item-2" action="<?php echo $_SERVER['PHP_SELF'] ?>#search-item-2">
      <div class="mb-3">
        <label for="search" class="form-label">Search Item</label>
        <input type="search" name="keyword" class="form-control">
      </div>
      <button name="search" type="submit" class="btn btn-primary btn-lg">Search</button>
    </form>

    <div class="card-grid" id="card-grid">
      <?php if ($result && mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) { ?>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['name'] ?></h5>
              <h6 class="card-subtitle mb-2 text-muted"><?php echo $row['type'] ?></h6>
              <p class="card-text">Description: <br><?php echo $row['description'] ?></p>
              <h6 class="card-price">Price per unit $<?php echo $row['price'] ?> </h6>
              <h6 class="card-quantity">Less than <?php echo $row['quantity'] ?></h6>
            </div>
          </div>
        <?php }
      } else { ?>
        <div class="no-results-message">
          <p></p>
        </div>
        <div class="no-results-message">
          <i class="bi bi-bug"></i>
          <p>Looks like our vault doesn't have what you're looking for. Try again?</p>
        </div>
      <?php } ?>
    </div>
  </section>
  <!-- <script>
        const searchForm = document.getElementById("search-form");

        searchForm.addEventListener("submit", (event) => {
            event.preventDefault();
        });
    </script> -->
  <!-- <script src="./js/bootstrap.js"></script> -->
</body>

</html>

<?php
@include 'includes/footer.php'
?>