const navbar = document.querySelector("#choose").querySelectorAll("#categorybtn");
const activepage = window.location.pathname;
navbar.forEach(link => {
    if (link.href.includes(`${activepage}`)) { 
        link.classList.add('active');
    }
});
