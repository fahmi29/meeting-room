<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meeting Room</title>
  <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body>

  <nav class="navbar navbar-expand-lg" style="background-color: #EA6242;">
    <div class="container-fluid">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="<?= base_url('assets/images/test.jpg') ?>" class="rounded-circle shadow-4-strong" style="width: 3rem;" />
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <?= $this->renderSection('content'); ?>
  </div>

  <script src="<?= base_url('js/jquery.min.js') ?>"></script>
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>