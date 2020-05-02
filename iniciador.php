<?php
//librerias

require_once 'config/Configurar.php';
require_once 'librerias/Base.php';
require_once 'librerias/Controlador.php';
require_once 'librerias/Core.php';

//AUTOLAD PHP
spl_autoload_register(function(){
	require_once 'librerias' .$nombreClase. 'php';

});


