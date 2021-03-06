<?php
/*
 * incluye el modelo mesa, con los metodos y acceso 
 * a la base de datos
 */
include "../model/Mesa.php";
include "../model/Usuario.php";
/**
 * recibe por POST el metodo segun
 * el proceso que valla a realizar
 */
if (isset($_POST["metodo"])) {
    $metodo=$_POST["metodo"];
}
//si no recibe metodo
 else {
    die ('301:Error, no existe dirección');
}

/**
 * Direcciona al metodo que se recibe
 */
switch ($metodo) {
    case "create":
        verificarAdmin();
        crear();
        break;
    case "update":
        verificarAdmin();
        actualizar();
        break;
    case "delete":
        verificarAdmin();
        eliminar();
        break;
    case "listaMesas":
        verificarUser();
        listaMesas();
        break;
    case "cambiarEstado":
        verificarAdmin();
        cambiarEstado();
        break;
    case "pedidoMesas":
        verificarUser();
        pedido_mesas();
        break;
    case "mesasSelect":
        verificarUser();
        mesasSelect();
        break;
    
    default:
        die ('302:Error, no se encontro dirección');
}
   
/**
 * Crear una mesa
 * @param Post nombreMesa recibe nombre de la mesa que 
 * va a crear
 */
function crear(){
$nombre = $_POST["nombre_mesa"];
$mesa = new Mesa(null,$nombre);
$respuesta = $mesa->createMesa();

if (is_object($respuesta)) {
    echo "exito";
} else {
    echo "$respuesta";
}
}
/**
 * Actualizar una mesa
 * @param Post idMesa,nombreMesa recibe id y 
 * nombre actualizado  de la mesa que 
 * va a crear
 */
function actualizar(){
$id=$_POST["id_mesa"];
$descripcion = $_POST["descripcion"];
$mesasActualizar= new Mesa($id,$descripcion);
$resultado=$mesasActualizar->updateMesa();

if ($resultado=="Exito") {
    echo "Exito";
} else {
    echo $resultado;
}
}

/**
 * Cambia el estado de la mesa a activo o bloqueado
 * @param Post idMesa
 */
function cambiarEstado(){
$id=$_POST["id_mesa"];
$mesasActualizar= new Mesa($id);
$resultado=$mesasActualizar->cambiarEstado();

if ($resultado=="Exito") {
    echo "Exito";
} else {
    echo $resultado;
}
}

/**
 * Eliminar una mesa
 * @param Post idMesa,recibe id de la
 *  mesa que va a eliminar
 */
function eliminar(){
$id=$_POST["id_mesa"];
$mesa = new Mesa($id);
$respuesta = $mesa->deleteMesa();
if (is_object($respuesta)) {
   echo "Exito";
} else {
    echo $respuesta;
}
}

/**
 * Lista de  mesas
 * @Return lista de mesas
 * formato HTML tabla
 */
function listaMesas(){
    
    $mesasConsulta= new Mesa();
    $consulta=$mesasConsulta->getMesas();  
    
    foreach ($consulta as $mesa) {
        if ($mesa['estado']=="activa"){
            $claseEstado="success";
            $iconAccion="ban";
        }
        else {
            $claseEstado="danger";
            $iconAccion="check";
        }
        echo '<tr>
        <td>'.$mesa['id'].'</td>
        <td>'.$mesa['descripcion'].'</td>
        <td><button type="button" class="btn btn-'.$claseEstado.' btn-xs">'.$mesa['estado'].'</button></td>
        <td><h4> 
            <a class="fa fa-'.$iconAccion.'" onclick="bloquearMesa('.$mesa["id"].')"></a>    
            <a class="fa fa-edit" onclick="modalEditarMesa('.$mesa["id"].',\''.$mesa["descripcion"].'\')"></a>  
            <a class="fa fa-remove" onclick="modalEliminarMesa('.$mesa["id"].')"></a>
        </h4></td>
        </tr>';
        }    
    }
    
  /**
 * seleccion de mesas
 * @Return lista de mesas con su disponiblidad
 * formato HTML tabla
 */
function pedido_mesas(){
    
    $mesasConsulta= new Mesa();
    $consulta=$mesasConsulta->getMesas();  
    
    foreach ($consulta as $mesa) {
        if ($mesa["estado"]=="activa") {        
          if ($mesa['estado']=="activa") {        
                $mesaDis=new Mesa($mesa['id']);
                $disponibilidad=$mesaDis->getMesaDisponiblidad();
                if ($disponibilidad==1){
                    $claseEstado="mesa_ocupada";
                    $estado="Ocupada";
                }
                else {
                    $claseEstado="mesa_disponible";
                    $estado="Disponible";
                }
                $direccion='\'pedido_productos.php?mesa='.$mesa['id'].'\'';
                echo '<div onClick="location.href='.$direccion.'" style="cursor: pointer" class="col-md-3 col-sm-6 '.$claseEstado.'">
                                   <h5>'.$mesa['descripcion'].'</h5>
                                   <a><img src="images/mesa.png"></a>
                                   <h4>'.$estado.'</h4>
                      </div>';
                } 
            }
        }
    }
     /**
     * lista de mesas para mostrar en select en formato
     * html
     */
    function mesasSelect(){
        $mesasConsulta= new Mesa();
        $consulta=$mesasConsulta->getMesas();  
        echo '<option value="">Seleccione Mesa</option>';
        foreach ($consulta as $mesa) {
            if ($mesa["estado"]=="activa") {          
                    $mesaDis=new Mesa($mesa['id']);
                    $disponibilidad=$mesaDis->getMesaDisponiblidad();                    
                    if ($disponibilidad!=1){
                         echo '<option value="'.$mesa['id'].'">'.$mesa['descripcion'].'</option>';
                    }
                }
            }
    }
    /**
    * confirma que exista la sesion de usuario y que sea administrador
    * para poder realizar cambios propios de este privilegio
    */
    function verificarAdmin(){        
        $usuario = new Usuario();
        $usuario= $usuario->getSesion();
        if (!is_object($usuario)) {
            die ('Por favor inicie sesion para continuar');
        }
        if ($usuario->getPrivilegios()[0]!=1) {
           die('no esta autorizado para realizar esta accion');
        }
    }
    
    /**
    * confirma que exista la sesion de usuario y que sea empleado
    * para poder realizar cambios propios de este privilegio
    */
    function verificarUser(){
        
        $usuario = new Usuario();
        $usuario= $usuario->getSesion();
        if (!is_object($usuario)) {
            die ('Por favor inicie sesion para continuar');
        }
    }
   
?>