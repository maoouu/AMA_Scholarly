<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup | AMA Scholarly</title>
    <link rel="stylesheet" href="css/bulma.css"> <!-- use min.css at the final -->
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="icon" href="img/amau_logo.png">
    <script defer src="fontawesomejs/all.js"></script>
  </head>
  <body>

    

    <div class="level level-left">
      <section class="section">
        <form action="includes/signupProcess.inc.php" method="post" enctype="multipart/form-data">

          <!-- Fullname -->
          <div class="control">
            <label class="label">*Please enter your fullname</label>
            <div class="field">
              <div class="control">
                <input class="input" type="text" name="fullname" placeholder="Fullname*" required>
              </div>
            </div>
          </div>

          <br>

          <!-- Register USN -->
          <div class="control">
            <label class="label">*Please enter your existing USN</label>
            <div class="field">
              <div class="control">
                <input class="input" type="text" name="USN" placeholder="Enter USN Here*" maxlength="11" required>
              </div>
            </div>
          </div>

          <br>

          <!-- Register Email -->
          <div class="control">
            <label class="label">*Enter Email Here</label>
            <div class="field">
              <div class="control">
                <input class="input" type="email" name="email" placeholder="Email*" required>
              </div>
            </div>
          </div>

          <br>

          <!-- Register Password -->
          <div class="control">
            <label class="label">*Enter Your Password</label>
            <div class="field">
              <div class="control">
                <input class="input" type="password" name="password" placeholder="Password*" required>
              </div>
            </div>
          </div>

          <br>

          <!-- Confirm Password -->
          <div class="control">
            <label class="label">*Confirm Password</label>
            <div class="field">
              <div class="control">
                <input class="input" type="password" name="confirmPassword" placeholder="Confirm Password*">
              </div>
            </div>
          </div>

          <br>

          <!-- Profile Picture feature (alpha) -->
          <label class="label">Display Picture (Optional)</label>
          <div class="file has-name">
            <label class="file-label">
              <input id="file" class="file-input" type="file" name="upload_profilepicture">
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
                <span id="filename" class="file-name">dankmemes.jpg</span>
              </label>

            </label>
          </div>

          <br>

          <!-- School District (to be added) -->

          <!-- Buttons -->
          <div class="field is-grouped">
            <div class="control">
              <button class="button is-link" type="submit" name="btnsubmit">Register</button>
            </div>
            <div class="control">
              <a class="button is-text"href="index.php">Already have an account? Login Here</a>
            </div>
          </div>

        </form>
      </section>
    </div>

    <!-- Javascript magic for the upload form -->
    <script type="text/javascript">
      var file = document.getElementById("file");
      file.onchange = function() {
        if(file.files.length > 0) {
            document.getElementById('filename').innerHTML = file.files[0].name;
        }
      }
    </script>
  </body>
</html>
