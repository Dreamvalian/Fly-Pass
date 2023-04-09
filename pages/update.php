<?php
include("../server/connection.php");

$id = $_GET['id'];

$sql = "SELECT * FROM user WHERE id_user = '$id'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

if (isset($_POST['btn_update'])) {
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
  <!-- <link rel="stylesheet" href="../css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="../styles/update.css">
  <title>Document</title>
</head>

<body>
  <section>
    <div class="container">
      <div class="forms">
        <div class="form update">
          <span class="title">Employee Update Info</span><br />
          <span class="subtitle">IDs: <?php echo $row['id_user'] ?></span>
          <form method="POST" action="../actions/update.php">
            <div class="input-field">
              <i class="bi bi-person"></i>
              <input name="username" type="text" class="username" placeholder="<?php echo $row['username'] ?>">

            </div>
            <div class="input-field">
              <i class="bi bi-lock"></i>
              <input name="password" type="password" class="password" placeholder="<?php echo $row['username'] ?>">

            </div>
            <div class="input-field">
              <i class="bi bi-person-vcard"></i>
              <input name="fullname" type="text" class="fullname" placeholder="<?php echo $row['full_name'] ?>">

            </div>
            <div class="input-field">
              <i class="bi bi-envelope"></i>
              <input name="email" type="text" class="email" placeholder="<?php echo $row['email'] ?>">
            </div>

            <div class="input-field">
              <i class="bi bi-person-badge"></i>
              <select name="role" class="form-select">
                <option selected>Select for roles</option>
                <option value="admin">Administrator</option>
                <option value="employee">Employee</option>
            </div>

            <div class="input-field button">
              <input name="submit" type="submit" value="Submit" />
            </div>
          </form>

          <div class="cancel">
            <span class="text">change mind?
              <a href="../pages/admin.php" class="text cancel-link">Cancel</a>
            </span>
          </div>
        </div>
  </section>

</body>

</html>