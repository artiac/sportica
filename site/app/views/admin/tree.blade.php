<div class="m-b-md">
  <h1 class="m-b-none">Sports Tree</h1>
</div>
<div class="row">
	@foreach($sports as $sport)
		<div class="col-md-6">
		  <section class="panel panel-default">
		    <header class="panel-heading font-bold">{{$sport->sport}}</header>
		    <div class="panel-body">
	        	<div class="row m-b">
	                <div class="col-sm-12">              
	                  <div class="dd" id="nestable1">
	                    <ol class="dd-list">
	                    	@foreach($categories as $category)
	                    		@if($category->parent_id == 0 && $category->sport_id == $sport->id)
			                      	<li class="dd-item">
			                          	<div class="dd-handle">{{$category->category}}</div>
			                          	<?php get_childs($category->id, $categories); ?>
			                      	</li>
		                      	@endif
		                    @endforeach
	                  </ol>
	                  </div>
	                </div>
	              </div>
		    </div>
		  </section>
		</div>
	@endforeach
</div>
<?php
	function get_childs($id, $cats){
		echo '<ol class="dd-list">';
		foreach ($cats as $cat) {
			if($cat->parent_id == $id){

              	echo '<li class="dd-item">
                  	<div class="dd-handle">'.$cat->category.'</div>';
                  	get_childs($cat->id, $cats);
              	echo '</li>';
          	}
		}
		echo '</ol>';
	}

?>