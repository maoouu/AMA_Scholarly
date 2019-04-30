
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

        <!-- Modal for document preview -->
        <div id="show_document" class="modal">
          <div class="modal-background"></div>
          <div class="modal-content">
              <!-- Bulma element goes here -->
              <div class="card">
                  <div class="card-content">
                      <h6 class="title is-6">Details</h6> <hr>

                      <label class="label">Title: </label> 
                      <p class="document-title"></p> <br>
                      <label class="label">Authors: </label> 
                      <p class="document-authors"></p> <br>
                      <label class="label">Category: </label> 
                      <p class="document-category"></p> <br>
                      <label class="label">Date Created: </label> 
                      <p class="document-date"></p>
                  </div>
              </div>
          </div>
          <button class="modal-close is-large" aria-aria-label="close" onclick="showDetails()"></button>
        </div>

        <!-- Modal for edit button -->
        <div id="edit_document" class="modal">
          <div class="modal-background"></div>
          <div class="modal-content">
              <!-- Bulma element goes here -->
              <div class="card">
                <div class="card-content">
                    <form data-action="edit.adm.php?edit_id=" method="POST" class="document-form">
                      <!-- Edit Title -->
                      <div class="control">
                          <label class="label">Edit Title:</label>
                          <div class="field">
                              <div class="control">
                                  <input type="text" class="input document-title" name="edit_title" required>
                              </div>
                          </div>
                      </div>
                      <br>
                      <!-- Edit Author/s -->
                      <div class="control">
                          <label class="label">Edit Author (Will be available in future updates)</label>
                          <div class="field">
                              <div class="control">
                                  <input type="text" class="input document-authors" name="edit_author" disabled>
                              </div>
                          </div>
                      </div>
                      <br>
                      <!-- Edit Category -->
                      <div class="control">
                          <label class="label">Edit Category:</label>
                          <div class="field">
                              <div class="control">
                                  <input type="text" class="input document-category" name="edit_category" required>
                              </div>
                          </div>
                      </div>
                      <br>
                      <!-- Buttons -->
                      <div class="field is-grouped">
                          <div class="control">
                              <button id="submit" class="button is-link" type="submit" name="btnsubmit" disabled>Submit</button>
                          </div>
                          <div class="control">
                              <a class="button is-text" onclick="showEdit()">Cancel</a>
                          </div>
                      </div>
                    </form>
                </div>
              </div>
              <!--#########################-->
          </div>
          <button class="modal-close is-large" aria-aria-label="close" onclick="showEdit()"></button>
        </div>
        <!--#########################-->
        
        <!-- Modal for delete button -->
        <div id="delete_document" class="modal">
          <div class="modal-background"></div>
          <div class="modal-content">
              <!-- Bulma element goes here -->
              <div class="card">
                <div class="card-content">
                    <p class="title is-6"> Not available to delete in current version </p>
                </div>
              </div>
              <!--#########################-->
          </div>
          <button class="modal-close is-large" aria-aria-label="close" onclick="showDelete()"></button>
        </div>
        <!--#########################-->

      </div>

    </div>
  </div>
</div>
