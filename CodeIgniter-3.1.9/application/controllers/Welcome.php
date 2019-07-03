<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Welcome extends CI_Controller
{

  function __construct()
  {
    parent:: __construct();
    $this->load->model("news_model");
    $this->load->library('form_validation');
    $this->load->library('upload');
  }

  function index()
  {
    $data["news"] = $this->news_model->getNews();
    $this->load->view("front/news/news", $data);
  }
}
