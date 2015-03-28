<div class="m-b-md">
  <h1 class="m-b-none">Deal Type</h1><br>
  {{link_to_route('admin.category.index', "Go Back" , $parameters = array() , $attributes = array('class'=>'btn btn-s-md btn-warning')) }}
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
        	{{ Form::open(array('route' => array('admin.category.update', $cat->id),'role' => 'form','method' => 'PUT')) }}
		        <div class="row">
		        	<div class="form-group col-md-6">
			          <label>Category</label>
			          {{Form::text('category',$cat->category,["class"=>"form-control", "placeholder"=>"e.g. Football League"])}}
			          <span class="parsley-error-list"><?php echo $errors->first('category'); ?></span>
			        </div>
			        <div class="form-group col-md-6">
			          <label>Sport</label>
			          {{Form::select('sport_id', $sports , $cat->sport_id,["class"=>"form-control"])}}
			          <span class="parsley-error-list"><?php echo $errors->first('sport_id'); ?></span>
			        </div>
		        </div>
		       <div class="row">
			       	 <div class="form-group col-md-6">
			          <label>Level</label>
			          {{Form::selectRange('level',1, 10,$cat->level,["class"=>"form-control"])}}
			          <span class="parsley-error-list"><?php echo $errors->first('level'); ?></span>
			        </div>
			        <div class="form-group col-md-6">
			          <label>Parent</label>
			          {{Form::select('parent_id', $category_list , $cat->parent_id,["class"=>"form-control"])}}
			          <span class="parsley-error-list"><?php echo $errors->first('parent_id'); ?></span>
			        </div>
			       </div>
		        <div class="row">
		        	<div class="form-group col-md-6">
			          <label>Is Team?</label>
			          {{Form::select('is_team', [ 0 => 'No', 1 => 'Yes' ] , $cat->is_team,["class"=>"form-control"])}}
			          <span class="parsley-error-list"><?php echo $errors->first('is_team'); ?></span>
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