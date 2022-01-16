<?php if (empty($items)) : ?>
  <!-- jika data kosong -->
  <div class="alert alert-danger" role="alert">
    Data tidak ditemukan
  </div>
<?php else : ?>
  <?php foreach ($items as $row) : ?>
    <!-- php if there index videoId-->
    <?php if (isset($row['id']['videoId'])) : ?>
      <a href="<?php echo base_url() . '/watch?v=' . $row['id']['videoId']; ?>">
      <?php
    // elseif not array
    elseif (!is_array($row['id'])) :
      ?>
        <a href="<?php echo base_url() . '/watch?v=' . $row['id']; ?>">
        <?php else : ?>
          <a href="#">
          <?php endif; ?>
          <div class="card mb-3 mt-3 text-light" style="background-color: #181818;">
            <div class="row no-gutters">
              <div class="col-lg-4">
                <img src="<?php echo $row['snippet']['thumbnails']['medium']['url']; ?>" class="card-img">
              </div>
              <div class="col-lg-8">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row['snippet']['title']; ?></h5>
                  <p class="card-text text-secondary"><?php echo substr($row['snippet']['description'], 0, 100) . '...'; ?></p>
                </div>
              </div>
            </div>
          </div>
          </a>
        <?php endforeach; ?>
      <?php endif; ?>