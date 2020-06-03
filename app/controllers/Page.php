<?php
  class Page extends Controller {
    public function __construct() {
      
    }

    public function index() {
      $data = [
        'title' => 'MVC framework'
      ];      

      $this->view('page/index', $data);
    }

    public function about() {
      $data = [
        'title' => 'About Us'
      ];

      $this->view('page/about', $data);
    }
  }