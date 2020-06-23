<?php

    class oficinaController extends Controller{
        public function __construct(){
        }

        public function index(){
            $data =
            [
                'title' => 'ESIS'
            ];
            View::render('Oficina', $data);
        }

        function flash(){
            View::render('flash');
        }

    }
