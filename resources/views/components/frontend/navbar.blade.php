<nav>
    <nav class="px-4 py-3">
        <div class="flex justify-between items-center">
            <a href="#" class="flex items-center mx-4 gap-2">
                <x-frontend.logo />
            </a>
            <div class="hidden md:flex mx-4 gap-2">
                <a href="#" class="block text-slate-700 hover:text-slate-700 px-3 py-2 bg-transparent focus:ring-2 focus:ring-slate-700/50 focus:rounded-xl">Menu</a>
                <a href="#" class="block text-slate-700 hover:text-slate-700 px-3 py-2 bg-transparent focus:ring-2 focus:ring-slate-700/50 focus:rounded-xl">Secret Menu</a>
                <a href="#" class="text-white hover:text-grey-700 px-2 py-2 flex gap-2 bg-green-500 rounded-xl border-2 border-green-500 hover:bg-green-400 hover:border-green-400 hover:text-white">
                    New Menu!
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell-ringing" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path>
                        <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                        <path d="M21 6.727a11.05 11.05 0 0 0 -2.794 -3.727"></path>
                        <path d="M3 6.727a11.05 11.05 0 0 1 2.792 -3.727"></path>
                    </svg>
                </a>

            </div>
            <div class="flex mx-4 gap-2">
                <x-frontend.login-btn />
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="block md:hidden" id="mobile-menu">
            <div class="flex flex-col">
                <a href="#" class="text-slate-700 block px-3 py-2 rounded-md font-medium">Menu</a>
                <a href="#" class="text-slate-700 block px-3 py-2 rounded-md font-medium">Secret Menu</a>
                <a href="#" class="text-white hover:text-grey-700 px-2 py-2 flex gap-2 bg-green-500 rounded-xl border-2 border-green-500 hover:bg-green-400 hover:border-green-400 hover:text-white">
                    New Menu!
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell-ringing" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path>
                        <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                        <path d="M21 6.727a11.05 11.05 0 0 0 -2.794 -3.727"></path>
                        <path d="M3 6.727a11.05 11.05 0 0 1 2.792 -3.727"></path>
                    </svg>
                </a>
            </div>
        </div>
        <!-- End Mobile Menu -->
    </nav>
</nav>