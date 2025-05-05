       // JavaScript for sticky TOC and active link highlighting
       document.addEventListener('DOMContentLoaded', function() {
        const sections = document.querySelectorAll('.doc-section');
        const tocLinks = document.querySelectorAll('.toc-link');
        
        const observerOptions = {
            rootMargin: '-100px 0px -80% 0px',
            threshold: 0
        };
        
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Remove active class from all links
                    tocLinks.forEach(link => link.classList.remove('active'));
                    
                    // Add active class to current section link
                    const activeLink = document.querySelector(`.toc-link[href="#${entry.target.id}"]`);
                    if (activeLink) {
                        activeLink.classList.add('active');
                    }
                }
            });
        }, observerOptions);
        
        sections.forEach(section => {
            observer.observe(section);
        });
        
        // Toggle FAQ answers
        const faqButtons = document.querySelectorAll('#faqs button');
        faqButtons.forEach(button => {
            button.addEventListener('click', () => {
                const answer = button.nextElementSibling;
                const icon = button.querySelector('i');
                
                // Toggle answer visibility
                if (answer.style.maxHeight) {
                    answer.style.maxHeight = null;
                    icon.classList.replace('fa-chevron-up', 'fa-chevron-down');
                } else {
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                    icon.classList.replace('fa-chevron-down', 'fa-chevron-up');
                }
            });
        });
    });