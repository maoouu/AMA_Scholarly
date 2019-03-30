//Check for the value of the select variable
document.getElementById('citation_mode').addEventListener("change", function() {
    var check = document.getElementById('citation_mode');
    // Adds another field if there's more than one
    switch (check.value) {
      case "1":
      document.getElementById('citation_select').innerHTML = "";
      document.getElementById('citation_select').innerHTML = "<div id='citation_field' class='control field' style='padding-right:40%; font-style:italic;'><input class='input is-normal' name='citation_input' placeholder='Citation Will Automatically Be Filled By The Server' style='width=15em;' disabled></div>";
      break;
      case "2":
      document.getElementById('citation_select').innerHTML = "";
      document.getElementById('citation_select').innerHTML = "<div id='citation_field' class='control field' style='padding-right:40%; font-style:italic;'><input class='input is-normal' name='citation_input' placeholder='Citation Will Automatically Be Filled By The Server' style='width=15em;' disabled></div>";
      break;
      case "3":
      document.getElementById('citation_select').innerHTML = "";
      document.getElementById('citation_select').innerHTML = "<div id='citation_field' class='control field' style='padding-right:40%; font-style:italic;'><input class='input is-normal' name='citation_input' placeholder='Citation Format Here' style='width=15em;' required></div>";
      break;
      default:
      document.getElementById('citation_select').innerHTML = "";
      break;
    }
  });


