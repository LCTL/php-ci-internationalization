<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class I18nmanual extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this -> load -> library('i18n');
        $this -> i18n -> prevent_auto();
    }
    
    public function index(){
        $this -> i18n -> set_current_locale('zh-TW');
        $this -> i18n -> load_language();
        $this -> load -> view('i18ntest');
    }
    
}

/* End of file i18nmanual.php */
/* Location: ./application/controller/i18nmanual.php */