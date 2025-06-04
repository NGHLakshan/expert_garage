const wrapper = document.querySelector('.wrapper');
const registerLink = document.querySelector('.register-link');
const loginLink = document.querySelector('.login-link');
const btn = document.querySelector('.btn');
const iconClose = document.querySelector('.icon-close');


registerLink.onclick = () => {
    wrapper.classList.add('active');
};

loginLink.onclick = () => {
    wrapper.classList.remove("active");
};

btn.onclick = () => {
    wrapper.classList.add('active-btn');
};

iconClose.onclick = () => {
    wrapper.classList.remove('active-btn');
    wrapper.classList.remove('active');
};