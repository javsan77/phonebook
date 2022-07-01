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

}
