<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4 text-gray-800">Get In Touch</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Have a project in mind or want to collaborate? Feel free to contact me using the form below or
                through my contact information.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            {{-- {/* Contact Information */} --}}
            <div id="contact-info" class="space-y-8">
                <!-- Contact info will be appended here by JS -->
            </div>

            {{-- {/* Contact Form */} --}}
            <div class="md:col-span-2">
                <form class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label htmlFor="name" class="block text-sm font-medium text-gray-700 mb-1">Your
                                Name</label>
                            <input type="text" id="name" name="name"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                required />
                        </div>
                        <div>
                            <label htmlFor="email" class="block text-sm font-medium text-gray-700 mb-1">Your
                                Email</label>
                            <input type="email" id="email" name="email"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                required />
                        </div>
                    </div>
                    <div>
                        <label htmlFor="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                        <input type="text" id="subject" name="subject"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required />
                    </div>
                    <div>
                        <label htmlFor="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                        <textarea id="message" name="message" rows="5"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required></textarea>
                    </div>
                    <button type="submit"
                        class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@push('scripts')
    <script>
        $(document).ready(function() {
            const contactInfo = [{
                    icon: "mdi:map-marker",
                    title: "Location",
                    details: "Nepal, Morang, Biratnagar-10",
                },
                {
                    icon: "mdi:email",
                    title: "Email",
                    details: "bijanshakya145@gmail.com",
                },
                {
                    icon: "mdi:phone",
                    title: "Phone",
                    details: "+977-9842092600",
                },
            ];

            const $container = $("#contact-info");

            contactInfo.forEach(info => {
                const $wrapper = $("<div>", {
                    class: "flex items-start space-x-4"
                });

                const $iconDiv = $("<div>", {
                    class: "w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0",
                });

                const $iconSpan = $("<span>", {
                    class: "iconify text-blue-500",
                    "data-icon": info.icon,
                    "data-inline": "false",
                    css: {
                        fontSize: "20px",
                    },
                });

                $iconDiv.append($iconSpan);

                const $textDiv = $("<div>");

                const $title = $("<h3>", {
                    class: "font-bold text-gray-800",
                    text: info.title,
                });

                const $details = $("<p>", {
                    class: "text-gray-600",
                    text: info.details,
                });

                $textDiv.append($title, $details);

                $wrapper.append($iconDiv, $textDiv);

                $container.append($wrapper);
            });
        });
    </script>
@endpush
