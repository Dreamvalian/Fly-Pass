<?php
session_start();
include('server/connection.php');
@include 'includes/header.php';

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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vino Vault</title>
</head>

<body>

    <!-- Hero -->
    <section class="hero">
        <div class="left-hero">
            <h1>Vino Vault</h1>
            <h3>A Nectar of Truth - In Vino Veritas</h3>

            <form method="POST" class="search-item" action="<?php echo $_SERVER['PHP_SELF'] ?>#search-item-2">
                <div class="mb-3">
                    <label for="search" class="form-label">Search Item</label>
                    <input type="search" name="keyword" class="form-control">
                </div>
                <button name="search" type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
        <div class="right-hero">
        </div>
    </section>


    <!-- About -->
    <section class="about">
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
    </section>


    <!-- Search -->
    <section class="search">

        <form method="POST" class="search-item" id="search-item-2" action="<?php echo $_SERVER['PHP_SELF'] ?>#search-item-2">
            <div class="mb-3">
                <label for="search" class="form-label">Search Item</label>
                <input type="search" name="keyword" class="form-control">
            </div>
            <button name="search" type="submit" class="btn btn-primary">Search</button>
        </form>

        <div class="card-grid" id="card-grid">
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
            } else { ?>
                <div class="no-results-message">
                    <p></p>
                </div>
                <div class="no-results-message">
                    <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" fill="currentColor" class="bi bi-bug" viewBox="0 0 16 16">
                        <path d="M4.355.522a.5.5 0 0 1 .623.333l.291.956A4.979 4.979 0 0 1 8 1c1.007 0 1.946.298 2.731.811l.29-.956a.5.5 0 1 1 .957.29l-.41 1.352A4.985 4.985 0 0 1 13 6h.5a.5.5 0 0 0 .5-.5V5a.5.5 0 0 1 1 0v.5A1.5 1.5 0 0 1 13.5 7H13v1h1.5a.5.5 0 0 1 0 1H13v1h.5a1.5 1.5 0 0 1 1.5 1.5v.5a.5.5 0 1 1-1 0v-.5a.5.5 0 0 0-.5-.5H13a5 5 0 0 1-10 0h-.5a.5.5 0 0 0-.5.5v.5a.5.5 0 1 1-1 0v-.5A1.5 1.5 0 0 1 2.5 10H3V9H1.5a.5.5 0 0 1 0-1H3V7h-.5A1.5 1.5 0 0 1 1 5.5V5a.5.5 0 0 1 1 0v.5a.5.5 0 0 0 .5.5H3c0-1.364.547-2.601 1.432-3.503l-.41-1.352a.5.5 0 0 1 .333-.623zM4 7v4a4 4 0 0 0 3.5 3.97V7H4zm4.5 0v7.97A4 4 0 0 0 12 11V7H8.5zM12 6a3.989 3.989 0 0 0-1.334-2.982A3.983 3.983 0 0 0 8 2a3.983 3.983 0 0 0-2.667 1.018A3.989 3.989 0 0 0 4 6h8z" />
                    </svg>
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
    <script src="./js/bootstrap.js"></script>
</body>

</html>

<?php
@include 'includes/footer.php'
?>