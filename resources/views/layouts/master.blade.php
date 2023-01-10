  @include('layouts.partisal.header')
  <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> EmanItSolution</a></div>
    <div class="sl-sideleft">
      <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
      </div><!-- input-group -->

      <label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        <a href="{{route('home')}}" class="sl-menu-link active">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="widgets.html" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Cards &amp; Widgets</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">All Category</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->

        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('navbar')}}" class="nav-link">Menu Section</a></li>
          <li class="nav-item"><a href="{{route('banner.section')}}" class="nav-link">Banner Add</a></li>
          <li class="nav-item"><a href="{{route('banner.create')}}" class="nav-link">Banner Info</a></li>
          <li class="nav-item"><a href="{{route('social.icon')}}" class="nav-link">Soical Icon</a></li>
        </ul>
     <!-- Education section -->
     <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
          <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Education Section</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->

        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('education.section')}}" class="nav-link">Education</a></li>
          <li class="nav-item"><a href="{{route('education.data')}}" class="nav-link">Education Data </a></li>
        </ul>
  <!-- Education section End -->
     <!-- Contaction information section -->
     <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
          <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Contact Info</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->

        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('address.information')}}" class="nav-link">Address Info</a></li>
          <li class="nav-item"><a href="{{route('create.niew')}}" class="nav-link">Address View</a></li>
          
        </ul>
  <!-- Service section End -->

  <!-- Contaction information section -->
     <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
          <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Service Solution</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->

        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('service')}}" class="nav-link">Service</a></li>
          <li class="nav-item"><a href="{{route('service.view')}}" class="nav-link">Service View</a></li>
          
        </ul>
  <!-- Education section End -->

  <!-- Contaction information section -->
     <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
          <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Counter  Aria</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->

        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('counter.aria')}}" class="nav-link">Counter</a></li>
          <li class="nav-item"><a href="{{route('counter.create')}}" class="nav-link">Counter View</a></li>
          
        </ul>
  <!-- Education section End -->

  <!-- Portfolio  section -->
     <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
          <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Portfolio Section</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->

        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('portfolio')}}" class="nav-link">Portfolio</a></li>
          <li class="nav-item"><a href="{{route('portfolio.create')}}" class="nav-link">Portfolio View</a></li>
     
          
        </ul>
  <!-- Portfolio section End -->

  <!-- Testimonial  section -->
     <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
          <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Testimonial Section</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->

        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('testmonial')}}" class="nav-link">Testmonial</a></li>
          <li class="nav-item"><a href="{{route('testmonial.create')}}" class="nav-link">Testmonial View</a></li>
     
          
        </ul>
  <!-- Testimonial section End -->

  <!-- Brand  section -->
     <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
          <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Brand Section</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->

        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('brand.aria')}}" class="nav-link">Brand</a></li>
          <li class="nav-item"><a href="{{route('brand.create')}}" class="nav-link">Brand View</a></li>
         
     
          
        </ul>
  <!-- Testimonial section End -->

       <!-- Logo and footer section -->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
            <span class="menu-item-label">Settings</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->

        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="form-elements.html" class="nav-link">Logo Section</a></li>
          <li class="nav-item"><a href="form-layouts.html" class="nav-link">Footer Part</a></li>
        </ul>
        
      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name">Jane<span class="hidden-md-down"> Doe</span></span>
              <img src="{{asset('dashboard_asset')}}/img/img3.jpg" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                <li><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
                <li><a href=""><i class="icon ion-ios-star-outline"></i> Favorites</a></li>
                <li><a href=""><i class="icon ion-ios-folder-outline"></i> Collections</a></li>
                <li><a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout</a>
                    </li>

                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
          <a id="btnRightMenu" href="" class="pos-relative">
            <i class="icon ion-ios-bell-outline"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger"></span>
            <!-- end: if statement -->
          </a>
        </div><!-- navicon-right -->
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
      @include('layouts.partisal.sitebar')
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Dashboard</span>
        <span class="breadcrumb-item active">Admin All User</span>
      </nav>

        @yield('content')
        
   
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="{{asset('dashboard_asset')}}/lib/jquery/jquery.js"></script>
    <script src="{{asset('dashboard_asset')}}/lib/popper.js/popper.js"></script>
    <script src="{{asset('dashboard_asset')}}/lib/bootstrap/bootstrap.js"></script>
    <script src="{{asset('dashboard_asset')}}/lib/jquery-ui/jquery-ui.js"></script>
    <script src="{{asset('dashboard_asset')}}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="{{asset('dashboard_asset')}}/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
    <script src="{{asset('dashboard_asset')}}/lib/d3/d3.js"></script>
    <script src="{{asset('dashboard_asset')}}/lib/rickshaw/rickshaw.min.js"></script>
    <script src="{{asset('dashboard_asset')}}/lib/chart.js/Chart.js"></script>
    <script src="{{asset('dashboard_asset')}}/lib/Flot/jquery.flot.js"></script>
    <script src="{{asset('dashboard_asset')}}/lib/Flot/jquery.flot.pie.js"></script>
    <script src="{{asset('dashboard_asset')}}/lib/Flot/jquery.flot.resize.js"></script>
    <script src="{{asset('dashboard_asset')}}./lib/flot-spline/jquery.flot.spline.js"></script>

    <script src="{{asset('dashboard_asset')}}/js/starlight.js"></script>
    <script src="{{asset('dashboard_asset')}}/js/ResizeSensor.js"></script>
    <script src="{{asset('dashboard_asset')}}/js/dashboard.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @yield('footer_script')
  </body>
</html>
