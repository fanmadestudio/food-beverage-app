<x-frontend-guest-layout>
    <x-frontend.header />

    @if (Route::has('login'))
    <div class="hidden fixed px-6 py-4 sm:block">
        @auth
        <a href="{{ route('admin.index') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard Admin</a>
        @else
        <a href="{{ route('admin.index') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif
        @endauth
    </div>
    @endif

</x-frontend-guest-layout>