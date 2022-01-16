<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- bootstrap 5 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <!-- change font family to roboto -->
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
    }

    /* hilangkan underline pada a href */
    a {
      text-decoration: none;
    }

    /* youtube embeded full */
    .videoWrapper {
      position: relative;
      padding-bottom: 56.25%;
      /* 16:9 */
      padding-top: 25px;
      height: 0;
    }

    .videoWrapper iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
  </style>
</head>

<body class="bg-dark">
  <!-- card bootstrap  -->
  <!-- flex to center -->
  <div class="container bg-dark d-flex ">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card" style="background-color: #181818;">
          <div class="card-header">
            <!-- link to home -->
            <a href="<?= base_url('/') ?>" class="btn btn-primary">
              <i class="fas fa-arrow-left"></i>
            </a>
            <!-- title -->
            <h3 class="text-center text-white">
              <?= $title ?>
            </h3>
          </div>
          <div class="card-body " style="background-color: #181818;">

            <!-- form search box bootstrap 5 action=cari get -->
            <form action="<?php echo base_url('welcome/cari'); ?>" method="get">
              <div class="input-group">
                <!-- set flashdata search box after search -->
                <?php if ($this->session->flashdata('keyword')) : ?>

                  <input type="text" class="form-control bg-dark text-light" name="keyword" id="keyword" placeholder="Masukkan keyword pencarian" value="<?php echo $this->session->flashdata('keyword'); ?>" style="outline: none;">
                <?php else : ?>
                  <input type="text" class="form-control bg-dark text-light" name="keyword" id="keyword" placeholder="Masukkan keyword pencarian" style="outline: none;">

                <?php endif; ?>
                <!-- bootstrap 5 search box dark with font awesome -->
                <div class=" input-group-append">
                  <button class="btn btn-outline-dark" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
            <!-- end form search box -->
            <!-- content $page-->
            <?php $this->load->view($page); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>