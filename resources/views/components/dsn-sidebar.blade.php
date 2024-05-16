   <aside id="logo-sidebar"
       class="fixed top-0 left-0 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 z-[39] sm:translate-x-0  "
       aria-label="Sidebar">
       <div class="h-full px-3 pb-4 overflow-y-auto text-white bg-white ">
           <ul class="space-y-2 font-medium">

               <li>
                   <a href="{{ route('dsn.dashboard') }}"
                       class="{{ Request::is('dosen/dashboard') ? 'bg-teal-400 text-white hover:bg-teal-400 hover:text-white' : '' }} flex items-center p-2 rounded-lg  text-gray-900  hover:bg-gray-100  group">
                       <i class="fa-solid fa-chart-pie"></i>
                       <span class="ms-3">Dashboard</span>
                   </a>
               </li>
               <li>
                   <a href="{{ route('dsn.skkm.index') }}"
                       class="{{ Request::is('dosen/dashboard/skkm') ? 'bg-teal-400 text-white hover:bg-teal-400 hover:text-white' : '' }} flex items-center p-2 text-gray-900 rounded-lg    hover:bg-gray-100    group">
                       <i class="fas fa-file-alt"></i>
                       <span class="flex-1 ms-3 whitespace-nowrap">Validasi SKKM</span>
                   </a>
               </li>


               <li>
                   <a href="{{ route('auth.logout') }}"
                       class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                       <i class="fas fa-sign-out-alt"></i>
                       <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
                   </a>
               </li>
           </ul>
       </div>
   </aside>
