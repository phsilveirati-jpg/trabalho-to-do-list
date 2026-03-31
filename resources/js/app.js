import './bootstrap';
// Landing-specific script is imported via Vite in head partial.


// Behavior: sticky header with scroll transition and smooth anchor navigation
const header = document.getElementById('kt_header');

const updateHeaderState = () => {
    if (!header) return;
    if (window.scrollY > 20) {
        header.classList.add('bg-solid');
    } else {
        header.classList.remove('bg-solid');
    }
};

window.addEventListener('scroll', updateHeaderState);
window.addEventListener('load', updateHeaderState);

// Smooth scroll for in-page links
if (typeof window !== 'undefined') {
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener('click', function (e) {
            const target = this.getAttribute('href');
            if (target && target.startsWith('#') && target.length > 1) {
                e.preventDefault();
                const section = document.querySelector(target);
                if (section) {
                    section.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }
        });
    });
}

