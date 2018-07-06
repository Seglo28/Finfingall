<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('ModelZapato', 'mzapato');
	}

	public function index()
	{
		
		
		$zataptos = $this->mzapato->getAll();

		echo '<pre>';
		echo print_r($zataptos);
	}


	public function show(){
		
		echo 'hola';
	}

	public function showName(){
		$nombre = $this->input->get('nombre');
		$ape = $this->input->get('apellido');
		echo $nombre.' '.$ape;
	}

	public function insertarEnBaseUnZapato(){
		$add['marca'] = $this->input->post('txtMarca');
		$add['estilo'] = $this->input->post('txtEstilo');
		$add['precio'] = $this->input->post('txtPrecio');


		if($this->mzapato->addShoes($add)){
			echo 'insertado';
		} else {
			echo 'No se logro insertar';
		}
	}

	public function verZapato($idZapato){
		$this->output->set_content_type('application/json'); //decorador para formatear la salida
		
		
		$salida = $this->mzapato->selectShoes($idZapato);

		if(is_null($salida)){ //si es nuelo, entonces imprime un objecto vacio
			$salida = new stdClass();
		}
		
		echo json_encode($salida);
	}

	//pruebo la consola
}
