// Menu

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

// Contact Info

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

// Earth

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

// Japan Exclusive

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

// Glass Button

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