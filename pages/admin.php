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
  <title>Admin</title>
</head>

<body>
  <section>
    <div class="container my-5">
      <h3 class="text-center">Employee Management</h3>
      <p class="text-center">Manage your employees with ease and efficiency.</br>
        Say goodbye to paperwork and hello to streamlined processes that save you time and money. Our platform is designed to help you stay organized and focused on what matters most - your business.</p>
      <div class="cards">
        <table class="table">
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
        <button type="button" class="btn btn-secondary"><a class="logout" href="login.html?logout=1">Logout</a></button>
      </div>
    </div>
  </section>
  <script src="../script.js"></script>
</body>

</html>