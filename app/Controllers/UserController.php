<?php

class UserController extends Controllers
{
    
    public $layout = "layouts/layoutmain";
    public $layoutadmin = "layouts/layout";


    public function index()
    {
        $meta = array
            (
            'title' => 'Página de inicio',
            'description' => 'Es la descripción de la página de inicio',
            'keywords' => 'php, framework, mvc',
            'robots' => 'All',
            );
   
        return ROUTER::show_view('user/index', array('meta' => $meta));
    }
    
    public function login()
    {
         $meta = array
            (
            'title' => 'Página de inicio',
            'description' => 'Es la descripción de la página de inicio',
            'keywords' => 'php, framework, mvc',
            'robots' => 'All',
            );
   
        return ROUTER::show_view_login('user/login',array('meta'=>$meta));
    }
    
    public function guardar(){
        
    }
    
}

