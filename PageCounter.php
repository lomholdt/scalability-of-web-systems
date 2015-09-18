<?php

namespace Site;

/**
 * PageCounter class for counting visits via cookies.
 */
class PageCounter {
	private $count;
	private $cookieName = 'myCookieCount';

	public function __construct(){
		if($this->cookieExists()){
			$this->count = $this->getCookie();
			$this->incrementCount();
		}
		else{
			$this->count = 1;
		}
		setCookie($this->cookieName, $this->count);
	}

	public function setCookie($name, $value){
		setcookie($name, $value);
	}

	public function getCookie(){
		if (isset($_COOKIE[$this->cookieName])) return $_COOKIE[$this->cookieName];
	}

	private function cookieExists(){
		return isset($_COOKIE[$this->cookieName]);
	}

	public function getCount(){
		return $this->count;
	}

	public function resetCount(){
		$this->setCookie($this->cookieName, 1);
		$this->count = 1;
	}

	private function incrementCount(){
		$this->count++;
		setcookie($this->cookieName, $this->count);
	}

	public function getMessage(){
		switch (true) {
			case ($this->count >= 100):
				return "You are the king of updating this page!";
				break;
			case ($this->count >= 50):
				return "Awesome Stuff!";
				break;
			case ($this->count >= 20):
				return "Keep going!";
				break;
			case ($this->count >= 10):
				return "Good job...";
				break;
			default:
				return "Try to get to 100!";
				break;
		}
	}
}