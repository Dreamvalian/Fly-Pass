<?php
include('../server/connection.php');
@include '../includes/header.php';
session_start();

$sql = "select * from wines";
$result = mysqli_query($conn, $sql);

$q = "select * from locations";
$r = mysqli_query($conn, $q);

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
              <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                  <td><?php echo $row['id'] ?></td>
                  <td><?php echo $row['name'] ?></td>
                  <td><?php echo $row['type'] ?></td>
                  <td><?php echo $row['quantity'] ?></td>
                  <td><?php echo $row['price'] ?></td>
                  <td><?php echo $row['description'] ?></td>
                  <td>
                    <button name="Edit" id="editWinesButton" type="button" class="btn btn-outline-secondary">
                      <a href="update-data.php?id=<?php echo $row['id']; ?>">Edit</a></button>
                    <button name="delete" type="button" class="btn btn-outline-danger">
                      <a class="delete" href="../actions/deletewine.php?id=<?php echo $row['id']; ?>" role="button" onclick="return confirm('This data would be deleted?')">Delete</a></button>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
          <div class="button-inventory">
            <button name="Submit" type="submit" class="btn btn-primary"><a href="create-data.php">Create new Data</a></button>
          </div>
        </div>
        <!-- Location Tab -->
        <div class="tab-pane fade" id="location" role="tabpanel" aria-labelledby="location-tab">
          <table class="table table-stripped">
            <thead class>
              <tr>
                <th scope=" col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($rows = mysqli_fetch_assoc($r)) { ?>
                <tr>
                  <td><?php echo $rows['id'] ?></td>
                  <td><?php echo $rows['name'] ?></td>
                  <td><?php echo $rows['description'] ?></td>
                  <td>
                    <button name="Edit" id="editWinesButton" type="button" class="btn btn-outline-secondary">
                      <a href="update-data.php?id=<?php echo $rows['id']; ?>">Edit</a></button>
                    <button name="delete" type="button" class="btn btn-outline-danger">
                      <a class="delete" href="../actions/deletelocation.php?id=<?php echo $rows['id']; ?>" role="button" onclick="return confirm('This data would be deleted?')">Delete</a></button>
                  </td>
                </tr>
              <?php  } ?>
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