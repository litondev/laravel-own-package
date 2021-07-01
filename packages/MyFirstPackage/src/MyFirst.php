<?php
namespace MyFirstPackage;

use MyFirstPackage\Inside\{
	MyThird
};

class MyFirst {
	public function testFirst(){
		return "testing 1";
	}

	public function testSecond(){
		return "testing 2";
	}

	public function testThird(){
		return new MyThird();
	}
}