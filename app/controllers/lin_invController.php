<?php

    class lin_invController extends Controller{
        public function __construct(){
        }

        public function index(){
            $data =
            [
                'title' => 'ESIS'
            ];
            View::render('Lin_inv', $data);
        }

        function flash(){
            View::render('flash');
        }

    }
