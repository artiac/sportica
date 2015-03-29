<div class="m-b-md">
  <h1 class="m-b-none">Deal Type</h1><br>
  {{HTML::link('/admin/match',"Go Back",["class"=>"btn btn-s-md btn-warning"]) }}
</div>
@if(Session::has('success'))
	<div class="alert alert-success">
    	<button type="button" class="close" data-dismiss="alert">×</button>
    	<i class="fa fa-ban-circle"></i><strong>Success!</strong> {{Session::get('success')}}
  	</div>
@endif
@if(Session::has('failure'))
	<div class="alert alert-danger">
    	<button type="button" class="close" data-dismiss="alert">×</button>
    	<i class="fa fa-ban-circle"></i><strong>Failure!</strong> {{Session::get('failure')}}
  	</div>
@endif
<div class="row">
	<div class="col-md-12">
	  <section class="panel panel-default">
	    <header class="panel-heading font-bold">Add new</header>
	    <div class="panel-body">
        	{{ Form::open(array("url"=>"/admin/match/update/".$match->id,'role' => 'form','method' => 'PUT')) }}
		       
		    <div class="row">
		      	<div class="form-group col-md-6">
			          <label>Sport</label>
			          {{Form::select('sport_id', $sports , $match->sport_id,["class"=>"form-control"])}}
			          <span class="parsley-error-list"><?php echo $errors->first('sport_id'); ?></span>
			        </div>
			        <div class="form-group col-md-6">
			          <label>Category</label>
			          {{Form::select('category_id', $category ,$match->category_id,["class"=>"form-control"])}}
			          <span class="parsley-error-list"><?php echo $errors->first('category_id'); ?></span>
			        </div>			        
		        </div>
		        <div class="row">
		        	<div class="form-group col-md-6">
	                	<label>Team 1</label>
	                    {{Form::select('team1_id', $teams , $match->team1_id,["class"=>"form-control"])}}
	                    <span>{{$errors->first('team1_id')}}</span>
	                </div>
	                <div class="form-group col-md-6">
	                	<label>Team 2</label>
	                    {{Form::select('team2_id', $teams , $match->team2_id,["class"=>"form-control"])}}
	                    <span>{{$errors->first('team2_id')}}</span>
	                </div>
		        </div>

		         <div class="row">
		        	<div class="form-group col-md-6">
	                	<label>Date</label>
	                    {{Form::text('date',$match->date,array("class"=>"form-control", "placeholder"=>"Date"))}}
	                    <span>{{$errors->first('date')}}</span>
	                </div>
	                <div class="form-group col-md-6">
	                	<label>Time</label>
	                    {{Form::text('time',$match->time,array("class"=>"form-control", "placeholder"=>"Time"))}}
	                    <span>{{$errors->first('time')}}</span>
	                </div>
		        </div>
		         <div class="row">
		        	<div class="form-group col-md-6">
	                	<label>Venue</label>
	                    {{Form::text('venue',$match->venue,array("class"=>"form-control", "placeholder"=>"Venue"))}}
	                    <span>{{$errors->first('venue')}}</span>
	                </div>
	                <div class="form-group col-md-6">
	                	<label>Win Team ID</label>
	                    {{Form::text('win_team_id',$match->win_team_id,array("class"=>"form-control", "placeholder"=>"Win Team ID"))}}
	                    <span>{{$errors->first('win_team_id')}}</span>
	                </div>
		        </div>
		        <div class="row">
		        	<div class="form-group col-md-6">
	                	<label>Team1 Score</label>
	                    {{Form::text('team1_score',$match->team1_score,array("class"=>"form-control", "placeholder"=>"Team1 Score"))}}
	                    <span>{{$errors->first('team1_score')}}</span>
	                </div>
	                <div class="form-group col-md-6">
	                	<label>Team2 Score</label>
	                    {{Form::text('team2_score',$match->team2_score,array("class"=>"form-control", "placeholder"=>"Team2 Score"))}}
	                    <span>{{$errors->first('team2_score')}}</span>
	                </div>
		        </div>

		        <div class="row">
		        	<div class="form-group col-md-6">
	                	<label>Team1 Remark</label>
	                    {{Form::text('team1_remark',$match->team1_remark,array("class"=>"form-control", "placeholder"=>"Team1 Remark"))}}
	                    <span>{{$errors->first('team1_remark')}}</span>
	                </div>
	                <div class="form-group col-md-6">
	                	<label>Team2 Remark</label>
	                    {{Form::text('team2_remark',$match->team2_remark,array("class"=>"form-control", "placeholder"=>"Team2 Remark"))}}
	                    <span>{{$errors->first('team2_remark')}}</span>
	                </div>
		        </div>

		        <div class="row">
		        	<div class="col-md-12">
		        		<button type="submit" class="btn btn-sm btn-primary">Submit</button>
		        	</div>
		        </div>
		    {{ Form::close()}}
	    </div>
	  </section>
	</div>
</div>