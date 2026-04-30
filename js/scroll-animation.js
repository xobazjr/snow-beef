document.addEventListener("DOMContentLoaded", () => {

    // MARK: CONFIG

    const DESKTOP_BREAKPOINT = 1024;
    const isDesktop = () => window.innerWidth >= DESKTOP_BREAKPOINT;

    // MARK: INTERSECTION OBSERVER 

    const elements = document.querySelectorAll(
        ".menu-section, .contact, .earth, .jp-exclusive, .our-bx-children, .our-interview-children"
    );

    if (elements.length) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {

                if (!isDesktop()) {
                    entry.target.classList.remove("active");
                    return;
                }

                entry.target.classList.toggle("active", entry.isIntersecting);

            });
        }, {
            threshold: 0.3
        });

        elements.forEach(el => observer.observe(el));
    }

    // MARK: PARALLAX (Our Product)

    const parallaxSections = document.querySelectorAll('.our-product-home');
    const PARALLAX_SPEED = 0.2;

    let tickingParallax = false;

    const updateParallax = () => {
        if (!isDesktop()) return;

        const scrollY = window.scrollY;

        parallaxSections.forEach(section => {
            const rect = section.getBoundingClientRect();

            if (rect.bottom < 0 || rect.top > window.innerHeight) return;

            const offset = scrollY * PARALLAX_SPEED;
            section.style.backgroundPosition = `center calc(50% + ${offset}px)`;
        });

        tickingParallax = false;
    };

    const requestParallax = () => {
        if (!tickingParallax) {
            requestAnimationFrame(updateParallax);
            tickingParallax = true;
        }
    };

    if (parallaxSections.length) {
        window.addEventListener('scroll', requestParallax, { passive: true });

        window.addEventListener('resize', () => {
            if (!isDesktop()) {
                parallaxSections.forEach(section => {
                    section.style.backgroundPosition = "center center";
                });
            }
        });

        updateParallax();
    }

    // MARK: SCROLL HANDLER (Glass + reCAPTCHA)
  
    const glass = document.querySelector(".glass-container");

    let tickingScroll = false;

    const handleScroll = () => {
        const scrollTop = window.scrollY;
        const windowHeight = window.innerHeight;
        const docHeight = document.documentElement.scrollHeight;

        const isBottom = scrollTop + windowHeight >= docHeight - 50;

        const badge = document.querySelector(".grecaptcha-badge");

        if (glass) {
            glass.classList.toggle("hide", isBottom);
        }

        if (badge) {
            badge.classList.toggle("show", isBottom);
        }

        tickingScroll = false;
    };

    window.addEventListener("scroll", () => {
        if (!tickingScroll) {
            requestAnimationFrame(handleScroll);
            tickingScroll = true;
        }
    }, { passive: true });

    // MARK: LENIS (Smooth Scroll - Desktop Only)

    let lenis;

    const initLenis = () => {
        if (!isDesktop() || lenis) return;

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
        } else {
            initLenis();
        }
    });

});