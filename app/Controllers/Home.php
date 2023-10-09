<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function principal()
    {
        $data['title']='Principal';

        echo view('front/header', $data);
        echo view('front/navbar');
        echo view('front/principal');
        echo view('front/footer');
    }

    public function registro()
    {
        $data['title']='Registro';

        echo view('front/header', $data);
        echo view('front/navbar');
        echo view('back/usuario/registro');
        echo view('front/footer');
    }

    public function login()
    {
        $data['title']='Iniciar sesión';

        echo view('front/header', $data);
        echo view('front/navbar');
        echo view('back/usuario/login');
        echo view('front/footer');
    }

    public function ingresar()
    {
        $data['title']='Ingresa';

        echo view('front/header', $data);
        echo view('front/navbar');
        echo view('front/ingresar');
        echo view('front/footer');
    }


    public function acerca_de()
    {
        $data['title']='Acerca de';

        echo view('front/header', $data);
        echo view('front/navbar');
        echo view('front/acerca_de');
        echo view('front/footer');
    }

    public function quienes_somos()
    {
        $data['title']='Quienes Somos';

        echo view('front/header', $data);
        echo view('front/navbar');
        echo view('front/quienes_somos');
        echo view('front/footer');
    }
    
    
    
}
