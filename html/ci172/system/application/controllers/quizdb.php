<?php
class Quizdb extends Controller {

    function index()
    {
        $chosenpack=1;  //hardcoding to select from first pack, this can be fed later
        $this->load->database('dev');
        $query = $this->db->query('SELECT question, answer FROM quizdata WHERE pack=' .$this->db->escape($chosenpack));
        $randomrow = rand(0,$query->num_rows());  //getting random number between 0 and the number of rows returned
        $data = $query->row($randomrow);  //data of the random row
        $this->load->helper('html');
        $this->load->view('header_view');
        $this->load->view('menu_view');       
        $this->load->view('quizdb_view', $data);
        $this->load->view('footer_view');
    }
}
?>

