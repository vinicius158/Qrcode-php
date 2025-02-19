<?php    

header("Content-Type: application/json");

require("vendor/autoload.php");

use chillerlan\QRCode\QRCode;    
use chillerlan\QRCode\QROptions;       

if (isset($_POST["txt"])) {
   
    $txt = $_POST["txt"];

    $options = new QROptions([
        'moduleValues' => [
            'moduleWidth' => 5,  // Largura do módulo (tamanho dos quadrados do QR Code)
            'moduleHeight' => 5, // Altura do módulo (tamanho dos quadrados do QR Code)
        ],
        'imageBase64' => true,  // Para gerar a imagem como Base64 (caso esteja retornando uma imagem base64)
        'quietzoneSize' => 0,   // Aqui estamos configurando o padding (quietzone) para 0
    ]);

    $obj = new QRCode($options);         
    
    if ($imagem = $obj->render($txt)) {

        echo json_encode($imagem);    

    } else {      

        echo json_encode("erro");
    }
}
   


?>  