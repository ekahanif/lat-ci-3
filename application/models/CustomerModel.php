<?php
class CustomerModel extends CI_Model {

    public function getData() {
        $customers = $this->db->get('customers')->result();
        return $customers;
    }
    public function addData($data) {
        $insert = $this->db->insert('customers', $data);
        return $insert;
    }
}