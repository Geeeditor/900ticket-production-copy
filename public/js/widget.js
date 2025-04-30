  /* function showSection(section) {
        const loginSection = document.querySelectorAll('loginSection');
        const signupSection = document.querySelectorAll('signupSection');
        const loginLink = document.querySelectorAll('loginLink');
        const signupLink = document.querySelectorAll('signupLink');

        if (section === 'login') {
            loginSection.classList.remove('hidden');
            signupSection.classList.add('hidden');
            loginLink.classList.add('font-[600]', 'text-red-900');
            loginLink.classList.remove('font-[400]', 'no-underline', 'hover:underline');
            signupLink.classList.remove('font-[600]', 'text-red-900');
            signupLink.classList.add('font-[400]', 'no-underline', 'hover:underline');
        } else if (section === 'signup') {
            signupSection.classList.remove('hidden');
            loginSection.classList.add('hidden');
            signupLink.classList.add('font-[600]', 'text-red-900');
            signupLink.classList.remove('font-[400]', 'no-underline', 'hover:underline');
            loginLink.classList.remove('font-[600]', 'text-red-900');
            loginLink.classList.add('font-[400]', 'no-underline', 'hover:underline');
        }
    }

    function togglePasswordVisibility(type) {
        const passwordInput = type === 'login' ? document.querySelectorAll('loginPassword') : document.querySelectorAll('signupPassword');
        const toggleCheckbox = type === 'login' ? document.querySelectorAll('toggleLoginPassword') : document.querySelectorAll('toggleSignupPassword');

        if (toggleCheckbox.checked) {
            passwordInput.type = 'text'; // Show the password
        } else {
            passwordInput.type = 'password'; // Hide the password
        }
    }

    // By default, show the login section
    showSection('login');
    */





   /*  function showSection(section) {
    const loginSections = document.querySelectorAll('.loginSection');
    const signupSections = document.querySelectorAll('.signupSection');
    const loginLinks = document.querySelectorAll('.loginLink');
    const signupLinks = document.querySelectorAll('.signupLink');
    const confirmPassword = document.querySelectorAll('.confirmPassword')

    // Helper function to toggle visibility and styles
    function toggleVisibilityAndStyles(isLogin) {
        const sectionsToShow = isLogin ? loginSections : signupSections;
        const sectionsToHide = isLogin ? signupSections : loginSections;
        const activeLinks = isLogin ? loginLinks : signupLinks;
        const inactiveLinks = isLogin ? signupLinks : loginLinks;

        sectionsToShow.forEach(section => section.classList.remove('hidden'));
        sectionsToHide.forEach(section => section.classList.add('hidden'));

        activeLinks.forEach(link => {
            link.classList.add('font-[600]', 'text-red-900');
            link.classList.remove('font-[400]', 'no-underline', 'hover:underline');
        });

        inactiveLinks.forEach(link => {
            link.classList.remove('font-[600]', 'text-red-900');
            link.classList.add('font-[400]', 'no-underline', 'hover:underline');
        });
    }

    if (section === 'login') {
        toggleVisibilityAndStyles(true);
    } else if (section === 'signup') {
        toggleVisibilityAndStyles(false);
    }
} */

function togglePasswordVisibility(type) {
    const passwordInputs = document.querySelectorAll(`.${type}Password`);
    const toggleCheckboxes = document.querySelectorAll(`.toggle${type.charAt(0).toUpperCase() + type.slice(1)}Password`);

    toggleCheckboxes.forEach(checkbox => {
        passwordInputs.forEach(input => {
            input.type = checkbox.checked ? 'text' : 'password'; // Show or hide the password
        });
    });
}

// By default, show the login section
showSection('login');
    // Function to handle input from otp
    document.querySelectorAll('.otp-input').forEach((input, index) => {
        input.addEventListener('input', function() {
            // Allow only numbers
            this.value = this.value.replace(/[^0-9]/g, '');
            // Move to the next input if a number is entered
            if (this.value.length === 1 && index < 3) {
                document.querySelectorAll('.otp-input')[index + 1].focus();
            }
        });

        // Optional: Move back to the previous input on backspace
        input.addEventListener('keydown', function(e) {
            if (e.key === 'Backspace' && this.value.length === 0 && index > 0) {
                document.querySelectorAll('.otp-input')[index - 1].focus();
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
    const element = document.querySelector('.margin-top');

    window.addEventListener('scroll', function() {
        if (window.scrollY > 0) {
            element.style.marginTop = '0'; // Remove margin when scrolled
            element.style.height= '100vh';
        } else {
            element.style.marginTop = '100px'; // Restore margin when at the top
        }
    });
});
