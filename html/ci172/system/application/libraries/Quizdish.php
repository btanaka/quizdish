<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Quizdish library
 * A very nice library for displaying quizzes in CodeIgniter.
 * Authors: Brian Tanaka http://briantanaka.com Tim Habersack http://hithlonde.com/
 * 
 * The majority of the non-model logic should go here. Keep the controllers thin.
*/

class Quizdish {
	
	// var $foo = "bar";
	var $out = "";
	
	// Constructor
	function Quizdish() {
		log_message('debug', "Quizdish Class Initialized");
	}

	function llama() {
		log_message('debug', "in quizdish, llama...");
		$out = "I am a test."; // debug
		return $out;
	}
	
	function get_random_syllables() { // TODO: eventually pass number of syllables, type of kana, etc
		log_message('debug', "in quizdish library, get_random_syllables...");
//		$out = "I am a test."; // debug
		$CI =& get_instance();
		$CI->load->model('Quizdb'); 
		$syllables = $CI->Quizdb->random_syllables();
		return $syllables;
	}

}// END Quizdish library
?>