<?php
class Modelo_Grafico{
    private $conexion;
    function __construct()
    {
        require_once('conexion.php');
        $this->conexion = new conexion();
        $this->conexion->conectar();
    }
    function TraerDatosGrafico(){
        $sql = "CALL SP_SUMAVOTOS";
        $arreglo = array();
        if ($consulta = $this->conexion->conexion->query($sql)){

            while($consulta_VU = mysqli_fetch_array($consulta)){
                $arreglo[]= $consulta_VU;
            }
            return $arreglo;
            $this->conexion->cerrar();
        }
    }
    function TraerDatosGrafico2(){
        $sql = "CALL SP_SUMAVOTOS2";
        $arreglo = array();
        if ($consulta = $this->conexion->conexion->query($sql)){

            while($consulta_VU = mysqli_fetch_array($consulta)){
                $arreglo[]= $consulta_VU;
            }
            return $arreglo;
            $this->conexion->cerrar();
        }
    }
    function TraerDatosGrafico3(){
        $sql = "CALL SP_SUMAVOTOS3";
        $arreglo = array();
        if ($consulta = $this->conexion->conexion->query($sql)){

            while($consulta_VU = mysqli_fetch_array($consulta)){
                $arreglo[]= $consulta_VU;
            }
            return $arreglo;
            $this->conexion->cerrar();
        }
    }
    function TraerDatosGrafico4(){
        $sql = "CALL SP_SUMAVOTOS4";
        $arreglo = array();
        if ($consulta = $this->conexion->conexion->query($sql)){

            while($consulta_VU = mysqli_fetch_array($consulta)){
                $arreglo[]= $consulta_VU;
            }
            return $arreglo;
            $this->conexion->cerrar();
        }
    }
    function TraerDatosGrafico5(){
        $sql = "CALL SP_SUMAVOTOS5";
        $arreglo = array();
        if ($consulta = $this->conexion->conexion->query($sql)){

            while($consulta_VU = mysqli_fetch_array($consulta)){
                $arreglo[]= $consulta_VU;
            }
            return $arreglo;
            $this->conexion->cerrar();
        }
    }
    function TraerDatosGrafico6(){
        $sql = "CALL SP_SUMAVOTOS6";
        $arreglo = array();
        if ($consulta = $this->conexion->conexion->query($sql)){

            while($consulta_VU = mysqli_fetch_array($consulta)){
                $arreglo[]= $consulta_VU;
            }
            return $arreglo;
            $this->conexion->cerrar();
        }
    }
    function TraerDatosGrafico7(){
        $sql = "CALL SP_SUMAVOTOS7";
        $arreglo = array();
        if ($consulta = $this->conexion->conexion->query($sql)){

            while($consulta_VU = mysqli_fetch_array($consulta)){
                $arreglo[]= $consulta_VU;
            }
            return $arreglo;
            $this->conexion->cerrar();
        }
    }
    function TraerDatosGrafico8(){
        $sql = "CALL SP_SUMAVOTOS8";
        $arreglo = array();
        if ($consulta = $this->conexion->conexion->query($sql)){

            while($consulta_VU = mysqli_fetch_array($consulta)){
                $arreglo[]= $consulta_VU;
            }
            return $arreglo;
            $this->conexion->cerrar();
        }
    }
}
?>