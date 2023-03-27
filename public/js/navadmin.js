const navbar = document.querySelector("#menu-links").querySelectorAll("#menubtn");
const activepage = window.location.pathname;
navbar.forEach(link => {
    if (link.href.includes(`${activepage}`)) { 
        link.classList.add('active');
    }
});
