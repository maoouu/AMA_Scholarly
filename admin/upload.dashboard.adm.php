
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
                <li><a href="table.admin.php?sort=Title&order=ASC">Table View</a></li>
                <li><a class="is-active">Upload a Document</a></li>
              </ul>
              <p class="menu-label">(More features in future updates)</p>
            </aside>


          </div>

          <div class="column is-main-content" style="background-color:white;">

            <div class="column">

              <!-- Title -->
              <p class="title is-5">Upload Document</p>
              <p class="subtitle is-6">* - Required</p> <hr>

              <!-- Upload Form -->
              <form action="uploadprocess.adm.php" method="POST" enctype="multipart/form-data">

                <!-- File Upload -->
                <label class="label">Document File:</label>
                <div class="file has-name">
                <label class="file-label">
                  <input id="file" class="file-input" type="file" name="upload_document">
                  <!-- Browse button -->
                  <span class="file-cta">
                    <span class="file-icon">
                    <i class="fas fa-upload"></i>
                    </span>
                    <span class="file-label">
                      Choose a file...
                    </span>
                  </span>

                <!-- Placeholder name -->
                <label for="file">
                <span id="filename" class="file-name">document.pdf</span>
                </label>
                </div>
                </label>

                <br>
                <!-- Title -->
                <div class="control">
                  <label class="label">Document Title:</label>
                  <div class="field">
                    <div class="control" style="padding-right:40%;">
                      <input class="input is-normal" type="text" name="document_title" placeholder="Document Title*" style="width=15em;" required>
                    </div>
                  </div>
                </div>
                <br>

                <!-- Category -->
                <div class="control">
                  <label class="label">Category:</label>
                  <div class="field">
                    <div class="control" style="padding-right:40%;">
                      <input class="input is-normal" type="text" name="document_category" placeholder="Category*" style="width=15em;" required>
                    </div>
                  </div>
                </div>
                <br>

                <!-- Date Added -->
                <!-- To be created -->

                <!-- Select -->
                <div class="control">
                  <div class="select is-rounded">
                    <select id="author_quantity" name="author_quantity" required>
                      <option value="">Select Number of Authors:</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                    </select>
                  </div>
                </div>

                <br>
                <!-- Author -->
                <div id="author_field" class="columns control is-multiline"><!--Javascript code will be injected here--></div>

                <!-- Citation Format -->
                <div class="control">
                  <div class="select is-rounded">
                    <select id="citation_mode" name="citation_mode" required>
                      <option value="">Select Citation Fill-up Mode:</option>
                      <option value="1">Automatic(APA)</option>
                      <option value="2">Automatic(MLA)</option>
                      <option value="3">Manual</option>
                    </select>
                  </div>
                </div>
                <br>

                <!-- Citation Field -->
                <div id="citation_select" class="control">
                  <!-- javascript code goes here-->
                </div>
                <br>


                <!-- Submit Button -->
                <div class="field is-grouped">
                  <div class="control">
                    <button class="button is-link" type="submit" name="btnsubmit">Submit</button>
                  </div>
                  <div class="control">
                    <a class="button is-text"href="upload.admin.php">Reset</a>
                  </div>
                </div>
              </div>
              </form>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
