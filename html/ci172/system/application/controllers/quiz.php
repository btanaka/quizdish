<?php
class Quiz extends Controller {

    function index()
    {
        $this->load->helper('html');
        $this->load->view('header_view');
        $this->load->view('menu_view');
        $this->load->view('quiz_view');
        $this->load->view('footer_view');
    }
}
?>

