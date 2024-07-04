document.addEventListener("DOMContentLoaded", () => {
    const fadeElements = document.querySelectorAll('.fadein');
    const threshold = 100; // distancia do fade
    const handleScroll = () => {
        fadeElements.forEach(element => {
            const rect = element.getBoundingClientRect();
            if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
                element.classList.add('fadein');
                element.classList.remove('fadeout');
            } else if (rect.bottom < threshold || rect.top > window.innerHeight - threshold) {
                element.classList.add('fadeout');
                element.classList.remove('fadein');
            }
        });
    };

    window.addEventListener('scroll', handleScroll);
    handleScroll(); // check
});

document.addEventListener("DOMContentLoaded", () => {
    const fadeElements = document.querySelectorAll('.fadeinr');
    const threshold = 100; // distancia do fade
    const handleScroll = () => {
        fadeElements.forEach(element => {
            const rect = element.getBoundingClientRect();
            if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
                element.classList.add('fadeinr');
                element.classList.remove('fadeoutr');
            } else if (rect.bottom < threshold || rect.top > window.innerHeight - threshold) {
                element.classList.add('fadeoutr');
                element.classList.remove('fadeinr');
            }
        });
    };

    window.addEventListener('scroll', handleScroll);
    handleScroll(); // check
});