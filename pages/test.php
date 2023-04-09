<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../styles/test.css">
  <!-- <link rel="stylesheet" href="../css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>

<body>
  <section>
    <div class="test">
      <a class="crud">
        Add New Item <i class="bi bi-plus-circle"></i>
      </a>
    </div>
    <div class="card-grid" id="card-grid">
      <div class="card">
        <div class="img">
          <img src="img\loratadine.png">
        </div>
        <div class="card-body">
          <h5 class="card-title text-center"></h5>
          <p class="text-center opacity-50">Obat Yang Tersedia</p>
          <div class="col-sm-12">
            <input type="text" readonly class="card-quantity text-center rounded opacity-50" id="staticEmail" value="<?php echo $row['quantity'] ?>">
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>