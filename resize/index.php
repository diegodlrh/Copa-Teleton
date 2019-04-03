<?php
if (isset($_POST['action']) && $_POST['action'] == "upload") {
    include_once "uploader.php";
    include_once "resize_image.php";
    ini_set('max_file_uploads', 100);
//    ini_set('upload_max_filesize', '300M');
//    ini_set('memory_limit', '256M');
//  var_dump($_FILES);
 
    $fecha = $_POST['fecha'];


    $uploader = new Uploader($_FILES['files']);
    $uploader->set_upload_to("/home/teleton/public_html/copa-teleton/resize/img/" . $fecha . '_' . $_POST['sexo'] . '_' . $_POST['equipo1'] . ' VS ' . $_POST['equipo2'] . '/');
    $uploader->set_valid_extensions(array('jpg', 'png', 'bmp'));
    $uploader->set_resize_image_library(new ResizeImage());

    if ($uploader->is_valid_extension() === false) {
        echo "<p>Error</p>";
        print_r($uploader->get_errors());
    } else {

        if ($uploader->run() === false) {
            echo "<p>Error</p>";
            print_r($uploader->get_errors());
        } else {
            echo "...Uploaded";
        }

        echo'<br><br>';
        if ($uploader->runMINI() === false) {
            echo "<p>Error</p>";
            print_r($uploader->get_errors());
        } else {
            echo "...Copiado a /m";
            //function resize parameter is width total
            if ($uploader->resizeMINI() === false) {
                echo "<p>Error</p>";
                print_r($uploader->get_errors());
            } else {
                echo "...Resized 300px";
            }
        }
    }

    exit;
}
?>
<!DOCTYPE html>
<html >
    <head>
        <!-- Site made with Mobirise Website Builder v4.6.7, https://mobirise.com -->
        <meta charset="UTF-8">



    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="action" value="upload" />
            Sexo: <select name="sexo" required>
                <option value="" selected disabled hidden>SELECCIONAR..</option>
                <option value="m">MASCULINO</option>
                <option value="f">FEMENINO</option>
            </select><br><br>
            Fecha: <select name="fecha" required>
                <option value="" selected disabled hidden>SELECCIONAR..</option>
                <option value="1">18/08</option>
                <option value="2">25/08</option>
                <option value="3">01/09</option>
            </select><br><br>
            Partido: <select name="equipo1" required>
                <option value="" selected disabled hidden>SELECCIONAR..</option>
                <option value="TELETON">TELETON</option>
                <option value="TELETON 2">TELETON 2</option>
                <option value="IMPRIMEX">IMPRIMEX</option>
                <option value="S.PATRÓN">S.PATRÓN</option>
                <option value="SCOTIABANK">SCOTIABANK</option>
                <option value="MEGA LABS">MEGA LABS</option>
                <option value="SANTANDER">SANTANDER</option>
                <option value="CCU URUGUAY">CCU URUGUAY</option>
                <option value="KPMG">KPMG</option>
                <option value="UNILEVER">UNILEVER</option>
                <option value="LDC">LDC</option>
                <option value="N.SIGLO">N.SIGLO</option>
                <option value="C.GUTIÉRREZ 1">C.GUTIÉRREZ 1</option>
                <option value="C.GUTIÉRREZ 2">C.GUTIÉRREZ 2</option>
                <option value="DIVINO">DIVINO</option>
                <option value="C.VIAL UY">C.VIAL UY</option>
                <option value="WINTERBOTHAM">WINTERBOTHAM</option>
                <option value="SAN FRANCISCO">SAN FRANCISCO</option>
            </select> VS 
            <select name="equipo2" required>
                <option value="" selected disabled hidden>SELECCIONAR..</option>
                <option value="TELETON">TELETON</option>
                <option value="TELETON 2">TELETON 2</option>
                <option value="IMPRIMEX">IMPRIMEX</option>
                <option value="S.PATRÓN">S.PATRÓN</option>
                <option value="SCOTIABANK">SCOTIABANK</option>
                <option value="MEGA LABS">MEGA LABS</option>
                <option value="SANTANDER">SANTANDER</option>
                <option value="CCU URUGUAY">CCU URUGUAY</option>
                <option value="KPMG">KPMG</option>
                <option value="UNILEVER">UNILEVER</option>
                <option value="LDC">LDC</option>
                <option value="N.SIGLO">N.SIGLO</option>
                <option value="C.GUTIÉRREZ 1">C.GUTIÉRREZ 1</option>
                <option value="C.GUTIÉRREZ 2">C.GUTIÉRREZ 2</option>
                <option value="DIVINO">DIVINO</option>
                <option value="C.VIAL UY">C.VIAL UY</option>
                <option value="WINTERBOTHAM">WINTERBOTHAM</option>
                <option value="SAN FRANCISCO">SAN FRANCISCO</option>
            </select><br><br>
            Fotos: <input type="file" name="files[]" multiple required/> <BR><BR>
            <input type="submit" value="Upload" />
        </form>

    </body>