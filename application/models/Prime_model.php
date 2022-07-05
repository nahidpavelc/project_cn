<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//first rename this file as "Prime_model.php" and put it on models directory
class Prime_model extends CI_Model {

    public function get_data($table) {
        $query = $this->db->get($table);
        return $query->result_array();
    }

}
