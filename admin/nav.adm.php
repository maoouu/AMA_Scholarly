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

          <!-- Search Bar (Still at work)--> 
          <form class="navbar-item field is-grouped is-flex-desktop" action="admin-search" method="POST">
            <p class="control">
              <input class="input is-rounded" type="text" name="search" placeholder="Search... (still in development~)" maxlength="255">
            </p>

            <p class="control">
              <button class="button is-info" type="submit" name="btnsearch">Search</button>
            </p>
          </form>

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
                <a style="color:inherit;">
                  <?php
                  echo $_SESSION['fullname'];
                  ?>
                </a>
              </div>

              <!-- Dropdown Menu -->
              <div class="navbar-dropdown">
                <a class="navbar-item" href="#">Requests</a>
                <a class="navbar-item" href="../includes/logout.inc.php">Logout</a>
              </div>

          </div>

        </div>

    </div>

  </div>
</nav>
