<?php

    class congresoController extends Controller{
        public function __construct(){
        }

        public function index(){
            $data =
            [
                'title' => 'ESIS'
            ];
            View::render('Congreso', $data);
        }

        function flash(){
            View::render('flash');
        }

    }
