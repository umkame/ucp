		</div>
		<script type="text/javascript" src="assets/js/fileinput.js"></script>
		<script>
			$(document).bind("mobileinit", function() {
				$.mobile.ignoreContentEnabled = true;
			});
		</script>
		<script type="text/javascript" src="assets/js/recorder.js"></script>
		<script type="text/javascript" src="assets/framework/js/bootstrap-3.0.2.custom.min.js"></script>
		<script type="text/javascript" src="assets/framework/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.iframe-transport.js"></script>
		<script type="text/javascript" src="assets/js/jquery.fileupload.js"></script>
		<script type="text/javascript" src="assets/js/jquery.form.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.jplayer.min.js"></script>
		<script type="text/javascript" src="assets/js/quo.js"></script>
		<script type="text/javascript" src="assets/js/purl.js"></script>
		<script type="text/javascript" src="assets/js/modernizr.js"></script>
		<script type="text/javascript" src="assets/js/jquery.pjax.js"></script>
		<script type="text/javascript" src="assets/js/notify.js"></script>
		<script type="text/javascript" src="assets/js/packery.pkgd.min.js"></script>
		<script type="text/javascript" src="assets/js/class.js"></script>
		<script type="text/javascript" src="assets/js/ucp.js"></script>
		<?php foreach($scripts as $script) {?>
			<script type="text/javascript" src="<?php echo $script ?>"></script>
		<?php } ?>
		<script>var modules = <?php echo $modules?></script>
		<div id="shade"></div>
	</body>
</html>
