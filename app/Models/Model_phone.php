<?php 
namespace App\Models;
use CodeIgniter\Model;

class Model_phone extends Model
{
    public function Get_All(){
        $sql = "SELECT * FROM contact WHERE activo=1";
        $query=$this->db->query($sql);
        
        $result = $query->getResultArray();

        return $result;
    }

    public function store($data){
        $firstname = $data["firstname"];
        $lastname = $data["lastname"];
        $phone = $data["phone"];

        $sql = "INSERT INTO contact (firstname, lastname, phone)
              VALUES ('".$firstname."','".$lastname."','".$phone."')";

        $query=$this->db->query($sql);

        return $this->db->affectedRows();
    }

    public function actualizar($data){
        $id = $data["id"];

        $sql = "UPDATE contact 
                SET activo = 0
                WHERE id='".$id."'";

        $query=$this->db->query($sql);

        return $this->db->affectedRows();
    }

}