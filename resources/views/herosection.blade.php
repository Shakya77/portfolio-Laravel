<section id="home" data-section="home" class="min-h-[100vh] flex items-center justify-center">
    <div class="flex flex-col items-center justify-center gap-3">
        <span class="text-2xl font-semibold">Hello there its me </span>
        <span class="text-6xl font-extrabold">Bijan Shakya</span>
        <span class="text-4xl font-semibold mt-3">
            I'm a&nbsp;
            <span id="typed-text" class="text-4xl font-semibold mt-3 text-blue-500"></span>
        </span>
    </div>
</section>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Typed('#typed-text', {
                strings: ['Web Developer', 'Designer', 'Freelancer'],
                typeSpeed: 50,
                backSpeed: 25,
                backDelay: 1500,
                loop: true
            });
        });
    </script>
@endpush
