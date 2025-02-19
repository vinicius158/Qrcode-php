<?php    

require("vendor/autoload.php");

use chillerlan\QRCode\QRCode;    

use chillerlan\QRCode\QROptions;       

class Gerando{      

    function qr_code($txt){      

        $options = new QROptions([
            'moduleValues' => [
                'moduleWidth' => 5,  // Largura do módulo (tamanho dos quadrados do QR Code)
                'moduleHeight' => 5, // Altura do módulo (tamanho dos quadrados do QR Code)
            ],
            'outputType' => QRCode::OUTPUT_MARKUP_SVG,     
            'imageBase64' => true,  // Para gerar a imagem como Base64 (caso esteja retornando uma imagem base64)
            'quietzoneSize' => 0,   // Aqui estamos configurando o padding (quietzone) para 0
        ]);          
    
        $obj = new QRCode($options);                  
        
        $caminho = "qr_codes/".md5(time()).".svg";
        
        if ($obj->render($txt,$caminho)){               
    
            return $caminho;         
    
        } else {      
    
            return "erro";        
        }


    }        

}    


?>  
