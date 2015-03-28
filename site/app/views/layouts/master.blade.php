<!DOCTYPE html>
<html lang="en" class="app" ng-app="">
<head>
  <meta charset="utf-8" />
  <title>Admin Panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  {{ HTML::style("assets/css/bootstrap.css")}}
  {{ HTML::style("assets/css/animate.css")}}
  {{ HTML::style("assets/css/font-awesome.min.css")}}
  {{ HTML::style("assets/css/font.css")}}
  {{ HTML::style("assets/js/datepicker/datepicker.css")}}
  {{ HTML::style("assets/js/calendar/bootstrap_calendar.css")}}
  {{ HTML::style("assets/js/nestable/nestable.css")}}
  {{ HTML::style("assets/css/app.css")}}
  {{ HTML::style("assets/css/clockface.css")}}
  {{ HTML::style("assets/css/bootstrap-wysihtml5.css")}}
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body>
  <section class="vbox">
    <header class="bg-black dk header navbar navbar-fixed-top-xs">
      <div class="navbar-header aside-md">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
          <i class="fa fa-bars"></i>
        </a>
        <a href="#" class="navbar-brand" data-toggle="fullscreen">Admin Panel</a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user">
          <i class="fa fa-cog"></i>
        </a>
      </div>     
      <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            {{Auth::user()->email}} <b class="caret"></b>
          </a>
          <ul class="dropdown-menu animated fadeInRight">
            <span class="arrow top"></span>
            <li>
              <a href="{{ url('/admin/logout') }}" >Logout</a>
            </li>
          </ul>
        </li>
      </ul>      
    </header>
    <section>
      <section class="hbox stretch">
        @include('layouts.sidebar')
        <section id="content">
          <section class="vbox">          
            <section class="scrollable padder">
              {{$main}}
              {{$list}}
            </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
        </section>
        <aside class="bg-light lter b-l aside-md hide" id="notes">
          <div class="wrapper">Notification</div>
        </aside>
      </section>
    </section>
  </section>
  <script type="text/javascript">
    var base_url = '{{URL::to('/')}}';
  </script>
  {{ HTML::script("assets/js/jquery.min.js")}}
  {{ HTML::script("assets/js/angular.min.js")}}
  <!-- Bootstrap -->
  {{ HTML::script("assets/js/bootstrap.js")}}
  <!-- App -->
  {{ HTML::script("assets/js/app.js")}}
  {{ HTML::script("assets/js/clockface.js")}}
  {{ HTML::script("assets/js/app.plugin.js")}}
  {{ HTML::script("assets/js/slimscroll/jquery.slimscroll.min.js")}}
  {{ HTML::script("assets/js/sortable/jquery.sortable.js")}}

  {{ HTML::script("assets/js/jquery.tablesorter.js")}}
  {{ HTML::script("assets/js/jquery.tablesorter.widgets.js")}}
  {{ HTML::script("assets/js/jquery.tablesorter.pager.js")}}
  
  {{ HTML::script("assets/js/wysihtml5-0.3.0.js")}}
  {{ HTML::script("assets/js/datepicker/bootstrap-datepicker.js")}}
  {{ HTML::script("assets/js/bootstrap-wysihtml5.js")}}
  {{ HTML::script("assets/js/nestable/jquery.nestable.js")}}
  {{ HTML::script("assets/js/nestable/demo.js")}}
  

  {{ HTML::script("assets/js/custom.js")}}

</body>
</html>