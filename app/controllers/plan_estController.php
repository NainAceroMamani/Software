<?php

    class plan_estController extends Controller{
        public function __construct(){
        }

        public function index(){
            $data =
            [
                'title' => 'ESIS'
            ];
            View::render('Plan_est', $data);
        }

        function flash(){
            View::render('flash');
        }

    }
