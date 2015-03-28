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
	    <header class="panel-heading font-bold">Edit poll</header>
	    <div class="panel-body">
        	{{ Form::open(array('route' => array('admin.poll.update', $poll->id),'role' => 'form', 'method' => 'PUT')) }}
		        <div class="row">
			        <div class="form-group col-md-6">
			          <label>Sport</label>
			          {{Form::select('sport_id', $sports , $poll->sport_id,["class"=>"form-control","onchange"=>"get_categories(\"category_id\")"])}}
			          <span class="parsley-error-list"><?php echo $errors->first('sport_id'); ?></span>
			        </div>
			        <div class="form-group col-md-6">
			          <label>Category</label>
			          {{Form::select('category_id', $categories , $poll->category_id ,["class"=>"form-control"])}}
			          <span class="parsley-error-list"><?php echo $errors->first('category_id'); ?></span>
			        </div>
		        </div>
		        <div class="row">
			        <div class="form-group col-md-6">
			          <label>Poll Title</label>
			          {{Form::text('poll_title', $poll->poll_title,["class"=>"form-control"])}}
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
<div class="row">
	<div class="col-md-12">
	  <section class="panel panel-default">
	    <header class="panel-heading font-bold">Add new option</header>
	    <div class="panel-body">
        	{{ Form::open(array('url' => 'admin/poll/option/'.$poll->id,'role' => 'form', 'method' => 'POST')) }}
		        <div class="row">
			        <div class="form-group col-md-6">
			          <label>Option</label>
			          {{Form::text('poll_option', '',["class"=>"form-control"])}}
			          <span class="parsley-error-list"><?php echo $errors->first('poll_option'); ?></span>
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
<section class="panel panel-default">
	<header class="panel-heading">
	  <b>Poll Options</b>
	</header>
	<div class="table-responsive ">
	  <table class="table table-striped b-t b-light tablesorter">
	    <thead>
	      <tr>
	        <th>SN</th>
	        <th>Option</th>
	        <th>Points</th>
	        <th>Action</th>
	      </tr>
	    </thead>
	    <tbody>
	    	<?php $count = 0 ?>
	        @foreach($poll_options as $poll_option)
	        <tr>
	        	@if($option_id != $poll_option->id)
			        <td>{{++$count}}</td>
			        <td>{{$poll_option->poll_option}}</td>
			        <td>{{$poll_option->points}}</td>
			        <td>
			        	{{ Form::open(array('url' => 'admin/poll/option/'.$poll_option->id,'role' => 'form', 'method' => 'DELETE')) }}
			        	{{link_to('admin/poll/'.$poll->id.'/edit/'.$poll_option->id, "Edit" , $attributes = array('class'=>'btn btn-s-md btn-info')) }}
			        	<button class="btn btn-s-md btn-danger" type="submit">Delete</button>
			        	{{Form::close()}}
			        </td>
		        @else
		        	{{Form::open(array('url' => 'admin/poll/option/'.$poll_option->id,'role' => 'form', 'method' => 'PUT')) }}
			        <td>{{++$count}}</td>
			        <td>
		        		{{Form::text('poll_option_edit', $poll_option->poll_option,["class"=>"form-control"])}}
			        	<span class="parsley-error-list"><?php echo $errors->first('poll_option_edit'); ?></span>
			        </td>
			        <td>{{$poll_option->points}}</td>
			        <td>
			        	<button class="btn btn-s-md btn-info" type="submit">SAVE</button>
			        	<a href="{{route('admin.poll.edit', $poll->id)}}" class="btn btn-s-md btn-danger" >Cancel</a>
			        	{{Form::close()}}
			        </td>
			    @endif
	    	</tr>
	        @endforeach
	    </tbody>
	  </table>
	</div>
</section>