<?php

    class convenioController extends Controller{
        public function __construct(){
        }

        public function index(){
            $data =
            [
                'title' => 'ESIS'
            ];
            View::render('Convenio', $data);
        }

        function test(){
            $data =
            [
                'title' => 'Backend Software Ciis',
                'Description' => 'Nain Acero Mamani',
                'Prueba' => [
                    'title' => 'Prueba Backend v1.0.0'
                ]
            ];
            echo json_encode($data);
            return;
        }

        function flash(){
            View::render('flash');
        }

    }