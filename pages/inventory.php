<?php
@include '../includes/header.php';
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../styles/layout.css">
  <link rel="stylesheet" href="../styles/inventory.css">
  <title>Inventory</title>
</head>

<body>
  <div class="container my-5">
    <h3 class="text-center">Organize Your Wine Collection with Ease</h3>
    <p class="text-center">Manage your wine collection like a pro with our secure and user-friendly Cellar Vault. </br>
      Keep track of your finest vintages and enjoy them with confidence.</p>

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
          <table class="table table-stripped">
            <thead class>
              <tr>
                <th scope=" col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Product A</td>
                <td>Type A</td>
                <td>10</td>
                <td>$50.00</td>
                <td>Description for Product A</td>
                <td>
                  <button name="Edit" id="editWinesButton" type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editWines">Edit</button>

                  <!-- Modal -->
                  <div class="modal fade" id="editWines" tabindex="-1" aria-labelledby="editWines" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="editWines">Edit Wines</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" class="form-control" id="name" value="Product 1">
                            </div>
                            <div class="form-group">
                              <label for="type">Type</label>
                              <input type="text" class="form-control" id="type" value="Type A">
                            </div>
                            <div class="form-group">
                              <label for="quantity">Quantity</label>
                              <input type="number" class="form-control" id="quantity" value="10">
                            </div>
                            <div class="form-group">
                              <label for="price">Price</label>
                              <input type="text" class="form-control" id="price" value="$100">
                            </div>
                            <div class="form-group">
                              <label for="description">Description</label>
                              <textarea class="form-control" id="description">Description 1</textarea>
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <button name="Delete" id="deleteWinesButton" type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteWines">Delete</button>
                  <!-- Modal -->
                  <div class="modal fade" id="deleteWines" tabindex="-1" aria-labelledby="deleteWines" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="deleteWines">Deleting wines?</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <p>
                            Are you absolutely sure you want to proceed with this action? </br>
                            Once confirmed, this action cannot be undone.
                          </p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="button-inventory">
            <button name="Submit" type="submit" class="btn btn-primary">Create new Data</button>
          </div>
        </div>
        <!-- Location Tab -->
        <div class="tab-pane fade" id="location" role="tabpanel" aria-labelledby="location-tab">
          <table class="table table-stripped">
            <thead>
              <tr>
                <th scope=" col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Product A</td>
                <td>Description for Product A</td>
                <td>
                  <button name="Submit" type="button" class="btn btn-outline-secondary">Edit</button>
                  <button name="Submit" type="button" class="btn btn-outline-danger">Delete</button>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="button-inventory">
            <button name="Submit" type="submit" class="btn btn-primary">Create new Data</button>
          </div>
        </div>
      </div>
    </div>
    <script src="../script.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>