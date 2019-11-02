<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Prov_model extends CI_Model
{
	public function get_prov($id = FALSE)
    {
        if ($id === FALSE) {
            $query = $this->db->get('province');
            return $query->result_array();
        }

        $query = $this->db->get_where('province', array('id_prov' => $id));
        return $query->row_array();
    }

	public function get_all()
	{
		$result = $this->db->query('select * from province');

		return $result->result();
	}

	public function get()
	{
		$data = $this->db->get('province');

		return $data->result_array();

	}

	public function get_by_id($id)
	{
		$data=$this->db->get_where('province',['id_prov'=>$id]);

		return $data->row();
	}

	public function store($data)
	{
		return $this->db->insert('province',$data);
	}

	public function update($data, $id)
    {
    	$this->db->where('id_prov', $id);
        $this->db->update('province', $data);
    }


	public function delete($id){
        $this->db->delete('province', array('id_provi'=>$id))->row();
        return $id;
    }
}

