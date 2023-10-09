<?php

namespace App\Controllers;
use CodeIgniter\Controller;


class panel_Controller extends Controller
{
    public function index()
    {
        $session = session();
        $nombre = $session->get('usuario');
        $perfil = $session->get('perfil_id');

        $data['perfil_id']= $perfil;

        $dato['title']='Panel de usuario';
        echo view('front/header', $dato);
        echo view('front/navbar');
        echo view('back/usuario/usuario_logueado', $data);
        echo view('front/footer');


    }

}