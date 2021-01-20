<div class="centered">
    <div id="clock" class="clock"></div>
</div>

<!-- Custom CSS -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<!-- Bootstrap core JavaScript-->
<script src="/.dashboard/vendor/jquery/jquery.min.js"></script>
<script src="/.dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/.dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/.dashboard/js/sb-admin-2.min.js"></script>

<!-- Custom JS -->
<script>window.events = <?php echo json_encode($events); ?>;</script>
<script src="/js/countdown_clock.js"></script>


