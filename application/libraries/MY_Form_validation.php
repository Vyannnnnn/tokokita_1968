<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation
{
    protected $CI;

    public function __construct($config = array())
    {
        parent::__construct($config);
        $this->CI = &get_instance();
    }

    // Method untuk menampilkan pesan error
    public function error_array()
    {
        if (count($this->_error_array) === 0) {
            return false;
        } else {
            return $this->_error_array;
        }
    }
}
