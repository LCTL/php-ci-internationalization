<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class I18nauto extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this -> load -> library('i18n');
    }
    
    public function index(){
        $this -> load -> view('i18ntest');
    }
    
}

/* End of file i18nauto.php */
/* Location: ./application/controller/i18nauto.php */