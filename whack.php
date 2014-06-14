<html>
<head>
	<title>Whack'Em</title>
	<script src="./js/jquery.js"></script>
	<style type="text/css">

	body {
		background-image: url('./img/cat-art.jpg');
	}
	.mole {
		display: none;
		width: 198px;
		height: 198px;
	}
	.row {
		width: 600px;
		height: 200px;
	}
	.cell {
		height: 198px;
		width: 198px;
		float: left;
		border: solid black 1px;
	}
	.main-container {
		margin-left: auto;
		margin-right: auto;
		width: 600px;
		border: solid black 1px;
	}
	.bar {
		width: 598px;
	}
	.start-button {
		width: 200px;
		float: left;
	}
	.score-box {
		width: 398px;
		text-align: right;
		float: right;
	}

	.paw {
		cursor: url(img/print.png), auto;
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

		<div class="bar">
			<button id="start" class="start-button">Start!</button>
			<div id="score" class="score-box"></div>
		</div>

	</div>  <!-- end main container -->

	<script type="text/javascript">

	// 										//

// function genActiveCell () {

// };
	
function runGame () {
	// doesn't clear interval?
	clearInterval(game);

	// points count double occasionally
	var points = 0;
	var time = 10;
	var game = setInterval(function () {
					if (time != 0) {
						time--;
						$('.mole').fadeOut();
						var moles = $('.mole');
						var activeCell = $(moles[Math.floor(Math.random()*moles.length)]);
						$(activeCell).fadeIn();

						activeCell.on('click', function() {
							points += 10;
							$('#score').text('Score: ' + points);
							$('.mole').fadeOut();
							console.log('Score: ' + points);
						});					}

					else {
						console.log('game over. ' + points);	
						clearInterval(game);
					}
				}, 2000);

};
	// 										//

	$('document').ready(function() {

		$('#start').on('click', function () { 
			$('img').css('cursor', 'url(img/print.png), auto');
			runGame();
		});

	});

	</script>

</body>
</html>

