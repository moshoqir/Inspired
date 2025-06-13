(function ($) {
    "use strict";

    // COUNTER NUMBERS
    jQuery(".counter-thumb").appear(function () {
        jQuery(".counter-number").countTo();
    });

    // CUSTOM LINK
    $(".smoothscroll").click(function () {
        var el = $(this).attr("href");
        var elWrapped = $(el);
        var header_height = $(".navbar").height();

        scrollToDiv(elWrapped, header_height);
        return false;

        function scrollToDiv(element, navheight) {
            var offset = element.offset();
            var offsetTop = offset.top;
            var totalScroll = offsetTop - navheight;

            $("body,html").animate(
                {
                    scrollTop: totalScroll,
                },
                300
            );
        }
    });
})(window.jQuery);

// Add this to your existing JavaScript or before the closing </body> tag
document
    .getElementById("language-toggle")
    .addEventListener("click", function (e) {
        e.preventDefault();
        document.documentElement.classList.toggle("rtl");

        // You would also need to implement actual language switching here
        // This would typically involve making an AJAX call to your backend
        // or reloading the page with a different language parameter
        console.log("Language toggled - implement actual language switching");

        // For a complete solution, you would need to:
        // 1. Track current language in a cookie or session
        // 2. Load appropriate translations
        // 3. Flip text direction for RTL languages
        // 4. Update all text content on the page
    });


