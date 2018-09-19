<?php




echo"
  <script type=\"text/javascript\">
  // Below function Executes on click of login button.
  function validate(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if ( username == "uncmoonlight" && password == "uncmoonlight"){
      alert ("Login successfully");
      window.location = "success.html"; // Redirecting to other page.
      return true;
    }else{
      alert("Incorrect login information!")
      return false;
    }
  }

  </script>

";



?>
