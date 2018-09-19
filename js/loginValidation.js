// Below function Executes on click of login button.
function validate(){
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  if ( username == "uncmoonlight" && password == "uncmoonlight"){
    alert ("Login successfully");
    reDirect(); // Redirecting to other page.
    return false;
  }else{
    alert("Incorrect login information!")
    return false;
  }
}

function reDirect(){
  window.location = "success.html"

}
