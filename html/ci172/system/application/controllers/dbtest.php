<?php

class Dbtest extends Controller {

	function Dbtest()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->dbutil();
		$this->load->view('dbtest_view');
	}
}

/* End of file dbtest.php */
/* Location: ./system/application/controllers/dbtest.php */
