<style>
.image.is-54x54 {
  height: 54px;
  width: 54px;
}

.navbar {
    position: fixed; /* Set the navbar to fixed position */
    top: 0; /* Position the navbar at the top of the page */
    width: 100%; /* Full width */
}

main{
    margin-top: 3.4em;
}
</style>

<nav class="navbar has-shadow is-spaced" role="navigation" aria-label="main navigation">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item" href="home.php">
        <img src="img/book.jpeg" alt="Website Logo">
      </a>

      <!-- Navbar burger -->
      <a role="button" class="navbar-burger burger" onclick="document.querySelector('.navbar-menu').classList.toggle('is-active');" aria-label="menu" aria-expanded="false">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>

    </div>
    <div id="navMenuIndex" class="navbar-menu">

        <div class="navbar-start">
          <!-- Page Navigation Menu -->
          <a class="navbar-item" href="home">Home</a>

          <!--Dropdown Browsing-->
          <a class="navbar-item" href="browse">Browse</a>
                              
          <!-- Contacts -->
          <a class="navbar-item" href="contacts">Contacts</a>

          <!-- Search Bar (Still at work)--> 
          <div class="navbar-item field is-grouped is-flex-desktop">
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
                <a href="profile" style="color:inherit;">
                  <?php
                  echo $_SESSION['fullname'];
                  ?>
                </a>
              </div>

              <!-- Dropdown Menu -->
              <div class="navbar-dropdown">
                <a class="navbar-item" href="includes/logout.inc">Logout</a>
              </div>

          </div>

        </div>

    </div>

  </div>
</nav>
