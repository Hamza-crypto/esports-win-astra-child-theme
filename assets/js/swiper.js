document.addEventListener('DOMContentLoaded', function () {

    /**
     * Swiper for first section "Games"
     */
    // Select all Swiper containers with the same class
    const swiperContainersGame = document.querySelectorAll('.games_swiper');
    console.log('page loaded');
    
    if (swiperContainersGame.length) {
        // Function to set `slides-per-view` attribute based on window width
            const windowWidth = window.innerWidth;
            let slides = 3;

            if (windowWidth < 500) { // Mobile
                slides = 1;
            } else if (windowWidth < 1000) { // Tablet
                slides = 2;
            }

            // Apply changes to all swiper containers
            swiperContainersGame.forEach(function(swiperContainer) {
                swiperContainer.setAttribute('slides-per-view', slides);
                console.log(windowWidth);
            console.log(slides);
            });
    }


    // Select all Swiper containers with the same class
    const swiperContainers = document.querySelectorAll('.mySwiper');
    console.log('page loaded');
    
    if (swiperContainers.length) {
        // Function to set `slides-per-view` attribute based on window width
        function updateSlidesPerView() {
            const windowWidth = window.innerWidth;
            let slides = 3;

            if (windowWidth < 500) { // Mobile
                slides = 1;
            } else if (windowWidth < 1000) { // Tablet
                slides = 2;
            } else {
                slides = 4; // Desktop
            }

            // Apply changes to all swiper containers
            swiperContainers.forEach(function(swiperContainer) {
                swiperContainer.setAttribute('slides-per-view', slides);
                console.log(windowWidth);
            console.log(slides);
            });
        }

        // Call the function initially to set the attribute when the page loads
        updateSlidesPerView();

        // Optional: You may want to call this function on window resize to adjust slides dynamically
        window.addEventListener('resize', updateSlidesPerView);
    }
});
