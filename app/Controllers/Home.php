<?php namespace App\Controllers;

use App\Models\ModeloAnimal;

class Home extends BaseController
{
	public function index()
	{
		return view('homeHogarAnimal');
	}
	//funcion registrar
	public function registrar(){
		$nombre=$this->request->getPost("nombre");
		$comida=$this->request->getPost("comida");
		$edad=$this->request->getPost("edad");
		$tipo=$this->request->getPost("tipo");
		$descripcion=$this->request->getPost("descripcion");

		$datosEnvio=array(
			"nombre" 	  => $nombre,
			"comida"	  => $comida,	
			"edad" 		  => $edad,
			"tipo" 		  => $tipo,
			"descripcion" => $descripcion		 

		);

		//crear un objeto de la clase ModeloAnimal de el modelo
		$ModeloAnimal= new ModeloAnimal();

		//ejecutar el metodo insert() de el objeto anterior
		try{
			$ModeloAnimal ->insert($datosEnvio);
			return redirect()->back();
		}catch(\Exception $e){
			echo($e->getMessage());
		}

	

		
	}

	//funcion listar
	public function listar(){
		//crear el onjeto de el modelo
		$ModeloAnimal = new ModeloAnimal();

		//ejecutar la consulta 

		try{
			
			$listadoAnimales= $ModeloAnimal ->findAll();
			//organizar los datos e un arreglo asosiativo
			$datosParaVista = array("animales" => $listadoAnimales);

			//enviar datos a la vista
			return view('Listado',$datosParaVista);

		}catch(\Exception $e){
			echo($e->getMessage());
		}
	}
	// funcion eliminar
	public function eliminar($idEliminar){

		$ModeloAnimal = new ModeloAnimal();

		//ejecutar la funcion delete del modelo 
		try{
			$ModeloAnimal -> where('id',$idEliminar) -> delete();
			echo("se ha eliminado el registro");
		}catch(\Exception $e){
			echo($e->getMessage());
		}

	}
	//funcion editar
	public function editar($idEditar){


		$nombre=$this->request->getPost("nombreEditar");
		$comida=$this->request->getPost("comidaEditar");
		$descripcion=$this->request->getPost("descripcionEditar");

		$datosEnvio=array(
			"nombre" 	  => $nombre,
			"comida"	  => $comida,	
			"descripcion" => $descripcion		 

		);

		$ModeloAnimal = new ModeloAnimal();
		try{
			$ModeloAnimal -> update($idEditar,$datosEnvio);
			echo("usuario editado con exito");
		}catch(\Exception $e){
			echo($e->getMessage());
		}


	}
	//--------------------------------------------------------------------

}
