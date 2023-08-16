    <nav
        class=" border-b border-gray-200 px-4 py-2.5  dark:border-gray-700 fixed left-0 right-0 top-0 z-50 backdrop-blur-md">
        <div class="flex flex-wrap justify-between items-center">
            <div class="flex justify-start items-center">
                <button data-drawer-target="drawer-navigation" data-drawer-toggle="drawer-navigation"
                    aria-controls="drawer-navigation"
                    class="p-2 mr-2 text-gray-600 rounded-lg cursor-pointer md:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-slate-800 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-slate-800 dark:hover:text-white">
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg aria-hidden="true" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Toggle sidebar</span>
                </button>
                <a href="{{ route('home') }}" class="flex items-center justify-between mr-4">
                    <img src="{{ asset('assets/images/logo/logo.png') }}" class="mr-3 h-8" alt="lanro Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Lanro</span>
                </a>
                <form action="#" method="GET" class="hidden md:block md:pl-2">
                    <label for="topbar-search" class="sr-only">Search</label>
                    <div class="relative md:w-96">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z">
                                </path>
                            </svg>
                        </div>
                        <input type="text" name="email" id="topbar-search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Search" />
                    </div>
                </form>
            </div>
            <div class="flex items-center lg:order-2">
                <button type="button" data-drawer-toggle="drawer-navigation" aria-controls="drawer-navigation"
                    class="p-2 mr-1 text-gray-500 rounded-lg md:hidden hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
                    <span class="sr-only">Toggle search</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z">
                        </path>
                    </svg>
                </button>
                <!-- + Botones para el dark mode -->
                <button id="darkModeButton"
                    class="p-2 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100 focus:ring-4 focus:ring-gray-300"
                    hidden>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-moon-star w-6 h-6">
                        <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z" />
                        <path d="M19 3v4" />
                        <path d="M21 5h-4" />
                    </svg>
                </button>

                <button id="lightModeButton"
                    class="p-2 rounded-lg dark:text-gray-400 dark:hover:text-white dark:hover:bg-slate-800 dark:focus:ring-gray-600"
                    hidden>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-sun-medium w-6 h-6">
                        <circle cx="12" cy="12" r="4" />
                        <path d="M12 3v1" />
                        <path d="M12 20v1" />
                        <path d="M3 12h1" />
                        <path d="M20 12h1" />
                        <path d="m18.364 5.636-.707.707" />
                        <path d="m6.343 17.657-.707.707" />
                        <path d="m5.636 5.636.707.707" />
                        <path d="m17.657 17.657.707.707" />
                    </svg>
                </button>
                <!-- Apps -->
                <button type="button" data-dropdown-toggle="apps-dropdown"
                    class="p-2 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-slate-800 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
                    <span class="sr-only">View notifications</span>
                    <!-- Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-category-2"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M14 4h6v6h-6z"></path>
                        <path d="M4 14h6v6h-6z"></path>
                        <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                        <path d="M7 7m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div class="hidden overflow-hidden z-50 my-4 max-w-sm text-base list-none bg-white shadow-lg dark:bg-slate-900 border-2 dark:border-slate-800 rounded-xl"
                    id="apps-dropdown">
                    <div
                        class="block py-2 px-4 text-base font-medium text-center text-gray-700 bg-slate-100 dark:bg-slate-800 dark:text-white">
                        Opciones
                    </div>
                    <div class="grid grid-cols-3 gap-4 p-4">
                        <a href="{{ route('create') }}"
                            class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-slate-800 group">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="mx-auto mb-1 w-7 h-7 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-white"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                <path d="M16 19h6"></path>
                                <path d="M19 16v6"></path>
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4"></path>
                            </svg>
                            <div class="text-sm text-gray-900 dark:text-white">Agregar</div>
                        </a>
                        <a href="#"
                            class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-slate-800 group">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="mx-auto mb-1 w-7 h-7 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-white"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                            </svg>
                            <div class="text-sm text-gray-900 dark:text-white">
                                Perfil
                            </div>
                        </a>
                        <a href="#"
                            class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-slate-800 group">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="mx-auto mb-1 w-7 h-7 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-white"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M10 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2">
                                </path>
                                <path d="M15 12h-12l3 -3"></path>
                                <path d="M6 15l-3 -3"></path>
                            </svg>
                            <div class="text-sm text-gray-900 dark:text-white">
                                Logout
                            </div>
                        </a>
                    </div>
                </div>
                <button type="button"
                    class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gough.png"
                        alt="user photo" />
                </button>
                <!-- Dropdown menu -->
                <div class="hidden z-50 my-4 w-56 text-base list-none bg-white divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 rounded-xl"
                    id="dropdown">
                    <div class="py-3 px-4">
                        <span class="block text-sm font-semibold text-gray-900 dark:text-white"> Nombre: </span>
                        <span class="block text-sm text-gray-900 dark:text-white"> Neil Sims </span>
                        <span class="block text-sm font-semibold text-gray-900 dark:text-white"> Correo: </span>
                        <span class="block text-sm text-gray-900 dark:text-white">
                            name@flowbite.com</span>
                        <span class="block text-sm font-semibold text-gray-900 dark:text-white"> Numero de nomina:
                        </span>
                        <span class="block text-sm text-gray-900 dark:text-white"> 114251 </span>
                    </div>
                    <ul class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
                        <li>
                            <a href="#"
                                class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <!-- Sidebar -->

    <aside
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full border-r border-gray-200 md:translate-x-0 dark:border-gray-700"
        aria-label="Sidenav" id="drawer-navigation">
        <div class="overflow-y-auto py-5 px-3 h-full backdrop-blur-md">
            <form action="#" method="GET" class="md:hidden mb-2">
                <label for="sidebar-search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z">
                            </path>
                        </svg>
                    </div>
                    <input type="text" name="search" id="sidebar-search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Search" />
                </div>
            </form>
            <ul class="space-y-2">
                <li>
                    <a href="{{ route('home') }}"
                        class="flex items-center p-2 text-base font-medium rounded-lg {{ request()->routeIs('home') ? 'text-gray-900 bg-gray-100 dark:text-white  dark:bg-slate-800' : 'text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-slate-800' }}">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M10 3.2a9 9 0 1 0 10.8 10.8a1 1 0 0 0 -1 -1h-6.8a2 2 0 0 1 -2 -2v-7a.9 .9 0 0 0 -1 -.8">
                            </path>
                            <path d="M15 3.5a9 9 0 0 1 5.5 5.5h-4.5a1 1 0 0 1 -1 -1v-4.5"></path>
                        </svg>
                        <span class="ml-3">Bienvenido/a</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('Calidad') }}"
                        class="flex items-center pl-11 p-2 text-base font-medium rounded-lg {{ request()->routeIs('Calidad') ? 'text-gray-900 bg-gray-100 dark:text-white  dark:bg-slate-800' : 'text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-slate-800' }}">Calidad</a>
                </li>
                <li>
                    <a href="{{ route('Producción') }}"
                        class="flex items-center pl-11 p-2 text-base font-medium rounded-lg {{ request()->routeIs('Producción') ? 'text-gray-900 bg-gray-100 dark:text-white  dark:bg-slate-800' : 'text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-slate-800' }}">Produccion</a>
                </li>
                <li>
                    <a href="{{ route('Supervisor') }}"
                        class="flex items-center pl-11 p-2 text-base font-medium rounded-lg {{ request()->routeIs('Supervisor') ? 'text-gray-900 bg-gray-100 dark:text-white  dark:bg-slate-800' : 'text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-slate-800' }}">Supervisores</a>
                </li>
                <li>
                    <a href="{{ route('Sistemas') }}"
                        class="flex items-center pl-11 p-2 text-base font-medium rounded-lg {{ request()->routeIs('Sistemas') ? 'text-gray-900 bg-gray-100 dark:text-white  dark:bg-slate-800' : 'text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-slate-800' }}">Sistemas</a>
                </li>
                <li>
                    <a href="{{ route('Recursos humanos') }}"
                        class="flex items-center pl-11 p-2 text-base font-medium rounded-lg {{ request()->routeIs('Recursos humanos') ? 'text-gray-900 bg-gray-100 dark:text-white  dark:bg-slate-800' : 'text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-slate-800' }}">RH</a>
                </li>
            </ul>
        </div>
    </aside>
