   <aside id="logo-sidebar"
       class="fixed top-0 left-0 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 z-[39] sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
       aria-label="Sidebar">
       <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
           <ul class="space-y-2 font-medium">

            <li>
                <a href="{{ route('admin.dashboard') }}"
                    class="{{ Request::is('admin/dashboard') ? 'bg-teal-400 text-white hover:bg-teal-400 hover:text-white' : '' }} flex items-center p-2 rounded-lg  text-gray-90  hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <i class="fa-solid fa-chart-pie"></i>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>


               {{-- <li>
                   <a href="{{ route('admin.users.index') }}"
                       class="{{ Request::is('admin/dashboard/users*') ? 'bg-teal-400 text-white hover:bg-teal-400 hover:text-white' : '' }} flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100 dark:hover:bg-gray-700 group">
                       <svg class=" {{ Request::is('admin/dashboard/users*') ? 'text-gray-900' : '' }} flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                           aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                           viewBox="0 0 18 18">
                           <path
                               d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                       </svg>
                       <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                   </a>
               </li> --}}
               <li>
                   <button type="button"
                       class="{{ Request::is('admin/dashboard/users*') ? 'bg-teal-400 text-white hover:bg-teal-400 hover:text-white' : '' }} flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100  dark:hover:bg-gray-700"
                       aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                       <i class="fas fa-user"></i>
                       <span class="flex-1 text-left ms-3 rtl:text-right whitespace-nowrap">Users</span>
                       <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                           viewBox="0 0 10 6">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                               d="m1 1 4 4 4-4" />
                       </svg>
                   </button>
                   <ul id="dropdown-example" class="hidden py-2 space-y-2">
                       <li>
                           <a href="{{ route('admin.users.mahasiswa.index') }}"
                               class="{{ Request::is('admin/dashboard/users/mahasiswa*') ? 'bg-teal-400 text-white hover:bg-teal-400 hover:text-white' : '' }}  flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:hover:bg-gray-700">
                               <i class="mr-2 fas fa-user-graduate "></i>
                               Mahasiswa</a>


                       </li>
                       <li>
                           <a href="{{ route('admin.users.dosen.index') }}"
                               class="{{ Request::is('admin/dashboard/users/dosen*') ? 'bg-teal-400 text-white hover:bg-teal-400 hover:text-white' : '' }}  flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:hover:bg-gray-700">
                               <i class="mr-2 fas fa-chalkboard-teacher"></i>
                               Dosen</a>
                       </li>

                   </ul>
               </li>
               <li>
                <a href="{{ route('admin.study-program.index') }}"
                    class="{{ Request::is('admin/dashboard/study-program*') ? 'bg-teal-400 text-white hover:bg-teal-400 hover:text-white' : '' }} flex items-center p-2 rounded-lg  text-gray-90  hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <span class="ms-3">Program Studi</span>
                </a>
            </li>

               <li>
                   <a href="{{ route('auth.logout') }}"
                       class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                       <i class="fas fa-sign-out-alt"></i>
                       <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
                   </a>
               </li>
           </ul>
       </div>
   </aside>
