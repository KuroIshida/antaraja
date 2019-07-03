<?php defined('BASEPATH') OR exit('No direct script access allowed');

    /**
     *
     */
    class intact_model extends CI_Model
    {
      private $_table = "intact";

      public $id;
      public $name;
      public $email;
      public $message;
      public $times;

      public function rules()
      {
        return[
          ['field' => 'name',
           'label' => 'Nama',
           'rules' => 'required'],

          ['field' => 'email',
           'label' => 'Email',
           'rules' => "required"],

          ['field' => 'message',
           'label' => 'Message',
           'rules' => 'required'],
          //
          // ['field' => 'time',
          //  'label' => '',
          //  'rules' => ''],
        ];
      }

      public function getPost()
      {
        return $this->db->get("contact_us")->result();
      }

      public function save()
      {
        $post = $this->input->post();
        $this->name = $post["name"];
        $this->email = $post["email"];
        $this->message = $post["message"];
        $this->db->insert('contact_us', $this);
      }

    }
