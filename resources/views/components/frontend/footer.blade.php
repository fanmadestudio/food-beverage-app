<footer class="w-full mt-8 flex md:flex-wrap sm:flex-wrap sm:text-xs justify-center items-center">
    <div class="gap-10">
        <ul class="flex justify-center items-center mt-3 text-sm text-slate-700">
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6 ">About Us</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">License</a>
            </li>

            @if (Route::has('login'))
            <li>
                @auth
                <a href="{{ route('admin.index') }}" class="mr-4 hover:underline md:mr-6">Dashboard Admin</a>
                @else
                <a href="{{ route('admin.index') }}" class="mr-4 hover:underline md:mr-6">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="mr-4 hover:underline md:mr-6">Register</a>
                @endif
                @endauth
            </li>
            @endif

        </ul>
        <span class="text-sm flex justify-center m-4 md:justify-center sm:justify-center text-slate-700 gap-2">© 2023 <a href="https://fanmadestudio.com/" class="hover:underline">Food & Beverage</a></span>
    </div>
</footer>