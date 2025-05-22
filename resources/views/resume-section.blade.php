<section data-section="resume" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-16">My Resume</h2>

        <div class="flex flex-col md:flex-row">
            {{-- {/* Sidebar Navigation */} --}}
            <div class="md:w-1/4 mb-8 md:mb-0">
                <div class="sticky top-24 rounded-lg overflow-hidden shadow-sm">
                    <button data-target="Education"
                        class="sidebar-btn py-3 px-4 text-left w-full transition-colors duration-300 text-gray-700 hover:text-blue-500 hover:bg-gray-50">
                        Education
                    </button>
                    <button data-target="Experience"
                        class="sidebar-btn py-3 px-4 text-left w-full transition-colors duration-300 text-gray-700 hover:text-blue-500 hover:bg-gray-50">
                        Experience
                    </button>
                    <button data-target="Skills"
                        class="sidebar-btn py-3 px-4 text-left w-full transition-colors duration-300 text-gray-700 hover:text-blue-500 hover:bg-gray-50">
                        Skills
                    </button>
                    <button data-target="Awards"
                        class="sidebar-btn py-3 px-4 text-left w-full transition-colors duration-300 text-gray-700 hover:text-blue-500 hover:bg-gray-50">
                        Awards
                    </button>
                </div>
            </div>
            <div class="md:w-3/4 md:pl-12">

                {{-- * Education Section * --}}
                <div data-section="Education" class="mb-16">
                    <h2 class="text-3xl font-bold mb-10">Education</h2>
                    <div class="mb-12 relative">
                        <div class="flex items-start">
                            <div class="bg-blue-500 rounded-full p-3 mr-6">
                                <span class="iconify w-5 h-5 text-white" data-icon="lucide:graduation-cap"></span>
                            </div>
                            <div class="flex-1">
                                <div class="text-blue-500 font-medium mb-1">2022 - Present</div>
                                <h3 class="text-xl font-bold mb-1">Bachelor in Science in Computer Science & Information
                                    Technology</h3>
                                <h4 class="text-lg font-semibold mb-3">Tribhuvan University</h4>
                                <p class="text-gray-600">Currently pursuing a Bachelor's degree in Computer Science,
                                    focusing on software development, algorithms, data structures, and web technologies.
                                </p>
                            </div>
                        </div>
                        <div class="border-b border-gray-200 mt-8">
                        </div>
                    </div>

                    <div class="mb-12 relative">
                        <div class="flex items-start">
                            <div class="bg-blue-500 rounded-full p-3 mr-6">
                                <span class="iconify w-5 h-5 text-white" data-icon="lucide:graduation-cap"></span>
                            </div>
                            <div class="flex-1">
                                <div class="text-blue-500 font-medium mb-1">2022 - Present</div>
                                <h3 class="text-xl font-bold mb-1">Bachelor in Science in Computer Science &
                                    Information
                                    Technology</h3>
                                <h4 class="text-lg font-semibold mb-3">Tribhuvan University</h4>
                                <p class="text-gray-600">Currently pursuing a Bachelor's degree in Computer Science,
                                    focusing on software development, algorithms, data structures, and web
                                    technologies.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- * Experience Section * --}}
                <div data-section="Experience" class="mb-16">
                    <h2 class="text-3xl font-bold mb-10">Experience</h2>
                    <div class="mb-12 relative">
                        <div class="flex items-start">
                            <div class="bg-blue-500 rounded-full p-3 mr-6">
                                <span class="iconify w-5 h-5 text-white" data-icon="lucide:briefcase"></span>
                            </div>
                            <div class="flex-1">
                                <div class="text-blue-500 font-medium mb-1">2023 - Present</div>
                                <h3 class="text-xl font-bold mb-1">Web Developer</h3>
                                <h4 class="text-lg font-semibold mb-3">Techware Pvt Ltd</h4>
                                <p class="text-gray-600">Working on web development projects using Laravel and React.
                                    Responsible for implementing frontend designs, integrating APIs, and ensuring
                                    responsive layouts across devices.</p>
                            </div>
                        </div>
                        <div class="border-b border-gray-200 mt-8">
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-500 rounded-full p-3 mr-6">
                                <span class="iconify w-5 h-5 text-white" data-icon="lucide:briefcase"></span>
                            </div>
                            <div class="flex-1">
                                <div class="text-blue-500 font-medium mb-1">2023 - Present</div>
                                <h3 class="text-xl font-bold mb-1">Web Developer</h3>
                                <h4 class="text-lg font-semibold mb-3">Techware Pvt Ltd</h4>
                                <p class="text-gray-600">Working on web development projects using Laravel and React.
                                    Responsible for implementing frontend designs, integrating APIs, and ensuring
                                    responsive layouts across devices.</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- * Skills Section * --}}
                <div data-section="Skills" class="mb-16">
                    <h2 class="text-3xl font-bold mb-10">Skills</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10">
                        <div class="mb-6">
                            <div class="flex justify-between mb-1">
                                <span class="font-medium">HTML/CSS</span>
                                <span class="text-sm text-gray-500">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-500 h-2 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        <div class="mb-6">
                            <div class="flex justify-between mb-1">
                                <span class="font-medium">HTML/CSS</span>
                                <span class="text-sm text-gray-500">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-500 h-2 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        <div class="mb-6">
                            <div class="flex justify-between mb-1">
                                <span class="font-medium">HTML/CSS</span>
                                <span class="text-sm text-gray-500">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-500 h-2 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        <div class="mb-6">
                            <div class="flex justify-between mb-1">
                                <span class="font-medium">HTML/CSS</span>
                                <span class="text-sm text-gray-500">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-500 h-2 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        <div class="mb-6">
                            <div class="flex justify-between mb-1">
                                <span class="font-medium">HTML/CSS</span>
                                <span class="text-sm text-gray-500">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-500 h-2 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        <div class="mb-6">
                            <div class="flex justify-between mb-1">
                                <span class="font-medium">HTML/CSS</span>
                                <span class="text-sm text-gray-500">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-500 h-2 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- * Awards Section * --}}
                <div data-section="Awards" class="mb-16">
                    <h2 class="text-3xl font-bold mb-10">Awards</h2>
                    <div key={index} class="mb-12 relative">
                        <div class="flex items-start">
                            <div class="bg-blue-500 rounded-full p-3 mr-6">
                                <Icon icon="lucide:award" class="text-white text-xl" />
                            </div>
                            <div class="flex-1">
                                <div class="text-blue-500 font-medium mb-1">2023</div>
                                <h3 class="text-xl font-bold mb-1">Best Student Project</h3>
                                <h4 class="text-lg font-semibold mb-3">Organization Name</h4>
                                <p class="text-gray-600">Awarded for developing an innovative web application that
                                    solved a significant problem in the local community.</p>
                            </div>
                        </div>
                        <div class="border-b border-gray-200 mt-8">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-16">
            <a href="/img/Bijan.jpg" rel="noopener noreferrer" download
                class="inline-flex items-center bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition-colors">
                <span class="iconify w-5 h-5" data-icon="lucide:download" data-inline="false"></span>
                Download Full Resume
            </a>
        </div>
</section>


@push('scripts')
    <script>
        $(document).ready(function() {
            let isAnimating = false; // Flag to track if animation is in progress

            // Scroll to section on click
            $('.sidebar-btn').click(function() {
                const targetSection = $(this).data('target');
                const scrollTarget = $('[data-section="' + targetSection + '"]');

                if (scrollTarget.length) {
                    isAnimating = true;

                    $('html, body').stop().animate({
                        scrollTop: scrollTarget.offset().top - 100 // adjust offset as needed
                    }, 500, function() {
                        // Callback after animation completes
                        isAnimating = false;
                        updateActiveButton(targetSection); // ensure correct one is highlighted
                    });

                    updateActiveButton(targetSection); // immediate visual feedback
                }
            });

            // Scroll event to update active button
            $(window).on('scroll', function() {
                if (isAnimating) return; // Ignore during animation

                const scrollPos = $(document).scrollTop();

                $('[data-section]').each(function() {
                    const sectionTop = $(this).offset().top - 120;
                    const sectionBottom = sectionTop + $(this).outerHeight();
                    const sectionName = $(this).data('section');

                    if (scrollPos >= sectionTop && scrollPos < sectionBottom) {
                        updateActiveButton(sectionName);
                        return false;
                    }
                });
            });

            // Utility function to update active button
            function updateActiveButton(sectionName) {
                $('.sidebar-btn').removeClass('text-blue-500 font-semibold border-l-4 border-blue-500 bg-blue-50')
                    .addClass('text-gray-700 hover:text-blue-500 hover:bg-gray-50');

                $('.sidebar-btn[data-target="' + sectionName + '"]')
                    .removeClass('text-gray-700 hover:text-blue-500 hover:bg-gray-50')
                    .addClass('text-blue-500 font-semibold border-l-4 border-blue-500 bg-blue-50');
            }
        });
    </script>
@endpush
