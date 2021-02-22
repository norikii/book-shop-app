<nav class="flex justify-between bg-gray-800 h-20 px-4">
    <ul class="flex items-center text-gray-200 text-xl ">
        <li>
            <a href="{{ route('home') }}" class="p-4">Logo</a>
        </li>
        <li>
            <a href="{{ route('home') }}" class="p-4">Home</a>
        </li>
        @auth
        <li>
            <a href="{{ route('dashboard') }}" class="p-4">Dashboard</a>
        </li>
        @endauth
        @auth
            <li>
                <a href="" class="p-4">Favorite</a>
            </li>
        @endauth
    </ul>
    <ul class="flex items-center text-gray-200 text-xl ">
        @auth
            <li>
                <a href="" class="p-4">{{ auth()->user()->name }}</a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="p-4" type="submit">
                        Logout
                    </button>
                </form>
            </li>
        @endauth

        @guest
            <li>
                <a href="{{ route('login') }}" class="p-4">Login</a>
            </li>
            <li>
                <a href="{{ route('register') }}" class="p-4">Register</a>
            </li>
        @endguest
    </ul>
</nav>
