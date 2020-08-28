<?php


namespace src\controllers;


use core\Controller;
use \src\models\Usuario;

class ListaController extends Controller
{
    public function listar(){
        $usuarios = Usuario::select()->execute();

        $this->render('listaView',[
            'usuarios' => $usuarios
        ]);
    }
}