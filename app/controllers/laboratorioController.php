<?php

    class laboratorioController extends Controller{
        public function __construct(){
        }

        public function index(){
            $data =
            [
                'title' => 'ESIS'
            ];
            View::render('Laboratorio', $data);
        }

        function flash(){
            View::render('flash');
        }

    }
