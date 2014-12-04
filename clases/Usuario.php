<?php

class Usuario{
    private $name;
    public function getUsuario(){
        echo "mostrar usuario:".$this->name."";
    }
    public function setUsuario(){
        $this->name = "misael";
        return $this->name;
    }
    public function readUsuarioG(){

        $sql01 = "SELECT * FROM usuario WHERE Estatus = 1 ORDER BY ApellidoPaterno ASC;";
        $result01 = mysql_query($sql01) or die ("Error consulta sql01= ".mysql_error());

        echo "<div class='table-responsive'>";

        echo "<table class='table table-hover'>";

        echo "<center><strong>Consulta General</strong></center>";

        echo "<tr><td>Clave</td><td>Nombre</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Tel&eacute;fono</td><td>Calle</td><td>Estado</td><td>CP</td><td>Nivel</td></tr>";

        while ($field = mysql_fetch_array($result01)){

            $this->id = $field['Id'];
            $this->nombre = $field['Nombre'];
            $this->apellidoPaterno = $field['ApellidoPaterno'];
            $this->apellidoMaterno = $field['ApellidoMaterno'];
            $this->telefono = $field['Telefono'];
            $this->calle = $field['Calle'];
            $this->estado = $field['Estado'];
            $this->cp = $field['Cp'];
            $this->correo = $field['Correo'];
            $this->usuario = $field['Usuario'];
            $this->contrasena = $field['Contrasena'];
            $this->nivel = $field['Nivel'];
            $this->estatus = $field['Estatus'];
            switch($this->nivel){

                case 1:
                    $type = "Administrador";
                    break;
                case 2:
                    $type = "Maestro";
                    break;
                case 3:
                    $type = "Alumno";
                    break;
                default;

            }

            echo "<tr><td>$this->id</td><td>$this->nombre</td><td>$this->apellidoPaterno</td><td>$this->apellidoMaterno</td><td>$this->telefono</td><td>$this->calle</td><td>$this->estado</td><td>$this->cp</td><td>$type</td></tr>";

        }

        echo "</table>";

        echo "</div>";

    }
}

?>