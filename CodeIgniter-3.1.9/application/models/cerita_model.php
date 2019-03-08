<?php defined('BASEPATH') OR exit('No direct script access allowed');

    /**
     *
     */
    class cerita_model extends CI_Model
    {

    private $_table = "cerita";

    public $id;
    public $nama_driver;
    public $cerita_driver;
    public $upload_time;

      public function rules()
      {
        return [
          ['field' => 'nama_driver',
           'label' => 'Nama Driver',
           'rules' => 'required'],

          ['field' => 'cerita_driver',
           'label' => 'Cerita Driver',
           'rules' => 'required'],
          // problem with adding into database
          // ['field' => 'gambar',
          //  'label' => 'Gambar',
          //  'rules' => 'required',
          // ]
        ];
      }

      public function getCerita()
      {
        return $this->db->get("cerita")->result();
      }

      public function save()
      {
        $post = $this->input->post();
        $this->nama_driver = $post["nama_driver"];
        $this->cerita_driver = $post["cerita_driver"];
        //$this->upload_time = $this-> _uploadImage();
        $this->db->insert('cerita', $this);
      }

      public function delete($id)
      {
        return $this->db->delete('cerita', array("id"=>$id));
      }

      public function getById($id)
      {
        $this->db->select('id');
        $this->db->where('id', $id);
        return $this->db->get('cerita')->row();
      }
    }
