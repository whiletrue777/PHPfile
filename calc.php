<?php

class calc {
	public $x = 0;
	public $y = 0;
	public $msg = null;
	public function add($x,$y){
		if(($x == 0)||($y == 0)){
		return 	$this->msg = "error!";
		} else {
			return $x + $y;
		}
	}
}
