<!-- Bootstrap core JavaScript -->
<script src="assets/vendor/jquery/jquery.min.js"></script>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>> -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="assets/js/stylish-portfolio.min.js"></script>
<script src="assets/build/js/intlTelInput.js"></script>
<!--<script src="assets/owlcarousel/owl.carousel.min.js"></script>-->
<!--sweet alert-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vissense/0.10.0/vissense.min.js"></script>
<!--script for floating video-->
<script src="https://www.youtube.com/iframe_api"></script>
<script>

// var myVideo = document.getElementById('featured-video');

//     VisSense.VisMon.Builder(VisSense(myVideo, { fullyvisible: 0.75 }))
//     .on('fullyvisible', function(monitor) {
//         myVideo.play();
//     })
//     .build()
//     .start();

"use strict";
jQuery(function (e) {
  function s(e) {
    var s = 1 === e.data,
      a = 2 === e.data,
      o = 0 === e.data;
    s && (i.removeClass("is-paused"), i.toggleClass("is-playing")), a && (i.removeClass("is-playing"), i.toggleClass("is-paused")), o && i.removeClass("is-playing", "is-paused")
  }
  var a, o = e(window),
    t = e("#featured-media"),
    i = e("#featured-video"),
    n = t.offset().top,
    l = Math.floor(n + t.outerHeight() / 2);
  window.onYouTubeIframeAPIReady = function () {
    a = new YT.Player("featured-video", {
      events: {
        onStateChange: s
      }
    })
  }, o.on("resize", function () {
    n = t.offset().top, l = Math.floor(n + t.outerHeight() / 2)
  }).on("scroll", function () {
    i.toggleClass("is-sticky", o.scrollTop() > l && i.hasClass("is-playing"))
  })
});

    
    // js validation
    $('.numeric').keyup(function(e) {
        if (/[^+\d]/g.test(this.value)) {
            this.value = this.value.replace(/[^+\d]/g, '');
        }
    });
</script>