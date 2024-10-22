function showPassword(inputId) {
    var inputField = document.getElementById(inputId);
    if (inputField.type === "password") {
        inputField.type = "text";
    } else {
        inputField.type = "password";
    }
}