<?php
session_start();
include('./server/connection.php');

$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);


if (!isset($_SESSION['logged_in'])) {
    header('location:pages/login.hmtl');
    exit;
}

if (isset($_GET['logout'])) {
    if (isset($_SESSION['logged_in'])) {
        unset($_SESSION['logged_in']);
        unset($_SESSION['user_email']);
        header('location:pages/login.html');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="pages/login.php?logout=1">logout</a>
    <div class="container">
        <div class="row">
            <div class="col">
            </div>
            <div class="col">
                <section>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                                <tr>
                                    <td><?php echo $row['id_user'] ?></td>
                                    <td><?php echo $row['full_name'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td>
                                        <button class="btn-delete"><a class="delete" href="actions/delete.php?id=<?php echo $row['id_user']; ?>" role="button" onclick="return confirm('Data ini akan dihapus')">Hapus</a></button>
                                    </td>
                                    <td>
                                        <button class="btn-update"><a class="update" href="actions/update.php?id=<?php echo $row['id_user']; ?>">Update</a></button>
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </div>

</body>

</html>