<style>
.image.is-54x54 {
  height: 54px;
  width: 54px;
}
</style>

<nav class="navbar has-shadow is-spaced">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item" href="home.php">
        <img src="img/book.jpeg" alt="Website Logo">
      </a>
    </div>
    <div id="navMenuIndex" class="navbar-menu">

        <div class="navbar-start">
          <!-- Page Navigation Menu -->
          <a class="navbar-item" href="Home">Home</a>

          <!--Dropdown Browsing-->
          <a class="navbar-item" href="Browse">Browse</a>
                              
          <!-- Contacts -->
          <a class="navbar-item" href="Contacts">Contacts</a>

          <!-- Search Bar (Still at work)--> 
          <div class="navbar-item field is-grouped">
            <p class="control">
              <input class="input is-rounded" type="text" name="search" placeholder="Search... (still in development~)" maxlength="255">
            </p>

            <p class="control">
              <button class="button is-info" type="submit" name="btnsearch">Search</button>
            </p>
          </div>

        </div>

        <div class="navbar-end">
          <!-- Profile Dashboard -->
          <div class="navbar-item has-dropdown is-hoverable">
            <!-- Profile Picture-->
            <div class="navbar-item image is-54x54">
                    <?php
                      $imageLocation = "<img class='is-rounded' src='profile-pic/";
                      $displayName = $_SESSION['fullname'] . ".jpg'>";
                      $file = "profile-pic/" . $_SESSION['fullname'] . ".jpg";
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
                <a class="navbar-item" href="profile.php">Profile</a>
                <hr class="navbar-divider">
                <a class="navbar-item" href="includes/logout.inc.php">Logout</a>
              </div>

          </div>

        </div>

    </div>

  </div>
</nav>
