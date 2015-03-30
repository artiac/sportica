<?php

class MatchController extends BaseController {

	protected $layout = 'layouts.master';

	public function index(){
        $this->layout->sidebar = 'match';
		$this->layout->subsidebar = 0;
        $matches = Match::get();
        return $matches;

		$category = Category::lists('category','id');
        $category[0]="Select";
        ksort($category);

        $sports = Sport::lists('sport','id');
        $sports[0]="Select";
        ksort($sports);

        $teams = Teams::lists('is_team','id');
        $teams[0]="Select";
        ksort($teams);


        $match_list = Match::lists('match','id');
        $match_list[0]="None";
        ksort($match_list);

        
        $this->layout->main = View::make("admin.match.index", ["category" => $category,"sports" => $sports,"teams" => $teams,"match_list"=>$match_list, "match" => $match]);
		$this->layout->list = View::make("admin.match.list", array('matches' => $matches));
	}

	public function getedit($id){
        $this->layout->sidebar = 'match';
        $this->layout->subsidebar = 0;
        $matches = Match::get();

        $category = Category::lists('category','id');
        $category[0]="Select";
        ksort($category);

        $sports = Sport::lists('sport','id');
        $sports[0]="Select";
        ksort($sports);

        $teams = Team::lists('category','id');
        $teams[0]="Select";
        ksort($teams);

        $match = Match::find($id);
        $category = DB::table('categories')->lists('category','id');
        $this->layout->main = View::make("admin.match.edit", ["category" => $category,"teams" => $teams, "sports" => $sports, "match" => $match ]);
        $this->layout->list = View::make("admin.match.list", array('matches' => $matches,"category" => $category));
	}

     public function getMatchs(){
        $this->layout->sidebar = 'match';
        $this->layout->subsidebar = 0;

        $matches = DB::table('match')->join('categories','match.team1_id','=','categories.id')->Select('match.*','categories.category')->get();
        $match = DB::table('match')->get();   
        $category = DB::table('categories')->lists('category','id');
        $teams = DB::table('categories')->lists('category','id');
        $sports = DB::table('sports')->lists('sport','id');
        
        $this->layout->main = View::make("admin.match.index",array("category" => $category,"teams" => $teams,"sports" => $sports, "match" => $match));
        $this->layout->list = View::make("admin.match.list", array('matches' => $matches,"category" => $category,"teams" => $teams,"sports" => $sports));;

    }

	public function postadd(){
		$credentials = [
            'sport_id' => Input::get('sport_id'),
            'league_id' => Input::get('league_id'),
            'team1_id' => Input::get('team1_id'),
            'team2_id' => Input::get('team2_id')
        ];
        $rules = [
            'sport_id' => 'required|not_in:0',
            'league_id' => 'required|not_in:0',
            'team1_id' => 'required|not_in:0',
            'team2_id' => 'required'
        ];
        $validator = Validator::make($credentials, $rules);
        if ($validator->passes()) {
    		$match = new match;
            $match->sport_id = Input::get('sport_id');
            $match->league_type = Input::get('league_type');
            $match->league_id = Input::get('league_id');
            $match->team1_id = Input::get('team1_id');
            $match->team2_id = Input::get('team2_id');
            $match->date = Input::get('date');
            $match->time = Input::get('time');
            $match->venue = Input::get('venue');
            $match->save();
            return Redirect::Back()->with('success', 'Successfully Added');
        } else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
	}

	public function putupdate($id){
		$credentials = [
           'sport_id' => Input::get('sport_id'),
           'league_id' => Input::get('league_id'),
            'team1_id' => Input::get('team1_id'),
            'team2_id' => Input::get('team2_id')
        ];
        $rules = [
           'sport_id' => 'required|not_in:0',
           'league_id' => 'required|not_in:0',
            'team1_id' => 'required|not_in:0',
            'team2_id' => 'required'
        ];
        $validator = Validator::make($credentials, $rules);
        if ($validator->passes()) {
                $match = Match::find($id);
                $match->sport_id = Input::get('sport_id');
                $match->league_type = Input::get('league_type');
                $match->league_id = Input::get('league_id');
                $match->team1_id = Input::get('team1_id');
                $match->team2_id = Input::get('team2_id');
                $match->date = Input::get('date');
                $match->time = Input::get('time');
                $match->venue = Input::get('venue');
                $match->win_team_id = Input::get('win_team_id');
                $match->team1_score = Input::get('team1_score');
                $match->team2_score = Input::get('team2_score');
                $match->team1_remark = Input::get('team1_remark');
                $match->team2_remark = Input::get('team2_remark');
                $match->save();
                return Redirect::Back()->with('success', 'Successfully Updated');
            } else {
                return Redirect::Back()->with('failure', 'match name is already taken')->withErrors($validator)->withInput();
            }
	}

	public function getdelete($id){
        $match = Match::find($id);
		if($match->delete())
    		return Redirect::Back()->with('success', 'Deal type successfully deleted');
    	else
    		return Redirect::Back()->with('success', 'Deal type can\'t be deleted');
	}

}
