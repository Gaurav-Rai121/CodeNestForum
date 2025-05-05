    // Filter functionality
    const categoryButtons = document.querySelectorAll('.category-pill');
    categoryButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            categoryButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            button.classList.add('active');
            // Filter logic would go here
        });
    });