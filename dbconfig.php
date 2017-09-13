
<?php
// connect
$servername = "localhost";
$username = "markschuster";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=dbtest", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}



// class Connection{
//     // connect
//     public $servername;
//     public $username;
//     public $password;
    
//     public function __construct($sn, $un, $pw) {
// 		$this->servername = $sn;
// 		$this->username = $un;
// 		$this->password = $pw;
//     }
// }

// $newconnect = new Connection("localhost", "markschuster", "");

// echo $newconnect->servername;


?>
