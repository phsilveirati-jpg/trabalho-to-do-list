// Landing page interactions

const header = document.getElementById('kt_header');

function updateHeaderState() {
    if (!header) return;

    if (window.scrollY > 20) {
        header.classList.add('bg-solid');
    } else {
        header.classList.remove('bg-solid');
    }
}

window.addEventListener('scroll', updateHeaderState);
window.addEventListener('load', updateHeaderState);

// Smooth scroll for anchor links in landing
const anchorLinks = document.querySelectorAll('a[href^="#"]');
anchorLinks.forEach((anchor) => {
    anchor.addEventListener('click', (event) => {
        const target = anchor.getAttribute('href');

        if (target && target.length > 1 && document.querySelector(target)) {
            event.preventDefault();
            document.querySelector(target).scrollIntoView({ behavior: 'smooth' });
        }
    });
});
