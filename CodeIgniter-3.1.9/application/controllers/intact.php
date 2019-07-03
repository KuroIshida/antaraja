<?php defined('BASEPATH') OR exit('No direct script access allowed');

 /**
  *
  */
 class intact extends CI_Controller
 {

   function __construct()
   {
     parent::__construct();
     $this->load->model("intact_model");
   }

   function index(){
     $this->load->view("front/intact/intact");
   }

   function getIntact(){
     $this->load->view("back/contact_us/contact_us");
   }

   public function add()
   {
     $modelData = $this->intact_model;
     $validation = $this->form_validation;
     $validation->set_rules($modelData->rules());

     if ($validation->run()) {
       $modelData->save();
       $this->session->set_flashdata('success', 'Berhasil disimpan');
     }

       $this->load->view("front/news");
   }

   function sendMessages(){

   }
 }
