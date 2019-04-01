
<?php
session_start();


require_once "../../config/database.php";

/*if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}

else {*/
    if ($_GET['act']=='insert') {
        if (isset($_POST['Guardar'])) {
     
            $nombre  = mysqli_real_escape_string($mysqli, trim($_POST['nombre']));
            $localidad  = mysqli_real_escape_string($mysqli, trim($_POST['localidad']));

            // convertir a mayuscula solo el primer caracter
            $nombre = ucwords(strtolower($nombre));

            $sql = mysqli_query($mysqli,"INSERT INTO barrios(nombre,idlocalidad)VALUES ('$nombre','$localidad')");

            if($sql){
                header("location: ../../main.php?module=barrios&alert=1");
            }

        }   
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['Guardar'])) {
            if (isset($_POST['idbarrio'])) {

                $idbarrio = $_POST['idbarrio'];
                $nombre  = mysqli_real_escape_string($mysqli, trim($_POST['nombre']));
                $localidad  = mysqli_real_escape_string($mysqli, trim($_POST['localidad']));

                $nombre = ucwords(strtolower($nombre));
            //    $updated_user = $_SESSION['id_user'];

                $query = mysqli_query($mysqli, "UPDATE barrios SET nombre         = '$nombre',
                                                                   idlocalidad    = '$localidad'
                                                                   
                                                                    
                                                              WHERE idbarrios  = '$idbarrio'")
                                                or die('error: '.mysqli_error($mysqli));

    
                if ($query) {
                  
                    header("location: ../../main.php?module=barrios&alert=2");
                }   
            }
        }
    }   
//}       
?>