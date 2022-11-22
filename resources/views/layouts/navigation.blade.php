<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- TODO: FIX this whole nav bar mess and fill it in properly -->


    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <header>
                <!-- Logo -->

                <a href="#" class="brand">YazTec</a>

                <a href="{{ route('dashboard') }}">
                    <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                </a>


                <!-- Navigation Links -->

                <div class="family">

                    <x-nav-link :href=" url('/') ">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Product') }}
                    </x-nav-link>
                    <x-nav-link :href="route('About')" :active="request()->routeIs('About')">
                        {{ __('About') }}
                    </x-nav-link>
                    <x-nav-link :href="route('Contact')" :active="request()->routeIs('Contact')">
                        {{ __('Contact') }}
                    </x-nav-link>



                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-nav-link :href="route('logout')" onclick="event.preventDefault();
                                this.closest('form').submit();">
                                {{ __('Log out') }}
                            </x-nav-link>
                        </form>
                        <x-nav-link :href="route('Basket')" :active="request()->routeIs('Basket')">
                            <ion-icon name="cart-outline">
                        </x-nav-link>



                        @if(Auth::user()->name == "admin")
                                    <x-nav-link :href="route('Admin')" :active="request()->routeIs('Admin')">
                                        <ion-icon name="people-circle-outline">
                                    </x-nav-link>
                        @else
                                    <x-nav-link :href="route('Order')" :active="request()->routeIs('Order')">
                                        <ion-icon name="people-circle-outline">
                                    </x-nav-link>

                        @endif
                    @else


                        <x-nav-link :href="route('login')" >
                            Log in
                        </x-nav-link>


                        <x-nav-link :href="route('register')" >
                            Register
                        </x-nav-link>

                    @endauth
{{--                    <div class="search">
				        <span class="ionicons">
					        <ion-icon name="search-outline" class="searchBtn"></ion-icon>
					        <ion-icon name="close-outline" class="closeBtn"></ion-icon>
				        </span>
                    </div>

            </div>


                    <div class="searchArea">
                        <form action="{{route('item.index')}}" method="post">

                            <input type="text" placeholder="Type here . . ." div>
                        </form>



                </header>--}}





            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                {{--<x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">

                                @auth
                                    <!-- The person username-->
                                    @if(Auth::user()->name == "admin")
                                            <a href="{{ url('/Admin') }}" >{{ Auth::user()->name }}</a>
                                        @else
                                            <a href="{{ url('/Order') }}" >{{ Auth::user()->name }}</a>
                                        @endif
                                    <!-- The Log out button-->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <a :href="route('logout')"
                                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </a>
                                    </form>
                                @else
                                    <a href="{{ route('login') }}" >Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" >Register</a>
                                    @endif
                                @endauth
                            </div>

                             This is the start of the drop down
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">

                    </x-slot>
                </x-dropdown>--}}
            </div>

        </div>
    </div>

    <!-- Responsive Navigation Menu -->


    <!-- TODO: I need to know what this does-->


    {{--@auth
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>


        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                @auth
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>

                @endauth
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
    @endauth--}}
</nav>

<script>

    let header = document.querySelector('header');

    let searchBtn = document.querySelector('.searchBtn');

    let closeBtn = document.querySelector('.closeBtn');

    let searchArea = document.querySelector('.searchArea');

    let nav = document.querySelector('.nav');

    let menuToggle = document.querySelector('.menuToggle');


/*    searchBtn.onclick = function(){

        header.classList.remove('open');

        searchArea.classList.add('active');

        closeBtn.classList.add('active');

        searchBtn.classList.add('active');

        menuToggle.classList.add('hide');

    }
    closeBtn.onclick = function(){

        searchArea.classList.remove('active');

        closeBtn.classList.remove('active');

        searchBtn.classList.remove('active');

        menuToggle.classList.remove('hide');
    }*/
    menuToggle.onclick = function(){

        header.classList.toggle('open');

        searchArea.classList.remove('active');

        closeBtn.classList.remove('active');

        searchBtn.classList.remove('active');
    }
</script>
