 <div class="sidebar-wrapper sidebar-theme">

     <nav id="sidebar">
         <div class="shadow-bottom"></div>
         <ul class="list-unstyled menu-categories" id="sidebarComponent">
             <li class="menu">
                 <a href="fonticons.html" aria-expanded="{{ request()->segment(1) == 'dashboard' ? 'true' : 'false' }}"
                     class="dropdown-toggle" data-active="{{ request()->segment(1) == 'dashboard' ? 'true' : 'false' }}">
                     <div class="">
                         <x-feathericon-home />
                         <span>Dashboard</span>
                     </div>
                 </a>
             </li>

             <li class="menu">
                 <a href="#dashboard" data-active="{{ request()->segment(1) != 'dashboard' ? 'true' : 'false' }}"
                     data-toggle="collapse"
                     aria-expanded="{{ request()->segment(1) != 'dashboard' ? 'true' : 'false' }}"
                     class="dropdown-toggle">
                     <div class="">
                         <x-feathericon-users />
                         <span>Employees</span>
                     </div>
                     <div>
                         <x-feathericon-chevron-right />
                     </div>
                 </a>
                 {{-- check segment --}}
                 <ul class="collapse submenu list-unstyled {{ request()->segment(1) != 'dashboard' ? 'show' : '' }}"
                     id="dashboard" data-parent="#sidebarComponent">
                     <li class="">
                         <a href="index.html"> Sales </a>
                     </li>
                     <li>
                         <a href="index2.html"> Analytics </a>
                     </li>
                 </ul>
             </li>



         </ul>
         <!-- <div class="shadow-bottom"></div> -->

     </nav>

 </div>
