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
  }

  public function rules()
  {
    return [
      ['field' => ''
      ]
    ];
  }

  function index()
  {
    $data["news"] = $this->news_model->getNews();
    $this->load->view("news", $data);
  }

  public function edit($id = null)
   {
       if (!isset($id)) redirect('admin/products');

       $modelData = $this->product_model;
       $validation = $this->form_validation;
       $validation->set_rules($modelData->rules());

       if ($validation->run()) {
           $modelData->update();
           $this->session->set_flashdata('success', 'Berhasil disimpan');
       }

       $data["product"] = $modelData->getById($id);
       if (!$data["product"]) show_404();

       $this->load->view("admin/product/edit_form", $data);
   }


}
