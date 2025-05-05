document.getElementById('openNavBtn').addEventListener('click', function() {
    document.getElementById('verticalNav').classList.remove('-translate-x-full');
    document.getElementById('verticalNav').classList.add('translate-x-0');
});

document.getElementById('closeNavBtn').addEventListener('click', function() {
    document.getElementById('verticalNav').classList.remove('translate-x-0');
    document.getElementById('verticalNav').classList.add('-translate-x-full');
});

// Profile Sidebar Toggle (if logged in)
const profileBtn = document.getElementById('profileBtn');
const profileSidebar = document.getElementById('profileSidebar');
const closeProfileBtn = document.getElementById('closeProfileSidebar');

if (profileBtn) {
    profileBtn.addEventListener('click', function() {
        profileSidebar.classList.remove('translate-x-full');
        profileSidebar.classList.add('translate-x-0');
    });
}

if (closeProfileBtn) {
    closeProfileBtn.addEventListener('click', function() {
        profileSidebar.classList.remove('translate-x-0');
        profileSidebar.classList.add('translate-x-full');
    });
}

// Back to Top Button
const backToTopBtn = document.getElementById('backToTopBtn');

window.addEventListener('scroll', function() {
    if (window.pageYOffset > 300) {
        backToTopBtn.classList.remove('opacity-0');
        backToTopBtn.classList.add('opacity-100');
    } else {
        backToTopBtn.classList.remove('opacity-100');
        backToTopBtn.classList.add('opacity-0');
    }
});

backToTopBtn.addEventListener('click', function() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// Animation on scroll
function animateOnScroll() {
    const elements = document.querySelectorAll('.fade-in');

    elements.forEach(element => {
        const elementPosition = element.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        if (elementPosition < windowHeight - 100) {
            element.style.opacity = '1';
            element.style.transform = 'translateY(0)';
        }
    });
}

window.addEventListener('scroll', animateOnScroll);
window.addEventListener('load', animateOnScroll);