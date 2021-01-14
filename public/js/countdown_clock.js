$(document).ready(function () {
    var countdown = window.countdown;
    var banner = window.banner;
    // console.log(countdown);

    if (countdown == null){
        document.getElementById("clock").innerHTML = "No events right now...";
    }else {
        // Set the date we're counting down to
        var countDownDate = new Date(countdown.countdown_timer).getTime();

        // Update the count down every 1 second
        var x = setInterval(function () {
            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="clock"
            document.getElementById("clock").innerHTML = days + "d " + hours + "h "
                + minutes + "m " + seconds + "s ";

            // If the count down is over or disabled from the dashboard, show the banner
            if (distance < 0 || countdown.disable == 1) {
                clearInterval(x);
                document.getElementById("clock").innerHTML = "<img class=\"resize\" src=\"/banner/" + banner.image + "\" alt=\"adv banner\" />";
            }
        }, 1000);
    }
});
