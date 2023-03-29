<?php
@include 'includes/header.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="styles/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vino Vault</title>
</head>

<body>
    <div class="hero">
        <div class="left-hero">
            <h1>Vino Vault</h1>
            <h3>A Nectar of Truth - In Vino Veritas</h3>

            <form class="search-item">
                <div class="mb-3">
                    <label for="search" class="form-label">Search Item</label>
                    <input type="search" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
                <div id="search" class="form-text">We'll find out what we have in our vault!</div>

            </form>
        </div>
        <div class="right-hero">
        </div>
    </div>


</body>

</html>

<?php
@include 'includes/footer.php'
?>