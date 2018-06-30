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

    public function addShoes($popodevaca) {
        return $this->db->insert($this->table, $popodevaca);
    }

    public function selectShoes($idZapato){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where($this->id, $idZapato);

        $result = $this->db->get();

        return $result->row();
    }

    public function searchMarca($busqueda){
        
    }

}