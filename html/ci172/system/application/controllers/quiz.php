<?php
class Quiz extends Controller {
	
    function index()
    {
		$this->load->helper('html');
    	$this->load->library('quizdish');

    	$this->load->view('header_view');
        $this->load->view('menu_view');
        
		log_message('debug', "in quiz controller...");
        // get some random syllables
        // TODO: llama is just a test. replace with actual random syllableizer...
        $result = $this->quizdish->llama();
//		echo $result;
        $this->load->view('quiz_view'); // TODO: current quiz_view is hard-wired. fix for dynamic.
        $this->load->view('footer_view');
    }
}
?>

