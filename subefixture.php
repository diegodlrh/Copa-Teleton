<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <title>Subir fixture</title>
    </head>
    <body>
        <form enctype="multipart/form-data" action="subefixture.php" method="POST">
            <p>Subir Fixture</p>
            <input type="file" name="uploaded_file[]" multiple/>
            <br/>
            <br/>
            <input type="password" name="pass" placeholder="Contraseña"/>
            <br>
            <br>
            <input type="submit" value="SUBIR"/>
        </form>
    </body>
</html>
<?PHP
if (!empty($_FILES['uploaded_file'])) {
    if ($_POST['pass'] === 'copa2018fixture') {
        $file_ary = reArrayFiles($_FILES['uploaded_file']);

        foreach ($file_ary as $file) {
            $path = "/home/teleton/public_html/copa-teleton/img/fixture/";
            $path = $path . basename($file['name']);

            echo '<pre>';
            if (move_uploaded_file($file['tmp_name'], $path)) {
                echo "El archivo " . basename($file['name']) .
                " fue subido con éxito";
            } else {
                echo "Hubo problemas al cargar, intentar de nuevo!";
            }
        }
    } else {
        echo 'La contraseña no es correcta';
    }
//    $path = $path . basename( $_FILES['uploaded_file']['name']);
//    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
//      echo "El archivo ".  basename( $_FILES['uploaded_file']['name']). 
//      " fue subido con éxito";
//    } else{
//        echo "Hubo problemas al cargar, intentar de nuevo!";
//    }
}

function reArrayFiles($file) {
    $file_ary = array();
    $file_count = count($file['name']);
    $file_key = array_keys($file);

    for ($i = 0; $i < $file_count; $i++) {
        foreach ($file_key as $val) {
            $file_ary[$i][$val] = $file[$val][$i];
        }
    }
    return $file_ary;
}
?>