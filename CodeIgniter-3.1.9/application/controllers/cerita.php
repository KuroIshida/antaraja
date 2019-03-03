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
    $data["cerita"] = $this->cerita_model->getNews();
    $this->load->view("back/news/news", $data);
  }

  public function add()
  {
    $modelData = $this->news_model;
    $validation = $this->form_validation;
    $validation->set_rules($modelData->rules());

    if ($validation->run()) {
      $modelData->save();
      echo "HELLO";
      $this->session->set_flashdata('success', 'Berhasil disimpan');
    }

      $this->load->view("back/news/add_news");
  }

   public function delete($id = null)
   {
     if (!isset($id)){ show_404();}

       if ($this->news_model->delete($id)) {
           redirect(site_url('news'));
   }
}
}
