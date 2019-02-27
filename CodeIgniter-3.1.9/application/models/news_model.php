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

      public function rules()
      {
        return [
          ['field' => 'headline',
           'label' => 'Headline',
           'rules' => 'required'],

          ['field' => 'isi_berita',
           'label' => 'Isi Berita',
           'rules' => 'required'],
        ];
      }

      function getNews()
      {
        return $this->db->get("news")->result();
      }

      public function save()
      {
        $post = $this->input->post();
        $this->headline = $post["headline"];
        $this->isi_berita = $post["isi_berita"];
        $this->db->insert('news', $this);
      }

      function editNews()
      {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->headline = $post["headline"];
        $this->isi_berita = $post["isi_berita"];
        $this->db->update('news', $this , array('id' => $post['id']));
      }

      function deleteNews($id)
      {
        return $this->db->delete('news', array('id' => $id ));
      }

      function getById($id)
      {
        $this->db->select('id');
        $this->db->where('id', $id);
        return $this->db->get('news')->row();
      }
    }
