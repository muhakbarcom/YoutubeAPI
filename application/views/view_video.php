<!-- bootstrap 5 video youtube embed -->
<?php if ($video['items'][0]) : ?>
  <!-- youtube autoplay -->
  <div class="videoWrapper">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $video['items'][0]['id'] ?>?autoplay=1&showinfo=0&controls=1&modestbranding=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  <?php endif; ?>

  </div>
  <div class="row mt-3">
    <h5 class="card-title text-white">
      <?= $video['items'][0]['snippet']['title'] ?>
    </h5>
    <div class="row d-flex">
      <div class="col-md-4">
        <p class="text-light"><?=
                              // view count 
                              number_format($video['items'][0]['statistics']['viewCount']) ?> views</p>
      </div>
      <div class="col-md text-right ">
        <p class="text-light d-inline">
          <!-- font awesome like -->
          <i class="fas fa-thumbs-up"></i>
          <?=
          // like count
          number_format($video['items'][0]['statistics']['likeCount']) ?> likes
        </p>
        <p class="ml-2 text-light d-inline">
          <!-- font awesome like -->
          <i class="fas fa-thumbs-down"></i>
          <?=
          // like count
          number_format($video['items'][0]['statistics']['dislikeCount']) ?> dislikes
        </p>
      </div>
    </div>
    <div class="row" id="channelProfile">
      <div class="col-md-1 text-left">
        <a href="<?= base_url('channel?c=') . $channel['items'][0]['id'] ?>" class="d-flex text-decoration-none text-light">
          <!-- channel image thumb circle-->
          <img src="<?= $channel['items'][0]['snippet']['thumbnails']['default']['url'] ?>" alt="" class="rounded-circle" width="48" id="channelLogo">
        </a>
      </div>

      <div class="col-md-4">
        <a href="<?= base_url('channel?c=') . $channel['items'][0]['id'] ?>" class="text-decoration-none text-light">

          <?= $video['items'][0]['snippet']['channelTitle'] ?>

        </a><br>
        <small class="text-secondary">
          <!-- if there are subscriberCount -->
          <?php if (isset($channel['items'][0]['statistics']['subscriberCount'])) : ?>
            <?=
            // subscribber 
            number_format($channel['items'][0]['statistics']['subscriberCount']) ?> subscribers
          <?php else : ?>
            <?=
            // if there are no subscriberCount
            'Hidden subscribers' ?>
          <?php endif; ?>
        </small>
        </p>


      </div>

    </div>
    <div class="row" id="deskripsi">
      <!-- limit string $video['items'][0]['snippet']['description'] -->
      <p class="text-secondary">
        <?= substr($video['items'][0]['snippet']['description'], 0, 300) ?>
      </p>
    </div>



  </div>
  <div class="row" id="commentYoutube">
    <!-- looping $comment -->
    <h5 class="text-light">Komentar</h5>
    <!-- if comment not null -->
    <?php if (isset($comment['items'])) : ?>
      <?php foreach ($comment['items'] as $c) : ?>
        <div class="col-md-12">
          <!-- card shadow -->
          <div class="card shadow-sm" style="background-color: #181818;">
            <div class="card-body">

              <div class="row">
                <div class="col-md-1 text-left">
                  <!-- channel image thumb circle-->
                  <img src="<?= $c['snippet']['topLevelComment']['snippet']['authorProfileImageUrl'] ?>" alt="" class="rounded-circle" width="48">
                </div>
                <div class="col-md-11">
                  <p class="text-light">
                    <?= $c['snippet']['topLevelComment']['snippet']['authorDisplayName'] ?>
                  </p>
                  <p class="text-light">
                    <?= $c['snippet']['topLevelComment']['snippet']['textDisplay'] ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    <?php else : ?>
      <div class="col-md-12">
        <div class="card shadow-sm" style="background-color: #181818;">
          <div class="card-body">
            <p class="text-light">Tidak ada komentar</p>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>