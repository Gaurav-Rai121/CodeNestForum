
const body = document.getElementById('body');
const openNavBtn = document.getElementById('openNavBtn');
const closeNavBtn = document.getElementById('closeNavBtn');
const verticalNav = document.getElementById('verticalNav');
const mainContentWrapper = document.getElementById('mainContentWrapper');
// const darkModeToggle = document.getElementById('darkModeToggle');
const text=document.body.querySelector("p");


// Open the Vertical Navbar
openNavBtn.addEventListener('click', () => {
    verticalNav.classList.remove('-translate-x-full');
    mainContentWrapper.classList.add('ml-64'); // Shift content when navbar opens
});

// Close the Vertical Navbar
closeNavBtn.addEventListener('click', () => {
    verticalNav.classList.add('-translate-x-full');
    mainContentWrapper.classList.remove('ml-64'); // Reset content shift
});

// // Dark Mode Toggle
// darkModeToggle.addEventListener('click', () => {
//     if (body.classList.contains('dark-mode')) {
//         body.classList.remove('dark-mode');
//         body.classList.add('light-mode');
//         darkModeToggle.innerText = '🌙'; // Change to yellow moon icon
//         document.body.querySelector('p').style.color="black";
//     } else {
//         body.classList.remove('light-mode');
//         body.classList.add('dark-mode');
//         darkModeToggle.innerText = '🌕'; // Change to white moon icon
//        document.body.querySelector('p').style.color="white";
       

//     }

//     // Save user preference
//     if (body.classList.contains('dark-mode')) {
//         localStorage.setItem('theme', 'dark');
//     } else {
//         localStorage.setItem('theme', 'light');
//     }
// });

// // Load saved theme from localStorage
// window.onload = () => {
//     const theme = localStorage.getItem('theme');
//     if (theme === 'dark') {
//         body.classList.add('dark-mode');
//         body.classList.remove('light-mode');
//         darkModeToggle.innerText = '🌕'; // Change to white moon icon
//         document.body.querySelector('p').style.backgroundColor="yellow";
//     } else {
//         body.classList.add('light-mode');
//         body.classList.remove('dark-mode');
//         darkModeToggle.innerText = '🌙'; // Change to yellow moon icon
//     }
// };

// Profile dropdown toggle
const profileDropdown = document.getElementById('profileDropdown');
const profileButton = document.querySelector('.relative button');

profileButton.addEventListener('click', () => {
    profileDropdown.classList.toggle('hidden');
});

// Close the dropdown when clicking outside
window.addEventListener('click', (e) => {
    if (!profileButton.contains(e.target)) {
        profileDropdown.classList.add('hidden');
    }
});


