<nav class="py-3 px-4 shadow-md backdrop-blur-sm">
    <div class=" flex flex-wrap items-center">
        <a href="/" class="text-xl font-bold">{{ config('app.name') }}</a>

        <div class="ml-auto">
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
