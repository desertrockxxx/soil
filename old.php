
    <!--<div class="row">-->
    <!--    <div class="col-sm-4" id="choice">-->
    <!--        <div class="form-group">-->
    <!--          <label for="size">Select Breed:</label>-->
    <!--          <select class="form-control" id="breed">-->
    <!--            <option>Pear</option>-->
    <!--            <option>Strawberry</option>-->
    <!--            <option>Mango</option>-->
    <!--            <option>Orange</option>-->
    <!--            <option>Grape</option>-->
    <!--            <option>Apple</option>-->
    <!--            <option>Watermelon</option>-->
    <!--          </select>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    
    
<script type="application/javascript">

/*global $*/
// $(function () {
//   $("#breed").change(function() {
//     var val = $(this).val();
//     var kondition;
    
//     var fruit = $("#fruit1").val(val) +
//             $("#fruit2").val(val) +
//             $("#fruit3").val(val); 
    
//     switch(val){
//         case "Pear":
//             kondition = 1;
//             fruit;
//             break;
//         case "Strawberry":
//             kondition = 2;
//             fruit;
//             break;
//         case "Mango":
//             kondition = 3;
//             fruit;
//             break;
//         case "Orange":
//             kondition = 4;
//             fruit;
//             break;
//         case "Grape":
//             kondition = 5;
//             fruit;
//             break;
//         case "Apple":
//             kondition = 6;
//             fruit;
//             break;
//         case "Watermelon":
//             kondition = 7;
//             fruit;
//             break;    
        
//         default:
//             kondition = 0;
//             fruit; 
//             break;
            
//     }

//     switch(kondition){
//         case 1:
//             $("#sack").show();
//             $("#topf").hide();
//             $("#lose").hide();
//             break;
//         case 2:
//             $("#sack").hide();
//             $("#topf").show();
//             $("#lose").hide();
//             break;
//         case 3:
//             $("#sack").hide();
//             $("#topf").hide();
//             $("#lose").show();
//             break;
//         case 4:
//             $("#sack").hide();
//             $("#topf").show();
//             $("#lose").show();
//             break;
//         case 5:
//             $("#sack").show();
//             $("#topf").hide();
//             $("#lose").show();
//             break;
//         case 6:
//             $("#sack").show();
//             $("#topf").show();
//             $("#lose").hide();
//             break;
//         case 7:
//             $("#sack").show();
//             $("#topf").show();
//             $("#lose").show();
//             break;    
//         default:
//             $("#sack").hide();
//             $("#topf").hide();
//             $("#lose").hide();
//             break;
//     }

//   });
// });


    // // Berechnung der Dimension
    // function rechnung() {
        
    // var x = document.getElementById("x").value;
    // var y = document.getElementById("y").value;
    // var z = document.getElementById("z").value;

    
    // parseInt(x);
    // parseInt(y);
    // parseInt(z);
    
    // var sum = x * y * z;
    
    // document.getElementById("quantity1").value = sum; 
    
    // }
</script>


label > input{ /* HIDE RADIO */
  visibility: hidden; /* Makes input not-clickable */
  position: absolute; /* Remove input from document flow */
}
label > input + img{ /* IMAGE STYLES */
  cursor:pointer;
  border:2px solid transparent;
}
label > input:checked + img{ /* (RADIO CHECKED) IMAGE STYLES */
  border:2px solid #f00;
}