<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title; ?></title>
  <!-- bootstrap 5 cdn-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <!-- custom style -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

</head>

<body>
  <!-- bootstrap 5 template -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url(); ?>">RajaOngkir</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="<?= base_url('rajaongkir/city'); ?>">City</a>
          <a class="nav-item nav-link" href="<?= base_url('rajaongkir/cost'); ?>">Cost</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- end of bootstrap 5 template -->
  <div class="container">
    <?php $this->load->view($content); ?>
  </div>
  <!-- footer bootstrap 5 -->
  <footer class="footer mt-auto py-3">
    <div class="container">
      <span class="text-muted">&copy; 2021 - Akbar</span>
    </div>
  </footer>
</body>

</html>