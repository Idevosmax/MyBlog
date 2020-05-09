

        <nav class="navbar has-shadow is-fixed-top box-shadow-card">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item is-paddingless brand-item" href="{{route('home')}}">
                        <img src= "{{asset("images/logo.png")}}" alt="MyBlog logo" width="100" heigth="35">
                    </a>
              
                    @if (Request::segment(1) == "manage")
                      <a class="navbar-item is-hidden-desktop" id="admin-slideout-button">
                        <span class="icon">
                          <i class="fa fa-arrow-circle-right"></i>
                        </span>
                      </a>
                    @endif
              
                    <button class="button navbar-burger">
                     <span></span>
                     <span></span>
                     <span></span>
                   </button>
                  </div>
                <div class="navbar-menu">

                
                <div class="navbar-start">
                    
               
                    <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">Forum</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Blog</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Community</a>
                </div>
                <div class="navbar-end dropdown-overflow">
                    @if (Auth::guest())
                <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
                        <a href="{{route('register')}}" class="navbar-item is-tab">Join the Challenge</a>
                    @else

                    <div class="navbar-item has-dropdown is-hoverable ">
                            <a class="navbar-link">Hey {{Auth::user()->name}}</a>
                            <div class="navbar-dropdown is-right box-shadow-card" >
                              <a href="#" class="navbar-item">
                                <span class="icon">
                                  <i class="fa fa-fw fa-user-circle-o m-r-5"></i>
                                </span>Profile
                              </a>
                
                              <a href="#" class="navbar-item">
                                <span class="icon">
                                  <i class="fa fa-fw fa-bell m-r-5"></i>
                                </span>Notifications
                              </a>
                              <a href="{{route('manage.dashboard')}}" class="navbar-item">
                                <span class="icon">
                                  <i class="fa fa-fw fa-cog m-r-5"></i>
                                </span>Manage
                               </a>
                               <a href=# class="navbar-item"> 
                                    <span class="icon"><i class="fa fa-fw m-r-5 fa-fighter-jet"></i></span>  Leaderboard
                                </a>
                                <a href=# class="navbar-item"> 
                                        <span class="icon"><i class="fa fa-fw m-r-5 fa-fighter-jet"></i></span> Challenges
                                </a>
                                <a href=# class="navbar-item"> 
                                    <span class="icon"><i class="fa fa-fw m-r-5 fa-gears"></i></span> Settings
                                </a>
                              <hr class="navbar-divider">
                              <a href="{{route('logout')}}" class="navbar-item" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                <span class="icon">
                                  <i class="fa fa-fw fa-sign-out m-r-5"></i>
                                </span>
                                Logout
                              </a>
                              @include('partials.forms.logout')
                            </div>
                          </div>

                    @endif
                </div>
              </div>
            </div>
        </nav>

       
