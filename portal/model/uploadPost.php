<?php
session_start();

$SendCadImg = filter_input(INPUT_POST, 'SendCadImg', FILTER_SANITIZE_STRING);
if ($SendCadImg) {
    $arquivo = $_FILES['inserirFoto'];
    for ($cont = 0; $cont < count($arquivo['name']); $cont++) {
        $nome = $_FILES['inserirFoto']['name'];
        echo $nome[$cont];
        // Pega a extensao
    $extensao= strrchr($nome[$cont], '.');
    // Converte a extensao para mimusculo
    $extensao = strtolower($extensao);
    echo"Extensao aqui" .$extensao;
        if(strstr('.jpg;.jpeg;.gif;.png', $extensao))
            {
                
             
                $resultado_final = "img_".md5($nome[$cont].time());
           
                $destino = "imagens/" . $resultado_final.$extensao;
                if (move_uploaded_file($arquivo['tmp_name'][$cont], $destino)) {
                    echo "Upload realizado com sucesso";
                } else {
                        echo "Erro ao realizar upload";
                    }
            }
        else
         {
            echo "Você poderá enviar apenas arquivos \"*.jpg;*.jpeg;*.gif;*.png\"<br />";
        }

      
    }
} else {
            echo "Erro ao realizar upload";
    
}