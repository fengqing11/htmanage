<?php 


namespace app\admin\controller;

use think\Controller;

class Preproduce extends Controller{

	public function preproducedate(){
		return view('preproducedate');
	}

	public function create(){

		return view('create');
	}
}