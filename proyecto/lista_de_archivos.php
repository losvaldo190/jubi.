<?php
function listarArchivos($directorio) {
    $archivos = [];
    if (is_dir($directorio)) {
        if ($gestor = opendir($directorio)) {
            while (false !== ($archivo = readdir($gestor))) {
                if ($archivo != "." && $archivo != "..") {
                    $archivos[] = $archivo;
                }
            }
            closedir($gestor);
        }
    }
    return $archivos;
}
?>
