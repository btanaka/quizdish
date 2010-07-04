<?php
class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();
//		$this->load->library('Quizdish');
	}
	
	function index()
	{
        $this->load->helper('html');
		$this->load->view('header_view');
        $this->load->view('menu_view');
		$this->load->view('welcome_message');
		$this->load->view('footer_view');
	}
}


/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
