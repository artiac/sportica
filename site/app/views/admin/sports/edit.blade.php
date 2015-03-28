<div class="m-b-md">
  <h1 class="m-b-none">Sports</h1><br>
  {{link_to_route('admin.sports.index', "Go Back" , $parameters = array() , $attributes = array('class'=>'btn btn-s-md btn-warning')) }}
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
	    <header class="panel-heading font-bold">Edit</header>
	    <div class="panel-body">
        	{{ Form::open(array('action' => array('admin.sports.update', $sport->id),'role' => 'form', 'method' => 'PUT')) }}
		        <div class="form-group">
		          <label>Sport Name</label>
		          {{Form::text('sport',$sport->sport,["class"=>"form-control", "placeholder"=>"e.g. Football"])}}
		          <span class="parsley-error-list"><?php echo $errors->first('sport'); ?></span>
		        </div>
		        <button type="submit" class="btn btn-sm btn-primary">Update</button>
		        <a href="{{route('admin.sports.index')}}" class="btn btn-sm btn-default">Cancel</a>
	      	{{ Form::close()}}
	    </div>
	  </section>
	</div>
</div>