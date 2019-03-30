<style>
.image.is-54x54 {
  height: 54px;
  width: 54px;
}
</style>

<nav class="navbar has-shadow is-spaced">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item" href="table.admin.php?sort=Title&order=ASC">
        <img src="../img/book.jpeg" alt="Website Logo">
      </a>
    </div>
    <div id="navMenuIndex" class="navbar-menu">

        <div class="navbar-start">

          <p class="navbar-item">Admin Page (Alpha)</p>

        </div>

        <div class="navbar-end">
          <!-- Profile Dashboard -->
          <div class="navbar-item has-dropdown is-hoverable">

            <div class="navbar-item image is-54x54">
              <?php
                $imageLocation = "<img class='is-rounded' src='../profile-pic/";
                $displayName = $_SESSION['fullname'] . ".jpg'>";
                $file = "../profile-pic/" . $_SESSION['fullname'] . ".jpg";
                $defaultName = "default.png'>";
                    
                if(file_exists($file)){ 
                  echo $imageLocation . $displayName;
                } else {
                  echo $imageLocation . $defaultName;
                }
              ?>
            </div>
              <div class="navbar-link">
                <a href="profile.php" style="color:inherit;">
                  <?php
                  echo $_SESSION['fullname'];
                  ?>
                </a>
              </div>

              <!-- Dropdown Menu -->
              <div class="navbar-dropdown">
                <a class="navbar-item" href="requests.adm.php">Requests</a>
                <hr class="navbar-divider">
                <a class="navbar-item" href="../includes/logout.inc.php">Logout</a>
              </div>

          </div>

        </div>

    </div>

  </div>
</nav>
