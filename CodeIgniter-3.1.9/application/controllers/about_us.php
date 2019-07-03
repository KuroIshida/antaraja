<?php defined('BASEPATH') OR exit('No direct script access allowed');

 /**
  *
  */
 class about_us extends CI_Controller
 {

   function __construct()
   {
     parent::__construct();
     $this->load->model("about_us_model");
   }

   function index(){
     $this->load->view("front/about_us/about_us");
   }
 }
