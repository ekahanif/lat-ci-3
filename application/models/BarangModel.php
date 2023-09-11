<?php
class BarangModel extends CI_Model {

    public function getData() {
        $barangs = $this->db->get('barangs')->result();
        return $barangs;
    }
    public function addData($data) {
        $insert = $this->db->insert('barangs', $data);
        return $insert;
    }
}