<?php
class Quiz extends Controller {

	var $imagepath = "/images/kana/";
	
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
		$image_bases = explode(' ', $syllables);
		// TODO: the current array supports three and only three syllables. 
		// refactor to make it more flexible.
		$data = array(
               'syllables' => $syllables,
				'image01' => $this->imagepath . $image_bases[0] . ".jpg",
				'image02' => $this->imagepath . $image_bases[1] . ".jpg",
				'image03' => $this->imagepath . $image_bases[2] . ".jpg"
		);
        $this->load->view('quiz_view', $data); // TODO: current quiz_view is hard-wired. fix for dynamic.
        $this->load->view('footer_view');
    }
}
?>

