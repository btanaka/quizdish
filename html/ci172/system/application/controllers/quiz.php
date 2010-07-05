<?php
class Quiz extends Controller {
	
	function Quiz() {
    	parent::Controller();
	}
	
    function index()
    {
		$this->load->helper('html');
    	$this->load->library('quizdish');

    	$this->load->view('header_view');
        $this->load->view('menu_view');
        
		log_message('debug', "in quiz controller...");
        $syllables = $this->quizdish->get_random_syllables();
//        echo "$syllables"; //debug
		$data = array(
               'syllables' => $syllables
        );
        $this->load->view('quiz_view', $data); // TODO: current quiz_view is hard-wired. fix for dynamic.
        $this->load->view('footer_view');
    }
}
?>

