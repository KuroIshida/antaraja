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

          ['field' => 'gambar',
           'label' => 'Gambar',
           'rules' => 'required',
          ]
        ];
      }

      public function getNews()
      {
        return $this->db->get("news")->result();
      }

      public function save()
      {
        $post = $this->input->post();
        $this->headline = $post["headline"];
        $this->isi_berita = $post["isi_berita"];
        $this->gambar = $this-> _uploadImage();
        $this->db->insert('news', $this);
      }

      public function editNews()
      {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->headline = $post["headline"];
        $this->isi_berita = $post["isi_berita"];
        $this->db->update('news', $this , array('id' => $post['id']));
      }

      public function delete($id)
      {
        return $this->db->delete('news', array("id"=>$id));
      }

      private function _uploadImage()
      {
        $config['upload_path']    = './upload/news_upload';
        $config['allowed_types']  = 'jpg|jpeg|bmp';
        $config['file_name']      = $this->gambar;
        $config['overwrite']      = true;
        $config['max_size']       = 1024;

        $this->load->library('upload',$config);

        if($this->upload->do_upload('gambar')){
          echo "SUCCESS";
          return $this->upload->data('file_name');
        }
        echo "FAIL";
      }

      public function getById($id)
      {
        $this->db->select('id');
        $this->db->where('id', $id);
        return $this->db->get('news')->row();
      }
    }
