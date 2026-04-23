// เปิดโหมด animation
document.documentElement.classList.add('js-enabled');

const elements = document.querySelectorAll('.reveal-up, .reveal-left, .reveal-right');

function revealOnScroll() {
    const trigger = window.innerHeight * 0.85;

    elements.forEach(el => {
        const top = el.getBoundingClientRect().top;

        if (top < trigger) {
            el.classList.add('active');
        }
    });
}

window.addEventListener('scroll', revealOnScroll);
window.addEventListener('load', revealOnScroll);