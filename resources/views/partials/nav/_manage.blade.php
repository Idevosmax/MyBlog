<div class="side-menu" id="admin-side-menu"> 
    <aside class="menu">
        <p class="menu-label p-l-10 m-t-25">
            General
        </p>
        <ul class="menu-list">
                <li><a href="{{ route('manage.dashboard')}}"> Dashboard</a></li>
                </ul>
        <p class="menu-label p-l-10">
            Administration
        </p>
        <ul class="menu-list">
        <li><a href="{{route('users.index')}}"> Manage Users</a></li>
        <li><a class="has-submenu is-active" href="#"> Roles & Permissions</a>
            <ul class="submenu">
                  <li> <a href="#"> Roles </a> </li>
                   <li> <a href="{{route('permissions.index')}}"> Permisions </a> </li> 
            </ul>

        </li>
        <li><a class="has-submenu" href="#">Another list</a>
            <ul class="submenu">
                  <li> <a href="#"> Roles </a> </li>
                   <li> <a href="{{route('permissions.index')}}"> Permisions </a> </li> 
            </ul>

        </li>
        <li><a class="has-submenu" href="#"> Yet Another List</a>
            <ul class="submenu">
                  <li> <a href="#"> Roles </a> </li>
                   <li> <a href="{{route('permissions.index')}}"> Permisions </a> </li> 
            </ul>

        </li>

        </ul>
       
    </aside>
 </div>
 <div>
        
 </div>