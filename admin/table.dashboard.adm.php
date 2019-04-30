
<!-- Test (dagdagan na lang) -->
<div class="section">
      <div class="container">
        <div class="columns">

          <!-- Menu Column -->
          <div class="column is-2 is-sidebar-menu">

            <!-- Side panel -->
            <aside class="menu">
              <p class="menu-label">Admin Dashboard</p>
              <ul class="menu-list">
                <li><a class="is-active">Table View</a></li>
                <li><a href="upload.admin.php">Upload a Document</a></li>
              </ul>
              <p class="menu-label">(More features in future updates)</p>
            </aside>


          </div>

          <!-- Main menu (copy here in echo) -->
          <div class="column is-main-content" style="background-color:white;">

            <!-- Table for the documents -->
            <table class="table is-bordered is-striped">
              <style>a {color:black;} a:hover {color:#0066CC;}</style>
                <?php
                  include 'table.adm.php';
                ?>
            </table>

          </div>

        </div>
      </div>
  </div>
