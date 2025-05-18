<header class="z-50 w-full px-4 py-4 sm:px-6 md:px-8 lg:px-12 xl:px-16 2xl:px-24 bg-white transition-all duration-300">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        <div class="text-xl font-bold cursor-pointer">Bijan Shakya
        </div>
        <span type="button" class="text-gray-800 focus:outline-none menu-toggle relative z-50 cursor-pointer lg:hidden"
            data-mobile="false" id="menu-toggle" aria-label="Toggle menu">
            <div class="w-6 flex flex-col items-end justify-center gap-1.5">
                <span class="block h-0.5 rounded-full bg-current transition-all duration-300 ease-out w-6"
                    id="menu-toggle-1"></span>
                <span class="block h-0.5 rounded-full bg-current transition-all duration-300 ease-out w-4"
                    id="menu-toggle-2"></span>
                <span class="block h-0.5 rounded-full bg-current transition-all duration-300 ease-out w-5"
                    id="menu-toggle-3"></span>
            </div>
        </span>
    </div>
</header>

<div id="mobile-menu-overlay"
    class="fixed inset-0 bg-black/50 z-40 transition-opacity duration-300 lg:hidden opacity-0 pointer-events-none">
</div>

<div id="mobile-menu-container"
    class="fixed top-0 right-0 h-full w-64 bg-white shadow-xl z-40 transform transition-transform duration-300 ease-in-out lg:hidden translate-x-full">
    <div class="pt-20 pb-6 px-2 flex flex-col h-full">
        <div class="flex-1 overflow-y-auto">
            <div
                class=" flex items-center gap-3 p-4 cursor-pointer transition-all duration-200 text-gray-700 hover:bg-gray-50 hover:text-blue-500">
                <span class="iconify w-5 h-5" data-icon="mdi:home" data-inline="false"></span>
                Home
            </div>
            <div
                class=" flex items-center gap-3 p-4 cursor-pointer transition-all duration-200 text-gray-700 hover:bg-gray-50 hover:text-blue-500">
                <span class="iconify w-5 h-5" data-icon="mdi:account" data-inline="false"></span>
                About
            </div>
            <div
                class=" flex items-center gap-3 p-4 cursor-pointer transition-all duration-200 text-gray-700 hover:bg-gray-50 hover:text-blue-500">
                <span class="iconify w-5 h-5" data-icon="mdi:file-document" data-inline="false"></span>
                Resume
            </div>
            <div
                class=" flex items-center gap-3 p-4 cursor-pointer transition-all duration-200 text-gray-700 hover:bg-gray-50 hover:text-blue-500">
                <span class="iconify w-5 h-5" data-icon="mdi:briefcase" data-inline="false"></span>
                Services
            </div>
            <div
                class=" flex items-center gap-3 p-4 cursor-pointer transition-all duration-200 text-gray-700 hover:bg-gray-50 hover:text-blue-500">
                <span class="iconify w-5 h-5" data-icon="mdi:email" data-inline="false"></span>
                Contact
            </div>
            <div
                class=" flex items-center gap-3 p-4 cursor-pointer transition-all duration-200 text-gray-700 hover:bg-gray-50 hover:text-blue-500">
                <span class="iconify w-5 h-5" data-icon="mdi:post" data-inline="false"></span>
                My Blog
            </div>
        </div>

        <div class="mt-auto pt-4 border-t border-gray-100 px-4">
            <div class="flex justify-center space-x-4">
                <a href="#" class="text-gray-500 hover:text-blue-500 transition-colors">
                    <span class="iconify w-5 h-5" data-icon="mdi:github" data-inline="false"></span>
                </a>

                <a href="#" class="text-gray-500 hover:text-blue-500 transition-colors">
                    <span class="iconify w-5 h-5" data-icon="mdi:linkedin" data-inline="false"></span>
                </a>

                <a href="#" class="text-gray-500 hover:text-blue-500 transition-colors">
                    <span class="iconify w-5 h-5" data-icon="mdi:twitter" data-inline="false"></span>
                </a>
            </div>
        </div>
    </div>
</div>


@push('scripts')
    <script>
        $(document).ready(function() {
            $('#menu-toggle').click(function() {
                $('#menu-toggle-1').toggleClass('-rotate-45 translate-y-2');
                $('#menu-toggle-2').toggleClass('w-4 w-0 opacity-0');
                $('#menu-toggle-3').toggleClass('w-5 w-6 rotate-45 -translate-y-2');
                toggleMenu();
            });

            function toggleMenu() {
                $('#mobile-menu-container').toggleClass('translate-x-full translate-x-0');
                $('#mobile-menu-overlay').toggleClass('opacity-0 opacity-100 pointer-events-none');
            }
        });
    </script>
@endpush
