<?php 
namespace MyFirstPackage;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class MyFirstServiceProvider extends ServiceProvider{
	public function register(){
		// using singleton
		// $this->app->singleton('MyFirst', function ($app) {
		// 	return new MyFirst;
		// });

		// or bind
	 	App::bind("MyFirst",function(){
	 		return new MyFirst;
	 	});
	}

	public function boot(){}
}