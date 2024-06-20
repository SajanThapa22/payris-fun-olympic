

function validatePassword() {
    var password = document.getElementById("password").value;
    var uppercaseRegex = /^(?=.*[A-Z])/;
    var lowercaseRegex = /^(?=.*[a-z])/;
    var numberRegex = /^(?=.*\d)/;
    var specialCharRegex = /^(?=.*[!@#$%^&*()])/;
    var lengthRegex = /^(?=.{8,})/;

    var errors = [];

    if (!uppercaseRegex.test(password)) {
        errors.push(
            '<span class="error-message"><i class="fas fa-exclamation-circle error-icon"></i> Password must contain at least one uppercase letter.</span>'
        );
    }

    if (!lowercaseRegex.test(password)) {
        errors.push(
            '<span class="error-message"><i class="fas fa-exclamation-circle error-icon"></i> Password must contain at least one lowercase letter.</span>'
        );
    }

    if (!numberRegex.test(password)) {
        errors.push(
            '<span class="error-message"><i class="fas fa-exclamation-circle error-icon"></i> Password must contain at least one number.</span>'
        );
    }

    if (!specialCharRegex.test(password)) {
        errors.push(
            '<span class="error-message"><i class="fas fa-exclamation-circle error-icon"></i> Password must contain at least one special character (!@#$%^&*()).</span>'
        );
    }

    if (!lengthRegex.test(password)) {
        errors.push(
            '<span class="error-message"><i class="fas fa-exclamation-circle error-icon"></i> Password must be at least 8 characters long.</span>'
        );
    }

    var errorText = errors.join("<br>");
    document.getElementById("error-message").innerHTML = errorText;
}

// for password match
function checkpasswordmatch() {
    var passwordInput = document.getElementById("password");
    var confirmPasswordInput = document.getElementById("confirm_password");
    var passwordMatchMessage = document.getElementById("password-match");

    // Get the entered passwords
    var password = passwordInput.value;
    var confirmPassword = confirmPasswordInput.value;

    // Check if the passwords match
    if (password === confirmPassword) {
        passwordMatchMessage.textContent = "Passwords match!";
        passwordMatchMessage.style.color = "green";
    } else {
        passwordMatchMessage.textContent = "Passwords do not match!";
        passwordMatchMessage.style.color = "red";
    }
}

// toggle password

function togglePassword(inputId) {
    var passwordInput = document.getElementById(inputId);
    var toggleButton = document.querySelector('.toggle-password');

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleButton.innerHTML = "&#x1F440;"; // Eye open emoji
    } else {
        passwordInput.type = "password";
        toggleButton.innerHTML = "&#x1F441;"; // Eye closed emoji
    }
}



