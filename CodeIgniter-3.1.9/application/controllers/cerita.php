<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class cerita extends CI_Controller
{

  function __construct()
  {
    parent:: __construct();
    $this->load->model("cerita_model");
    $this->load->library('form_validation');
  }

  function index()
  {
    $data["cerita"] = $this->cerita_model->getCerita();
    $this->load->view("back/cerita/cerita", $data);
  }

  public function add()
  {
    $modelData = $this->cerita_model;
    $validation = $this->form_validation;
    $validation->set_rules($modelData->rules());

    if ($validation->run()) {
      $modelData->save();
      $this->session->set_flashdata('success', 'Berhasil Ditambahkan');
    }

      $this->load->view("front/news/cerita");
  }

  public function delete($id = null)
   {
     if (!isset($id)){ show_404();}

       if ($this->cerita_model->delete($id)) {
           redirect(site_url('cerita'));
         }
   }
  public function send()
  {

  }
}
