<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
  <meta charset="utf-8" />
  <title>Admin Panel</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  {{ HTML::style('assets/css/bootstrap.css') }}
  {{ HTML::style('assets/css/animate.css') }}
  {{ HTML::style('assets/css/font-awesome.min.css') }}
  {{ HTML::style('assets/css/font.css') }}
  {{ HTML::style('assets/css/app.css') }}
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body>
  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
    <div class="container aside-xxl">
      <div class="text-align:center">{{ HTML::image('assets/img/logo.gif', 'GDH Logo', array( 'width' => 400, 'height' => 400, 'style' => 'display:none' )) }}</div>
      <section class="panel panel-default bg-white m-t-lg">
        <header class="panel-heading text-center">
          <strong>Sign in</strong>
        </header>
        {{ Form::open(array('action' => 'UserController@postLogin','class' => 'panel-body wrapper-lg')) }}
         @if(Session::has('failure'))
        	<div class="alert alert-danger">
            	<button type="button" class="close" data-dismiss="alert">×</button>
            	<i class="fa fa-ban-circle"></i><strong>Failure!</strong> {{Session::get('failure')}}
          	</div>
          @endif
          <div class="form-group">
            <label class="control-label">Username</label>
            <input type="text" name="username" placeholder="alphaaplha" class="form-control input-lg <?php if($errors->has('username')) echo 'parsley-error'; ?>">
            <span class="parsley-error-list"><?php echo $errors->first('username'); ?></span>
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <input type="password" name="password" id="inputPassword" placeholder="Password" class="form-control input-lg <?php if($errors->has('password')) echo 'parsley-error'; ?>">
            <span class="parsley-error-list"><?php echo $errors->first('password'); ?></span>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Keep me logged in
            </label>
          </div>
          <button type="submit" class="btn btn-primary">Sign in</button>
         {{ Form::close() }}
      </section>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder">
      <p>
        <small>Built by Vashistha with Love</small>
      </p>
    </div>
  </footer>
  <!-- / footer -->
  {{ HTML::script('./assets/js/jquery.min.js') }}
  {{ HTML::script('./assets/js/bootstrap.js') }}
  {{ HTML::script('./assets/js/app.js') }}
  {{ HTML::script('./assets/js/app.plugin.js') }}
  {{ HTML::script('./assets/js/slimscroll/jquery.slimscroll.min.js') }}
</body>
</html>