// ===============================
// NAVBAR ACTIVE
// ===============================

const navLinks = document.querySelectorAll('.nav-link');

navLinks.forEach((link) => {

    link.addEventListener('click', (e) => {

        const href = link.getAttribute('href');

        // hanya smooth scroll untuk anchor
        if (href && href.startsWith('#')) {

            e.preventDefault();

            const target = document.querySelector(href);

            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start',
                });
            }

        }

        document
            .querySelector('.nav-menu')
            ?.classList.remove('active');

    });

});

// ===============================
// REVEAL ANIMATION
// ===============================

const revealElements = document.querySelectorAll(
    '.reveal-section, .reveal-item'
);

const revealObserver = new IntersectionObserver(
    (entries) => {

        entries.forEach((entry) => {

            if (entry.isIntersecting) {

                entry.target.classList.add('active');

                revealObserver.unobserve(entry.target);

            }

        });

    },
    {
        threshold: 0.15,
    }
);

revealElements.forEach((element) => {
    revealObserver.observe(element);
});

// ===============================
// SKILL BAR ANIMATION
// ===============================

const progressBars = document.querySelectorAll('.skill-progress');

const progressObserver = new IntersectionObserver(
    (entries) => {

        entries.forEach((entry) => {

            if (entry.isIntersecting) {

                const progress = entry.target;
                const width = progress.dataset.width || 0;

                progress.style.width = width + '%';

                progressObserver.unobserve(progress);

            }

        });

    },
    {
        threshold: 0.3,
    }
);

progressBars.forEach((bar) => {
    progressObserver.observe(bar);
});

// ===============================
// NAVBAR SCROLL EFFECT
// ===============================

const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', () => {

    if (window.scrollY > 30) {

        navbar?.classList.add('navbar-scrolled');

    } else {

        navbar?.classList.remove('navbar-scrolled');

    }

});

// ===============================
// CONTACT FORM LOADING
// ===============================

const contactForm = document.querySelector('.contact-form');

if (contactForm) {

    contactForm.addEventListener('submit', () => {

        const submitButton = contactForm.querySelector('button');

        if (submitButton) {

            submitButton.disabled = true;

            submitButton.innerHTML = 'Mengirim...';

        }

    });

}

// ===============================
// IMAGE PARALLAX
// ===============================

const profileImage = document.querySelector('.profile-image');

window.addEventListener('mousemove', (e) => {

    if (!profileImage) return;

    const x = (window.innerWidth / 2 - e.clientX) / 45;
    const y = (window.innerHeight / 2 - e.clientY) / 45;

    profileImage.style.transform =
        `translate(${x}px, ${y}px) scale(1.02)`;

});

// ===============================
// PAGE LOADED
// ===============================

window.addEventListener('load', () => {

    document.body.classList.add('loaded');

});