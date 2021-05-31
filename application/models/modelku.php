<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelku extends CI_Model{
	// public function getDataBase()
	// {
    //     $datakita = $this->db->query("SELECT * FROM pelanggan");
    //     return $datakita;
    // }

    public function getData($tabel)
    {
        $det = $this->db->get($tabel);
        return $det->result_array();
    }

    public function masukan($tabel, $data)
    {
        $det = $this->db->insert($tabel, $data);
        return $det;
    }

    public function perbarui($tabel, $data)
    {
        $det = $this->db->update($tabel, $data);
        return $det;
    }

    public function hapus($tabel, $where)
    {
        $det = $this->db->delete($tabel, $where);
        return $det;
    }

    public function getData_khusus($tabel, $where)
	{
		$this->db->order_by('no','DESC');
        $det = $this->db->get_where($tabel, $where);
        return $det->result_array();
	}
}
?>