<?php 
namespace App\Models;
use CodeIgniter\Model;

class Model_phone extends Model
{
    public function Get_All(){
        $sql = "SELECT * FROM contact";
        $query=$this->db->query($sql);
        
        $result = $query->getResultArray();

        return $result;
    }
}