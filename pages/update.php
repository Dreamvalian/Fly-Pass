<?php
include("../server/connection.php");

$id = $_GET['id'];

$sql = "SELECT * FROM user WHERE id_user = '$id'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $role = $_POST['role'];

  $q = "UPDATE user SET username ='$username' , password ='$password', full_name = '$fullname', email = '$email', role = '$role' where id_user ='$id'";
  mysqli_query($conn, $q);

  header('location:../pages/admin.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../styles/update.css">
  <title>Update User Data</title>
</head>

<body>
  <section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="card shadow-md">
          <div class="card-body">
            <h5 class="card-title">Employee Update Info</h5>
            <p class="card-subtitle text-muted mb-4">IDs: <?php echo $row['id_user'] ?></p>
            <form method="POST">
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-person"></i></span>
                  <input name="username" type="text" class="form-control" id="username" value="<?php echo $row['username'] ?>">
                </div>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-lock"></i></span>
                  <input name="password" type="password" class="form-control" id="password" value="<?php echo $row['password'] ?>">
                </div>
              </div>
              <div class="mb-3">
                <label for="fullname" class="form-label">Full Name</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-person-vcard"></i></span>
                  <input name="fullname" type="text" class="form-control" id="fullname" value="<?php echo $row['full_name'] ?>">
                </div>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                  <input name="email" type="email" class="form-control" id="email" value="<?php echo $row['email'] ?>">
                </div>
              </div>
              <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
                  <select name="role" class="form-select" id="role">
                    <option selected>Select for roles</option>
                    <option value="admin">Administrator</option>
                    <option value="employee">Employee</option>
                  </select>
                </div>
              </div>
              <div class="d-grid gap-2 mt-2">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            <div class="mt-3 text-center">
              <span class="text">Changed your mind?</span>
              <a href="../pages/admin.php" class="text-decoration-none">Cancel</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>


</html>