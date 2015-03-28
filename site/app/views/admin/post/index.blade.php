<div class="m-b-md">
  <h1 class="m-b-none">Post Massege</h1>
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
        	{{Form::open(array("url"=>"/admin/post/store" ,"method" => "POST","role" => "form"))}}
		       
		          <div class="row">
		        	<div class="form-group col-md-6">
	                	<label>Title</label>
	                    {{Form::text('title','',array("class"=>"form-control", "placeholder"=>"Title"))}}
	                    <span>{{$errors->first('title')}}</span>
	                </div>
	               <div class="form-group col-md-6">
			          <label>type</label>
			          {{Form::select('type',  [ 0 => 'Text', 1 => 'Image', 2 => 'Video' ]  , '',["class"=>"form-control"])}}
			          <span class="parsley-error-list"><?php echo $errors->first('type'); ?></span>
			        </div>
		        </div>      

		        <div class="row">		        	
			        <div class="form-group col-md-6">
			          <label>Category</label>
			          {{Form::select('category_id', $category ,'',["class"=>"form-control"])}}
			          <span class="parsley-error-list"><?php echo $errors->first('category_id'); ?></span>
			        </div>	
			        	<div class="form-group col-md-6">
			          <label>Is Topic?</label>
			          {{Form::select('is_topic', [ 0 => 'No', 1 => 'Yes' ] , '',["class"=>"form-control"])}}
			          <span class="parsley-error-list"><?php echo $errors->first('is_topic'); ?></span>
			        </div>	        
		        </div>
		       <div class="row">
		        <div class="form-group col-md-6">
	                	<label>Content</label>
	                	  {{Form::textarea('content','',array("class"=>"form-control", "placeholder"=>"Content"))}}
	                    <span>{{$errors->first('content')}}</span>
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