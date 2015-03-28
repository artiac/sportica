<?php

class SportsController extends BaseController {

	protected $layout = 'layouts.master';

	public function index(){
        $this->layout->sidebar = 'sports';
		$this->layout->subsidebar = 0;
		$this->layout->main = View::make("admin.sports.index");
		$sports = Sport::get();
		$this->layout->list = View::make("admin.sports.list", array('sports' => $sports));
	}

	public function edit($id){
        $this->layout->subsidebar = 0;
		$this->layout->sidebar = 'sports';
		$sport = Sport::find($id);
		$this->layout->main = View::make("admin.sports.edit", array('sport' => $sport));
		$sports = Sport::get();
		$this->layout->list = View::make("admin.sports.list", array('sports' => $sports));
	}

	public function store(){
		$credentials = [
            'sport' => Input::get('sport')
        ];
        $rules = [
            'sport' => 'required|unique:sports,sport'
        ];
        $validator = Validator::make($credentials, $rules);
        if ($validator->passes()) {
    		$sport = new Sport;
            $sport->sport = Input::get('sport');
            $sport->save();
            return Redirect::Back()->with('success', 'Successfully Added');
        } else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
	}

	public function update($id){
		$credentials = [
            'sport' => Input::get('sport')
        ];
        $rules = [
            'sport' => 'required|unique:sports,sport'
        ];
        $validator = Validator::make($credentials, $rules);
        if ($validator->passes()) {
        	$sport = Sport::find($id);
            $sport->sport = Input::get('sport');
            $sport->save();
            return Redirect::Back()->with('success', 'Successfully Updated');
        } else {
            return Redirect::back()->withErrors($validator)->withInput();
        }
	}

	public function destroy($id){
        $sport = Sport::find($id);
		if($sport->delete())
    		return Redirect::route('admin.sports.index')->with('success', 'Deal type successfully deleted');
    	else
    		return Redirect::route('admin.sports.index')->with('success', 'Deal type can\'t be deleted');
	}

}
