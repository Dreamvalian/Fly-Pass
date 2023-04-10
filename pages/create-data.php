<?php
include('../server/connection.php');
include('../includes/header.php');
// wine-input //

//create anchor balik ke inventory//
//update sama create location//



if (isset($_POST['create_wine'])) {

    $winename = $_POST['winename'];
    $typewine = $_POST['typewine'];
    $quantitywine = $_POST['quantitywine'];
    $pricewine = $_POST['pricewine'];
    $description = $_POST['description'];
    $timestamp = time();
    $date_time = date("Y-m-d H:i:s", $timestamp);

    $query = "INSERT INTO wines VALUES ('','$winename','$typewine','$description','$quantitywine','$pricewine','$date_time','$date_time')";

    mysqli_query($conn, $query);

    header("location:inventory.php");
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
  <title>Create Inventory Data</title>
</head>

<body>
    <div class="container my-5">
        <h3 class="text-center">Input your wines through the vault.</h3>
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
                    <form class="tab-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="winename" type="text" class="form-control" id="name" value="Product 1">
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <input name="typewine" type="text" class="form-control" id="type" value="Type A">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input name="quantitywine" type="number" class="form-control" id="quantity" value="10">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input name="pricewine" type="text" class="form-control" id="price" value="$100">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" id="description">Description 1</textarea>
                        </div>
                    </form>
                    <div class="tab-footer mt-3 d-flex justify-content-end gap-2">
                        <button type="button" class="btn btn-secondary">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                <!-- Location Tab -->
                <div class="tab-pane fade" id="location" role="tabpanel" aria-labelledby="location-tab">
                    <table class="table table-stripped">
                        <form class="tab-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" value="Product 1">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description">Description 1</textarea>
                            </div>
                        </form>
                        <div class="tab-footer mt-3 d-flex justify-content-end gap-2">
                            <button type="button" class="btn btn-secondary">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                </div>
            </div>
        </div>
        <script src="../script.js"></script>
        <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>