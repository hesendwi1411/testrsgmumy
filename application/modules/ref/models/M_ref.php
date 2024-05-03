<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_ref extends CI_Model {

	/* crud start */
	public function insert($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function update($where, $table, $data)
    {
        $this->db->where($where);
        return $this->db->update($table, $data);
    }

    public function delete($where, $table)
    {
        $this->db->where($where);
        return $this->db->delete($table);
    }
	/* crud end */

}