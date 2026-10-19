document.addEventListener('DOMContentLoaded', function() {
    const accordionBtns = document.querySelectorAll('.accordion-button');
    
    accordionBtns.forEach(btn => {
      btn.addEventListener('click', function() {
        const targetId = this.dataset.accordion;
        const targetAccordion = document.getElementById(targetId);
        const arrowIcon = this.querySelector('.arrow img');

        btn.classList.toggle('open');
        targetAccordion.classList.toggle('hide');

        if (targetAccordion.classList.contains('hide')) {
          targetAccordion.style.maxHeight = "0";
        } else {
          targetAccordion.style.maxHeight = targetAccordion.scrollHeight + "px";
        }

        // Toggle rotation of the arrow
        arrowIcon.classList.toggle('rotate-180');
      });
    });

    // Mobile menu toggle functionality
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuToggle && mobileMenu) {
        const menuSpans = mobileMenuToggle.querySelectorAll('span');

        const closeMobileMenu = function() {
            mobileMenu.classList.add('translate-x-full');
            menuSpans[0].classList.remove('rotate-45', 'translate-y-2');
            menuSpans[1].classList.remove('opacity-0');
            menuSpans[2].classList.remove('-rotate-45', '-translate-y-2');
            document.body.classList.remove('overflow-hidden');
        };

        mobileMenuToggle.addEventListener('click', function() {
            // Toggle menu visibility
            const isOpen = !mobileMenu.classList.contains('translate-x-full');
            if (isOpen) {
                closeMobileMenu();
            } else {
                mobileMenu.classList.remove('translate-x-full');
                menuSpans[0].classList.add('rotate-45', 'translate-y-2');
                menuSpans[1].classList.add('opacity-0');
                menuSpans[2].classList.add('-rotate-45', '-translate-y-2');
                document.body.classList.add('overflow-hidden');
            }
        });

        // Close menu when clicking on menu items
        const mobileMenuLinks = mobileMenu.querySelectorAll('a');
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', function() {
                closeMobileMenu();
            });
        });

        // Close menu when clicking outside
        mobileMenu.addEventListener('click', function(e) {
            if (e.target === mobileMenu) {
                closeMobileMenu();
            }
        });
    }
});
