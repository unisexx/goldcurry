<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="{{ asset('goldcurry/js/bootstrap.bundle.min.js') }}"></script>

<!-- VENOBOX FoodMenu gallery-->
<script type="text/javascript" src="{{ asset('goldcurry/assets/venobox/venobox.min.js') }}"></script>
<script>
$(document).ready(function () {
    $('.venobox').venobox();
    
});
</script>

<!-- ======= Add Hamburger Menu ======= -->
<script>
    var el = document.querySelector('#toggle');
    var ovrlays = document.querySelector('#overlay');
    el.onclick = function () {
        el.classList.toggle('active');
        ovrlays.classList.toggle('open');
    }

</script>

<!-- ======= Scroll to top button ======= -->
<script>
    var scrollToTopBtn = document.getElementById("scrollToTopBtn")
    var rootElement = document.documentElement

    function scrollToTop() {
        // Scroll to top logic
        rootElement.scrollTo({
            top: 0,
            behavior: "smooth"
        })
    }
    scrollToTopBtn.addEventListener("click", scrollToTop)

</script>

<!-- ======= Facebook ======= -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v10.0" nonce="URArVEoL"></script>