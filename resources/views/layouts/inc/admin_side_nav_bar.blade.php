<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 my-3 fixed-start ms-3   bg-gradient-secondary" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" {{'dashboard'}} ">
        <!--
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        -->
        <span class="ms-1 font-weight-bold text-white" style="font-size: 20px;">
        Rimon's Eshop

          <?php
          // Return current date from the remote server
          date_default_timezone_set('Asia/Dhaka');
          $date = date('d-m-y | h:i:s');
          //echo $date;
          ?>

        <p style="font-size:13px;">{{$date;}}</p>
        </span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
            <br>
            <a class="nav-link " href="#" style="border:solid 2px white;">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">person</i>
              </div>
              <span class="nav-link-text ms-1">{{ Auth::user()->name }}</span>
            </a>
          </li>
          <hr>

        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('dashboard')? 'active bg-gradient-primary': ''}} " href="{{url('dashboard')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <!--
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/tables.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>
    -->
        <li class="nav-item">
            <a class="nav-link text-white {{ Request::is('products')? 'active bg-gradient-success': ''}} " href="{{url('products')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10"></i>
            </div>

            <span class="nav-link-text ms-1">Products</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white {{ Request::is('add_products')? 'active bg-gradient-success': ''}}" href="{{url('add_products')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                &#8853;
            </div>
            <span class="nav-link-text ms-1">Add Products</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white {{ Request::is('categories')? 'active bg-gradient-info': ''}} " href="{{url('categories')}}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">category</i>
              </div>

              <span class="nav-link-text ms-1">Categories</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white {{ Request::is('add_category')? 'active bg-gradient-info': ''}}" href="{{url('add_category')}}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                &#8853;
              </div>
              <span class="nav-link-text ms-1">Add Categories</span>
            </a>
          </li>
        <!--
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/billing.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Billing</span>
          </a>
        </li>




        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/virtual-reality.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">Virtual Reality</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/rtl.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
            </div>
            <span class="nav-link-text ms-1">RTL</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/notifications.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text ms-1">Notifications</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/profile.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">{{ Auth::user()->name }}</span>
          </a>
        </li>
        -->
        <!--
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/sign-in.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">logout</i>
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1" style="color: red;"><strong> Log Out </strong></span>
          </a>
        </li>
        -->

        <style>
          .logbutton{


          }

          .logbutton:hover{

            font-size:1rem;
          }


        </style>

        <li class="nav-item" style=" margin-top: 50%;">
          <a class="nav-link active bg-gradient-danger logbutton "
              href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">

              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10" style="color: red;">logout</i>
                      <span class="nav-link-text ms-1">
                           {{ __('Logout') }}
                      </span>
              </div>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
        </li>
        <!--
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/sign-up.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li>
      -->
      </ul>
    </div>
  </aside>
