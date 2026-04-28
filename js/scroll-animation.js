// MARK: Menu

document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll(".menu-section");

    if (!sections.length) return;

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                const el = entry.target;

                if (entry.isIntersecting) {
                    el.classList.add("active");
                } else {
                    el.classList.remove("active"); // reverse animation
                }
            });
        },
        {
            threshold: 0.3
        }
    );

    sections.forEach(section => observer.observe(section));
});

// MARK: Contact Info

document.addEventListener("DOMContentLoaded", () => {
    const isDesktop = window.matchMedia("(min-width: 1024px)").matches;
    if (!isDesktop) return;

    const sections = document.querySelectorAll(".menu-section, .contact");

    if (!sections.length) return;

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                const el = entry.target;

                if (entry.isIntersecting) {
                    el.classList.add("active");
                } else {
                    el.classList.remove("active");
                }
            });
        },
        {
            threshold: 0.25
        }
    );

    sections.forEach(section => observer.observe(section));
});

// MARK: Earth

document.addEventListener("DOMContentLoaded", () => {
    const isDesktop = window.matchMedia("(min-width: 1024px)").matches;
    if (!isDesktop) return;

    const sections = document.querySelectorAll(".menu-section, .contact, .earth");

    if (!sections.length) return;

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                const el = entry.target;

                if (entry.isIntersecting) {
                    el.classList.add("active");
                } else {
                    el.classList.remove("active");
                }
            });
        },
        {
            threshold: 0.25
        }
    );

    sections.forEach(section => observer.observe(section));
});

// MARK: Japan Exclusive

document.addEventListener("DOMContentLoaded", () => {
    const isDesktop = window.matchMedia("(min-width: 1024px)").matches;
    if (!isDesktop) return;

    const sections = document.querySelectorAll(
        ".menu-section, .contact, .earth, .jp-exclusive"
    );

    if (!sections.length) return;

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                const el = entry.target;

                if (entry.isIntersecting) {
                    el.classList.add("active");
                } else {
                    el.classList.remove("active");
                }
            });
        },
        {
            threshold: 0.25
        }
    );

    sections.forEach(section => observer.observe(section));
});

// MARK: Glass Button

document.addEventListener("DOMContentLoaded", () => {
    const glass = document.querySelector(".glass-container");
    if (!glass) return;

    window.addEventListener("scroll", () => {
        const scrollTop = window.scrollY;
        const windowHeight = window.innerHeight;
        const docHeight = document.documentElement.scrollHeight;

        const isBottom = scrollTop + windowHeight >= docHeight - 50;

        if (isBottom) {
            glass.classList.add("hide");
        } else {
            glass.classList.remove("hide");
        }
    });
});

/* MARK: Our Product */

document.addEventListener("DOMContentLoaded", () => {

    const DESKTOP_BREAKPOINT = 1024;
    const PARALLAX_SPEED = 0.4; 
    const ENABLE_PARALLAX = true;

    const parallaxSections = document.querySelectorAll('.our-product-home');

    if (!parallaxSections.length) return;


    const isDesktop = () => window.innerWidth >= DESKTOP_BREAKPOINT;

    let ticking = false;

    const updateParallax = () => {
        if (!isDesktop() || !ENABLE_PARALLAX) return;

        const scrollY = window.scrollY;

        parallaxSections.forEach(section => {
            const rect = section.getBoundingClientRect();

            if (rect.bottom < 0 || rect.top > window.innerHeight) return;

            const offset = scrollY * PARALLAX_SPEED;

            section.style.backgroundPosition = `center calc(50% + ${offset}px)`;
        });

        ticking = false;
    };

    const requestTick = () => {
        if (!ticking) {
            requestAnimationFrame(updateParallax);
            ticking = true;
        }
    };

    window.addEventListener('scroll', requestTick, { passive: true });

    window.addEventListener('resize', () => {
        if (!isDesktop()) {
            parallaxSections.forEach(section => {
                section.style.backgroundPosition = "center center";
            });
        }
    });

    updateParallax();
});

// MARK: Lenis

document.addEventListener("DOMContentLoaded", () => {
    const isDesktop = () => window.innerWidth >= 1024;
    let lenis;

    const initLenis = () => {
        if (!isDesktop()) return;

        lenis = new Lenis({
            duration: 1.2,
            smooth: true,
            smoothTouch: false,
        });

        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }

        requestAnimationFrame(raf);
    };

    const destroyLenis = () => {
        if (lenis) {
            lenis.destroy();
            lenis = null;
        }
    };

    initLenis();
    
    window.addEventListener("resize", () => {
        if (!isDesktop()) {
            destroyLenis();
        } else if (!lenis) {
            initLenis();
        }
    });
});

// MARK: Our Structure

document.addEventListener("DOMContentLoaded", () => {
    const texts = document.querySelectorAll('.our-bx-children');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (window.innerWidth < 1024) {
                entry.target.classList.remove('active');
                return;
            }
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            } else {
                entry.target.classList.remove('active');
            }
        });
    }, {
        threshold: 0.3
    });
    texts.forEach(el => observer.observe(el));
});

// MARK: Our Interview 

document.addEventListener("DOMContentLoaded", () => {

    const DESKTOP_BREAKPOINT = 1024;
    const items = document.querySelectorAll('.our-interview-children');

    if (!items.length) return;

    const isDesktop = () => window.innerWidth >= DESKTOP_BREAKPOINT;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {

            if (!isDesktop()) {
                entry.target.classList.remove('active');
                return;
            }

            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            } else {
                entry.target.classList.remove('active'); // reverse
            }

        });
    }, {
        threshold: 0.35
    });

    items.forEach(el => observer.observe(el));

});

// MARK: reCAPTCHA

function checkBottom() {
    const scrollTop = window.scrollY;
    const windowHeight = window.innerHeight;
    const docHeight = document.documentElement.scrollHeight;

    const badge = document.querySelector('.grecaptcha-badge');

    if (!badge) return;

    if (scrollTop + windowHeight >= docHeight - 10) {
        badge.classList.add('show');
    } else {
        badge.classList.remove('show');
    }
}

window.addEventListener('scroll', checkBottom);