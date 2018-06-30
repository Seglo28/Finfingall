<?php
class ModelZapato extends CI_Model {

    public $id = 'id';
    public $table = 'zapato';

    public function __construct(){
        parent::__construct();
    }


    public function getAll(){
        return $this->db->get($this->table)->result();
    }

}