<div class="m-b-md">
  <h1 class="m-b-none">Match Schedule</h1>
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
        	{{Form::open(array("url"=>"/admin/match/store" ,"method" => "POST","role" => "form"))}}		       
		        <div class="row">
		        	<div class="form-group col-md-6">
			          <label>Sport</label>
			          {{Form::select('sport_id', $sports , '',["class"=>"form-control"])}}
			          <span class="parsley-error-list"><?php echo $errors->first('sport_id'); ?></span>
			        </div>
			        <div class="form-group col-md-6">
			          <label>League Type</label>
			          {{Form::select('league_type', $category ,'',["class"=>"form-control"])}}
			          <span class="parsley-error-list"><?php echo $errors->first('league_type'); ?></span>
			        </div>			        
		        </div>
		        <div class="row">
		        	<div class="form-group col-md-6">
			          <label>League</label>
			          {{Form::select('league_id', $category ,'',["class"=>"form-control"])}}
			          <span class="parsley-error-list"><?php echo $errors->first('league_id'); ?></span>
			        </div>	
		        	<div class="form-group col-md-6">
	                	<label>Team 1</label>
	                    {{Form::select('team1_id', $teams , '',["class"=>"form-control"])}}
	                    <span>{{$errors->first('team1_id')}}</span>
	                </div>	              
		        </div>
		         <div class="row">
		         	  <div class="form-group col-md-6">
	                	<label>Team 2</label>
	                    {{Form::select('team2_id', $teams , '',["class"=>"form-control"])}}
	                    <span>{{$errors->first('team2_id')}}</span>
	                </div>
		         	<div class="form-group col-md-6">
	                	<label>Team 2</label>
	                    {{Form::select('team2_id', $teams , '',["class"=>"form-control"])}}
	                    <span>{{$errors->first('team2_id')}}</span>
	                </div>		        	             
		        </div>
		         <div class="row">
		         	<div class="form-group col-md-6">
	                	<label>Date</label>
	                    {{Form::text('date','',array("class"=>"form-control datepicker", "placeholder"=>"Date"))}}
	                    <span>{{$errors->first('date')}}</span>
	                </div>	  
		          <div class="form-group col-md-6">
	                	<label>Time</label>
	                    {{Form::text('time','',array("class"=>"form-control time", "placeholder"=>"Time"))}}
	                    <span>{{$errors->first('time')}}</span>
	                </div>
	                </div>
	                <div class="row">
		        	    <div class="form-group col-md-6">
		                	<label>Venue</label>
		                    {{Form::text('venue','',array("class"=>"form-control", "placeholder"=>"Venue"))}}
		                    <span>{{$errors->first('venue')}}</span>
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