<script>
       const askQuestionButton = document.getElementById('askQuestionButton');
    const askQuestionModal = document.getElementById('askQuestionModal');
    const loginModal = document.getElementById('loginModal');
    const closeAskQuestionModal = document.getElementById('closeAskQuestionModal');
    const closeLoginModal = document.getElementById('closeLoginModal');
    const openSignupModal = document.getElementById('openSignupModal');
    const signupModal = document.getElementById('signupModal'); // Add the signup modal reference if needed.

    // Open 'Ask a Question' modal
    askQuestionButton.addEventListener('click', () => {
        const isLoggedIn = <?php echo json_encode($loggedin); ?>;
        if (isLoggedIn) {
            askQuestionModal.classList.add('active');
        } else {
            loginModal.classList.add('active');
        }
    });

    // Close the 'Ask a Question' modal
    closeAskQuestionModal.addEventListener('click', () => {
        askQuestionModal.classList.remove('active');
    });

    // Close the 'Login' modal
    closeLoginModal.addEventListener('click', () => {
        loginModal.classList.remove('active');
    });

    // Open 'Login' modal from 'signupModal'
    openSignupModal.addEventListener('click', () => {
        signupModal.classList.remove('active');
        loginModal.classList.add('active');
    });


    document.addEventListener('DOMContentLoaded', function() {
        const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
        const dropdownMenus = document.querySelectorAll('.dropdown-content');

        // Toggle visibility for the corresponding dropdown
        dropdownToggles.forEach((toggle, index) => {
            toggle.addEventListener('click', function(event) {
                event.stopPropagation(); // Prevent event bubbling
                dropdownMenus.forEach((menu, i) => {
                    if (i === index) {
                        menu.classList.toggle(
                            'hidden'); // Toggle the clicked dropdown
                    } else {
                        menu.classList.add('hidden'); // Hide other dropdowns
                    }
                });
            });
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', function() {
            dropdownMenus.forEach((menu) => menu.classList.add('hidden'));
        });
    });




    // Toggle dropdown visibility
    const button = document.querySelectorAll('.reportMenuButton');
    const dropdown = document.querySelectorAll('.reportDropdown');

    button.forEach((singlebutton, index) => {
        singlebutton.addEventListener('click', () => {
            dropdown.forEach((singledrop, i) => {
                if (i === index) {
                    singledrop.classList.toggle('hidden'); // Toggle the clicked dropdown
                } else {
                    singledrop.classList.add('hidden'); // Hide other dropdowns
                }
            })
        });

    })


    // Close dropdown when clicking outside
    document.addEventListener('click', (event) => {
        if (!button.contains(event.target) && !dropdown.contains(event.target)) {
            dropdown.forEach((singlemenu) => {
                singlemenu.classList.add('hidden')
            });
        }
    });
</script>