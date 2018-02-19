<?php

require './vendor/autoload.php';
require './src/BandBack.php';

final class BandBackTest extends PHPUnit_Framework_TestCase {
	
	public function testPassingMinus5Expecting()
	{
		$res = BandBack::checking(-5);
		$this->assertEquals(0, $res[0]);
		$this->assertEquals(0, $res[1]);
		$this->assertEquals(0, $res[2]);		
	}
	
	public function testPassing0Expecting()
	{
		$res = BandBack::checking(0);
		$this->assertEquals(0, $res[0]);
		$this->assertEquals(0, $res[1]);
		$this->assertEquals(0, $res[2]);	
	}
	
	public function testPassing1Expecting()
	{
		$res = BandBack::checking(1);
		$this->assertEquals(1, $res[0]);
		$this->assertEquals(1, $res[1]);
		$this->assertEquals(1, $res[2]);		
	}
	
	public function testPassing3Expecting()
	{
		$res = BandBack::checking(3);
		$this->assertEquals(3, $res[0]);
		$this->assertEquals(3, $res[1]);
		$this->assertEquals(3, $res[2]);		
	}
	
	public function testPassing5Expecting()
	{
		$res = BandBack::checking(5);
		$this->assertEquals(1, $res[0]);
		$this->assertEquals(5, $res[1]);
		$this->assertEquals(1, $res[2]);		
	}
	
	public function testPassing7Expecting()
	{
		$res = BandBack::checking(7);
		$this->assertEquals(3, $res[0]);
		$this->assertEquals(7, $res[1]);
		$this->assertEquals(3, $res[2]);		
	}
	
	public function testPassing10Expecting()
	{
		$res = BandBack::checking(10);
		$this->assertEquals(1, $res[0]);
		$this->assertEquals(10, $res[1]);
		$this->assertEquals(1, $res[2]);		
	}
	
	public function testPassing15Expecting()
	{
		$res = BandBack::checking(15);
		$this->assertEquals(2, $res[0]);
		$this->assertEquals(15, $res[1]);
		$this->assertEquals(2, $res[2]);		
	}
	
	public function testPassing20Expecting()
	{
		$res = BandBack::checking(20);
		$this->assertEquals(1, $res[0]);
		$this->assertEquals(20, $res[1]);
		$this->assertEquals(1, $res[2]);		
	}
	
	public function testPassing35Expecting()
	{
		$res = BandBack::checking(35);
		$this->assertEquals(3, $res[0]);
		$this->assertEquals(35, $res[1]);
		$this->assertEquals(3, $res[2]);		
	}
	
	public function testPassing50Expecting()
	{
		$res = BandBack::checking(50);
		$this->assertEquals(1, $res[0]);
		$this->assertEquals(50, $res[1]);
		$this->assertEquals(1, $res[2]);		
	}
	
	public function testPassing75Expecting()
	{
		$res = BandBack::checking(75);
		$this->assertEquals(3, $res[0]);
		$this->assertEquals(75, $res[1]);
		$this->assertEquals(3, $res[2]);		
	}
	
	public function testPassing100Expecting()
	{
		$res = BandBack::checking(100);
		$this->assertEquals(1, $res[0]);
		$this->assertEquals(100, $res[1]);
		$this->assertEquals(1, $res[2]);		
	}
	
	public function testPassing150Expecting()
	{
		$res = BandBack::checking(150);
		$this->assertEquals(2, $res[0]);
		$this->assertEquals(150, $res[1]);
		$this->assertEquals(2, $res[2]);		
	}
	
	public function testPassing200Expecting()
	{
		$res = BandBack::checking(200);
		$this->assertEquals(2, $res[0]);
		$this->assertEquals(200, $res[1]);
		$this->assertEquals(2, $res[2]);		
	}
	
	public function testPassing350Expecting()
	{
		$res = BandBack::checking(350);
		$this->assertEquals(4, $res[0]);
		$this->assertEquals(350, $res[1]);
		$this->assertEquals(4, $res[2]);		
	}
	
	public function testPassing500Expecting()
	{
		$res = BandBack::checking(500);
		$this->assertEquals(1, $res[0]);
		$this->assertEquals(500, $res[1]);
		$this->assertEquals(1, $res[2]);		
	}
	
	public function testPassing887Expecting()
	{
		$res = BandBack::checking(887);
		$this->assertEquals(10, $res[0]);
		$this->assertEquals(887, $res[1]);
		$this->assertEquals(10, $res[2]);		
	}
	
	public function testPassing90286Expecting()
	{
		$res = BandBack::checking(90286);
		$this->assertEquals(187, $res[0]);
		$this->assertEquals(90286, $res[1]);
		$this->assertEquals(187, $res[2]);		
	}

}

?>