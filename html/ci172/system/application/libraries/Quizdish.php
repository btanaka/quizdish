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
		log_message('debug', "in quizdish, test_function...");
		$out = "I am a test."; // debug
		return $out;
	}

}// END Quizdish library
?>