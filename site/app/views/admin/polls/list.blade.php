<section class="panel panel-default">
	<header class="panel-heading">
	  <b>Sports</b>
	</header>
	<div class="table-responsive ">
	  <table class="table table-striped b-t b-light tablesorter">
	    <thead>
	      <tr>
	        <th>SN</th>
	        <th>Name</th>
	        <th>Sport</th>
	        <th>Category</th>
	        <th>Action</th>
	      </tr>
	    </thead>
	    <tbody>
	    	<?php $count = 0 ?>
	        @foreach($polls as $poll)
	        <tr>
		        <td>{{++$count}}</td>
		        <td>{{$poll->poll_title}}</td>
		        <td>{{$poll->sport}}</td>
		        <td>{{$poll->category}}</td>
		        <td>
		        	{{ Form::open(array('action' => array('admin.poll.destroy', $poll->id),'role' => 'form', 'method' => 'DELETE')) }}
		        	{{link_to_route('admin.poll.edit', "Edit" , $parameters = array($poll->id) , $attributes = array('class'=>'btn btn-s-md btn-info')) }}
		        	<button class="btn btn-s-md btn-danger" type="submit">Delete</button>
		        	{{Form::close()}}
		        </td>
	    	</tr>
	        @endforeach
	    </tbody>
	  </table>
	</div>
</section>