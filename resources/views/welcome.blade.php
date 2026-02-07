<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>My Portfolio</title>

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body class="bg-[#0f0f0f] text-white font-sans scroll-smooth">

<!-- NAVBAR -->
<header class="sticky top-0 z-50 w-full bg-[#0f0f0f]/90 backdrop-blur-sm border-b border-white/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">

        <!-- Logo / Name -->
        <div class="text-xl sm:text-2xl font-semibold text-red-500 whitespace-nowrap">
            My Portfolio
        </div>

        <!-- Right Side Actions -->
        <div class="flex items-center gap-4 sm:gap-6">

            <!-- Resume -->
            <a href="{{ asset('files/Jomz-Resume.pdf') }}"
               target="_blank"
               class="inline-flex items-center gap-2 text-sm sm:text-base
                      text-white hover:text-red-400 transition">

                <!-- Text hidden on small screens -->
                <span class="hidden md:inline">Download Resume</span>

                <!-- Icon -->
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-6 h-6 sm:w-7 sm:h-7"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 16v-8m0 0l-3 3m3-3l3 3m4 5H6" />
                </svg>
            </a>

            <!-- Divider (hidden on mobile) -->
            <span class="hidden sm:block w-px h-6 bg-white/20"></span>

            <!-- Facebook -->
            <a href="https://www.facebook.com/jomar.cazenas.2024"
               target="_blank"
               class="text-gray-300 hover:text-red-400 transition"
               aria-label="Facebook">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                     fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22 12a10 10 0 10-11.5 9.95v-7.05H8v-2.9h2.5V9.41c0-2.47 1.47-3.84 3.72-3.84 1.08 0 2.21.2 2.21.2v2.43h-1.24c-1.22 0-1.6.76-1.6 1.54v1.85h2.73l-.44 2.9h-2.29V22A10 10 0 0022 12z"/>
                </svg>
            </a>

            <!-- Instagram -->
            <a href="https://www.instagram.com/jmrczns/"
               target="_blank"
               class="text-gray-300 hover:text-red-400 transition"
               aria-label="Instagram">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                     fill="currentColor" viewBox="0 0 24 24">
                    <path d="M7 2C4.243 2 2 4.243 2 7v10c0 2.757 2.243 5 5 5h10c2.757 0 5-2.243 5-5V7c0-2.757-2.243-5-5-5H7zm0 2h10a3 3 0 013 3v10a3 3 0 01-3 3H7a3 3 0 01-3-3V7a3 3 0 013-3zm8 1a1 1 0 100 2 1 1 0 000-2zm-5 2a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6z"/>
                </svg>
            </a>

        </div>
    </div>
</header>



<!-- HERO -->
<section id="home"
    class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-16 items-center overflow-hidden">

    <!-- TEXT -->
    <div data-aos="fade-right" data-aos-duration="700">
        <p class="text-red-500 text-sm mb-3 font-semibold">
            Hello, My Name Is
        </p>

        <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
            Jomar U. Cazeñas
            <br>
            <span class="text-gray-300">Web Developer</span>
        </h1>

        <p class="text-gray-400 max-w-lg mb-8">
            I design and build modern, responsive websites with clean UI and
            scalable backend systems.
        </p>

        <a href="#contact"
           class="inline-flex items-center justify-center
                  bg-red-600 hover:bg-red-700 transition
                  px-8 py-3 rounded-md text-sm font-medium">
            Contact Me
        </a>
    </div>

    <!-- IMAGE -->
    <div class="flex justify-center" data-aos="fade-left" data-aos-duration="700">
        <div class="relative">
            <div
                class="absolute inset-0 bg-red-600 rounded-xl
                       translate-x-4 translate-y-4 -z-10">
            </div>

            <img src="{{ asset('images/jomz.jpg') }}"
                 alt="Jomar Cazeñas - Web Developer"
                 class="w-80 h-96 object-cover rounded-xl
                        transition-transform duration-500 hover:scale-105">
        </div>
    </div>

</section>


<!-- ABOUT -->
<section id="about" class="bg-[#121212] py-20">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

        <!-- IMAGE WITH CLEAN RED OUTLINE -->
        <div class="relative w-full max-w-md mx-auto" data-aos="zoom-in">
            <!-- Red Outline -->
            <div class="absolute -inset-2 border-2 border-red-400 rounded-xl -z-10"></div>

            <!-- Image -->
            <img src="{{ asset('images/jomz.png') }}"
                 alt="Jomar Cazeñas"
                 class="rounded-xl w-full object-cover shadow-lg transition-transform duration-500 hover:scale-105">
        </div>

        <!-- CONTENT -->
        <div data-aos="fade-up">
            <p class="text-red-500 text-sm mb-2 font-semibold">About Me</p>
            <h2 class="text-3xl font-bold mb-6">Who Am I</h2>

            <p class="text-gray-400 leading-relaxed mb-8">
                I am a BSIT student and aspiring full-stack developer focused on
                modern UI/UX, clean code, and scalable systems. I enjoy turning
                ideas into real, usable products.
            </p>

            <!-- TECHNOLOGIES -->
            <div class="mb-6">
                <p class="text-gray-300 font-medium mb-2">Technologies</p>
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-2 bg-[#1a1a1a] rounded text-sm hover:text-red-400">HTML</span>
                    <span class="px-4 py-2 bg-[#1a1a1a] rounded text-sm hover:text-red-400">Tailwind CSS</span>
                    <span class="px-4 py-2 bg-[#1a1a1a] rounded text-sm hover:text-red-400">Laravel</span>
                    <span class="px-4 py-2 bg-[#1a1a1a] rounded text-sm hover:text-red-400">MySQL</span>
                </div>
            </div>

            <!-- TOOLS -->
            <div>
                <p class="text-gray-300 font-medium mb-2">Tools</p>
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-2 bg-[#1a1a1a] rounded text-sm hover:text-red-400">Figma</span>
                    <span class="px-4 py-2 bg-[#1a1a1a] rounded text-sm hover:text-red-400">GitHub</span>
                    <span class="px-4 py-2 bg-[#1a1a1a] rounded text-sm hover:text-red-400">VS Code</span>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- SERVICES -->
<section id="services" class="max-w-7xl mx-auto px-6 py-20">
    <p class="text-red-500 text-sm text-center mb-2">My Services</p>
    <h2 class="text-3xl font-bold text-center mb-12">What Can I Do</h2>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <div data-aos="fade-up" data-aos-delay="100"
             class="bg-[#161616] p-8 rounded-xl border border-transparent
                    transition-all duration-300 hover:-translate-y-2 hover:border-red-500">
            <h3 class="font-semibold text-lg mb-3">Web Design</h3>
            <p class="text-gray-400 text-sm">
                Clean, modern UI designs focused on usability and aesthetics.
            </p>
        </div>

        <div data-aos="fade-up" data-aos-delay="200"
             class="bg-[#161616] p-8 rounded-xl border border-transparent
                    transition-all duration-300 hover:-translate-y-2 hover:border-red-500">
            <h3 class="font-semibold text-lg mb-3">Web Development</h3>
            <p class="text-gray-400 text-sm">
                Responsive and fast websites using modern technologies.
            </p>
        </div>

        <div data-aos="fade-up" data-aos-delay="300"
             class="bg-[#161616] p-8 rounded-xl border border-transparent
                    transition-all duration-300 hover:-translate-y-2 hover:border-red-500">
            <h3 class="font-semibold text-lg mb-3">Backend Systems</h3>
            <p class="text-gray-400 text-sm">
                Secure APIs, databases, and admin dashboards.
            </p>
        </div>
    </div>
</section>

<!-- CTA -->
<section id="contact" class="bg-[#121212] py-20" data-aos="fade-up">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-6">
            Let’s work together on your next project
        </h2>
        <a href="#contact"
           class="inline-block bg-red-600 hover:bg-red-700 transition px-10 py-4 rounded-md text-sm font-medium">
            Hire Me
        </a>
    </div>
</section>

<!-- FOOTER -->
<footer class="py-10 text-center text-gray-500 text-sm">
    © {{ date('Y') }} Jomar. All rights reserved.
</footer>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    once: false,
    mirror: true,
    offset: 200,
    duration: 700,
    easing: 'ease-out-cubic'
  });
</script>




</body>
</html>
