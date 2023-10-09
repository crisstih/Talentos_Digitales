<?php

namespace App\Controllers;
use App\Models\usuario_Model;
use CodeIgniter\Controller;

class usuario_controller extends Controller{

    public function __construct() {
        helper(['form', 'url']);
    }

    public function create()
    {
        $data['title']='Registro';

        echo view('front/header', $data);
        echo view('front/navbar');
        echo view('back/usuario/registro');
        echo view('front/footer');
    }

    public function formValidation(){
        $input = $this-> validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[50]',
            'email' => 'required|min_length[3]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'usuario' => 'required|min_length[3]|is_unique[usuarios.usuario]',
            'telefono' => 'required|min_length[3]|numeric',
            'pass' => 'required|min_length[3]|max_length[100]',

        ],
    );

    $formModel = new usuario_Model();

    if(!$input){
        $data['title']= 'Registro';
        echo view('front/header', $data);
        echo view('front/navbar');
        echo view('back/usuario/registro', ['validation' => $this->validator]);
        echo view('front/footer');
    }else{
        $formModel->save([
            'nombre' => $this->request->getVar('nombre'),
            'apellido' => $this->request->getVar('apellido'),
            'email' => $this->request->getVar('email'),
            'usuario' => $this->request->getVar('usuario'),
            'telefono' => $this->request->getVar('telefono'),
            'pass' => password_hash($this->request->getVar('pass'), PASSWORD_BCRYPT),
        ]);

        session()->setFlashdata('msg', 'Usuario registrado con exito');
        return $this->response->redirect('login');

    }

    }
}

