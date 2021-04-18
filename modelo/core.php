<?php
require_once "conexion.php";
class Gestor_Contenidos_Modelo{
    static public function categoria_modelo($tabla){
        $consulta = Conexion::conectar()->prepare("SELECT categoria, imagen, icono, color, subtitulo, descripcion, enlace
        FROM $tabla");
        $consulta->execute();
        return $consulta-> fetchAll();
        $consulta->close();
        $consulta = null;
    }

    static public function servicio_modelo($tabla, $id_categoria){
        $consulta = Conexion::conectar()->prepare("SELECT servicio_categoria.categoria, servicio_categoria.imagen AS imagen_categoria, servicio.servicio, servicio.precio, servicio.descripcion, servicio.imagen
        FROM $tabla, servicio_categoria
        WHERE servicio.categoria = :categoria
        AND servicio_categoria.id = servicio.categoria
        AND servicio.estado = 2");
        $consulta->bindParam(":categoria", $id_categoria, PDO::PARAM_INT);
        $consulta->execute();
        return $consulta-> fetchAll();
        $consulta->close();
        $consulta = null;
    }
}