<?php

$usuario01 = new Usuario();

$titulo = 'Bienvenidos al my usuario';

$contenido = '....';

$variables = array('titulo'=>$titulo,'contenido'=>$contenido,'nombre'=>$usuario01->setUsuario());

view('myusuario',$variables);

?>