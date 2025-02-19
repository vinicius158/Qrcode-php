<?php    
    
header("Content-Type: application/json");      

require("enviando.php");    

if(isset($_POST["txt"])){

$txt = $_POST["txt"];     

$obj = new Gerando();            

$response = $obj->qr_code($txt);        

echo json_encode($response);           

}


?>    
