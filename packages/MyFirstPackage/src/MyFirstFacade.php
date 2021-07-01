<?php

namespace MyFirstPackage;

use Illuminate\Support\Facades\Facade;

class MyFirstFacade extends Facade{
	protected static function getFacadeAccessor(){
		return "MyFirst";
	}
}