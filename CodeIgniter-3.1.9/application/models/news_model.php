<?php defined('BASEPATH') OR exit('No direct script access allowed');

    /**
     *
     */
    class news_model extends CI_Model
    {

    private $_table = "news";

    public $id;
    public $headline;
    public $isi_berita;
    public $gambar;

      function getNews()
      {
        return $this->db->get("news")->result();
      }

      function editNews()
      {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->headline = $post["headline"];
        $this->isi_berita = $post["isi_berita"];
        $this->db->update();
      }

      function deletenews()
      {
        return $this->db->delete();
      }

      function getById()
      {

      }
    }
