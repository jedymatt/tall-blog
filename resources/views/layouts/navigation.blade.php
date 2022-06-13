<nav class="py-3 px-4 shadow-md backdrop-blur-sm">
    <div class=" flex flex-wrap items-center">
        <a href="/" class="text-xl font-bold">{{ config('app.name') }}</a>
        <div class="ml-4">
            @auth
            <a href="{{ route('home') }}">Home</a>
            @endauth
        </div>
        <div class="ml-auto">
            @auth
            @if (!request()->routeIs('write-post'))
            <a role="button" href="{{ route('write-post') }}" class="mr-2 p-2 text-sm text-indigo-500 bg-white border border-indigo-500 rounded-md hover:bg-indigo-500 hover:text-white focus:bg-indigo-800 focus:text-white">
                Write Post
            </a>
            @endif
            @endauth
            @guest
            <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-gray-900">Login</a>
            <a href="{{ route('register') }}" class="text-sm text-gray-600 hover:text-gray-900">Register</a>
            @endguest
            @auth
            <a href="{{ route('logout') }}" class="text-sm text-gray-600 hover:text-gray-900" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @endauth
        </div>
    </div>
</nav>
