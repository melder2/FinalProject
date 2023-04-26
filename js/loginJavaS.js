/*
REFERENCE - I used: w3schools. “How to Create a Login Form.” W3schools.com, 2019, 
            www.w3schools.com/howto/howto_css_login_form.asp. for the functionality
            of the login for the website that hosts the database.

*/

function Login() {

    const LOGINFORM = document.getElementById("LOGINFORM");
    const submitButton = document.getElementById("submitbutton");
    const username = LOGINFORM.username.value;
    const password = LOGINFORM.password.value;

    if (username === "admin" && password === "password"){
        alert("You have successfully logged in.")
        
        window.open("simorsched.html");//
    }
    else {
        alert("You have incorrectly typed in your username and/or password. Please try again!")
    }
    
}
