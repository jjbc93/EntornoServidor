<?php
if(!$_REQUEST){
    include "formulario.html";
}else{
    $provincia=$_GET["provincia"];
    Mantenimiento::mostrarDatos($provincia);
}