
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Selling modul</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="style.css" type="text/css" />
  
  <!--Font Awesome-->
  <script src="https://use.fontawesome.com/60a7bf25ad.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Selling modul</h1>
  <p>This is a responsive selling modul for terratectum.de!</p> 
</div>
  
<div class="container">

    <div class="choicerow row text-center">
        
    <h2 class="text-center">Select breed</h2>
        <img id="Pear" value="Pear" src="pear.svg">
        <img id="Strawberry" src="strawberry.svg">
        <img id="Mango" src="mango.svg">
        <img id="Orange" src="orange.svg">
        <img id="Grape" src="grape.svg">
        <img id="Apple" src="apple.svg">
        <img id="Watermelon" src="watermelon.svg">
        
    </div>


    <div class="conditionsrow row text-center" style="height:760px">

    <!---SACK OPTION-->
    <div class="col-sm-4" id="sack" style="display:none">
      <h2>Sack</h2>
      <form method="get" action="test.php">
          
        <img class="img-responsive" src="bagnew.svg" width="4500px" alt="bag">
          
        <input class='hidden' type='text' value='sack' name='condition'/>
        <input type='text' class='fruit hidden' id='fruit1' name='fruit'/>   
          
        <div class="form-group">
          <label for="size">Select Size:</label>
          <select class="form-control" id="size" name="bagSize">
            <option>S</option>
            <option>M</option>
            <option>L</option>
            <option>XL</option>
          </select>
        </div>
        <div class="form-group">
          <label for="quantity">Quantity:</label>
          <input type="number" class="form-control" id="quantity" placeholder="Enter quantity" name="quantity">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
    
    <!---TOPF OPTION-->
    <div class="col-sm-4" id="topf" style="display:none">
      <h2>Topf</h2>
      <form method="get" action="test.php">
          
        <img class="img-responsive" src="potnew.svg" alt="pot">  
          
        <input class='hidden' type='text' value='topf' name='condition'/>
        <input type='text' class='fruit hidden' id='fruit2' name='fruit'/>   

        <div class="form-group">
          <label for="size">Select Size:</label>
          <select class="form-control" id="size" name="potSize">
            <option>S</option>
            <option>M</option>
            <option>L</option>
            <option>XL</option>
          </select>
        </div>
        <div class="form-group">
          <label for="quantity">Quantity:</label>
          <input type="number" class="form-control" id="quantity" placeholder="Enter quantity" name="quantity">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
    
    <!---LOSE OPTION-->
    <div class="col-sm-4" id="lose" style="display:none">
      <h2>Lose</h2>
      <form method="get" action="test.php">
          
        <img class="img-responsive" src="cubenew.svg" alt="cube">
          
        <input class='hidden' type='text' value='lose' name='condition'/>
        <input type='text' class='fruit hidden' id='fruit3' name='fruit'/>  

        <div class="form-group">
            <label for="x">Length:</label>
            <input type="number" class="form-control" onchange="rechnung();" id="x" min="1" max="100" value="1" name="length"/>
        </div>
        <div class="form-group">
            <label for="y">Width:</label>
            <input type="number" class="form-control" onchange="rechnung();" id="y" min="1" max="100" value="1" name="width"/>
        </div>
        <div class="form-group">
            <label for="z">Height:</label>
            <input type="number" class="form-control" onchange="rechnung();" id="z" min="1" max="100" value="1" name="height"/>
        </div>
        <div class="form-group">
          <label for="quantity">Quantity:</label>
          <input type="number" class="form-control" id="quantity1" placeholder="Enter quantity" name="quantity">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
    
  </div>
</div>

<script type="application/javascript">
/*global $, val, kondition, fruit*/

// Wenn Bilder geklickt, nehme den id-Namen 
$("img").click(function() { 
val = $(this).attr("id");

// Scroll nach unten
var $target = $('html,body'); 
$target.animate({scrollTop: $target.height()}, 2500);

var fruit = $("#fruit1").val(val) +
        $("#fruit2").val(val) +
        $("#fruit3").val(val); 

switch(val){
    case "Pear":
        kondition = 1;
        fruit;
        break;
    case "Strawberry":
        kondition = 2;
        fruit;
        break;
    case "Mango":
        kondition = 3;
        fruit;
        break;
    case "Orange":
        kondition = 4;
        fruit;
        break;
    case "Grape":
        kondition = 5;
        fruit;
        break;
    case "Apple":
        kondition = 6;
        fruit;
        break;
    case "Watermelon":
        kondition = 7;
        fruit;
        break;    
    
    default:
        kondition = 0;
        fruit; 
        break;
}
    
    switch(kondition){
    case 1:
        $("#sack").show();
        $("#topf").hide();
        $("#lose").hide();
        break;
    case 2:
        $("#sack").hide();
        $("#topf").show();
        $("#lose").hide();
        break;
    case 3:
        $("#sack").hide();
        $("#topf").hide();
        $("#lose").show();
        break;
    case 4:
        $("#sack").hide();
        $("#topf").show();
        $("#lose").show();
        break;
    case 5:
        $("#sack").show();
        $("#topf").hide();
        $("#lose").show();
        break;
    case 6:
        $("#sack").show();
        $("#topf").show();
        $("#lose").hide();
        break;
    case 7:
        $("#sack").show();
        $("#topf").show();
        $("#lose").show();
        break;    
    default:
        $("#sack").hide();
        $("#topf").hide();
        $("#lose").hide();
        break;
    }
});

// Berechnung der Dimension
function rechnung() {
    
var x = document.getElementById("x").value;
var y = document.getElementById("y").value;
var z = document.getElementById("z").value;


parseInt(x);
parseInt(y);
parseInt(z);

var sum = x * y * z;

document.getElementById("quantity1").value = sum; 

}
        
</script>

</body>
</html>
