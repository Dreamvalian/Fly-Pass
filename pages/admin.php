<?php
session_start();
include('../server/connection.php');
include '../includes/header.php';

$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);


if (!isset($_SESSION['logged_in'])) {
  header('location:login.html');
  exit;
}

if (isset($_GET['logout'])) {
  if (isset($_SESSION['logged_in'])) {
    unset($_SESSION['logged_in']);
    unset($_SESSION['user_email']);
    header('location:login.html');
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../styles/layout.css">
  <link rel="stylesheet" href="../styles/admin.css">
  <title>Document</title>
</head>

<body>
  <section>
    <div class="container my-5">
      <h3 class="text-center">Employee Management</h3>
      <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima aliquid, soluta quasi velit
        ducimus accusamus id dolore odit, aut, repudiandae consequatur. Atque exercitationem quos consequuntur
        temporibus quisquam excepturi error ullam.</p>
      <div class="cards">
        <table class="table">
          <a class="logout" href="login.html?logout=1">
            <button type="button" class="btn btn-danger" href="login.html?logout=1">Logout</button>
          </a>
          <thead class="table-dark">
            <tr>
              <th class="text-center" scope="col">ID</th>
              <th class="text-center" scope="col">name</th>
              <th class="text-center" scope="col">Email</th>
              <th class="text-center" scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>

            <?php while ($row = mysqli_fetch_assoc($result)) {
              if ($row['role'] == "employee") { ?>
                <tr>
                  <td class="text-center">
                    <?php echo $row['id_user'] ?>
                  </td>
                  <td class="text-center">
                    <?php echo $row['full_name'] ?>
                  </td>
                  <td class="text-center">
                    <?php echo $row['email'] ?>
                  </td>
                  <td class="text-center">
                    <button type="button" class="btn btn-danger">
                      <a class="delete" href="../actions/delete.php?id=<?php echo $row['id_user']; ?>" role="button" onclick="return confirm('This data would be deleted?')">Delete</a>
                    </button>
                    <button type="button" class="btn btn-warning">
                      <a href="update.php?id=<?php echo $row['id_user']; ?>">Update</a>
                    </button>
                  </td>
                </tr>
            <?php }
            } ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
      Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="../script.js"></script>
</body>

</html>