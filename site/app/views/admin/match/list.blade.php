<section class="panel panel-default">
	<header class="panel-heading">
	  <b>Matchs Schedule</b>
	</header>
	<div class="table-responsive ">
	  <table class="table table-striped b-t b-light tablesorter">
	    <thead>
	      <tr>
	        <th>SN</th>
	        <th>Team 1</th>
	        <th>Team 2</th>
	        <th>Date</th>
	        <th>Time</th>
	        <th>Venue</th>
	      </tr>
	    </thead>
	    <tbody>
	    	<?php $count = 0 ?>
	        @foreach($matches as $match)
	        <tr>
		        <td>{{++$count}}</td>
		        <td>{{$match->category}}</td>
		        <td>{{$match->team2_id}}</td>
		        <td>{{$match->date}}</td>
		        <td>{{$match->time}}</td>
		        <td>{{$match->venue}}</td>
		        <td>
		        	{{ Form::open(array("url"=>"/admin/match/delete".$match->id,'role' => 'form', 'method' => 'get')) }}
		        	{{ link_to('admin/match/edit/'.$match->id, 'Edit', array('class' => 'btn btn-s-md btn-info')) }}
		        	<button class="btn btn-s-md btn-danger" type="submit">Delete</button>
		        	{{Form::close()}}
		        </td>
	    	</tr>
	        @endforeach
	    </tbody>
	  </table>
	</div>
</section>