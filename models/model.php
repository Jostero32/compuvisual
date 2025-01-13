<?php
class EnlacesPaginas{
    public function EnlacesPaginasModel($enlacesModel){
    if($enlacesModel=="nosotros" ||$enlacesModel== "servicios"||$enlacesModel== "contactanos"|| $enlacesModel=="login"||$enlacesModel=="salir"){
        $module="views/".$enlacesModel.".php";
    }
    else if($enlacesModel=="reporte"){
            if($_GET["reporte"]=="fpdf"){
                $module="Reportes/".$_GET["reporte"].".php";
            }else{
                $module="reporteireport.php";
            }
        }
    else{
            $module="views/inicio.php";
    }
        return $module;
    }
}
?>