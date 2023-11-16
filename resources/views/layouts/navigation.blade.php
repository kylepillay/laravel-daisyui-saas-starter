<nav class="bg-base-100 border-b border-gray-100 dark:border-gray-700">
    <div class="navbar max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="navbar-start">
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h8m-8 6h16"/>
                    </svg>
                </label>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a class="{{ request()->routeIs('dashboard') ? "active" : "" }}">{{ __('Dashboard') }}</a></li>
                    <li>
                        <a>Parent</a>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </li>
                    <li><a>Item 3</a></li>
                </ul>
            </div>
            <a href="{{ route('dashboard') }}">
                <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200"/>
            </a>
            <ul class="menu menu-horizontal px-1 pl-12">
                <li><a class="{{ request()->routeIs('dashboard') ? "active" : "" }}">{{ __('Dashboard') }}</a></li>
                <li tabindex="0">
                    <details>
                        <summary>Parent</summary>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </details>
                </li>
                <li><a>Item 3</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            <ul class="menu menu-horizontal px-1">
                <li>
                    <details>
                        <summary>
                            {{ Auth::user()->name }}
                        </summary>
                        <ul class="p-2 bg-base-100">
                            <li><a href="{{ route('profile.edit') }}">{{ __('Profile') }}</a></li>
                            <!-- Authentication -->
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
    </div>
</nav>
