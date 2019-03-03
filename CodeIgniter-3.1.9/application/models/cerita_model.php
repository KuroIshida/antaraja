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
        return
        [
          ['field' => 'nama_driver',
           'label' => 'Nama Driver',
           'rules' => 'required'],

          ['field' => 'cerita_driver',
           'label' => 'Cerita Driver',
           'rules' => 'required'],
        ];
      }
    }
