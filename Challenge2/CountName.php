<?php
    /**
	 * Challenge #2. 
	 * Rodney Fulk
	 *
	 * Class to store name and count together
	 */
class CountName {
	private $name;
	private $cnt;

	/**
	 * Constructor will set cnt to 1 for default. 
	 */
	public function __construct() { 
		$this->cnt = 1;
	}
	#Setter of name
	public function set_Name($name){
		$this->name = $name;
	}
	#getter of name
	public function get_Name(){	
		return $this->name;
	}
	#setter of count
	public function set_Cnt($cnt){
		$this->cnt = $cnt;
	}
	#getter of count
	public function get_Cnt() {
		return $this->cnt;
	} 
	
	#compares name in this class to name passed to it to see if same.
	public function cmp_Name($name) {
		if ($name == $this->name) {
			$this->cnt++;
			return true;
		} else {
			return false;
		}
	}
	
}
?>