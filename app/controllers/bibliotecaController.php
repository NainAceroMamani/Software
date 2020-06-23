<?php

    class bibliotecaController extends Controller{
        public function __construct(){
        }

        public function index(){
            $data =
            [
                'title' => 'ESIS'
            ];
            View::render('Biblioteca', $data);
        }

        function flash(){
            View::render('flash');
        }

    }
