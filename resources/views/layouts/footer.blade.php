 <footer class="bg-gray-900 text-white pt-16 pb-8">
     <div class="container mx-auto px-4">
         {{-- {/* Footer Top Section */} --}}
         <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
             {{-- {/* About Column */} --}}
             <div>
                 <h3 class="text-2xl font-bold mb-4">Bijan Shakya</h3>
                 <p class="text-gray-400 mb-4">
                     A passionate web developer focused on creating modern, responsive, and user-friendly applications.
                 </p>
                 <div class="flex space-x-4" id="social-links">

                 </div>
             </div>

             {{-- {/* Quick Links Column */} --}}
             <div>
                 <h3 class="text-xl font-semibold mb-4">Quick Links</h3>
                 <ul id="quick-links" class="space-y-2">
                     {{-- Links will be injected by JavaScript --}}
                 </ul>

             </div>

             {{-- {/* Contact Info Column */} --}}
             <div>
                 <h3 class="text-xl font-semibold mb-4">Contact Info</h3>
                 <ul class="space-y-3">
                     <li class="flex items-start space-x-3">
                         <span class="iconify text-blue-400 mt-1 flex-shrink-0" data-icon="mdi:location"
                             data-inline="false"></span>
                         <span class="text-gray-400">Nepal, Morang, Biratnagar-10</span>
                     </li>
                     <li class="flex items-start space-x-3">
                         <span class="iconify text-blue-400 mt-1 flex-shrink-0"
                             data-icon="mdi:email-open-multiple-outline" data-inline="false"></span>
                         <a href="mailto:bijanshakya145@gmail.com"
                             class="text-gray-400 hover:text-blue-400 transition-colors">
                             bijanshakya145@gmail.com
                         </a>
                     </li>
                     <li class="flex items-start space-x-3">
                         <span class="iconify text-blue-400 mt-1 flex-shrink-0" data-icon="line-md:phone"
                             data-inline="false"></span>
                         <a href="tel:+9779842092600" class="text-gray-400 hover:text-blue-400 transition-colors">
                             +977-9842092600
                         </a>
                     </li>
                 </ul>
             </div>

             {{-- {/* Newsletter Column */} --}}
             <div>
                 <h3 class="text-xl font-semibold mb-4">Newsletter</h3>
                 <p class="text-gray-400 mb-4">
                     Subscribe to my newsletter to receive updates on my latest projects and blog posts.
                 </p>
                 <form class="flex">
                     <input type="email" placeholder="Your email"
                         class="px-4 py-2 w-full bg-gray-800 text-white rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                         required />
                     <button type="submit"
                         class="bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-r-md transition-colors">
                         <Icon icon="lucide:send" />
                         <span class="iconify " data-icon="lucide:send" data-inline="false"></span>
                     </button>
                 </form>
             </div>
         </div>

         {{-- {/* Divider */} --}}
         <div class="border-t border-gray-800 my-8"></div>

         {{-- {/* Footer Bottom Section */} --}}
         <div class="flex flex-col md:flex-row justify-between items-center">
             <p class="text-gray-400 mb-4 md:mb-0">
                 &copy; {{ \Carbon\Carbon::now()->year }} <span class="text-white">Bijan Shakya</span>. All rights
                 reserved.
             </p>

             <button id="backToTopBtn" type="button"
                 class="group flex items-center space-x-2 bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-full transition-colors"
                 aria-label="Scroll to top">
                 <span>Back to Top</span>
                 <span class="iconify " data-icon="lucide:chevron-up" data-inline="false"></span>
             </button>
         </div>
     </div>
 </footer>

 @push('scripts')
     <script>
         document.addEventListener('DOMContentLoaded', function() {
             const socialLinks = [{
                     platform: "GitHub",
                     icon: "qlementine-icons:github-16",
                     url: "https://github.com/Shakya77",
                 },
                 {
                     platform: "LinkedIn",
                     icon: "logos:linkedin-icon",
                     url: "https://www.linkedin.com/in/bijan-shakya-56b50b2b6/",
                 },
                 {
                     platform: "Facebook",
                     icon: "logos:facebook",
                     url: "https://www.facebook.com/bijan.shakya.379415",
                 },
                 {
                     platform: "Instagram",
                     icon: "skill-icons:instagram",
                     url: "https://www.instagram.com/bijan.shakya/",
                 },
             ];

             const quickLinks = [{
                     name: "Home",
                     section: "home"
                 },
                 {
                     name: "About",
                     section: "about"
                 },
                 {
                     name: "Resume",
                     section: "resume"
                 },
                 {
                     name: "Services",
                     section: "services"
                 },
                 {
                     name: "Contact",
                     section: "contact"
                 },
                 {
                     name: "Projects",
                     section: "project"
                 },
                 {
                     name: "Blog",
                     section: "blog"
                 },
             ];

             // Render social links
             const socialContainer = document.getElementById("social-links");
             socialLinks.forEach((social) => {
                 const a = document.createElement("a");
                 a.href = social.url;
                 a.target = "_blank";
                 a.rel = "noreferrer";
                 a.className = "hover:scale-110";
                 a.setAttribute("aria-label", social.platform);

                 a.innerHTML =
                     `<span class="iconify" data-icon="${social.icon}" data-width="24" data-height="24"></span>`;
                 socialContainer.appendChild(a);
             });

             // Render quick links
             const quickLinksContainer = document.getElementById("quick-links");
             quickLinks.forEach(link => {
                 const li = document.createElement("li");
                 const button = document.createElement("button");
                 button.className =
                     "text-gray-400 hover:text-blue-400 transition-colors flex items-center cursor-pointer w-full text-left";
                 button.innerHTML = `
                <span class="iconify mr-2" data-icon="lucide:chevron-right" data-inline="false"></span>
                ${link.name}
            `;
                 button.addEventListener("click", () => {
                     scrollToSection(link.section);
                 });

                 li.appendChild(button);
                 quickLinksContainer.appendChild(li);
             });

             // Scroll to section function
             $(document).ready(function() {
                 window.scrollToSection = function(sectionId) {
                     const $target = $('[data-section="' + sectionId + '"]');
                     if ($target.length) {
                         $('html, body').stop().animate({
                             scrollTop: $target.offset().top - 100
                         }, 500, function() {
                             updateActiveButtonNavbar(sectionId);
                         });
                     }
                 };
             });

             // Back to top button
             const backToTopBtn = document.getElementById("backToTopBtn");
             backToTopBtn.addEventListener("click", () => {
                 window.scrollTo({
                     top: 0,
                     behavior: "smooth"
                 });
             });
         });
     </script>
 @endpush
