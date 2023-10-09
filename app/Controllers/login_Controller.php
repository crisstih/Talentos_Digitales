<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\usuario_Model;

class login_Controller extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);

        $data['title']='Iniciar sesión';
        echo view('front/header', $data);
        echo view('front/navbar');
        echo view('back/usuario/login');
        echo view('front/footer');
    }

    public function auth()
    {
        $session = session();
        $model = new usuario_Model();

        //traemos los datos del formulario
        $usuario = $this->request->getVar('usuario');
        $password = $this->request->getVar('pass');

        //se verifica si el usuario ingresado en el formulario coincide con el de la tabla en la bd
        $data = $model->where('usuario', $usuario)->first();

        if($data){
            $pass = $data['pass'];
            $ba = $data['baja'];

            if($ba == 'SI'){
                $session->setFlashdata('msg', 'Usuario dado de baja');
                return redirect()->to('/login');
            }
            
            //se verifican los datos ingresados para iniciar
            $verify_pass = password_verify($password, $pass);

            if(!$verify_pass){

                $session->setFlashdata('msg', 'Ups! contraseña incorrecta. Intentalo de nuevo');
                return redirect()->to('/login');
                

            }else{


                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                    'telefono' => $data['telefono'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE
                ];

                $session->set($ses_data);

                session()->setFlashdata('msg', 'Bienvenido!!');
                return redirect()->to('panel');

        } 
    }else { 
            $session->setFlashdata('msg', 'Ha ocurrido un error. No existe el usuario');
            return redirect()->to('/login');
        }

    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

}