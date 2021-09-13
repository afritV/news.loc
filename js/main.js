function validate() {
    let userName = document.forms["myForm"]["login"].value;
    if (userName.length <6) {
        alert("Login less than 6 chars");
        return false;
    }
    let userEmail = document.forms["myForm"]["email"].value;
    if (!userEmail) {
        alert("Enter email");
        return false;
    }
    let userPassword = document.forms["myForm"]["password"].value;
    if (!isValidPassword(userPassword)){
        alert("Password less than 6 chars \nPassword should contain at least 1 digit \nPassword should contain at least 1 upper symbol \nPassword should contain at least 1 lower symbol ");
        return false;
    }

    return true;


}

function isValidPassword(text) {
    return /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^\w\s]).{6,}/i.test(text);
}
