<div class="container">
  <section class="hero is-small">
    <div class="hero-body">
      <div class="column">
        <figure class="image  is-128x128">
          <img class="is-rounded" src="<?php 
          $imgFile = "profile-pic/" . $_SESSION['fullname'] . ".jpg";
          $defaultFile = "profile-pic/default.png";
          if (file_exists($imgFile)) {
            echo $imgFile;
          } else {
            echo $defaultFile;
          }
          ?>" alt="profile picture">
        </figure>
      </div>
      <div class="column">
        <h1 class="title is-4" style="text-align:left;"><?php echo $_SESSION['fullname']; ?></h1>
        <p class="subtitle is-6"style="text-align:left;">Joined <?php $dateTime = new DateTime($_SESSION['date']); echo date_format($dateTime, "M. d, Y") ?></p>
      </div>
    </div>
  </section>

  <div class="column">
    <aside class="menu">
      <p class="menu-label">User Menu</p>
      <ul class="menu-list">
        <li><a>Requests</a></li>
        <li><a>Settings</a></li>
      </ul>
    </aside>
  </div>

</div>
