<?php 

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model {

    public function allData()
    {
        return $this->db->table('tn')
                    ->orderBy('no', 'DESC')
                    ->get()->getResultArray();
    }

    public function detailData($no)
    {
        return $this->db->table('tn')
                    ->where('no', $no)
                    ->get()->getRowArray();
    }

    public function add($data)
    {
        $this->db->table('tn')->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('tn')->where('no', $data['no'])->update($data);
    }

    public function delete_data($data)
    {
        $this->db->table('tn')->where('no', $data['no'])->delete($data);
    }
}