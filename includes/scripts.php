<!-- JavaScript -->
<script data-cfasync="false"
    src="https://demo.bosathemes.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/vendors/jquery/jquery.js"></script>
<script src="assets/vendors/waypoint/jquery.waypoints.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/progressbar-fill-visible/js/progressBar.min.js"></script>
<script src="assets/vendors/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/vendors/countdown-date-loop-counter/loopcounter.js"></script>
<script src="assets/vendors/counterup/jquery.counterup.js"></script>
<script src="assets/vendors/modal-video/jquery-modal-video.min.js"></script>
<script src="assets/vendors/masonry/masonry.pkgd.min.js"></script>
<script src="assets/vendors/fancybox/dist/jquery.fancybox.min.js"></script>
<script src="assets/vendors/slick/slick.min.js"></script>
<script src="assets/vendors/slick-nav/jquery.slicknav.js"></script>
<script src="assets/js/custom.js"></script>

<script>

var stops = 4, // number of stops around the circle
    delay = 1000, // time to pause in milliseconds
    animationDelay = 20, // animation time between steps
    step = 0.05, // in radians
    img = $('.rotate'), // target images
    r = 100, // radius
    xcenter = 100, // x offset
    ycenter = 100, // y offset

    // *** don't change variables below ***
    last,
    d = 0,
    t =  0, 
    i = 1,
    angledStops = 360/stops,
    RadToDeg = 180 / Math.PI,
    stop = angledStops;

// this evenly spaces out all images with the class rotate around the circle
function setup() {
    // 270 degrees is actually the top of the circle
    var start = 270 * Math.PI/180,
        spacing = 2 * Math.PI / img.length;
    img.each(function () {
        $(this)
        .data('pos', start) // save the position of each image
        .css({
            top: Math.floor(ycenter + (r * Math.sin(start))),
            left: Math.floor(xcenter + (r * Math.cos(start)))
        });
        start += spacing;
    });
}

function moveit() {
    t += step;
    last = d;
    d = Math.round(t * RadToDeg) % 360;
    $.when(
    img.each(function () {
        var $t = $(this),
            pos = $t.data('pos') + step;
        $t
        .data('pos', pos)
        .animate({
            top: Math.floor(ycenter + (r * Math.sin(pos))),
            left: Math.floor(xcenter + (r * Math.cos(pos)))
        }, animationDelay);
    })).then(function () {                      
        if (d > stop || d < last) {
            i++;
            if (i > stops || d < angledStops) {
              stop = angledStops;
              i = 1;
            } else {
              stop = angledStops * i;
            }
            setTimeout(moveit, delay);
        } else {
            moveit();
        }
    });
}

$(document).ready(function () {
    setup();
    moveit();
});
</script>