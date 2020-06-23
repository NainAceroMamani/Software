<?php

    class egresadoController extends Controller{
        public function __construct(){
        }

        public function index(){
            $data =
            [
                'title' => 'ESIS'
            ];
            View::render('Egresado', $data);
        }

        function flash(){
            View::render('flash');
        }

    }
