<?php
@include '../includes/header.php';
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../styles/inventory.css">
  <title>Document</title>
</head>

<body>
  <div class="container my-5">
    <h3 class="text-center">Input your item through the vault.</h3>
    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima aliquid, soluta quasi velit ducimus accusamus id dolore odit, aut, repudiandae consequatur. Atque exercitationem quos consequuntur temporibus quisquam excepturi error ullam.</p>

    <div class="cards">
      <ul class="nav nav-tabs my-4 flex-wrap" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="wine-tab" data-bs-toggle="tab" data-bs-target="#wine" type="button" role="tab" aria-controls="wine" aria-selected="true">Wine</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="location-tab" data-bs-toggle="tab" data-bs-target="#location" type="button" role="tab" aria-controls="location" aria-selected="false">Location</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="inventory-tab" data-bs-toggle="tab" data-bs-target="#inventory" type="button" role="tab" aria-controls="inventory" aria-selected="false">Inventory</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="wine" role="tabpanel" aria-labelledby="wine-tab">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="form-name" placeholder="Wines name">
          </div>
          <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="form-type" placeholder="Type of wines">
          </div>
          <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="form-quantity" placeholder="Quantity e.g 6">
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="form-price" placeholder="Price e.g 29.99">
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="form-description" rows="3"></textarea>
          </div>
          <button name="Submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
        <div class="tab-pane fade" id="location" role="tabpanel" aria-labelledby="location-tab">
          <div class="mb-3">
            <label for="rack-name" class="form-label">Rack Name</label>
            <input type="text" class="form-control" id="form-name" placeholder="e.g A1">
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="form-description" rows="3"></textarea>
          </div>
          <button name="Submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
        <div class="tab-pane fade" id="inventory" role="tabpanel" aria-labelledby="inventory-tab">
          <div class="mb-3">
            <label for="wine-id" class="form-label">Wine ID</label>
            <input type="number" class="form-control" id="form-id" placeholder="Wine IDs">
          </div>
          <div class="mb-3">
            <label for="location-id" class="form-label">Location ID</label>
            <input type="number" class="form-control" id="form-id" placeholder="Location IDs">
          </div>
          <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="form-quantity" placeholder="Quantity e.g 6">
          </div>
          <button name="Submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>
  <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>