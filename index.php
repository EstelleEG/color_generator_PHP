<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- appel de la library JQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <title>ColorGenerator PHP</title>
  <script src="https://kit.fontawesome.com/26c1d388d0.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body class="bg-dark text-light text-center pt-5">
  <div id="container">

    <div>
      <h2>Color Generator</h2>

      <?php
      $lesCouleurs = array(1 => 'Red', 2 => 'Green', 3 => 'Blue',4 =>'Alpha');//alpha for opacity
      foreach ($lesCouleurs as $key => $value) {
        //echo $key . ' = ' . $value . '<br>'; ?>

        <!-- 'divColor' est parent avec attribut 'data color' -->
        <div class='divColor' data-color="<?php echo $value;?>">
          <?php echo $value;?>
           

          <input type="range" id="range<?php echo $value;?>" min="0" max="255" value="90" step="">
          <input type="text" id="input<?php echo $value;?>" class="form-control border colorsValue">
        </div> 

      <?php  } ?>

      <div id='cursors'>

        <!-- 'divColor' est parent avec attribut 'data color' 
        <div class='divColor' data-color="echo $value;">
          Red<input type="range" id="rangeRed" name="" min="0" max="255" value="90" step="">
          <input type="text" id="inputRed" class="form-control border colorsValue">
        </div>

        <div class='divColor' data-color="Green">
          Green<input type="range" id="rangeGreen" name="" min="0" max="255" value="90" step="">
          <input type="text" id="inputGreen" class="form-control border colorsValue">
        </div>

        <div class='divColor' data-color="Blue">
          Blue<input type="range" id="rangeBlue" name="" min="0" max="255" value="90" step="">
          <input type="text" id="inputBlue" class="form-control border colorsValue">
        </div>-->

      </div>

      <div class='row'>
        <div id='pastille' class="col-3 mx-auto border rounded pastille"></div>
      </div>

      <button id="chooseColor" class="form-control width-auto mt-3">Choose this color</button>

      <div id='listColors'></div>

      <script>
        $(document).ready(function() { //load when doc ready //we call with $
          $('input').on('change', function() { //for input when we change it, we run this function
            //console.log($(this));

            maDiv = $(this).closest('.divColor'); //on recup la valeur closest de la class div parent 'divcolor'
            //console.log(maDiv);

            laColor = maDiv.data('color'); //attr 'data' has the name '-color'
            //console.log(laColor);

            //recup la value
            valeur=$(this).val(); //$this is input
            //console.log(valeur);

            //send in the inputs
            $('#range'+laColor).val(valeur);

            //text
            $('#input'+laColor).val(valeur);

            changeColor(); //i call the function
          })
        });

        function changeColor(){
          r = $('#rangeRed').val();
          g = $('#rangeGreen').val();
          b = $('#rangeBlue').val();
          //$('#pastille').css('display', 'none');
          $('#pastille').css('background-color', 'rgb('+r+' , '+g+' , '+b+')'); 
          //$('#pastille').css('background-color', 'rgb(255,0,255)'); 
          //$('#pastille').css('background-color', 'rgba('+r+' , '+g+' , '+b+' , '+a+')'); 
          //we send the colours in the pastille
          
        }
      </script>

</body>
</html>