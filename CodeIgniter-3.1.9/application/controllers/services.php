<?php defined('BASEPATH') OR exit('No direct script access allowed');

 /**
  *
  */
 class services extends CI_Controller
 {

   function __construct()
   {
     parent::__construct();
     $this->load->model("services_model");
   }

   function index(){
     $this->load->view("front/services/services");
   }
 }
