<section ref={ref} class=" flex justify-center items-start bg-gradient-to-br from-gray-50 to-gray-100 px-4 py-16">
    <div
        class="flex flex-col lg:flex-row w-full max-w-6xl bg-white rounded-2xl overflow-hidden shadow-xl transition-all duration-500 hover:shadow-2xl">
        {{-- {/* Left Section - Profile Image with overlay */} --}}
        <div class="lg:w-2/5 w-full relative group">
            <div
                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10 flex items-end justify-center pb-8">
                <div class="flex space-x-4">
                    <a href="https://github.com"
                        class="bg-white/90 p-3 rounded-full transition duration-200 hover:scale-110">
                        <span class="iconify w-5 h-5" data-icon="mdi:github" data-inline="false"></span>
                    </a>
                    <a href="https://linkedin.com"
                        class="bg-white/90 p-3 rounded-full transition duration-200 hover:scale-110">
                        <span class="iconify w-5 h-5" data-icon="mdi:linkedin" data-inline="false"></span>
                    </a>
                    <a href="https://twitter.com"
                        class="bg-white/90 p-3 rounded-full transition duration-200 hover:scale-110">
                        <span class="iconify w-5 h-5" data-icon="mdi:twitter" data-inline="false"></span>
                    </a>
                </div>
            </div>
            <img src="https://static.vecteezy.com/system/resources/previews/016/686/402/large_2x/asian-man-holding-coffee-cup-smiling-happy-emotion-white-background-photo.jpg"
                alt="Bijan Shakya" class="w-full h-full object-cover lg:object-cover rounded-none lg:rounded-l-2xl" />
        </div>

        {{-- {/* Right Section - Bio and Contact Information */} --}}
        <div class="lg:w-3/5 w-full px-8 py-10 lg:px-12 lg:py-14 flex flex-col justify-center">
            {{-- {/* Section Heading with animated underline */} --}}
            <div class="relative mb-8">
                <h1 class="text-4xl lg:text-5xl font-bold text-gray-800">About Me</h1>
                <div class="h-1 w-20 bg-blue-500 mt-3 rounded-full"></div>
            </div>

            {{-- {/* Bio Description with improved typography */} --}}
            <p class="text-gray-600 text-lg leading-relaxed mb-8">
                I am a passionate and detail-oriented web developer with a strong foundation in Laravel and JavaScript.
                I
                have practical experience using modern tools like ReactJS and Firebase to build dynamic, user-friendly
                applications that solve real-world problems.
            </p>

            {{-- {/* Skills Section */} --}}
            <div class="mb-8">
                <h2 class="text-xl font-semibold mb-3 text-gray-800">Skills</h2>
                <div class="flex flex-wrap gap-2">
                    <span
                        class=" px-3 py-1 rounded-full text-sm font-medium transition-transform
                        hover:scale-105 flex items-center gap-1">
                        <span class="iconify w-5 h-5" data-icon="material-icon-theme:laravel"
                            data-inline="false"></span>
                        Laravel
                    </span>
                    <span
                        class=" px-3 py-1 rounded-full text-sm font-medium transition-transform
                        hover:scale-105 flex items-center gap-1">
                        <span class="iconify w-5 h-5" data-icon="logos:react" data-inline="false"></span>
                        React
                    </span>
                    <span
                        class=" px-3 py-1 rounded-full text-sm font-medium transition-transform
                        hover:scale-105 flex items-center gap-1">
                        <span class="iconify w-5 h-5" data-icon="logos:javascript" data-inline="false"></span>
                        Javascript
                    </span>
                    <span
                        class=" px-3 py-1 rounded-full text-sm font-medium transition-transform
                        hover:scale-105 flex items-center gap-1">
                        <span class="iconify w-5 h-5" data-icon="devicon:tailwindcss" data-inline="false"></span>
                        Tailwind CSS
                    </span>
                    <span
                        class=" px-3 py-1 rounded-full text-sm font-medium transition-transform
                        hover:scale-105 flex items-center gap-1">
                        <span class="iconify w-5 h-5" data-icon="logos:git-icon" data-inline="false"></span>
                        Git
                    </span>
                </div>
            </div>

            {{-- {/* Contact Information List with icons */} --}}
            <div class="mb-8">
                <h2 class="text-xl font-semibold mb-3 text-gray-800">Personal Info</h2>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-center gap-3">
                        <span class="iconify w-5 h-5" data-icon="mdi:calendar" data-inline="false"></span>
                        <span>
                            <strong>Date of Birth:</strong> 17 Jan 2005
                        </span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="iconify w-5 h-5" data-icon="mdi:map-marker" data-inline="false"></span>
                        <span>
                            <strong>Location:</strong> Nepal, Morang, Biratnagar-10
                        </span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="iconify w-5 h-5" data-icon="mdi:email" data-inline="false"></span>
                        <a href="mailto:bijanshakya145@gmail.com" class="hover:text-blue-500 transition-colors">
                            <strong>Email:</strong> bijanshakya145@gmail.com
                        </a>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="iconify w-5 h-5" data-icon="mdi:phone" data-inline="false"></span>
                        <a href="tel:+9779842092600" class="hover:text-blue-500 transition-colors">
                            <strong>Phone:</strong> +977-9842092600
                        </a>
                    </li>
                </ul>
            </div>

            {{-- {/* Action Buttons */} --}}
            <div class="flex flex-wrap gap-4">
                <button type="button"
                    class="px-6 py-3 bg-blue-500 text-white rounded-xl text-base font-semibold shadow-md hover:bg-blue-600 transition-all duration-300 ease-in-out flex items-center gap-2 group">
                    <span class="iconify w-5 h-5" data-icon="mdi:download" data-inline="false"></span>
                    Download CV
                </button>
            </div>
        </div>
    </div>
</section>
