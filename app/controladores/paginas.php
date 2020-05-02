<?php 

class paginas extends controlador{
	public function __construct{){
	//echo  'Controlador paginas cargado';
    }
  
public function index(){
   $datos = [
   	'titulo'- >'bienvenidos a Mvc']

	$this - >vista('paginas/inicio');
}
public function articulos(){
	$this - >vista('paginas/articulo');

}
public function actulizar($num_registro){	
	echo $num_registro;
  }
}