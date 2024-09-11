document.addEventListener('DOMContentLoaded', function () {

   
    // Select the Swiper container
    const swiperContainer = document.querySelector('.mySwiper');
 console.log('page loaded');
    if (swiperContainer) {
        // Function to set `slides-per-view` attribute based on window width
        function updateSlidesPerView() {
            const windowWidth = window.innerWidth;
            let slides;

            if (windowWidth < 500) { //Mobile
                slides = 1;
            } else if (windowWidth < 1000) { //Tablet
                slides = 2;
            } else {
                slides = 4; //Desktop
            }

            swiperContainer.setAttribute('slides-per-view', slides);
            console.log(windowWidth);
            console.log(slides);
        }

        // Call the function initially to set the attribute when the page loads
        updateSlidesPerView();
        }
        
    
});
