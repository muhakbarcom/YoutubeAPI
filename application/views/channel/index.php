<!-- channel youtube page -->

<div class="container">
  <div class="row mt-4">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="col-md-12 text-light text-center">
            <img src="<?php echo $channel['snippet']['thumbnails']['default']['url']; ?>" class="img-responsive rounded-circle">
          </div>
          <h3 class="panel-title text-light text-center">
            <span class="glyphicon glyphicon-film"></span>

            <!-- channel title -->
            <?php echo $channel['snippet']['localized']['title']; ?>

          </h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-12 text-secondary">
              <p>
                <?php echo $channel['snippet']['description']; ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title text-light">
            <span class="glyphicon glyphicon-film"></span>
            <?php echo $channel['snippet']['localized']['title']; ?>
          </h3>
        </div>
        <div class="panel-body">

          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <?php if (count($videos) > 0) { ?>
                  <?php foreach ($videos as $video) { ?>
                    <div class="col-md-3">
                      <div class="thumbnail">
                        <a href="<?php echo base_url('watch?v=' . $video['id']['videoId']); ?>">
                          <img src="<?php echo $video['snippet']['thumbnails']['medium']['url']; ?>" class="img-responsive" width="100%">
                        </a>
                        <div class="caption">
                          <p>
                            <a class="text-light" href="<?php echo base_url('watch?v=' . $video['id']['videoId']); ?>">
                              <?php echo $video['snippet']['title']; ?>
                            </a>
                          </p>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                <?php } else { ?>
                  <div class="alert alert-info">
                    <p>
                      <strong>
                        <span class="glyphicon glyphicon-info-sign"></span>
                        No videos found.
                      </strong>
                    </p>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end channel youtube page -->