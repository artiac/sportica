<?php

class DashboardController extends BaseController {

	protected $layout = 'layouts.master';

	public function getIndex(){
		$this->layout->sidebar = 'dashboard';
		$this->layout->subsidebar = 0;
		$this->layout->main = View::make("admin.dashboard.index");
		$this->layout->list = '';
	}

	public function getSportCategory($id){
		$category_list = Category::where('sport_id',$id)->lists('category','id');
		$category_list[0]="None";
        ksort($category_list);

        $str = '';
        foreach ($category_list as $key => $value) {
        	$str .= '<option value="'.$key.'">'.$value.'</option>';
        }
        return $str;
	}

}
