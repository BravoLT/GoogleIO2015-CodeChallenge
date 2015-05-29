<?php
	/**
	*
	* Challenge 1 Unit tests
	* Rodney Fulk
	*
	*/
	include_once('functions.php');
	
	class ChallengeTest extends PHPUnit_Framework_TestCase
	{
		/**
		*
		* This tests for a 1. Should return a 1.
		*/
		public function testOne() {
			$this->assertEquals(1, check_and_print(1));
		}
		
		/**
		 *
		 *Check for 3 to return Fizz
		 */ 
		public function testTwo() {
			$this->assertEquals("Fizz", check_and_print(3));
		}
		/**
		 *
		 *Check for 5 to return Buzz
		 */ 
		public function testThree() {
			$this->assertEquals("Buzz", check_and_print(5));
		}
		/**
		 *
		 *Check for 15 to return FizzBuzz
		 */ 
		public function testFour() {
			$this->assertEquals("FizzBuzz", check_and_print(15));
		}
	}
?>