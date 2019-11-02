<?php

class Provinsi_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    function create($data) {
        
        $this->db->insert('province', $data);
    }
    
    function read() {
	   $this->db->select('province.*');
       $query = $this->db->get('province');
       if ($query->num_rows() > 0) {
           foreach ($query->result() as $data) {
               $result[] = $data;
           }
           return $result;
       }
    }
	
	function update($data, $id) {
		 $this->db->where('id_prov', $id);
		 $this->db->update('province', $data);
    }
 
    function delete($a) {
        $this->db->delete('province', array('id_prov' => $a));
        return;
    }
 
    function open($a) {
        $d = $this->db->get_where('province', array('id_prov' => $a))->row();
        return $d;
    }
	
	public function getDropdown(){
        $this->db->order_by('name', 'asc'); 
        $query = $this->db->get('province');
        foreach($query->result_array() as $row){
            $data[$row['id_prov']]=$row['name'];
        }
        return $data;
    }
}