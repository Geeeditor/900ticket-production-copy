document.addEventListener('DOMContentLoaded', () => {
    const userPassword = document.querySelector('.passMain'); // Password input
    const confirmUserPassword = document.querySelector('.confirmPassword'); // Confirm password input
    const submitBtn = document.querySelector('.submit'); // Submit button

    // Function to check if passwords match
    function checkPasswords() {
        const password = userPassword.value;
        const confirmPassword = confirmUserPassword.value;

        // Enable the signup button if passwords match and are not empty
        submitBtn.disabled = !(password === confirmPassword && password.length > 0);
    }

    // Attach event listeners to password fields
    userPassword.addEventListener('input', checkPasswords);
    confirmUserPassword.addEventListener('input', checkPasswords);

    // Initial state: disable the submit button
    submitBtn.disabled = true;
});


document.addEventListener('DOMContentLoaded', () => {
    const userPasswordI = document.querySelector('.passMainI'); // Password input
    const confirmUserPasswordI = document.querySelector('.confirmPasswordI'); // Confirm password input
    const submitBtnI = document.querySelector('.submitI'); // Submit button

    // Function to check if passwords match
    function checkPasswordsI() {
        const passwordI = userPasswordI.value;
        const confirmPasswordI = confirmUserPasswordI.value;

        // Enable the signup button if passwords match and are not empty
        submitBtnI.disabled = !(passwordI === confirmPasswordI && passwordI.length > 0);
    }

    // Attach event listeners to password fields
    userPasswordI.addEventListener('input', checkPasswordsI);
    confirmUserPasswordI.addEventListener('input', checkPasswordsI);

    // Initial state: disable the submit button
    submitBtnI.disabled = true;
});
