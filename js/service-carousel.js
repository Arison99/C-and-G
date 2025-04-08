document.addEventListener('DOMContentLoaded', function () {
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const carousel = document.querySelector('.services-carousel .row');
    const cards = document.querySelectorAll('.services-carousel .service-card');
    const cardWidth = cards[0].offsetWidth;
    let currentPosition = 0;

    // Event listener for the "Next" button
    nextBtn.addEventListener('click', function () {
        const maxScroll = carousel.scrollWidth - carousel.clientWidth;
        currentPosition = Math.min(currentPosition + cardWidth, maxScroll);
        carousel.scrollTo({ left: currentPosition, behavior: 'smooth' });
    });

    // Event listener for the "Previous" button
    prevBtn.addEventListener('click', function () {
        currentPosition = Math.max(currentPosition - cardWidth, 0);
        carousel.scrollTo({ left: currentPosition, behavior: 'smooth' });
    });

    // Automatic horizontal scrolling
    let autoScrollInterval = setInterval(() => {
        const maxScroll = carousel.scrollWidth - carousel.clientWidth;
        currentPosition = (currentPosition + cardWidth) % (maxScroll + cardWidth);
        carousel.scrollTo({ left: currentPosition, behavior: 'smooth' });
    }, 3000); // Adjust interval as needed
});