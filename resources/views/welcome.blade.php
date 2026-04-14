<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garry Gajultos Portfolio</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <!-- tsparticles CDN -->
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js"></script>
</head>

<body class="bg-gray-900 text-gray-100 relative overflow-x-hidden">

    <!-- Hero Section with Particles -->
    <section id="home" class="relative min-h-screen flex flex-col justify-center items-center px-6">
        <div id="tsparticles" class="absolute inset-0 -z-10"></div>

        <!-- Resume Card -->
        <div class="w-full max-w-6xl bg-gray-800 shadow-2xl rounded-xl p-8 flex flex-col md:flex-row gap-8 min-h-[600px] md:min-h-[700px] 
           mt-12 mb-12 md:mt-0 md:mb-0">

            <div class="flex flex-col items-center md:items-start text-center md:text-left md:w-1/3">
                <!-- Centered Image, Name, and Role -->
                <div class="flex flex-col items-center text-center w-full">
                    <img src="{{ asset('images/MatabaV2.png') }}" alt="Garry Portfolio"
                        class="w-48 h-48 object-cover rounded-full shadow-lg border-4 border-gray-700">
                    <h1 class="mt-4 text-3xl font-bold text-white">Garry Gajultos</h1>
                    <p class="text-gray-300 mt-1">Web Developer | SQL Developer</p>
                    <div class="mt-5 w-full space-y-3">

                        <!-- Email -->
                        <a href="mailto:gajultos.garrydev@gmail.com"
                            class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 sm:gap-0 bg-gray-700 hover:bg-blue-600 transition p-4 rounded-lg shadow-md group">

                            <div class="flex items-center gap-3">
                                <span class="text-blue-400 text-lg">📧</span>
                                <span class="text-gray-200 text-sm sm:text-base group-hover:text-white break-all">
                                    gajultos.garrydev@gmail.com
                                </span>
                            </div>

                            <span class="text-xs sm:text-sm text-blue-300 group-hover:text-white sm:text-right">
                                Email →
                            </span>
                        </a>

                        <!-- Phone -->
                        <a href="tel:+639264753651"
                            class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 sm:gap-0 bg-gray-700 hover:bg-green-600 transition p-4 rounded-lg shadow-md group">

                            <div class="flex items-center gap-3">
                                <span class="text-green-400 text-lg">📱</span>
                                <span class="text-gray-200 text-sm sm:text-base group-hover:text-white">
                                    +63 926 475 3651
                                </span>
                            </div>

                            <span class="text-xs sm:text-sm text-green-300 group-hover:text-white sm:text-right">
                                Call →
                            </span>
                        </a>

                    </div>
                </div>

                <hr class="w-11/12 border-t-2 border-gray-600 mt-6 mb-6">

                <!-- Tech Stacks Grid -->
                <div class="mt-6 w-full">

                    <h2 class="text-lg font-semibold text-white mb-4">Tech Stacks</h2>

                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                        <!-- PHP -->
                        <div
                            class="flex flex-col items-center bg-gray-700 rounded-xl p-3 hover:scale-105 transition-transform duration-300 shadow-md border-2 border-purple-500">
                            <img src="{{ asset('icons/php.png') }}" alt="PHP" class="w-12 h-12 mb-1 object-contain">
                            <span class="text-gray-200 text-sm font-medium md:hidden">PHP</span>
                        </div>

                        <!-- NodeJS -->
                        <div
                            class="flex flex-col items-center bg-gray-700 rounded-xl p-3 hover:scale-105 transition-transform duration-300 shadow-md border-2 border-green-500">
                            <img src="{{ asset('icons/nodejs.png') }}" alt="NodeJS"
                                class="w-12 h-12 mb-1 object-contain">
                            <span class="text-gray-200 text-sm font-medium md:hidden">NodeJS</span>
                        </div>

                        <!-- Git -->
                        <div
                            class="flex flex-col items-center bg-gray-700 rounded-xl p-3 hover:scale-105 transition-transform duration-300 shadow-md border-2 border-red-500">
                            <img src="{{ asset('icons/git.png') }}" alt="Git" class="w-12 h-12 mb-1 object-contain">
                            <span class="text-gray-200 text-sm font-medium md:hidden">Git</span>
                        </div>

                        <!-- CSS -->
                        <div
                            class="flex flex-col items-center bg-gray-700 rounded-xl p-3 hover:scale-105 transition-transform duration-300 shadow-md border-2 border-blue-500">
                            <img src="{{ asset('icons/css.png') }}" alt="CSS" class="w-12 h-12 mb-1 object-contain">
                            <span class="text-gray-200 text-sm font-medium md:hidden">CSS</span>
                        </div>

                        <!-- JavaScript -->
                        <div
                            class="flex flex-col items-center bg-gray-700 rounded-xl p-3 hover:scale-105 transition-transform duration-300 shadow-md border-2 border-yellow-500">
                            <img src="{{ asset('icons/javascript.png') }}" alt="JavaScript"
                                class="w-12 h-12 mb-1 object-contain">
                            <span class="text-gray-200 text-sm font-medium md:hidden">JavaScript</span>
                        </div>

                        <!-- HTML -->
                        <div
                            class="flex flex-col items-center bg-gray-700 rounded-xl p-3 hover:scale-105 transition-transform duration-300 shadow-md border-2 border-orange-400">
                            <img src="{{ asset('icons/html.png') }}" alt="HTML" class="w-12 h-12 mb-1 object-contain">
                            <span class="text-gray-200 text-sm font-medium md:hidden">HTML</span>
                        </div>

                        <!-- Laravel -->
                        <div
                            class="flex flex-col items-center bg-gray-700 rounded-xl p-3 hover:scale-105 transition-transform duration-300 shadow-md border-2 border-red-600">
                            <img src="{{ asset('icons/laravel.png') }}" alt="Laravel"
                                class="w-12 h-12 mb-1 object-contain">
                            <span class="text-gray-200 text-sm font-medium md:hidden">Laravel</span>
                        </div>

                        <!-- jQuery -->
                        <div
                            class="flex flex-col items-center bg-gray-700 rounded-xl p-3 hover:scale-105 transition-transform duration-300 shadow-md border-2 border-blue-300">
                            <img src="{{ asset('icons/jquery.png') }}" alt="jQuery"
                                class="w-12 h-12 mb-1 object-contain">
                            <span class="text-gray-200 text-sm font-medium md:hidden">jQuery</span>
                        </div>

                        <!-- MySQL -->
                        <div
                            class="flex flex-col items-center bg-gray-700 rounded-xl p-3 hover:scale-105 transition-transform duration-300 shadow-md border-2 border-cyan-500">
                            <img src="{{ asset('icons/mysql.png') }}" alt="MySQL" class="w-12 h-12 mb-1 object-contain">
                            <span class="text-gray-200 text-sm font-medium md:hidden">MySQL</span>
                        </div>

                        <!-- VueJS -->
                        <div
                            class="flex flex-col items-center bg-gray-700 rounded-xl p-3 hover:scale-105 transition-transform duration-300 shadow-md border-2 border-green-400">
                            <img src="{{ asset('icons/vuejs.png') }}" alt="VueJS" class="w-12 h-12 mb-1 object-contain">
                            <span class="text-gray-200 text-sm font-medium md:hidden">VueJS</span>
                        </div>

                        <!-- Ionic -->
                        <div
                            class="flex flex-col items-center bg-gray-700 rounded-xl p-3 hover:scale-105 transition-transform duration-300 shadow-md border-2 border-purple-400">
                            <img src="{{ asset('icons/ionic.png') }}" alt="Ionic" class="w-12 h-12 mb-1 object-contain">
                            <span class="text-gray-200 text-sm font-medium md:hidden">Ionic</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Column: Tabs Horizontal -->
            <div class="flex-1 flex flex-col gap-4 md:gap-6">

                <!-- Horizontal Tabs -->
                <div class="flex justify-start gap-4 flex-wrap border-b border-gray-600 pb-2">
                    <button
                        class="tab-btn relative text-gray-300 py-2 px-4 font-medium hover:text-white focus:outline-none cursor-pointer"
                        data-tab="about">About</button>
                    <button
                        class="tab-btn relative text-gray-300 py-2 px-4 font-medium hover:text-white focus:outline-none cursor-pointer"
                        data-tab="experience">Experience</button>
                    <button
                        class="tab-btn relative text-gray-300 py-2 px-4 font-medium hover:text-white focus:outline-none cursor-pointer"
                        data-tab="projects">Projects</button>
                    <button
                        class="tab-btn relative text-gray-300 py-2 px-4 font-medium hover:text-white focus:outline-none cursor-pointer"
                        data-tab="contact">Contact Me</button>
                </div>

                <!-- Tab Contents -->
                <div class="tab-contents mt-6">

                    <!-- About Tab -->
                    <div id="about"
                        class="tab-content text-gray-300 text-justify leading-relaxed space-y-6 transition-opacity duration-500">
                        @include('partials.about')
                    </div>

                    <!-- Experience Tab -->
                    <div id="experience" class="tab-content hidden text-gray-300 transition-opacity duration-500">
                        @include('partials.experience')

                    </div>

                    <!-- Projects Tab -->
                    <div id="projects" class="tab-content hidden text-gray-300 transition-opacity duration-500">
                        @include('partials.projects')

                        <p class="text-gray-400 mt-6 text-center italic">
                            If you’d like to know more about my projects or how I can contribute to your team, feel free
                            to reach out. I’m always open to meaningful opportunities and collaboration.
                        </p>
                    </div>

                    <!-- Contact Tab -->
                    <div id="contact"
                        class="tab-content hidden text-gray-300 transition-opacity duration-500 max-w-2xl mx-auto">
                        @include('partials.contacts')
                    </div>
                </div>

                <!-- Tabs Script -->


            </div>
    </section>

    @livewireScripts

    <!-- Tabs Script -->
    <script>
        const tabs = document.querySelectorAll(".tab-btn");
        const contents = document.querySelectorAll(".tab-content");

        // Highlight the first tab and show its content by default
        if (tabs.length > 0 && contents.length > 0) {
            tabs[0].classList.add("active", "text-white");
            contents[0].classList.remove("hidden");
            contents[0].style.opacity = 1;
        }

        tabs.forEach(tab => {
            tab.addEventListener("click", () => {
                // Remove active styles from all tabs
                tabs.forEach(t => t.classList.remove("active", "text-white"));
                contents.forEach(c => {
                    c.classList.add("hidden");
                    c.style.opacity = 0;
                });

                // Add active styles to clicked tab
                tab.classList.add("active", "text-white");

                // Show corresponding content with fade effect
                const tabId = tab.dataset.tab;
                const content = document.getElementById(tabId);
                content.classList.remove("hidden");
                setTimeout(() => content.style.opacity = 1, 50);
            });
        });
    </script>

    <!-- tsparticles Initialization -->
    <script>
        tsParticles.load("tsparticles", {
            background: { color: { value: "#0f172a" } },
            fpsLimit: 60,
            interactivity: {
                events: { onHover: { enable: true, mode: "grab" }, resize: true },
                modes: { grab: { distance: 150, links: { opacity: 0.4 } } }
            },
            particles: {
                color: { value: "#ffffff" },
                links: { enable: true, color: "rgb(116, 163, 238)", distance: 120, opacity: 0.3, width: 1 },
                move: { enable: true, speed: 0.9, direction: "none", random: true, straight: false, outModes: "bounce" },
                number: { value: 110, density: { enable: true, area: 800 } },
                opacity: { value: 0.5 },
                shape: { type: "circle" },
                size: { value: { min: 2, max: 4 } }
            },
            detectRetina: true
        });
    </script>

</body>

</html>