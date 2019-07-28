<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class message extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model("message_model");
    $this->load->library("form_validation");
  }

  public function index()
  {
    $this->load->view("front/intact/message");
  }

  public function add()
  {
    $model = $this->message_model;
    $validation = $this->form_validation;
    $validation->set_rules($model->rules());

    if($validation->run())
    {
      $model->save();
      $this->session->set_flashdata('success', 'Berhasil Dikirim');
    }
      $this->load->view("front/intact/message");
      echo "Hello";
  }
}
