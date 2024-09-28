
const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

let interval = null;

document.querySelector("h1").onmouseover = event => {  
  let iteration = 0;
  
  clearInterval(interval);
  
  interval = setInterval(() => {
    event.target.innerText = event.target.innerText
      .split("")
      .map((letter, index) => {
        if(index < iteration) {
          return event.target.dataset.value[index];
        }
      
        return letters[Math.floor(Math.random() * 26)]
      })
      .join("");
    
    if(iteration >= event.target.dataset.value.length){ 
      clearInterval(interval);
    }
    
    iteration += 1 / 5;
  }, 80);
}
$(document).ready(function() {
  // Get the value of the isLoggedIn cookie
  var isLoggedIn = getCookie("isLoggedIn");

  if (isLoggedIn) {
    // User is logged in
    $('#loginButton').hide();
    $('#logoutButton').show();
  } else {
    // User is not logged in
    $('#loginButton').show();
    $('#logoutButton').hide();
  }
});

// Function to get the value of a cookie
function getCookie(name) {
  var value = "; " + document.cookie;
  var parts = value.split("; " + name + "=");
  if (parts.length == 2) return parts.pop().split(";").shift();
}
