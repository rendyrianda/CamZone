<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kamera extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('tbl_kamera')
                 ->order_by('id_kamera', 'DESC')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("tbl_kamera", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id_kamera)
    {

        $query = $this->db->where("id_kamera", $id_kamera)
                ->get("tbl_kamera");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $id)
    {

        $query = $this->db->update("tbl_kamera", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {

        $query = $this->db->delete("tbl_kamera", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

}