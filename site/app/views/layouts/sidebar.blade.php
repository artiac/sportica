        <!-- .aside -->
        <aside class="bg-light lter b-r aside-md hidden-print" id="nav">          
          <section class="vbox">
            <section class="w-f scrollable">
              <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
                <!-- nav -->
                <nav class="nav-primary hidden-xs">
                  <ul class="nav">
                    <li class="@if($sidebar == 'dashboard' ) active @endif" >
                      <a href="{{action('DashboardController@getIndex')}}" >
                        <i class="fa fa-dashboard icon">
                          <b class="bg-danger"></b>
                        </i>
                        <span>Dashboard</span>
                      </a>
                    </li>
                    <li class="@if($sidebar == 'sports' ) active @endif" >
                      <a href="{{route('admin.sports.index')}}">
                        <i class="fa fa-edit icon">
                          <b class="bg-info"></b>
                        </i>
                        <span>Sports</span>
                      </a>
                    </li>
                    <li class="@if($sidebar == 'category' ) active @endif" >
                      <a href="{{route('admin.category.index')}}">
                        <i class="fa fa-edit icon">
                          <b class="bg-info"></b>
                        </i>
                        <span>Sports Category</span>
                      </a>
                    </li>
                    <li class="@if($sidebar == 'tree' ) active @endif" >
                      <a href="{{url('/admin/tree')}}">
                        <i class="fa fa-edit icon">
                          <b class="bg-info"></b>
                        </i>
                        <span>Sports Tree</span>
                      </a>
                    </li>
                    <li class="@if($sidebar == 'poll' ) active @endif" >
                      <a href="{{url('/admin/poll')}}">
                        <i class="fa fa-edit icon">
                          <b class="bg-info"></b>
                        </i>
                        <span>Polls</span>
                      </a>
                    </li>
                    <li class="@if($sidebar == 'point' ) active @endif" >
                      <a href="{{url('/admin/point')}}">
                        <i class="fa fa-edit icon">
                          <b class="bg-info"></b>
                        </i>
                        <span>Points Table</span>
                      </a>
                    </li>
                     <li class="@if($sidebar == 'match' ) active @endif" >
                      <a href="{{url('/admin/match')}}">
                        <i class="fa fa-edit icon">
                          <b class="bg-info"></b>
                        </i>
                        <span>Match schedule</span>
                      </a>
                    </li>
                     <li class="@if($sidebar == 'post' ) active @endif" >
                      <a href="{{url('/admin/post')}}">
                        <i class="fa fa-edit icon">
                          <b class="bg-info"></b>
                        </i>
                        <span>Post Message</span>
                      </a>
                    </li>
                  </ul>
                </nav>
                <!-- / nav -->
              </div>
            </section>
            
            <footer class="footer lt hidden-xs b-t b-light">
              <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon">
                <i class="fa fa-angle-left text"></i>
                <i class="fa fa-angle-right text-active"></i>
              </a>
            </footer>
          </section>
        </aside>
        <!-- /.aside -->