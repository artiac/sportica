<div class="m-b-md">
  <h1 class="m-b-none">Polls</h1>
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
        	{{ Form::open(array('route' => 'admin.poll.store','role' => 'form')) }}
		        <div class="row">
			        <div class="form-group col-md-6">
			          <label>Sport</label>
			          {{Form::select('sport_id', $sports , '',["class"=>"form-control","onchange"=>"get_categories('category_id')"])}}
			          <span class="parsley-error-list"><?php echo $errors->first('sport_id'); ?></span>
			        </div>
			        <div class="form-group col-md-6">
			          <label>Category</label>
			          {{Form::select('category_id', [] , '',["class"=>"form-control"])}}
			          <span class="parsley-error-list"><?php echo $errors->first('category_id'); ?></span>
			        </div>
		        </div>
		        <div class="row">
			        <div class="form-group col-md-6">
			          <label>Poll Title</label>
			          {{Form::text('poll_title', '',["class"=>"form-control"])}}
			          <span class="parsley-error-list"><?php echo $errors->first('poll_title'); ?></span>
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