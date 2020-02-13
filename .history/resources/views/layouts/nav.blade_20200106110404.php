<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
  <!--left-fixed -navigation-->
  <aside class="sidebar-left">
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <h1 style="text-align:center"><img src="{{url('public/admin/images/logo.png')}}" ></h1>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>
          <li class="treeview">
            <a href="{{url('home')}}">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-user"></i>
              <span>User</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('useradd')}}"><i class="fa fa-angle-right"></i> Add User</a></li>
              <li><a href="{{url('userview')}}"><i class="fa fa-angle-right"></i> View User</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-laptop"></i>
              <span>Blog</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('addblog')}}"><i class="fa fa-angle-right"></i> Add Blog</a></li>
              <li><a href="{{url('blogview')}}"><i class="fa fa-angle-right"></i> View Blog</a></li>
            </ul>
          </li>
       <!--    <li class="treeview">
            <a href="#">
              <i class="fa fa-table"></i>
              <span>Category</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('addcategory')}}"><i class="fa fa-angle-right"></i> Add Category</a></li>
              <li><a href="{{url('categoryview')}}"><i class="fa fa-angle-right"></i> View Category</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-envelope"></i>
              <span>Secondry Category</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('addhomeimages')}}"><i class="fa fa-angle-right"></i> Add </a></li>
              <li><a href="{{url('homeimageview')}}"><i class="fa fa-angle-right"></i> View </a></li>
            </ul>
          </li> -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-question"></i>
              <span>Questions</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('addquestion')}}"><i class="fa fa-angle-right"></i> Add </a></li>
              <li><a href="{{url('viewquestion')}}"><i class="fa fa-angle-right"></i> View </a></li>
            </ul>
          </li>
          <li>
            <a href="{{url('setting')}}">
              <i class="fa fa-th"></i> <span>Setting</span>
              <!--  <small class="label pull-right label-info">08</small> -->
            </a>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Withdrawals</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('withdrawalpending')}}"><i class="fa fa-angle-right"></i> Pending </a></li>
              <li><a href="{{url('withdrawalcom')}}"><i class="fa fa-angle-right"></i> Completed </a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Winners</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('prizedistribute')}}"><i class="fa fa-angle-right"></i> Distribute Prizes </a></li>
              <li><a href="{{url('winnerlist')}}"><i class="fa fa-angle-right"></i> Winner List </a></li>
            </ul>
          </li>
          <!--  <li class="treeview">
            <a href="charts.html">
              <i class="fa fa-pie-chart"></i>
              <span>Charts</span>
              <span class="label label-primary pull-right">new</span>
            </a>
          </li> -->
          <!--   <li class="treeview">
          <li class="treeview">
            <a href="#">
              <i class="fa fa-laptop"></i>
              <span>UI Elements</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="general.html"><i class="fa fa-angle-right"></i> General</a></li>
              <li><a href="icons.html"><i class="fa fa-angle-right"></i> Icons</a></li>
              <li><a href="buttons.html"><i class="fa fa-angle-right"></i> Buttons</a></li>
              <li><a href="typography.html"><i class="fa fa-angle-right"></i> Typography</a></li>
            </ul>
          </li> -->
          <!--    <li>
            <a href="widgets.html">
              <i class="fa fa-th"></i> <span>Widgets</span>
              <small class="label pull-right label-info">08</small>
            </a>
          </li> -->
          <!--   <li class="treeview">
            <a href="#">
              <i class="fa fa-edit"></i> <span>Forms</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul>
          </li> -->
          <!--   <li class="treeview">
            <a href="#">
              <i class="fa fa-table"></i> <span>Tables</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="tables.html"><i class="fa fa-angle-right"></i> Simple tables</a></li>
            </ul>
          </li> -->
          <!--   <li class="treeview">
            <a href="#">
              <i class="fa fa-envelope"></i> <span>Mailbox </span>
              <i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>
            <ul class="treeview-menu">
              <li><a href="inbox.html"><i class="fa fa-angle-right"></i> Mail Inbox </a></li>
              <li><a href="compose.html"><i class="fa fa-angle-right"></i> Compose Mail </a></li>
            </ul>
          </li> -->
          <!--    <li class="treeview">
            <a href="#">
              <i class="fa fa-folder"></i> <span>Examples</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="login.html"><i class="fa fa-angle-right"></i> Login</a></li>
              <li><a href="signup.html"><i class="fa fa-angle-right"></i> Register</a></li>
              <li><a href="404.html"><i class="fa fa-angle-right"></i> 404 Error</a></li>
              <li><a href="500.html"><i class="fa fa-angle-right"></i> 500 Error</a></li>
              <li><a href="blank-page.html"><i class="fa fa-angle-right"></i> Blank Page</a></li>
            </ul>
          </li> -->
          <!--  <li class="header">LABELS</li>
          <li><a href="#"><i class="fa fa-angle-right text-red"></i> <span>Important</span></a></li>
          <li><a href="#"><i class="fa fa-angle-right text-yellow"></i> <span>Warning</span></a></li>
          <li><a href="#"><i class="fa fa-angle-right text-aqua"></i> <span>Information</span></a></li> -->
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </nav>
  </aside>
</div>
<div class="sticky-header header-section ">
  <div class="header-left">
    <!--toggle button start-->
    <button id="showLeftPush"><i class="fa fa-bars"></i></button>
    <!--toggle button end-->
    <div class="profile_details_left">
      <!--notifications of menu start -->
    <!--   <ul class="nofitications-dropdown">
        <li class="dropdown head-dpdn">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">4</span></a>
          <ul class="dropdown-menu">
            <li>
              <div class="notification_header">
                <h3>You have 3 new messages</h3>
              </div>
            </li>
            <li><a href="#">
                <div class="user_img"><img src="images/1.jpg" alt=""></div>
                <div class="notification_desc">
                  <p>Lorem ipsum dolor amet</p>
                  <p><span>1 hour ago</span></p>
                </div>
                <div class="clearfix"></div>
              </a></li>
            <li class="odd"><a href="#">
                <div class="user_img"><img src="images/4.jpg" alt=""></div>
                <div class="notification_desc">
                  <p>Lorem ipsum dolor amet </p>
                  <p><span>1 hour ago</span></p>
                </div>
                <div class="clearfix"></div>
              </a></li>
            <li><a href="#">
                <div class="user_img"><img src="images/3.jpg" alt=""></div>
                <div class="notification_desc">
                  <p>Lorem ipsum dolor amet </p>
                  <p><span>1 hour ago</span></p>
                </div>
                <div class="clearfix"></div>
              </a></li>
            <li><a href="#">
                <div class="user_img"><img src="images/2.jpg" alt=""></div>
                <div class="notification_desc">
                  <p>Lorem ipsum dolor amet </p>
                  <p><span>1 hour ago</span></p>
                </div>
                <div class="clearfix"></div>
              </a></li>
            <li>
              <div class="notification_bottom">
                <a href="#">See all messages</a>
              </div>
            </li>
          </ul>
        </li>
        <li class="dropdown head-dpdn">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">4</span></a>
          <ul class="dropdown-menu">
            <li>
              <div class="notification_header">
                <h3>You have 3 new notification</h3>
              </div>
            </li>
            <li><a href="#">
                <div class="user_img"><img src="images/4.jpg" alt=""></div>
                <div class="notification_desc">
                  <p>Lorem ipsum dolor amet</p>
                  <p><span>1 hour ago</span></p>
                </div>
                <div class="clearfix"></div>
              </a></li>
            <li class="odd"><a href="#">
                <div class="user_img"><img src="images/1.jpg" alt=""></div>
                <div class="notification_desc">
                  <p>Lorem ipsum dolor amet </p>
                  <p><span>1 hour ago</span></p>
                </div>
                <div class="clearfix"></div>
              </a></li>
            <li><a href="#">
                <div class="user_img"><img src="images/3.jpg" alt=""></div>
                <div class="notification_desc">
                  <p>Lorem ipsum dolor amet </p>
                  <p><span>1 hour ago</span></p>
                </div>
                <div class="clearfix"></div>
              </a></li>
            <li><a href="#">
                <div class="user_img"><img src="images/2.jpg" alt=""></div>
                <div class="notification_desc">
                  <p>Lorem ipsum dolor amet </p>
                  <p><span>1 hour ago</span></p>
                </div>
                <div class="clearfix"></div>
              </a></li>
            <li>
              <div class="notification_bottom">
                <a href="#">See all notifications</a>
              </div>
            </li>
          </ul>
        </li>
        <li class="dropdown head-dpdn">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">8</span></a>
          <ul class="dropdown-menu">
            <li>
              <div class="notification_header">
                <h3>You have 8 pending task</h3>
              </div>
            </li>
            <li><a href="#">
                <div class="task-info">
                  <span class="task-desc">Database update</span><span class="percentage">40%</span>
                  <div class="clearfix"></div>
                </div>
                <div class="progress progress-striped active">
                  <div class="bar yellow" style="width:40%;"></div>
                </div>
              </a></li>
            <li><a href="#">
                <div class="task-info">
                  <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                  <div class="clearfix"></div>
                </div>
                <div class="progress progress-striped active">
                  <div class="bar green" style="width:90%;"></div>
                </div>
              </a></li>
            <li><a href="#">
                <div class="task-info">
                  <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                  <div class="clearfix"></div>
                </div>
                <div class="progress progress-striped active">
                  <div class="bar red" style="width: 33%;"></div>
                </div>
              </a></li>
            <li><a href="#">
                <div class="task-info">
                  <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                  <div class="clearfix"></div>
                </div>
                <div class="progress progress-striped active">
                  <div class="bar  blue" style="width: 80%;"></div>
                </div>
              </a></li>
            <li>
              <div class="notification_bottom">
                <a href="#">See all pending tasks</a>
              </div>
            </li>
          </ul>
        </li>
      </ul> -->
      <div class="clearfix"> </div>
    </div>
    <!--notification menu end -->
    <div class="clearfix"> </div>
  </div>
  <div class="header-right">


    <!--search-box-->
  <!--   <div class="search-box">
      <form class="input">
        <input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
        <label class="input__label" for="input-31">
          <svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
            <path d="m0,0l404,0l0,77l-404,0l0,-77z" />
          </svg>
        </label>
      </form>
    </div> -->
    <!--//end-search-box-->

    <div class="profile_details">
      <ul>
        <li class="dropdown profile_details_drop">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <div class="profile_img">
              <span class="prfil-img"><img src="images/2.jpg" alt=""> </span>
              <div class="user-name">
                <p>Admin Name</p>
                <span>Administrator</span>
              </div>
              <i class="fa fa-angle-down lnr"></i>
              <i class="fa fa-angle-up lnr"></i>
              <div class="clearfix"></div>
            </div>
          </a>
          <ul class="dropdown-menu drp-mnu">
         <!--    <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
            <li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li>
            <li> <a href="#"><i class="fa fa-suitcase"></i> Profile</a> </li> -->
            <li> <a href="{{url('/logout')}}"><i class="fa fa-sign-out"></i> Logout</a> </li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="clearfix"> </div>
  </div>
  <div class="clearfix"> </div>
</div>