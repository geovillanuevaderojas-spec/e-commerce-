document.addEventListener('DOMContentLoaded', () => {

    const loginTabBtn = document.getElementById('login_button');
    const signinTabBtn = document.getElementById('signin_button');
    const loginDiv = document.getElementById('login');
    const signinDiv = document.getElementById('sign-in');
    const loginLabel = document.getElementById('loginLabel');
    const signinLabel = document.getElementById('signinLabel');
    const signinform = document.getElementById('signinform');

    
    const ACTIVE_BG = '#004030';
    const ACTIVE_COLOR = '#ffffff';

    function setActive(btnActive, btnInactive) {
        btnActive.style.backgroundColor = ACTIVE_BG;
        btnActive.style.color = ACTIVE_COLOR;
        btnInactive.style.backgroundColor = "";
        btnInactive.style.color = "";
    }

    function showLogin() {
        loginDiv.style.display = "block";
        signinDiv.style.display = "none";

         if (signinLabel?.style) {
            signinLabel.style.display = "none";
        }

        setActive(loginTabBtn, signinTabBtn);
    }

    function showSignin() {
        loginDiv.style.display = "none";
        signinDiv.style.display = "block";

        if (loginLabel?.style) {
            loginLabel.style.display = "none";
        }

        setActive(signinTabBtn, loginTabBtn);
    }

    loginTabBtn.addEventListener('click', showLogin);
    signinTabBtn.addEventListener('click', showSignin);
    signinform.addEventListener("submit", function (e) {
        const confirmed = confirm("Are you sure you want to create this account?");
        if (!confirmed) {
            e.preventDefault();
        }
    });

    if (window.showSigninAfterRegister) {
        showSignin();
    } else {
        showLogin();
    }

});
