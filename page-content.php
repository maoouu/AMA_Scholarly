<!-- Page container -->
<div class="section">
  <div class="container">
    <div class="columns">
      <!-- Most Recent -->
      <div class="column">
        <!-- Title -->
        <div class="column">
           <h1 class="title is-4">Most Recent</h1>
        </div>
            
        <div class="section">
          <div class="columns is-multiline is-centered">

            <?php
              include 'includes/most_recent.inc.php';
            ?>
          </div>
        </div>
      </div>
    </div>

    <hr>

    <div class="columns">
      <div class="column">
        <!-- Title -->
        <div class="column">
           <h1 class="title is-4">Most Liked</h1>
        </div>
            
        <div class="section">
          <div class="columns is-multiline is-centered">

            <?php
              include 'includes/most_liked.inc.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
