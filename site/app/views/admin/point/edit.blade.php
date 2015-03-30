<div class="m-b-md">
  <h1 class="m-b-none">Deal Type</h1><br>
  <a href="{{url('/admin/point')}}" class="btn btn-s-md btn-warning">Go Back</a>
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
        	{{ Form::open(array("url"=>"/admin/point/update/".$point->id,'role' => 'form','method' => 'PUT')) }}
		       
		            <div class="row">
		        	<div class="form-group col-md-6">
			          <label>Category</label>
			         {{Form::select('category_id', $categories , $point->category_id,["class"=>"form-control"])}}
			          <span class="parsley-error-list"><?php echo $errors->first('category_id'); ?></span>
			        </div>
			        <div class="form-group col-md-6">
			          <label>Team</label>
			          {{Form::select('team_id', $teams , $point->team_id,["class"=>"form-control"])}}
			          <span class="parsley-error-list"><?php echo $errors->first('team_id'); ?></span>
			        </div>
		        </div>
		        <div class="row">
		        	<div class="form-group col-md-6">
	                	<label>Position</label>
	                    {{Form::text('position',$point->position,array("class"=>"form-control", "placeholder"=>"Enter Position"))}}
	                    <span>{{$errors->first('position')}}</span>
	                </div>
	                <div class="form-group col-md-6">
	                	<label>Won</label>
	                    {{Form::text('won',$point->won,array("class"=>"form-control", "placeholder"=>"Enter Won"))}}
	                    <span>{{$errors->first('won')}}</span>
	                </div>
		        </div>

		         <div class="row">
		        	<div class="form-group col-md-6">
	                	<label>Drow</label>
	                    {{Form::text('draw',$point->draw,array("class"=>"form-control", "placeholder"=>"Enter Draw"))}}
	                    <span>{{$errors->first('draw')}}</span>
	                </div>
	                <div class="form-group col-md-6">
	                	<label>Lost</label>
	                    {{Form::text('lost',$point->lost,array("class"=>"form-control", "placeholder"=>"Enter Lost"))}}
	                    <span>{{$errors->first('lost')}}</span>
	                </div>
		        </div>
		         <div class="row">
		        	<div class="form-group col-md-6">
	                	<label>Goal For</label>
	                    {{Form::text('goal_for',$point->goal_for,array("class"=>"form-control", "placeholder"=>"Enter Goal For"))}}
	                    <span>{{$errors->first('goal_for')}}</span>
	                </div>
	                <div class="form-group col-md-6">
	                	<label>Goal Against</label>
	                    {{Form::text('goal_against',$point->goal_against,array("class"=>"form-control", "placeholder"=>"Enter Goal Against"))}}
	                    <span>{{$errors->first('goal_against')}}</span>
	                </div>
		        </div>
		        <div class="row">
		        	<div class="form-group col-md-6">
	                	<label>Goal Difference</label>
	                    {{Form::text('goal_difference',$point->goal_difference,array("class"=>"form-control", "placeholder"=>"Enter Goal Difference"))}}
	                    <span>{{$errors->first('goal_difference')}}</span>
	                </div>
	                <div class="form-group col-md-6">
	                	<label>Points</label>
	                    {{Form::text('point',$point->point,array("class"=>"form-control", "placeholder"=>"Enter Points"))}}
	                    <span>{{$errors->first('point')}}</span>
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