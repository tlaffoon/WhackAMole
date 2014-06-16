<!DOCTYPE html>
<html>
<title>Whack'Em</title>
<script src="./js/jquery.js"></script>
<link rel="stylesheet" href="./css/button.css"> 
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
  cursor: url('./img/print.png'), auto;
}
.main-container {
  margin-left: auto;
  margin-right: auto;
  width: 600px;
  border: solid black 1px;
}
.main-header {
  margin: auto;
  width: 598px;
  display: none;
  color: white;
  text-align: center;
  font-size: 36px;
  border: solid black 1px;-
}
.score-hole {
  position: relative;
  margin-left: 50px;
  padding-top: 20px;
}
.button-hole {
  position: relative;
  margin-left: 50px;
}
.start-button {
  width: 200px;
  position: relative;
  margin-left: 200px;
}
.score-box {
  width: 198px;
  text-align: right;
  font-size: 28px;
  float: right;
  color: white;
}
.timer {
  width: 198px;
  text-align: right;
  font-size: 28px;
  float: right;
  color: white;
}
</style>
<body>

  <body>

    <div class="button-hole">
     <button id="start" class="button-style" onclick="startGame()"> Start </button>
     <button id="stop" class="button-style" onclick="stopGame()"> Stop </button>
      <div id="score" class="score-box"></div>
      <div id="timer" class="timer"></div>
    </div>

    <div class="main-container">

    	<div class="main-header">GAME OVER</div>

      <div class="row">
        <div id="1" class="cell">
          <img class="mole" src="./img/cat-fussy1.png">
        </div>
        <div id="2" class="cell">
          <img class="mole" src="./img/cat-fussy1.png">
        </div>
        <div id="3" class="cell">
          <img class="mole" src="./img/cat-fussy1.png">
        </div>
      </div>
      
      <div class="row">
        <div id="4" class="cell">
          <img class="mole" src="./img/cat-fussy1.png">
        </div>
        <div id="5" class="cell">
          <img class="mole" src="./img/cat-fussy1.png">
        </div>
        <div id="6" class="cell">
          <img class="mole" src="./img/cat-fussy1.png">
        </div>
      </div>
      
      <div class="row">
        <div id="7" class="cell">
          <img class="mole" src="./img/cat-fussy1.png">
        </div>
        <div id="8" class="cell">
          <img class="mole" src="./img/cat-fussy1.png">
        </div>
        <div id="9" class="cell">
          <img class="mole" src="./img/cat-fussy1.png">
        </div>
      </div>

    </div>  <!-- end main container -->

<script type="text/javascript">

// Initialize variables for start/stop
var points=0;
var gameTimer=10;
var count=0;
var counter=setInterval(timer, 1000);
var game=setInterval(genCell, 1000);
var stopped=0

function timer() {
  if (count < gameTimer) {
    count++;
    $('#timer').html(count + ' secs');
  }
  else {
    console.log('Time\'s Up!');
    clearInterval(counter);
    clearInterval(game);
    flashHeader();
    //window.location.assign('http://whack.dev/');

  }

};

function stopGame() {
  clearInterval(counter);
  clearInterval(game);
  window.count=gameTimer;

  window.stopped=1;
  $('#timer').html(count + ' secs');
  $('.mole').fadeOut();

};

function startGame() {
  if (counter)
  {
    clearInterval(counter);
    if (game) {
      clearInterval(game);
    };

    window.count=gameTimer;
    window.stopped=0

    count++;
    window.counter=setInterval(timer, 1000);
    window.game=setInterval(genCell, 1000);
    $('#timer').html(count + ' secs');
  }

};

// End start/stop functions.

 function genCell() {
      $('.mole').fadeOut();
      var moles = $('.mole');
      var activeCell = $(moles[Math.floor(Math.random()*moles.length)]);
      $(activeCell).fadeIn(200);

      activeCell.on('click', function() {
        points = (points + 10);
        $('#score').text('Score: ' + points);
        $('.mole').fadeOut();
        console.log('Score: ' + points);
        activeCell.unbind();
      });

 };

 function flashHeader() {
    // $('.main-container').children().fadeOut();
    $('.mole').fadeOut();
    // $('.main-header').fadeIn();

    var headCount = 0;

    while (headCount < 5) {
      $('.main-header').fadeOut(200);
      $('.main-header').fadeIn(200);
      headCount++;
    }

 };

 $('document').ready(function () {

  console.log('Document Loaded.');

 });

</script>

</body>
</html>