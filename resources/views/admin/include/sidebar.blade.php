            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home"></i> Dashboard </span></a></li>
                  
                  {{-- <li><a><i class="fa fa-gears" aria-hidden="true"></i> Demo Li <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li class="sub_menu"><a href="#">Demo Ul</a></li>
                    </ul>
                  </li>                   --}}
                  <li><a href="{{route('admin.gallery.gallerylist')}}"><i class="fa fa-picture-o" aria-hidden="true"></i>Gallery </span></a></li>
                  <li><a href="{{route('admin.youtube.list')}}"><i class="fa fa-youtube" aria-hidden="true"></i>Youtube </span></a></li>
                  <li><a href="{{route('admin.blog.list')}}"><i class="fa fa-cog" aria-hidden="true"></i>Blog </span></a></li>
                  <li><a href="{{route('admin.service_enq.list')}}"><i class="fa fa-cog" aria-hidden="true"></i>Service Enquiries </span></a></li>
                  <li><a href="{{route('admin.contact.list')}}"><i class="fa fa-envelope" aria-hidden="true"></i>Enquiries </span></a></li>
                  <li><a href="{{route('admin.change_password_form')}}"><i class="fa fa-key" aria-hidden="true"></i>Change Password </span></a></li>

                  {{-- <li><a href="contact"><i class="fa fa-lock" aria-hidden="true"></i>Logout </span></a></li> --}}
                </ul>
              </div>

            </div>
         