const authModal = document.querySelector('.auth-modal');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const loginBtnModal = document.querySelector('.login-btn-modal');
const closeBtnModal = document.querySelector('.close-btn-modal');
const profileBox = document.querySelector('.profile-box')
const avatarCircle = document.querySelector('.avatar-circle')
const alertBox = document.querySelector('.alert-box')
const menuToggle = document.querySelector('.menu-toggle')
const primaryNavigation = document.querySelector('#primary-navigation')

if (menuToggle && primaryNavigation) {
    const closeNavigation = () => {
        primaryNavigation.classList.remove('is-open');
        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.setAttribute('aria-label', 'Ouvrir le menu');
    };

    menuToggle.addEventListener('click', () => {
        const isOpen = menuToggle.getAttribute('aria-expanded') === 'true';
        primaryNavigation.classList.toggle('is-open', !isOpen);
        menuToggle.setAttribute('aria-expanded', String(!isOpen));
        menuToggle.setAttribute('aria-label', isOpen ? 'Ouvrir le menu' : 'Fermer le menu');
    });

    primaryNavigation.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', closeNavigation);
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') closeNavigation();
    });
}

if (loginBtnModal && authModal) {
    loginBtnModal.addEventListener('click', () => {
        authModal.classList.add('show')
    });
}

if (closeBtnModal && authModal) { 
    closeBtnModal.addEventListener('click', () => {
        authModal.classList.remove('show', 'slide')
    });
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            authModal.classList.remove('show', 'slide')
        }
    });
}

if (avatarCircle && profileBox) {
    avatarCircle.addEventListener('click', () => {
        profileBox.classList.toggle('show')
    });
}


if (registerLink && authModal) {
    registerLink.addEventListener('click', () => {
        authModal.classList.add('slide')
    });
} 
    
if (loginLink && authModal) loginLink.addEventListener('click', () => authModal.classList.remove('slide'));


if (alertBox){
    setTimeout(() => { 
        alertBox.classList.add('show'); 
    }, 50); 

    setTimeout(() => {
        alertBox.classList.remove('show');
        setTimeout(() => alertBox.remove(), 1000);
    }, 6000);
}



