// MOBILE MENU
const menuToggle = document.getElementById('menu-toggle');
const nav = document.querySelector('nav');

menuToggle.addEventListener('click', () => {
    nav.classList.toggle('active');
});


// BUTTON FUNCTION
function showMessage() {
    alert('Welcome to BCC Official Website!');
}


// CONTACT FORM
const contactForm = document.getElementById('contactForm');
contactForm.addEventListener('submit', function(e) {
    e.preventDefault();

    alert('Message Sent Successfully!');

    contactForm.reset();
});