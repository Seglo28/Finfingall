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
}
