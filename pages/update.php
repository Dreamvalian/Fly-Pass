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
  <title>Document</title>
  <link rel="stylesheet" href="../css/bootstrap.css" />
</head>

<body>
  <section class="h-100 h-custom" style="background-color: #8fc4b7">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
          <div class="card rounded-3">
            <!-- <img
                src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
                class="w-100"
                style="
                  border-top-left-radius: 0.3rem;
                  border-top-right-radius: 0.3rem;
                "
                alt="Sample photo"
              /> -->
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">
                Employee Update Info
              </h3>
              <h3>ID: <?php echo $row['id_user'] ?></h3>
              <br>
              <form method="POST" class="px-md-2">
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example1q">Username</label>
                  <input type="text" id="form3Example1q" class="form-control" name="username" value=" <?php echo $row['username'] ?>" />
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example1q">Password</label>
                  <input type="text" id="form3Example1q" class="form-control" name="password" value=" <?php echo $row['password'] ?>" />
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example1q">Fullname</label>
                  <input type="text" id="form3Example1q" class="form-control" name="fullname" value=" <?php echo $row['full_name'] ?>" />
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example1q">Email</label>
                  <input type="email" id="form3Example1q" class="form-control" name="email" value=" <?php echo $row['email'] ?>" />
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example1q">Role</label>
                  <input type="text" id="form3Example1q" class="form-control" name="role" value=" <?php echo $row['role'] ?>" />
                </div>
                <button name="btn_update" type="submit" class="btn btn-success btn-lg mb-1">
                  Update !
                </button>
                <br>
                <br>
                <div class="rsth">
                  <span>Dont want Update?</span>
                </div>
                <a class="rsthcancel" href="../pages/admin.php" role="button">Cancel it</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>