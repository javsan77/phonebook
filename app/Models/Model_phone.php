<?php 
namespace App\Models;
use CodeIgniter\Model;

class Model_phone extends Model
{
    public function Get_All(){
        $sql = "SELECT * FROM contact WHERE activo=1 ORDER BY id DESC";
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

    public function desactivar($data){
        $id = $data["id"];

        $sql = "UPDATE contact 
                SET activo = 0
                WHERE id='".$id."'";

        $query=$this->db->query($sql);

        return $this->db->affectedRows();
    }

    public function recover($id){//echo $id;
        $sql = "SELECT * FROM contact WHERE activo=1 AND id='".$id."'";
        $query=$this->db->query($sql);
        
        $result = $query->getRow();

        return $result;
    }

    public function actualizar($data){//var_dump($data);die();
        $id = $data["id"];
        $firstname = $data["firstname"];
        $lastname = $data["lastname"];
        $phone = $data["phone"];        

        $sql = "UPDATE contact 
                SET firstname = '".$firstname."', 
                lastname = '".$lastname."', 
                phone = '".$phone."'  
                WHERE id='".$id."'";

        $query=$this->db->query($sql);

        return $this->db->affectedRows();
    }

}