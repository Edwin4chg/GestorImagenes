<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller{
    /**
    * Create a new controller instance.
    * 
    * @return void 
    */
    public function __construct(){
        $this->middleware("auth");
    }

    public function index(){
        return 'Mostrando Albumes de usuario';
    }
    public function getCrear(){
        return 'Mostrando Formulario de Creación de Albúm';
    }
    public function postCrear(){
        return 'Almacenando Album en BD';
    }
    public function getActualizar(){
        return 'Mostrando Formulario de Actualización de Albúm';
    }
    public function postActualizar(){
        return 'Actualización de Albúm';
    }
    public function postEliminar(){
        return 'Eliminando Albúm';
    }

    public function missingMethod($parameters = array()){
        abort(404);
    }
}