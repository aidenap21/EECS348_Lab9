function validate() {
    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;


    if (pass1.length < 8) {
        alert("The first password needs to be at least 9 characters long!")
    } else if (pass2.length < 8) {
        alert("The second password needs to be at least 8 characters long!")
    } else if (pass1 != pass2) {
        alert("Passwords don't match!")
    } else {
        alert("Passwords validated!")
    }
}