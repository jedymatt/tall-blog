<nav class="sticky border-b top-0 py-2 px-4 shadow-sm backdrop-blur-sm">
    <div class=" flex flex-row items-center">
        <a href="/" class="text-xl font-bold">{{ config('app.name') }}</a>
        <div class="ml-auto inline-flex flex-row items-center">
            @auth
                @if (!request()->routeIs('write-post'))
                    <a role="button" href="{{ route('write-post') }}"
                        class="mr-2 p-2 text-sm text-indigo-500 bg-white border border-indigo-500 rounded-md hover:bg-indigo-500 hover:text-white focus:bg-indigo-800 focus:text-white">
                        Write Post
                    </a>
                @endif
            @endauth
            @guest
                <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-gray-900">Login</a>
                <a href="{{ route('register') }}" class="text-sm text-gray-600 hover:text-gray-900">Register</a>
            @endguest
            @auth
                <div x-data="{ show: false }" class="relative">
                    <div x-on:click="show=!show" x-on:click.outside="show=false" x-on:close.stop="show=false"
                        class="relative w-6 h-6 overflow-hidden hover:cursor-pointer bg-gray-100 rounded-full dark:bg-gray-600"
                        :class="show ? 'ring-1' : ''">
                        <svg class="absolute w-8 h-8 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div x-show="show" x-transition.scale.origin.top.right
                        class="absolute mt-2 right-0 py-1 bg-white shadow-md rounded-md w-48 text-gray-700 text-sm"
                        style="display: none;">

                        <a href="{{ route('user.profile') }}" class="block p-2 hover:bg-gray-100">
                            Profile
                        </a>

                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();this.closest('form').submit();"
                                class="block p-2 hover:bg-gray-100">
                                Logout
                            </a>
                        </form>
                    </div>
                </div>
            @endauth
        </div>
    </div>
</nav>
