//Check for the value of the select variable
document.getElementById('author_quantity').addEventListener("change", function() {
    var check = document.getElementById('author_quantity');
    //Adds another field if there's more than one
    switch (check.value) {
      case "1":
      document.getElementById('author_field').innerHTML = "<div class='field column is-full'>" +
                "<label class='label'>Author 1:</label>" +
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_firstname1' placeholder='First Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +  
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_lastname1' placeholder='Last Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>";
      break;
      case "2":
      document.getElementById('author_field').innerHTML = "<div class='field column is-full'>" +
                "<label class='label'>Author 1:</label>" +
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_firstname1' placeholder='First Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +  
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_lastname1' placeholder='Last Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +
                "<label class='label'>Author 2:</label>" +
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_firstname2' placeholder='First Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +  
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_lastname2' placeholder='Last Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>";
      break;
      case "3":
      document.getElementById('author_field').innerHTML = "<div class='field column is-full'>" +
                "<label class='label'>Author 1:</label>" +
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_firstname1' placeholder='First Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +  
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_lastname1' placeholder='Last Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +
                "<label class='label'>Author 2:</label>" +
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_firstname2' placeholder='First Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +  
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_lastname2' placeholder='Last Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +
                "<label class='label'>Author 3:</label>" +
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_firstname3' placeholder='First Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +  
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_lastname3' placeholder='Last Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>";
      break;
      case "4":
      document.getElementById('author_field').innerHTML = "<div class='field column is-full'>" +
                "<label class='label'>Author 1:</label>" +
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_firstname1' placeholder='First Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +  
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_lastname1' placeholder='Last Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +
                "<label class='label'>Author 2:</label>" +
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_firstname2' placeholder='First Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +  
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_lastname2' placeholder='Last Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +
                "<label class='label'>Author 3:</label>" +
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_firstname3' placeholder='First Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +  
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_lastname3' placeholder='Last Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +
                "<label class='label'>Author 4:</label>" +
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_firstname4' placeholder='First Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +  
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_lastname4' placeholder='Last Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>";
      break;
      case "5":
      document.getElementById('author_field').innerHTML = "<div class='field column is-full'>" +
                "<label class='label'>Author 1:</label>" +
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_firstname1' placeholder='First Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +  
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_lastname1' placeholder='Last Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +
                "<label class='label'>Author 2:</label>" +
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_firstname2' placeholder='First Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +  
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_lastname2' placeholder='Last Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +
                "<label class='label'>Author 3:</label>" +
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_firstname3' placeholder='First Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +  
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_lastname3' placeholder='Last Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +
                "<label class='label'>Author 4:</label>" +
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_firstname4' placeholder='First Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +  
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_lastname4' placeholder='Last Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +
                "<label class='label'>Author 5:</label>" +
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_firstname5' placeholder='First Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +  
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_lastname5' placeholder='Last Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>";
      break;
      case "6":
      document.getElementById('author_field').innerHTML = "<div class='field column is-full'>" +
                "<label class='label'>Author 1:</label>" +
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_firstname1' placeholder='First Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +  
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_lastname1' placeholder='Last Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +
                "<label class='label'>Author 2:</label>" +
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_firstname2' placeholder='First Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +  
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_lastname2' placeholder='Last Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +
                "<label class='label'>Author 3:</label>" +
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_firstname3' placeholder='First Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +  
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_lastname3' placeholder='Last Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +
                "<label class='label'>Author 4:</label>" +
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_firstname4' placeholder='First Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +  
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_lastname4' placeholder='Last Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +
                "<label class='label'>Author 5:</label>" +
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_firstname5' placeholder='First Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +  
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_lastname5' placeholder='Last Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +
                "<label class='label'>Author 6:</label>" +
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_firstname6' placeholder='First Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>" +
              "<div class='field column is-full'>" +  
                "<div class='control' style='padding-right:40%;'>" +
                  "<input class='input' type='text' name='author_lastname6' placeholder='Last Name*' style='width=15em;' required> <br>" +
                "</div>" +
              "</div>"
      break;
      default:
      document.getElementById('author_field').innerHTML = "";
      break;
    }
  });

