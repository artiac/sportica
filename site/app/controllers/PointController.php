<?php

class PointController extends BaseController {

	protected $layout = 'layouts.master';

	public function index(){
        $this->layout->sidebar = 'point';
		$this->layout->subsidebar = 0;
        $points = Point::get();

		$category = Category::lists('category','id');
        $category[0]="Select";
        ksort($category);

        $teams = Teams::lists('is_team','id');
        $teams[0]="Select";
        ksort($teams);


        $point_list = Point::lists('point','id');
        $point_list[0]="None";
        ksort($point_list);

        
        $this->layout->main = View::make("admin.point.index", ["category" => $category,"teams" => $teams,"point_list"=>$point_list]);
		$this->layout->list = View::make("admin.point.list", array('points' => $points));
	}

	public function getedit($id){
        $this->layout->sidebar = 'point';
        $this->layout->subsidebar = 0;
        $points = Point::get();

        $categories = Category::lists('category','id');
        $categories[0]="Select";
        ksort($categories);

        $teams = Team::lists('category','id');
        $teams[0]="Select";
        ksort($teams);


        $point_list = Point::lists('point','id');
        $point_list[0]="None";
        ksort($point_list);

        $point = Point::find($id);
        $category = DB::table('categories')->where('level',2)->where('parent_id','=','category_id')->first();
        $this->layout->main = View::make("admin.point.edit", ["categories" => $categories,"teams" => $teams,"point_list"=>$point_list, "point" => $point ]);
        $this->layout->list = View::make("admin.point.list", array('points' => $points,"categories" => $categories));
	}

     public function getPoints(){
         $this->layout->sidebar = 'point';
        $this->layout->subsidebar = 0;
        $points = DB::table('point')->join('categories','point.team_id','=','categories.id')->Select('point.*','categories.category')->get();
       
        $category = DB::table('categories')->where('level',1)->where('sport_id',3)->lists('category','id');
        $category[0]="Select";
        ksort($category);

        $leagues = DB::table('categories')->where('level',2)->where('sport_id',3)->lists('category','id');
        $teams = DB::table('categories')->where('level',3)->where('sport_id',3)->lists('category','id');

        $this->layout->main = View::make("admin.point.index",array("category" => $category,"teams" => $teams, "leagues"=>$leagues, "point"=>$points));
        $this->layout->list = View::make("admin.point.list", array('points' => $points,"category" => $category,"teams" => $teams));;

    }

	public function postAdd(){
		$credentials = [
            'category_id' => Input::get('category_id'),
            'team_id' => Input::get('team_id'),
            'position' => Input::get('position')
        ];
        $rules = [
            'category_id' => 'required|not_in:0',
            'team_id' => 'required|not_in:0',
            'position' => 'required'
        ];
        $validator = Validator::make($credentials, $rules);
        if ($validator->passes()) {
    		$point = new point;
            $point->category_id = Input::get('category_id');
            $point->team_id = Input::get('team_id');
            $point->position = Input::get('position');
            $point->won = Input::get('won');
            $point->draw = Input::get('draw');
            $point->lost = Input::get('lost');           
            $point->goal_for = Input::get('goal_for');
            $point->goal_against = Input::get('goal_against');
            $point->goal_difference = Input::get('goal_difference');
            $point->point = Input::get('point');
            $point->save();
            return Redirect::Back()->with('success', 'Successfully Added');
        } else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
	}

	public function putupdate($id){
		$credentials = [
           'category_id' => Input::get('category_id'),
            'team_id' => Input::get('team_id'),
            'position' => Input::get('position')
        ];
        $rules = [
           'category_id' => 'required|not_in:0',
            'team_id' => 'required|not_in:0',
            'position' => 'required'
        ];
        $validator = Validator::make($credentials, $rules);
        if ($validator->passes()) {
            $count = Point::where('point',Input::get('point'))->where('id','!=',$id)->count();
            if($count == 0){
                $point = Point::find($id);
                $point->category_id = Input::get('category_id');
                $point->team_id = Input::get('team_id');
                $point->position = Input::get('position');
                $point->won = Input::get('won');
                $point->draw = Input::get('draw');
                $point->lost = Input::get('lost');           
                $point->goal_for = Input::get('goal_for');
                $point->goal_against = Input::get('goal_against');
                $point->goal_difference = Input::get('goal_difference');
                $point->point = Input::get('point');
                $point->save();
                return Redirect::Back()->with('success', 'Successfully Updated');
            } else {
                return Redirect::Back()->with('failure', 'point name is already taken')->withErrors($validator)->withInput();
            }
            
        } else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
	}

	public function getdelete($id){
        $point = Point::find($id);
		if($point->delete())
    		return Redirect::Back()->with('success', 'Deal type successfully deleted');
    	else
    		return Redirect::Back()->with('success', 'Deal type can\'t be deleted');
	}

}
