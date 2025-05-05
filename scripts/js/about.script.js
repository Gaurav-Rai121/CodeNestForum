    // Accordion functionality
    document.querySelectorAll('.accordion-toggle').forEach((toggle) => {
        toggle.addEventListener('click', () => {
          const parent = toggle.parentElement;
          // Close other accordions
          document.querySelectorAll('.accordion').forEach((item) => {
            if (item !== parent) {
              item.classList.remove('accordion-active');
            }
          });
          parent.classList.toggle('accordion-active');
        });
      });
  
      // Smooth scroll for anchor links
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
          e.preventDefault();
          const target = document.querySelector(this.getAttribute('href'));
          if (target) {
            window.scrollTo({
              top: target.offsetTop,
              behavior: 'smooth'
            });
          }
        });
      });