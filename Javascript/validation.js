// Validation functions
function validateUsername(username) {
    if (username.length > 5) {
        return "Username must be no more than five characters in length.";
    }
    
    if (!username.includes('_')) {
        return "Username must contain an underscore.";
    }
    
    return "success";
}

function validatePassword(password) {
    // At least eight characters long
    if (password.length < 8) {
        return "Password must be at least eight characters long.";
    }
    
    // Contain a capital letter
    if (!/[A-Z]/.test(password)) {
        return "Password must contain at least one capital letter.";
    }
    
    // Contain a number
    if (!/\d/.test(password)) {
        return "Password must contain at least one number.";
    }
    
    // Contain a special character
    if (!/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(password)) {
        return "Password must contain at least one special character.";
    }
    
    return "success";
}