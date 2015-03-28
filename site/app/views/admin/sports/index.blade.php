<div class="m-b-md">
  <h1 class="m-b-none">Sports</h1>
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
        	{{ Form::open(array('route' => 'admin.sports.store','role' => 'form')) }}
		        <div class="form-group">
		          <label>Deal Name</label>
		          {{Form::text('sport','',["class"=>"form-control", "placeholder"=>"e.g. Football"])}}
		          <span class="parsley-error-list"><?php echo $errors->first('sport'); ?></span>
		        </div>
		        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
	      	{{ Form::close()}}
	    </div>
	  </section>
	</div>
</div>