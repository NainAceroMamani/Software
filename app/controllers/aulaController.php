<?php

    class aulaController extends Controller{
        public function __construct(){
        }

        public function index(){
            $data =
            [
                'title' => 'ESIS'
            ];
            View::render('Aula', $data);
        }

        function flash(){
            View::render('flash');
        }

    }
