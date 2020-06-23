<?php

    class informativaController extends Controller{
        public function __construct(){
        }

        public function index(){
            $data =
            [
                'title' => 'ESIS'
            ];
            View::render('Informativa', $data);
        }

        function flash(){
            View::render('flash');
        }

    }
