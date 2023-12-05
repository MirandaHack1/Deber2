<?php
require_once('../Models/cls_empleado.model.php');
$empleado = new Clase_Empleado;
switch ($_GET["op"]) {
    case 'todos':
        $datos = array(); //defino un arreglo
        $datos = $empleado->todos(); //llamo al modelo de usuarios e invoco al procedimiento todos y almaceno en una variable
        while ($fila = mysqli_fetch_assoc($datos)) { //recorro el arreglo de datos
            $todos[] = $fila;
        }
        echo json_encode($todos); //devuelvo el arreglo en formato json
        break;
    case 'insertar':
        $frm_identificacion = $_POST['frm_identificacion'];
        $frm_empleado = $_POST['frm_empleado'];
        $frm_fecha_nacimiento = $_POST['frm_fecha_nacimiento'];
        $frm_celular = $_POST['frm_celular'];
        $frm_estado = $_POST['frm_estado'];
        $datos = array(); //defino un arreglo
        $datos = $empleado->insertar($frm_identificacion, $frm_empleado, $frm_fecha_nacimiento, $frm_celular, $frm_estado); //llamo al modelo de usuarios e invoco al procedimiento insertar
        echo json_encode($datos); //devuelvo el arreglo en formato json
        break;
}
