<?PHP
include("conec.php");
$fecha = $_GET['fecha'];

//OR DATE(FechaIni) BETWEEN '" . DATE($fecha) . "' AND DATE(FechaFin) 

$q= "SELECT SUM(Total) from venta where Fecha='$fecha'"
$eq=($con,$q);




/*$select = "SELECT * FROM agendadas WHERE DATE(FechaIni)  =  '" . DATE($fecha) . "' OR  DATE(FechaFin)  =  '" . DATE($fecha) . "'  OR  '" . DATE($fecha) . "' >  DATE(FechaIni) AND '" . DATE($fecha) . "' <  DATE(FechaFin) " ;
$result = mysqli_query($cn , $select);*/

if (!$result) {

    die(mysql_error());

} else {
    $arreglo["data"] = [];
    while ($data = mysqli_fetch_assoc($result)) {

        $arreglo["data"][] = array_map("utf8_encode", $data);;

    }
    echo json_encode($arreglo);

}

mysqli_free_result($result);
mysqli_close($cn);
