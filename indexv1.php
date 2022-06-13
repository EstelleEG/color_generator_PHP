<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <!-- appel de la library JQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <title>Color Generator</title>
  <script src="https://kit.fontawesome.com/26c1d388d0.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css"/>
</head>

<body>
<div id="container">

 <div>
  <h1>Color generator</h1>
  <div id='cursors'>
    <div>
    <label for="red">Red</label>
      <input type="range" id="rangeRed" name="" min="0" max="255" value="" step="">
    <input type="text" id="inputRed" name="result">
    </div>
    <div>
    <label for="green">Green</label>
      <input type="range" id="rangeGreen" name="" min="0" max="255" value="" step="">
      <input type="text" id="inputGreen" name="result">
    </div>
    <div>
    <label for="blue">Blue</label>
      <input type="range" id="rangeBlue" name="" min="0" max="255" value="90" step="">
      <input type="text" id="inputBlue" name="result">
    </div>
  </div>
  <div id='rectangular'>
  </div>
<button>Choose this color</button>
</div>
<script>
    $(document).ready(function (){ //load when doc ready
        //alert("jquery ok");
        $('#rangeRed').on('input',function(){
          //console.log('coucou');
          //console.log($(this).val());
          color= $(this).val();
          $('#inputRed').val(color);
          changeColor();
        })
        $('#rangeGreen').on('input',function(){
          //console.log('coucou');
          console.log($(this).val());
          color= $(this).val();
          $('#inputGreen').val(color);
          changeColor();
        })
        $('#rangeBlue').on('input',function(){
          //console.log('coucou');
          console.log($(this).val());
          color= $(this).val();
          $('#inputBlue').val(color);
          changeColor();
        })
        function changeColor(){
          r = $('#rangeRed').val();
          g = $('#rangeGreen').val();
          b = $('#rangeBlue').val();
          $('#rectangular').css('background-color', 'rgb('+r +','+g +','+b +')');
        }
});
</script>
</body>
</html>