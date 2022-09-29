alert("you are not valid user, enter the valid account");


function openSignupForm(){
    document.getElementById("signup-popup-form").style.display = "block";
    document.getElementById("login-form").style.display = "none";
}

function closeSignupForm(){
    document.getElementById("signup-popup-form").style.display="none";
}
