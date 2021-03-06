<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct()
    {
        parent::__construct(); // TODO: Change the autogenerated stub
        $this->load->helper('mobile');
        $this->load->model('pageviewmodel');
        $this->load->model('newsmodel');
    }


    public function index()
	{   log_message('error', 'mobiletest'.(int)isMobile());

        $this->pageviewmodel->set_pvs();

        $data['pv']=$this->pageviewmodel->get_count();
        $data['newscount']=$this->newsmodel->get_count();
		if(isMobile()){
            $this->load->view('m_index',$data);
        }else{
            $this->load->view('index');
        }

	}
}
