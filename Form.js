

const validUsername = "Elaya";
const validPassword = "Bharathi";

function validateLogin() {
    
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    const error = document.getElementById("error");


    error.textContent = "j";

  
    if (username === validUsername && password === validPassword) {
        alert("Login successful!");
        window.location.href = "dashboard.html"; 
    } else {
        error.textContent = "Invalid username or password!";
    }
}