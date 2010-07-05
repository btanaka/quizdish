<?php

class Quizdb extends Model {

//    var $foo  = '';

    function Quizdb()
    {
        // Call the Model constructor
        parent::Model();
    }

    // TODO: make array for syllables. may keep instead of table.
    function random_syllables() { // TODO: eventually pass number of syllables, type of kana, etc
    	log_message('debug', 'in random_syllables');
    	// create array of syllables
    	$syllable_array = array (
    	'a', 'i', 'u', 'e', 'o',
    	'ka', 'ki', 'ku', 'ke', 'ko',
    	'sa', 'shi', 'su', 'se', 'so',
    	'ta', 'chi', 'tsu', 'te', 'to',
    	'na', 'ni', 'nu', 'ne', 'no',
    	'ha', 'hi', 'fu', 'he', 'ho',
    	'ma', 'mi', 'mu', 'me', 'mo',
    	'ma', 'mi', 'mu', 'me', 'mo',
    	'ya', 'yu', 'yo',
    	'ra', 'ri', 'ru', 're', 'ro',
    	'wa', 'o',
    	'n',
    	'kya', 'kyu', 'kyo',
    	'sha', 'shu', 'sho',
    	'cha', 'chu', 'cho',
    	'nya', 'nyu', 'nyo',
    	'hya', 'hyu', 'hyo',
    	'mya', 'myu', 'myo',
    	'rya', 'ryu', 'ryo',
    	'ga', 'gi', 'gu', 'ge', 'go',
    	'za', 'ji', 'zu', 'ze', 'zo',
    	'da', 'de', 'do',
    	'ba', 'bi', 'bu', 'be', 'bo',
    	'pa', 'pi', 'pu', 'pe', 'po',
    	'gya', 'gyu', 'gyo',
    	'ja', 'ju', 'jo',
    	'bya', 'byu', 'byo',
    	'pya', 'pyu', 'pyo'
       	);
    	$elements = (count($syllable_array) - 1);
    	$numbers = range(0,$elements);
    	shuffle($numbers);
    	$out = $syllable_array[$numbers[0]] .
    	" " . $syllable_array[$numbers[1]] .
    	" " . $syllable_array[$numbers[2]];
    	//    	$out = "to ki do ki";
    	return $out;
    }
    
}

/*
$numbers = range(1, 20);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}
*/

// TODO: the following code was removed from the quizdb controller. it needs to be refactored for model.
//class Quizdb extends Controller {
//
//    function index()
//    {
//        $chosenpack=1;  //hardcoding to select from first pack, this can be fed later
//        $this->load->database('dev');
//        $query = $this->db->query('SELECT question, answer FROM quizdata WHERE pack=' .$this->db->escape($chosenpack));
//        $randomrow = rand(0,$query->num_rows());  //getting random number between 0 and the number of rows returned
//        $data = $query->row($randomrow);  //data of the random row
//        $this->load->helper('html');
//        $this->load->view('header_view');
//        $this->load->view('menu_view');       
//        $this->load->view('quizdb_view', $data);
//        $this->load->view('footer_view');
//    }
//}
?>

