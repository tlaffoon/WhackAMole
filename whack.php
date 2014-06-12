<html>
<head>
	<title>Whack'Em</title>
	<script src="./js/jquery.js"></script>
	<style type="text/css">
	.mole {
		display: none;
	}
	
	.cell {
		height: 200px;
		width: 200px;
		border: solid black 1px;
		float: left;
	}
	.row {
		width: 606px;
		height: 200px;
	}
	.main-container {
		margin: auto;
		width: 606px;
		float: left;
	}
	</style>
</head>
<body>



	<div class="main-container">

		<div class="row">
			<div id="1" class="cell">
				<img class="mole" src="./img/cat-small.png">
			</div>

			<div id="2" class="cell">
				<img class="mole" src="./img/cat-small.png">
			</div>
			<div id="3" class="cell">
				<img class="mole" src="./img/cat-small.png">
			</div>
		</div>
		
		<div class="row">
			<div id="4" class="cell">
				<img class="mole" src="./img/cat-small.png">
			</div>
			<div id="5" class="cell">
				<img class="mole" src="./img/cat-small.png">
			</div>
			<div id="6" class="cell">
				<img class="mole" src="./img/cat-small.png">
			</div>
		</div>
		
		<div class="row">
			<div id="7" class="cell">
				<img class="mole" src="./img/cat-small.png">
			</div>
			<div id="8" class="cell">
				<img class="mole" src="./img/cat-small.png">
			</div>
			<div id="9" class="cell">
				<img class="mole" src="./img/cat-small.png">
			</div>
		</div>


	</div>

	<script type="text/javascript">

	$('document').ready(function() {

		$('.mole').fadeIn();

		$('.mole').on('click', function() {
			$(this).fadeOut();
		});

	});

	</script>

</body>
</html>

