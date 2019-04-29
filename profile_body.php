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


  <section class="section">
  <div class="container">
  <div class="columns">
      <!-- Side menu -->
  <div class="column is-2 is-sidebar-menu">
    <aside class="menu">
      <p class="menu-label">User Menu</p>
      <ul class="menu-list">
        <li><a class="is-active">Settings</a></li>
      </ul>
    </aside>
  </div>

  <!-- Main content -->
  <div class="container has-text-centered">
  <div class="column is-12 is-main-content" style="background-color:white;">
    <img class="display:block; margin-left:auto; margin-right:auto; width:1em;" src="img/construction.png" alt="under_construction">
    hello
  </div>
  </div>

  </div>
  </div>
  </section>

</div>
