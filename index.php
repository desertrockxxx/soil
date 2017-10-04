
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Selling modul</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/css/style.css" type="text/css" />
</head>
<body>

<div class="jumbotron text-center">
  <h1>Selling modul</h1>
  <p>This is a responsive selling modul for terratectum.de!</p> 
</div>

<!--test-->
<div class="row text-center submitajax">
  <button id="test">Test</button>
</div>
  
  
<div class="container">
    <!--if auswahl(x) then frucht = x -->
    <!--Auswahl  --> 
    <div class="choicerow row ">
    <h2 id="imgselect" class="text-center">Select breed</h2>
        <img id="Pear" value="Pear" src="/img/pear.svg">
        <img id="Strawberry" src="/img/strawberry.svg">
        <img id="Mango" src="/img/mango.svg">
        <img id="Orange" src="/img/orange.svg">
        <img id="Grape" src="/img/grape.svg">
        <img id="Apple" src="/img/apple.svg">
        <img id="Watermelon" src="/img/watermelon.svg">
    </div>
    <!--Auswahl Ende-->

    <div class="conditionsrow row text-center" style="height:760px">

    <!---SACK OPTION-->
    <div class="col-sm-4 text-center" id="sack" style="display:none">
      <h2>Bag</h2>
        <img class="img-responsive" width="100px" src="/img/bagnew.svg" width="4500px" alt="bag">
          
        <div class="form-group">
          <label for="size">Size of Bag:</label>
          <select class="form-control" onchange="getSize(this);" id="bagSize">
            <option>S (2 litre)</option>
            <option>M (5 litre)</option>
            <option>L (10 litre)</option>
            <option>XL (25 litre)</option>
          </select>
        </div>
        
        <div class="form-group">
          <label for="quantity">How many?</label>
          <input type="number" class="form-control" onchange="getQuantity(this);" id="quantity" placeholder="Enter quantity">
        </div>
    </div>
    <!---SACK OPTION ENDE-->
    
    <!---TOPF OPTION-->
    <div class="col-sm-4 text-center" id="topf" style="display:none">
      <h2>Pot</h2>
        <img class="img-responsive" width="100px" src="/img/potnew.svg" alt="pot">  

        <div class="form-group">
          <label for="size">Size of Pot:</label>
          <select class="form-control" onchange="getSize(this);"  id="potSize">
            <option>S (2 litre)</option>
            <option>M (5 litre)</option>
            <option>L (10 litre)</option>
            <option>XL (25 litre)</option>
          </select>
        </div>
        
        <label for="quantity">How many?</label>
        <div class="form-group">
          <input type="number" class="form-control" onchange="getQuantity(this);" id="quantity" placeholder="Enter quantity">
        </div>
    </div>
     <!---TOPF OPTION ENDE-->
    
    <!---LOSE OPTION-->
    <div class="col-sm-4 text-center" id="lose" style="display:none">
      <h2>Dynamic</h2>
        <div class="text-center">
            <img class="img-responsive" width="100px" src="/img/cubenew.svg" alt="cube">
        </div> 
        <div class="form-group">
            <label for="x">Length:</label>
            <input type="number" class="form-control" onchange="calculateQuantity();" id="x" min="1" max="100" value="1"/>
        </div>
        <div class="form-group">
            <label for="y">Width:</label>
            <input type="number" class="form-control" onchange="calculateQuantity();" id="y" min="1" max="100" value="1"/>
        </div>
        <div class="form-group">
            <label for="z">Height:</label>
            <input type="number" class="form-control" onchange="calculateQuantity();" id="z" min="1" max="100" value="1"/>
        </div>
        <div class="form-group">
          <label for="quantity">How many?</label>
          <input type="number" class="form-control" id="dimensionsum" placeholder="Enter quantity">
        </div>
    </div>
     <!---LOSE OPTION ENDE-->
  </div>
  
</div>

<script type="application/javascript">
/*global $*/
var val, con, siz, qua, x, y, z;

// Dimension
function calculateQuantity() {
    x = $("#x").val();
    y = $("#y").val();
    z = $("#z").val();
    
    parseInt(x);
    parseInt(y);
    parseInt(z);
    
    var sum = x * y * z;
    document.getElementById("dimensionsum").value = sum;
    console.log(sum);
}

// Größe
function getSize(sel)
{
    siz = sel.value;
    console.log(siz);
}

// Menge
function getQuantity(sel)
{
    qua = sel.value;
    console.log(qua);
}

$(document).ready(function() {

$("img").click(function() {
    val = $(this).attr("id"); // fruit 1
    con; // konditon 2
        
    switch(val){
        case "Pear":
            con = 1;
            break;
        case "Strawberry":
            con = 2;
            break;
        case "Mango":
            con = 3;
            break;
        case "Orange":
            con = 4;
            break;
        case "Grape":
            con = 5;
            break;
        case "Apple":
            con = 6;
            break;
        case "Watermelon":
            con = 7;
            break;    
        
        default:
            con = 0;
            break;
    }
    
    switch(con){
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


$("#test").click(function(){
    $.ajax({
        type: "GET",
        url: 'test.php',
        data: {fruit: val, condition: con, bagSize: siz, potSize: siz, length: x, width: y, height: z, quantity: qua},
        success: function(data){
        //alert(data);
        }
    });
});
});



</script>

</body>
</html>
