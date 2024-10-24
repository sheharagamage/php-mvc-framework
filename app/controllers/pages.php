<?php
    class pages extends controller/* inherit from controller.php*/ {
        public function __construct(){
           $this->pagesModel =$this->model('M_pages');
        }

        public function index(){//method

        }

        public function test()
        {
            $this->view('pages/test');
        }

        public function landing_page()
        {
            $this->view('pages/landing_page');
        }
    }