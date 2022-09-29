function validateForm(){

var name = document.getElementById("name").value;
var uname = document.getElementById("uname").value;
var e = document.getElementById("email").value.indexOf("@");
var number =  document.getElementById("mobileNumber").value;
var pass = document.getElementById("password").value;

// name
if(name==null || name=="") {
    alert("Name cannot be blank");
    return false;
}
else if(name.length>50){
    alert("The name may not have more than 50 characters");
    return false;
}

// // uname

// if(uname==null || uname==""){
//     alert("User name cannot be black");
//     return false;
// }
// else if(uname.length>10){
//     alert("The username may not have more than 10 charecters");
//     return false;
// }
}


function openForm(){
    document.getElementById("login-popup-form").style.display = "block";
}

function closeLoginForm(){
    document.getElementById("login-popup-form").style.display = "none";
}

function openSignupForm(){
    document.getElementById("signup-popup-form").style.display = "block";
    document.getElementById("login-popup-form").style.display = "none";
}

function closeSignupForm(){
    document.getElementById("signup-popup-form").style.display="none";
}



