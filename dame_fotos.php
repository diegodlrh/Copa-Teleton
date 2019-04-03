<?php

if (isset($_POST)) {
    $dire = $_POST['dire'];
 

    mostrar_imagenes($dire);
}

function mostrar_imagenes($ruta) {
    $retorno[0] ='';
    // Se comprueba que realmente sea la ruta de un directorio
    if (is_dir($ruta)) {
        // Abre un gestor de directorios para la ruta indicada
        $gestor = opendir($ruta);
        
        // Recorre todos los archivos del directorio
        while (($archivo = readdir($gestor)) !== false) {
            // Solo buscamos archivos sin entrar en subdirectorios
            if (is_file($ruta . "/" . $archivo)) {
                
                 $imagen = getimagesize($ruta . "/" . $archivo);    //Sacamos la información
                 $ancho = $imagen[0];              //Ancho
                 $alto = $imagen[1]; 
                
                $retorno[0] .='<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">' .
                        '<a href="'.$ruta. '/' . $archivo.'" itemprop="contentUrl" data-size="'.$ancho.'x'.$alto.'">' .
                            '<img src="'.$ruta. '/miniatura/' . $archivo.'" itemprop="thumbnail" alt="Image description" /> '.
                        '</a>'.
                        '<figcaption itemprop="caption description"></figcaption>'.
                    '</figure>';
             }
        }

        // Cierra el gestor de directorios
        closedir($gestor);
    } else {
        $retorno[0]= "No es una ruta de directorio valida<br/>";
    }
    
    echo json_encode($retorno);
}