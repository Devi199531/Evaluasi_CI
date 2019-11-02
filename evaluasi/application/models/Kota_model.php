<?php

class Kota_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    function create($data) {
        
        $this->db->insert('city', $data);
    }
    
    function read() {
	   $this->db->select('city.*, province.name');
	   $this->db->join('province', 'province.id_prov = city.id_prov');
       $query = $this->db->get('city');
       if ($query->num_rows() > 0) {
           foreach ($query->result() as $data) {
               $result[] = $data;
           }
           return $result;
       }
    }
	
	function update($data, $id) {
		 $this->db->where('id_city', $id);
		 $this->db->update('city', $data);
    }
 
    function delete($a) {
        $this->db->delete('city', array('id_city' => $a));
        return;
    }
 
    function open($a) {
        $d = $this->db->get_where('city', array('id_city' => $a))->row();
        return $d;
    }
	
	public function getDropdown(){
        $this->db->order_by('name', 'asc'); 
        $query = $this->db->get('city');
        foreach($query->result_array() as $row){
            $data[$row['id_city']]=$row['name'];
        }
        return $data;
    }
}