<section data-section="services" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4 text-gray-800">My Services</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                I offer a wide range of services to help businesses and individuals establish a strong online
                presence.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="services-container">
        </div>

        <div class="mt-16 text-center">
            <p class="text-gray-600 mb-6">Need a custom service not listed here?</p>
            <button class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors">
                Contact Me
            </button>
        </div>
    </div>
</section>

@push('scripts')
    <script>
        const services = [{
                title: "Web Development",
                icon: "mdi:web",
                description: "Creating responsive and dynamic websites using modern technologies like React, Laravel, and Next.js."
            },
            {
                title: "Mobile App Development",
                icon: "mdi:cellphone",
                description: "Building cross-platform mobile applications using React Native and Flutter."
            },
            {
                title: "Website Maintenance",
                icon: "mdi:cog-outline",
                description: "Regular updates, security patches, and performance optimization to keep your website running smoothly."
            }
        ];

        $(document).ready(function() {
            const serviceHtml = $.map(services, function(service) {
                return `
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-2xl transition-shadow">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <span class="iconify w-5 h-5 text-blue-500" data-icon="${service.icon}" data-inline="false"></span>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-800">${service.title}</h3>
                    <p class="text-gray-600">${service.description}</p>
                </div>
            `;
            });

            $('#services-container').html(serviceHtml.join(""));
        });
    </script>
@endpush
