const passwordInput = document.getElementById("password");
const confirmInput = document.getElementById("confirm_password");
const passwordMatchIcon = document.getElementById("password_match_icon");
const passwordError = document.getElementById("password_error");

confirmInput.addEventListener("input", () => {
    if (confirmInput.value !== passwordInput.value) {
        passwordMatchIcon.style.display = "none";
        passwordError.style.display = "block";
    } else {
        passwordMatchIcon.style.display = "block";
        passwordError.style.display = "none";
    }
});
