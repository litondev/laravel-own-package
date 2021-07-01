<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MyFirst;

class TestController extends Controller
{
    public function hai(){
    	// success
    	// return MyFirst::testFirst();
    	
    	return MyFirst::testThird()->testInsideThird();
    }
}
