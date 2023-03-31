<?php
session_start();
include('server/connection.php');
@include 'includes/header.php';

$sql = "SELECT * FROM  wines";
$result = mysqli_query($conn, $sql);

if (isset($_POST['search'])) {
    $keyword = $_POST['keyword'];
    $q = "SELECT * FROM wines WHERE name LIKE '%$keyword%' OR  type LIKE '%$keyword%'";
} else if (isset($_POST['search'])) {
    $keyword = $_POST['keyword'];
    $q = "SELECT * FROM wines ";
} 

$result = mysqli_query($conn, $q);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vino Vault</title>
</head>

<body>

    <!-- Hero -->

    <div class="hero">
        <div class="left-hero">
            <h1>Vino Vault</h1>
            <h3>A Nectar of Truth - In Vino Veritas</h3>

            <form class="search-item">
                <div class="mb-3">
                    <label for="search" class="form-label">Search Item</label>
                    <input type="search" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
                <div id="search" class="form-text">We'll find out what we have in our vault!</div>

            </form>
        </div>
        <div class="right-hero">
        </div>
    </div>

    <!-- About -->

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
            <img src="./img/about-image1.jpg">
        </div>
    </div>

    <!-- Search -->

    <div class="search">
        <form method="POST" class="search-item">
            <div class="mb-3">
                <label for="search" class="form-label">Search Item</label>
                <input type="search" name="keyword" class="form-control">
            </div>
            <button name="search" type="submit" class="btn btn-primary">Search</button>
        </form>

        <div class="card-grid">
            <?php if ($result && mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['name'] ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $row['type'] ?></h6>
                            <p class="card-text"><?php echo $row['description'] ?></p>
                            <h6 class="card-price"> <?php echo $row['price'] ?> </h6>
                            <h6 class="card-quantity"><?php echo $row['quantity'] ?></h6>
                        </div>
                    </div>
            <?php }
            } else {
                echo "no result found !";
            } ?>

        </div>
    </div>
</body>

</html>

<?php
@include 'includes/footer.php'
?>