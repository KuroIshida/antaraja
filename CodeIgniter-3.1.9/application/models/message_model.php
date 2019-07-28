<?php defined('BASEPATH') OR exit('No direct script access allowed');

      /**
      *
      */
      class message_model extends CI_Model
      {
        private $_table = "contact_us";

        public $id;
        public $name;
        public $email;
        public $message;
        public $times;

        public function rules()
        {
          return[
            [
              'field' => 'name',
              'label' => 'nama',
              'rules' => 'required'
            ],

            [
              'field' => 'email',
              'label' => 'email',
              'rules' => 'required',
            ],

            [
              'field' => 'message',
              'label' => 'message',
              'rules' => 'required',
            ],
          ];
        }

        public function getPost()
        {
          return $this->db->get("contact_us")->result();
        }

        public function save()
        {
          $post = $this->input->post();
          $this->id = uniqid();
          $this->name = $post["name"];
          $this->email = $post["email"];
          $this->message = $post["message"];
          $this->db->insert('contact_us',$this);
        }
      }
