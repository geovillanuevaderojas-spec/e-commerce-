document.addEventListener('DOMContentLoaded', () => {

    const loginTabBtn = document.getElementById('login_button');
    const signinTabBtn = document.getElementById('signin_button');
    const loginDiv = document.getElementById('login');
    const signinDiv = document.getElementById('sign-in');

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
        setActive(loginTabBtn, signinTabBtn);
    }

    function showSignin() {
        loginDiv.style.display = "none";
        signinDiv.style.display = "block";
        setActive(signinTabBtn, loginTabBtn);
    }

    loginTabBtn.addEventListener('click', showLogin);
    signinTabBtn.addEventListener('click', showSignin);
    
    showLogin();
});