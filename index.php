
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Selling modul</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/style.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
  <!--image picker-->
  <link rel="stylesheet" href="/image-picker-master/image-picker/image-picker.css" type="text/css" />
  <script src="/image-picker-master/image-picker/image-picker.js"></script>
  
</head>
<body>

<div class="jumbotron text-center">
  <h1>Selling modul</h1>
  <p>This is a responsive selling modul for terratectum.de!</p> 
</div>

<!--test-->
<div class="row text-center submitajax">
  <button type="button" class="btn" id="test">Test</button>
</div>

  
<div class="container">
    <!--Auswahl  --> 
    <div class="choicerow row text-center">
    <h2 id="selectfruit">Select breed</h2>
        <!--image picker -->
        <select onchange="getFruit(this);" class="image-picker show-html">
            <option data-img-src="/img/pear.svg" data-img-alt="Pear"  data-img-class="first" value="Pear">Pear</option>
            <option data-img-src="/img/strawberry.svg" data-img-alt="Strawberry"  value="Strawberry">Strawberry</option>
            <option data-img-src="/img/mango.svg" data-img-alt="Mango"  value="Mango">Mango</option>
            <option data-img-src="/img/orange.svg" data-img-alt="Orange"  value="Orange">Orange</option>
            <option data-img-src="/img/grape.svg" data-img-alt="Grape"  value="Grape">Grape</option>
            <option data-img-src="/img/apple.svg" data-img-alt="Apple"  value="Apple">Apple</option>
            <option data-img-src="/img/watermelon.svg" data-img-alt="Watermelon" data-img-class="last" value="Watermelon">Watermelon</option>
        </select>
    </div>
    <!--Auswahl Ende-->


    <div class="conditionsrow row text-center" style="height:760px">
    <h2 id="selectcon" style="display:none">Select condition</h2>    

    <!---SACK OPTION-->
    <div class="col-sm-4 text-center" id="sack" style="display:none">
      <h2>Bag</h2>
        <img class="img-responsive" width="100px" src="/img/bagnew.svg" alt="bag">
          
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
          <label for="quantity">How much?</label>
          <input type="number" class="form-control" id="dimensionsum" placeholder="Enter quantity">
        </div>
    </div>
     <!---LOSE OPTION ENDE-->
  </div>
  
</div>

<script type="application/javascript">
/*global $*/
var val, fru,condition, con, siz, qua, x, y, z, sum, location;


// initialize imagepicker
$("select").imagepicker({
      hide_select : false,
      show_label  : false
})

// Frucht
function getFruit(sel){
    fru = sel.value;
    console.log(fru);
    showConditions();
}


// Dimension
function calculateQuantity() {
    x = $("#x").val();
    y = $("#y").val();
    z = $("#z").val();
    
    parseInt(x);
    parseInt(y);
    parseInt(z);
    
    sum = x * y * z;
    $("#dimensionsum").val(sum);
    qua = sum;
    console.log(qua);
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

// Zeige Kondition
function showConditions(){
    // Zeige h2 Select conditions
    $("#selectcon").fadeTo("fast" , 1.0);

    switch(fru){
        case "Pear":
            condition = 1;
            break;
        case "Strawberry":
            condition = 2;
            break;
        case "Mango":
            condition = 3;
            break;
        case "Orange":
            condition = 4;
            break;
        case "Grape":
            condition = 5;
            break;
        case "Apple":
            condition = 6;
            break;
        case "Watermelon":
            condition = 7;
            break;    
        
        default:
            condition = 0;
            break;
    }
    showOpacity();
    
    switch(condition){
        case 1:
            $("#sack").fadeTo("fast" , 1.0);
            document.getElementById('topf').style.display = 'none';
            document.getElementById('lose').style.display = 'none';
            break;
        case 2:
            document.getElementById('sack').style.display = 'none';
            $("#topf").fadeTo("fast" , 1.0);
            document.getElementById('lose').style.display = 'none';
            break;
        case 3:
            document.getElementById('sack').style.display = 'none';
            document.getElementById('topf').style.display = 'none';
            $("#lose").fadeTo("fast" , 1.0);
            break;
        case 4:
            document.getElementById('sack').style.display = 'none';
            $("#topf").fadeTo("fast" , 1.0);
            $("#lose").fadeTo("fast" , 1.0);
            break;
        case 5:
            $("#sack").fadeTo("fast" , 1.0);
            document.getElementById('topf').style.display = 'none';
            $("#lose").fadeTo("fast" , 1.0);
            break;
        case 6:
            $("#sack").fadeTo("fast" , 1.0);
            $("#topf").fadeTo("fast" , 1.0);
            document.getElementById('lose').style.display = 'none';
            break;
        case 7:
            $("#sack").fadeTo("fast" , 1.0);
            $("#topf").fadeTo("fast" , 1.0);
            $("#lose").fadeTo("fast" , 1.0);
            break;    
        default:
            document.getElementById('sack').style.display = 'none';
            document.getElementById('topf').style.display = 'none';
            document.getElementById('lose').style.display = 'none';
            break;
    }
    showOpacity();
}


function showOpacity(){
    // Auswahl ein- und ausschalten
    if(fru == "Pear"){
        $("#sack").click(function() {
            $("#sack").fadeTo("fast" , 1.0);
            document.getElementById('topf').style.display = 'none';
            document.getElementById('lose').style.display = 'none';
            con = "sack";
        });
    }

    if(fru == "Strawberry"){
        $("#topf").click(function() {
            $("#topf").fadeTo("fast" , 1.0);
            document.getElementById('sack').style.display = 'none';
            document.getElementById('lose').style.display = 'none';
            con = "topf";
        });
    }
    
    
    if(fru == "Mango"){
        $("#lose").click(function() {
            $("#lose").fadeTo("fast" , 1.0);
            document.getElementById('topf').style.display = 'none';
            document.getElementById('sack').style.display = 'none';
            con = "lose";
        });
    }
    
    
    if(fru == "Orange"){
        $("#lose").click(function() {
            $("#lose").fadeTo("fast" , 1.0);
            $("#topf").fadeTo("fast" , 0.5);
            document.getElementById('sack').style.display = 'none';
            con = "lose";
        });
        
        $("#topf").click(function() {
            $("#topf").fadeTo("fast" , 1.0);
            $("#lose").fadeTo("fast" , 0.5);
            document.getElementById('sack').style.display = 'none';
            con = "topf";
        });
    }
    
    if(fru == "Grape"){
        $("#lose").click(function() {
            $("#lose").fadeTo("fast" , 1.0);
            $("#sack").fadeTo("fast" , 0.5);
            document.getElementById('topf').style.display = 'none';
            con = "lose";
        });
        
        $("#sack").click(function() {
            $("#sack").fadeTo("fast" , 1.0);
            $("#lose").fadeTo("fast" , 0.5);
            document.getElementById('topf').style.display = 'none';
            con = "sack";
        });
    }
    
    if(fru == "Apple"){
        $("#sack").click(function() {
            $("#sack").fadeTo("fast" , 1.0);
            $("#topf").fadeTo("fast" , 0.5);
            document.getElementById('lose').style.display = 'none';
            con = "sack";
        });
        
        $("#topf").click(function() {
            $("#topf").fadeTo("fast" , 1.0);
            $("#sack").fadeTo("fast" , 0.5);
            document.getElementById('lose').style.display = 'none';
            con = "topf";
        });
    }
    
    
    if(fru == "Watermelon"){
        $("#sack").click(function() {
            $("#sack").fadeTo("fast" , 1.0);
            $("#topf").fadeTo("fast" , 0.5);
            $("#lose").fadeTo("fast" , 0.5);
            con = "sack";
        });
        
        $("#topf").click(function() {
            $("#topf").fadeTo("fast" , 1.0);
            $("#sack").fadeTo("fast" , 0.5);
            $("#lose").fadeTo("fast" , 0.5);
            con = "topf";
        });
        
        $("#lose").click(function() {
            $("#lose").fadeTo("fast" , 1.0);
            $("#topf").fadeTo("fast" , 0.5);
            $("#sack").fadeTo("fast" , 0.5);
            con = "lose";
        });
    }
}

// if click condition bild all other opacity -1

// con = selection


$("#test").click(function(){
    if(qua != undefined && fru != undefined){
        if(con == "sack"){
            $.ajax({
                type: "GET",
                url: 'test.php',
                data: {fruit: fru, condition: con, bagSize: siz, quantity: qua},
                success: function(data){
                //alert(data);
                }
            });
        }
        
        if(con == "topf"){
            $.ajax({
                type: "GET",
                url: 'test.php',
                data: {fruit: fru, condition: con, potSize: siz, quantity: qua},
                success: function(data){
                //alert(data);
                }
            });
        }
        
        if(con == "lose"){
            $.ajax({
                type: "GET",
                url: 'test.php',
                data: {fruit: fru, condition: con, length: x, width: y, height: z, quantity: qua},
                success: function(data){
                //alert(data);
                }
            });
        }
    }
    //Setze alles zurück
    
    location.reload(true);

});



</script>

</body>
</html>
