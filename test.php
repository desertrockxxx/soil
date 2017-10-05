
<?php 

require_once("dbconfig.php");

$fruit = "";
$condition = "";
$bagSize = "";
$potSize = "";
$length = 0;
$width = 0;
$height = 0;
$quantity = 0;


$fruit = $_REQUEST["fruit"];
$condition = $_REQUEST["condition"];
$bagSize = $_REQUEST["bagSize"];
$potSize = $_REQUEST["potSize"];
$length = intval($_REQUEST["length"]);
$width = intval($_REQUEST["width"]);
$height = intval($_REQUEST["height"]);
$quantity = intval($_REQUEST["quantity"]);



if(isset($quantity)){

    if(!isset($fruit)) $fruit = "";
    if(!isset($condition)) $condition = "";
    if(!isset($bagSize)) $bagSize = "";
    if(!isset($potSize)) $potSize = "";
    if(!isset($length)) $length = 0;
    if(!isset($width)) $width = 0;
    if(!isset($height)) $height = 0;

    
    try{
        $conn = new PDO("mysql:host=localhost;dbname=dbtest","markschuster","");
        // prepare statement                                      
        $stmt = $conn->prepare("INSERT INTO `list` (`fruit`, `condition`, `bagSize`, `potSize`, `length`, `width`, `height`, `quantity`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute(array($fruit,$condition,$bagSize,$potSize,$length,$width,$height,$quantity)); 
    } 
    catch (Exception $e) 
    {
        echo "Fehlercode: ". $e;
    }
    
    // Setze zurück
    $fruit = "";
    $condition = "";
    $bagSize = "";
    $potSize = "";
    $length = 0;
    $width = 0;
    $height = 0;
    $quantity = 0;
}

require_once("table.php");

?>


