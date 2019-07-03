<?php defined('BASEPATH') OR exit('No direct script access allowed');

 /**
  *
  */
 class faq extends CI_Controller
 {

   function __construct()
   {
     parent::__construct();
     $this->load->model("faq_model");
   }

   function index(){

     $this->load->view("front/faq/faq_front");
   }

   function adminFaq(){
         $this->load->view("back/faq/faq");
   }
 }
