jQuery(document).ready(function ($) {
   
    var currentUrl = window.location.href;
    
    if (currentUrl.includes('betting-sites') && !currentUrl.includes('all-betting-sites') && currentUrl.match(/betting-sites\/[^/]+\/?$/)) {
            // Fetch the rating from the element with ID "over_all_ratings"
        var rating = $('#over_all_ratings').text().trim();
        var bonus= $('#bonus_title').text().trim();

        // Fetch the image URL and background color from the element with ID "img_box"
        var imageUrl = $('#img_box img').attr('src');
        var backgroundColor = $('#img_box').css('background-color');

        // Fetch the CTA URL from the buttons inside the element with ID "webs-bonus-cta-6"
        var ctaUrl = $('#webs-bonus-cta-6 a').attr('href');
        // Update the sticky bonus section with the fetched data
        $('.bonus-section .logo img').attr('src', imageUrl);
        $('.bonus-section .logo').css('background-color', backgroundColor);
        $('.bonus-section .rating .score').text(rating + '/5');
        $('.bonus-section .activated-btn a').attr('href', ctaUrl);
        $('.bonus-section .bonus-button a').attr('href', ctaUrl);
        
        $('.bonus-text').text(bonus);
        
        // Make the sticky section visible if hidden (optional)
        // $('.bonus-section').show();

        $(window).on('scroll', function() {
        // Get the current scroll position
            let scrollPosition = $(window).scrollTop();
            
            if (scrollPosition > 3000) {
                $('.bonus-section').fadeIn();
            } else {
                $('.bonus-section').fadeOut();
            }
        });
    }

});