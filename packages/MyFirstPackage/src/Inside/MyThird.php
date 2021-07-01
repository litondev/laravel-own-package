<?php
namespace MyFirstPackage\Inside;

use Auth;

class MyThird {
	public function testInsideThird(){
		return "bye " . ( Auth::check() ? "Login" : "Not Login" );
	}
}