<?php
require_once 'calc.php';

class calcTest extends PHPUnit_Framework_TestCase
{
	public function setUp(){
		$this->sut = new calc();
	}
	public function testadd(){
		$expected = $this->sut->add(3,0);
		$this->assertEquals("error!",$expected);
		$expected = $this->sut->add(3,5);
		$this->assertEquals(8,$expected);		
	}
}
