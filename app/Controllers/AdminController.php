<?php

class AdminController extends Controllers {

    public function admin() {
        $meta = array
            (
            'title' => 'Página de inicio',
            'description' => 'Es la descripción de la página de inicio',
            'keywords' => 'php, framework, mvc',
            'robots' => 'All',
        );

        return ROUTER::show_view("admin/admin",array('meta'=>$meta));
    }

}
