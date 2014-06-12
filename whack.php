<html>
<head>
	<title>Whack'Em</title>
	<script src="./js/jquery.js"></script>
	<link rel="stylesheet" href="./css/bootstrap.css">
	<style type="text/css">
	.mole {
		display: none;
	}
	</style>
</head>
<body>



<div class="container">
	<img id="wtf" class="mole" src="./img/omar-cropped.png">
</div>

	<script type="text/javascript">

	$('document').ready(function() {

		$('#wtf').fadeIn();

		$('.mole').on('click', function() {
			$(this).fadeOut();
		});

	});

	</script>

</body>
</html>

