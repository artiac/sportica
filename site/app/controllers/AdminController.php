<?php

class AdminController extends BaseController {

	protected $layout = 'layouts.master';

	public function getTree(){
		$this->layout->sidebar = 'tree';
		$this->layout->subsidebar = 0;
		$sports = Sport::get();
		$categories = Category::get();
        
        $this->layout->main = View::make("admin.tree", ["sports" => $sports,"categories"=>$categories]);
		$this->layout->list = '';
	}

}
