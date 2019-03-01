<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class news extends CI_Controller
{

  function __construct()
  {
    parent:: __construct();
    $this->load->model("news_model");
    $this->load->library('form_validation');
  }

  function index()
  {
    $data["news"] = $this->news_model->getNews();
    $this->load->view("back/news/news", $data);
  }

  public function add()
  {
    $modelData = $this->news_model;
    $validation = $this->form_validation;
    $validation->set_rules($modelData->rules());

    if ($validation->run()) {
      $modelData->save();
      $this->session->set_flashdata('success', 'Berhasil disimpan');
    }

      $this->load->view("back/news/add_news");
  }

  public function edit($id = null)
   {
       if (!isset($id)) redirect('back/news/news');

       $modelData = $this->news_model;
       $validation = $this->form_validation;
       $validation->set_rules($modelData->rules());

       if ($validation->run()) {
           $modelData->editNews();
           $this->session->set_flashdata('success', 'News Inserted');
       }

       $data["news"] = $modelData->getById($id);
       if (!$data["news"]) show_404();

       $this->load->view("back/news/edit_news", $data);
   }

   public function delete($id = null)
   {
     if (!isset($id)){ show_404();}

       if ($this->news_model->delete($id)) {
           redirect(site_url('news'));
   }
}
}
