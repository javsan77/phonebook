<?php

namespace App\Controllers;
use App\Models\Model_phone;
use CodeIgniter\Controller;

class Home extends Controller
{

    public function index(){
        $model = new Model_phone();
        $data['list'] = $model->Get_All();
        return view('home',$data);
    }

    public function search(){
        echo ($_POST['text']);

        echo json_encode("abcdde");

    }

    public function save(){

        $model = new Model_phone();
      
        $msg = array();

        $data["firstname"] =trim($_POST["firstname"]);
        $data["lastname"] =trim($_POST["lastname"]);
        $data["phone"] =trim($_POST["phone"]);

        $result = $model->store($data);;
        
       if($result == 1){
            $msg["text"] = "Los datos fueron registrados correctamente.";
            $msg["resp"] = 100;
            
        }
        else{
            $msg["resp"] = 10;
            $msg["text"] = "No se pudo crear la institución educativa.";
        }
        
        echo json_encode($msg);
    }

    public function delete(){

        $model = new Model_phone();
        $msg = array();
        $data["id"] =trim($_POST["id"]);

        $result = $model->desactivar($data);;
        
       if($result == 1){
            $msg["text"] = "Los datos fueron registrados correctamente.";
            $msg["resp"] = 100;
            
        }
        else{
            $msg["resp"] = 10;
            $msg["text"] = "No se pudo crear la institución educativa.";
        }
        
        echo json_encode($msg);
    }

    public function recover(){
        $model = new Model_phone();
        $list = $model->recover($_POST['id']);

        echo json_encode($list);
        //return view('home',$data);
    }

    public function update(){

        $model = new Model_phone();
        $msg = array();
        $data["id"] =trim($_POST["eid"]);
        $data["firstname"] =trim($_POST["efirstname"]);
        $data["lastname"] =trim($_POST["elastname"]);
        $data["phone"] =trim($_POST["ephone"]);        

        $result = $model->actualizar($data);;
        
       if($result == 1){
            $msg["text"] = "Los datos fueron registrados correctamente.";
            $msg["resp"] = 100;
            
        }
        else{
            $msg["resp"] = 10;
            $msg["text"] = "No se pudo crear la institución educativa.";
        }
        
        echo json_encode($msg);
    }    
}
