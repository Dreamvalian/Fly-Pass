<?php
include("../server/connection.php");
include("../includes/header.php");


session_start();

$id = $_GET['id'];

$sql = "SELECT * FROM wines where id = '$id' ";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

if (isset($_POST['update_wine'])) {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $timestamp = time();
    $date_time = date("Y-m-d H:i:s", $timestamp);


    $sqlw = "UPDATE wines SET name ='$name' , type ='$type', description = '$description' , quantity= '$quantity', price = '$price',  created_at = '', updated_at = '$date_time' where id ='$id'";
    mysqli_query($conn, $sqlw);


    header('location:inventory.php');
}


$q = "SELECT * FROM locations where id ='$id'";
$r = mysqli_query($conn, $q);

$rows = mysqli_fetch_assoc($r);

if (isset($_POST['update_location'])) {
    $name = $_POST['namelocation'];
    $description = $_POST['descriptionlocation'];
    $timestamp = time();
    $date_time = date("Y-m-d H:i:s", $timestamp);


    $ql = "UPDATE locations SET name ='$name' , description = '$description',  created_at = '', updated_at = '$date_time' where id ='$id'";
    mysqli_query($conn, $ql);


    header('location:inventory.php');
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/layout.css">
    <link rel="stylesheet" href="../styles/inventory.css">
    <title>Update Inventory Data</title>
</head>

<body>
    <div class="container my-5">
        <h3 class="text-center">Update your wines inside a vault.</h3>
        <p class="text-center">Enter your finest vintage wines and manage your collection with ease through our secure Cellar Vault. Keep track of your wines and enjoy them with confidence.</p>

        <div class="cards">
            <!-- Tab -->
            <ul class="nav nav-tabs my-4 flex-wrap" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="wine-tab" data-bs-toggle="tab" data-bs-target="#wine" type="button" role="tab" aria-controls="wine" aria-selected="true">Wine</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="location-tab" data-bs-toggle="tab" data-bs-target="#location" type="button" role="tab" aria-controls="location" aria-selected="false">Location</button>
                </li>
            </ul>
            <!-- Tab -->
            <div class="tab-content" id="myTabContent">
                <!-- Wines Tab -->
                <div class="tab-pane fade show active" id="wine" role="tabpanel" aria-labelledby="wine-tab">
                    <form method="POST" class="tab-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" type="text" class="form-control" id="name" value="<?php echo $row['name'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <input name="type" type="text" class="form-control" id="type" value="<?php echo $row['type'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input name="quantity" type="number" class="form-control" id="quantity" value="<?php echo $row['quantity'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input name="price" type="text" class="form-control" id="price" value="<?php echo $row['price'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" id="description"><?php echo $row['description'] ?></textarea>
                        </div>
                        <div class="tab-footer mt-3 d-flex justify-content-end gap-2">
                            <button type="button" class="btn btn-secondary"><a href="inventory.php">Close</a></button>
                            <button name="update_wine" type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>

                <!-- Location Tab -->
                <div class="tab-pane fade" id="location" role="tabpanel" aria-labelledby="location-tab">
                    <table class="table table-stripped">
                        <form method="POST" class="tab-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input name="namelocation" type="text" class="form-control" id="name" value="<?php echo $rows['name'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="descriptionlocation" class="form-control" id="description"><?php echo $rows['description'] ?></textarea>
                            </div>
                            <div class="tab-footer mt-3 d-flex justify-content-end gap-2">
                                <button type="button" class="btn btn-secondary"><a href="inventory.php">Close</a></button>
                                <button name="update_location" type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
        <script src="../script.js"></script>
        <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>