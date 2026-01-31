<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vulindlela Tech Hub | Empowering Nonprofits Through Technology</title>
    <meta name="description" content="Vulindlela Tech Hub empowers Non-Profit Organisations (NPOs) and ECD Centres with technology, administrative support, and compliance solutions for sustainable growth.">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/Vulindlela-icon.png">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.vulindlelaimpact.org.za/">
    <meta property="og:title" content="Vulindlela Tech Hub | Empowering Nonprofits">
    <meta property="og:description" content="We open the way for NPOs and ECD Centres to grow through technology, compliance, and admin support.">
    <meta property="og:image" content="https://www.vulindlelaimpact.org.za/assets/Vulindlela-icon.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.vulindlelaimpact.org.za/">
    <meta property="twitter:title" content="Vulindlela Tech Hub | Empowering Nonprofits">
    <meta property="twitter:description" content="We open the way for NPOs and ECD Centres to grow through technology, compliance, and admin support.">
    <meta property="twitter:image" content="https://www.vulindlelaimpact.org.za/assets/Vulindlela-icon.png">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            gold: '#D4AF37', // Premium Gold
                            black: '#0f172a', // Rich Black/Slate-900 for better text contrast than pure black
                            dark: '#000000', // Pure Black for backgrounds
                            light: '#f8fafc',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .glass-nav {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }
        .hero-gradient {
            background: linear-gradient(135deg, #000000 0%, #1a1a1a 50%, #D4AF37 100%);
        }
        .text-gold {
            color: #D4AF37;
        }
    </style>
</head>
<body class="font-sans text-slate-800 antialiased bg-gray-50" x-data="{ mobileMenuOpen: false, whatsappOpen: false }">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 glass-nav transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-3">
                    <img src="assets/vulindlela-web-logo.png" alt="Vulindlela Tech Hub" class="h-16 w-auto">
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="#about" class="text-slate-600 hover:text-brand-gold font-medium transition">About</a>
                    <a href="#services" class="text-slate-600 hover:text-brand-gold font-medium transition">Services</a>
                    <a href="#approach" class="text-slate-600 hover:text-brand-gold font-medium transition">Approach</a>
                    <a href="#contact" class="px-5 py-2.5 bg-brand-gold text-white rounded-full font-medium hover:bg-yellow-600 transition shadow-lg shadow-yellow-200">Contact Us</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-slate-600 hover:text-brand-gold focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" x-show="!mobileMenuOpen"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" x-show="mobileMenuOpen" x-cloak/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" x-collapse class="md:hidden bg-white border-t border-gray-100 shadow-xl absolute w-full rounded-b-2xl">
            <div class="px-4 pt-2 pb-6 space-y-2">
                <a href="#about" @click="mobileMenuOpen = false" class="block px-3 py-3 rounded-lg text-base font-medium text-slate-600 hover:text-brand-gold hover:bg-gray-50">About</a>
                <a href="#services" @click="mobileMenuOpen = false" class="block px-3 py-3 rounded-lg text-base font-medium text-slate-600 hover:text-brand-gold hover:bg-gray-50">Services</a>
                <a href="#approach" @click="mobileMenuOpen = false" class="block px-3 py-3 rounded-lg text-base font-medium text-slate-600 hover:text-brand-gold hover:bg-gray-50">Approach</a>
                <a href="#contact" @click="mobileMenuOpen = false" class="block px-3 py-3 mt-4 text-center rounded-lg text-base font-medium bg-brand-gold text-white hover:bg-yellow-600">Contact Us</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <!-- Background Gradient -->
        <div class="absolute inset-0 hero-gradient opacity-90"></div>
        <!-- Pattern Overlay -->
        <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
            <h1 class="text-4xl md:text-6xl font-heading font-extrabold tracking-tight mb-6 leading-tight">
                Empowering Nonprofits Through <br class="hidden md:block"/> Technology, Systems & Support
            </h1>
            <p class="text-lg md:text-xl text-yellow-50 max-w-3xl mx-auto mb-10 leading-relaxed font-light">
                We open the way for social impact organisations to operate efficiently, remain compliant, secure funding, and focus on serving their communities.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#services" class="px-8 py-4 bg-white text-brand-black font-bold rounded-full hover:bg-gray-100 transition shadow-xl transform hover:-translate-y-1">
                    Explore Our Services
                </a>
                <a href="#contact" class="px-8 py-4 bg-transparent border-2 border-brand-gold text-brand-gold font-bold rounded-full hover:bg-brand-gold hover:text-white transition transform hover:-translate-y-1">
                    Get In Touch
                </a>
            </div>
        </div>
    </section>

    <!-- About Section (Why We Exist) -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-brand-gold font-bold tracking-wide uppercase text-sm mb-2">Why We Exist</h2>
                <h3 class="text-3xl md:text-4xl font-heading font-bold text-slate-900">Overcoming Barriers to Impact</h3>
                <p class="mt-4 text-slate-600 max-w-2xl mx-auto">Many nonprofits and ECD centres struggle with challenges that hinder their growth. We exist to remove these barriers.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="p-8 rounded-2xl bg-slate-50 border border-slate-100 hover:shadow-lg transition group">
                    <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center mb-6 group-hover:bg-brand-gold transition-colors">
                        <svg class="w-6 h-6 text-brand-black group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-3">Limited Technology Access</h4>
                    <p class="text-slate-600 leading-relaxed">Bridging the digital divide with affordable and practical tech solutions.</p>
                </div>
                
                <!-- Card 2 -->
                <div class="p-8 rounded-2xl bg-slate-50 border border-slate-100 hover:shadow-lg transition group">
                    <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center mb-6 group-hover:bg-brand-gold transition-colors">
                        <svg class="w-6 h-6 text-brand-black group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-3">Compliance Challenges</h4>
                    <p class="text-slate-600 leading-relaxed">Navigating SARS, CIPC, and NPO Directorate requirements with ease.</p>
                </div>

                <!-- Card 3 -->
                <div class="p-8 rounded-2xl bg-slate-50 border border-slate-100 hover:shadow-lg transition group">
                    <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center mb-6 group-hover:bg-brand-gold transition-colors">
                        <svg class="w-6 h-6 text-brand-black group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-3">Funding Difficulty</h4>
                    <p class="text-slate-600 leading-relaxed">Unlocking opportunities with proposal writing and donor compliance support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Beneficiaries Strip -->
    <section class="py-12 bg-slate-50 border-y border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h3 class="text-lg font-medium text-slate-500 mb-8">Proudly Supporting</h3>
            <div class="flex flex-wrap justify-center gap-4 md:gap-8">
                <span class="px-6 py-3 bg-white rounded-full shadow-sm text-slate-700 font-semibold border border-slate-200">Non-Profit Organisations</span>
                <span class="px-6 py-3 bg-white rounded-full shadow-sm text-slate-700 font-semibold border border-slate-200">Charities</span>
                <span class="px-6 py-3 bg-white rounded-full shadow-sm text-slate-700 font-semibold border border-slate-200">ECD Centres</span>
                <span class="px-6 py-3 bg-white rounded-full shadow-sm text-slate-700 font-semibold border border-slate-200">Community Organisations</span>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-brand-gold font-bold tracking-wide uppercase text-sm mb-2">What We Do</h2>
                <h3 class="text-3xl md:text-4xl font-heading font-bold text-slate-900">Comprehensive Support Services</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Tech Service -->
                <div class="bg-white p-8 rounded-2xl shadow-lg shadow-slate-200/50 border border-slate-100 hover:border-brand-gold transition duration-300">
                    <h4 class="text-2xl font-bold text-brand-black mb-4">Technology Solutions</h4>
                    <ul class="space-y-3 text-slate-600">
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Website design and hosting</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Email setup and digital presence</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Productivity & management systems</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Data and reporting systems</li>
                    </ul>
                </div>

                <!-- Admin Service -->
                <div class="bg-white p-8 rounded-2xl shadow-lg shadow-slate-200/50 border border-slate-100 hover:border-brand-gold transition duration-300">
                    <h4 class="text-2xl font-bold text-brand-black mb-4">Administration & Compliance</h4>
                    <ul class="space-y-3 text-slate-600">
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> NPO registration support</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> CIPC and NPO Directorate compliance</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> SARS registration & tax compliance</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Governance documentation</li>
                    </ul>
                </div>

                <!-- Funding Service -->
                <div class="bg-white p-8 rounded-2xl shadow-lg shadow-slate-200/50 border border-slate-100 hover:border-brand-gold transition duration-300">
                    <h4 class="text-2xl font-bold text-brand-black mb-4">Funding & Sustainability</h4>
                    <ul class="space-y-3 text-slate-600">
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Funding and sponsorship applications</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Proposal writing support</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Donor compliance preparation</li>
                    </ul>
                </div>

                <!-- Training Service -->
                <div class="bg-white p-8 rounded-2xl shadow-lg shadow-slate-200/50 border border-slate-100 hover:border-brand-gold transition duration-300">
                    <h4 class="text-2xl font-bold text-brand-black mb-4">Training & Capacity Building</h4>
                    <ul class="space-y-3 text-slate-600">
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Digital skills training</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> System usage and adoption</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Admin and compliance training</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Value Prop -->
    <section class="py-20 bg-brand-black text-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-slate-800 opacity-20 skew-x-12 translate-x-20"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h2 class="text-3xl md:text-5xl font-heading font-bold mb-6">We handle the systems — you focus on impact.</h2>
            <p class="text-xl text-slate-400 max-w-2xl mx-auto mb-10">We become the backbone support for nonprofits, offering affordable, tailored, and purpose-driven solutions.</p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto">
                <div class="text-center">
                    <div class="text-3xl font-bold text-brand-gold mb-2">Affordable</div>
                    <div class="text-sm text-slate-400">Tailored Solutions</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-brand-gold mb-2">One-Stop</div>
                    <div class="text-sm text-slate-400">Tech & Admin Hub</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-brand-gold mb-2">Practical</div>
                    <div class="text-sm text-slate-400">Hands-on Implementation</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-brand-gold mb-2">Driven</div>
                    <div class="text-sm text-slate-400">By Purpose</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Core Values -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-16 items-center mb-20">
                <div>
                    <h3 class="text-sm font-bold text-brand-gold tracking-widest uppercase mb-2">Our Mission</h3>
                    <h2 class="text-3xl font-heading font-bold text-slate-900 mb-6">Enabling Sustainable Growth</h2>
                    <p class="text-lg text-slate-600 leading-relaxed">
                        To empower nonprofit organisations and ECD centres with technology, administrative systems, and compliance support that enable sustainable growth, effective governance, and meaningful community impact.
                    </p>
                </div>
                <div class="bg-slate-50 p-8 rounded-2xl border-l-4 border-brand-black">
                    <h3 class="text-sm font-bold text-brand-black tracking-widest uppercase mb-2">Our Vision</h3>
                    <p class="text-xl font-medium text-slate-800 italic">
                        "A thriving nonprofit ecosystem where every organisation has access to the tools, systems, and support needed to fulfil its purpose and create lasting change."
                    </p>
                </div>
            </div>

            <h3 class="text-center text-2xl font-bold text-slate-900 mb-10">Our Core Values</h3>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="p-6 bg-slate-50 rounded-xl hover:shadow-md transition">
                    <h4 class="font-bold text-brand-black mb-2">Empowerment</h4>
                    <p class="text-sm text-slate-600">We equip organisations to operate independently and confidently.</p>
                </div>
                <div class="p-6 bg-slate-50 rounded-xl hover:shadow-md transition">
                    <h4 class="font-bold text-brand-black mb-2">Service with Purpose</h4>
                    <p class="text-sm text-slate-600">We serve with humility, integrity, and a heart for impact.</p>
                </div>
                <div class="p-6 bg-slate-50 rounded-xl hover:shadow-md transition">
                    <h4 class="font-bold text-brand-black mb-2">Integrity</h4>
                    <p class="text-sm text-slate-600">We uphold transparency, accountability, and ethical conduct.</p>
                </div>
                <div class="p-6 bg-slate-50 rounded-xl hover:shadow-md transition">
                    <h4 class="font-bold text-brand-black mb-2">Excellence</h4>
                    <p class="text-sm text-slate-600">We deliver high-quality, reliable, and professional support.</p>
                </div>
                <div class="p-6 bg-slate-50 rounded-xl hover:shadow-md transition">
                    <h4 class="font-bold text-brand-black mb-2">Innovation</h4>
                    <p class="text-sm text-slate-600">We use smart, practical technology to solve real challenges.</p>
                </div>
                <div class="p-6 bg-slate-50 rounded-xl hover:shadow-md transition">
                    <h4 class="font-bold text-brand-black mb-2">Collaboration</h4>
                    <p class="text-sm text-slate-600">We believe impact is greater when we work together.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Approach -->
    <section id="approach" class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-heading font-bold text-slate-900 mb-12">Our Approach</h2>
            <div class="flex flex-wrap justify-center items-center gap-8">
                <div class="flex flex-col items-center max-w-[200px]">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-md mb-4 font-bold text-xl text-brand-gold border-2 border-brand-gold">1</div>
                    <h4 class="font-bold text-slate-900">Assess</h4>
                    <p class="text-sm text-slate-500">Understand your organisation’s needs</p>
                </div>
                <div class="hidden md:block w-12 h-1 bg-slate-300"></div>
                <div class="flex flex-col items-center max-w-[200px]">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-md mb-4 font-bold text-xl text-brand-gold border-2 border-brand-gold">2</div>
                    <h4 class="font-bold text-slate-900">Design</h4>
                    <p class="text-sm text-slate-500">Tailor systems and solutions</p>
                </div>
                <div class="hidden md:block w-12 h-1 bg-slate-300"></div>
                <div class="flex flex-col items-center max-w-[200px]">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-md mb-4 font-bold text-xl text-brand-gold border-2 border-brand-gold">3</div>
                    <h4 class="font-bold text-slate-900">Implement</h4>
                    <p class="text-sm text-slate-500">Set up tools, systems, and compliance</p>
                </div>
                <div class="hidden md:block w-12 h-1 bg-slate-300"></div>
                <div class="flex flex-col items-center max-w-[200px]">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-md mb-4 font-bold text-xl text-brand-gold border-2 border-brand-gold">4</div>
                    <h4 class="font-bold text-slate-900">Support</h4>
                    <p class="text-sm text-slate-500">Ongoing guidance and improvement</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-brand-black rounded-3xl overflow-hidden shadow-2xl flex flex-col md:flex-row">
                <div class="p-10 md:w-1/2 bg-brand-black text-white border-r border-gray-800">
                    <h2 class="text-3xl font-heading font-bold mb-6 text-brand-gold">Get In Touch</h2>
                    <p class="text-gray-300 mb-8">Ready to open the way for your organisation? Contact us today.</p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <svg class="w-6 h-6 text-brand-gold mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <div>
                                <h4 class="font-bold">Location</h4>
                                <p class="text-sm text-gray-300">South Africa</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <svg class="w-6 h-6 text-brand-gold mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <div>
                                <h4 class="font-bold">Email</h4>
                                <a href="mailto:info@vulindlelahub.org.za" class="text-sm text-gray-300 hover:text-brand-gold underline">info@vulindlelahub.org.za</a>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <svg class="w-6 h-6 text-brand-gold mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <div>
                                <h4 class="font-bold">Phone</h4>
                                <a href="tel:+27621553817" class="text-sm text-gray-300 hover:text-brand-gold underline">062 155 3817</a>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <svg class="w-6 h-6 text-brand-gold mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                            <div>
                                <h4 class="font-bold">Website</h4>
                                <a href="https://www.vulindlelahub.org.za" class="text-sm text-gray-300 hover:text-brand-gold underline">www.vulindlelahub.org.za</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="p-10 md:w-1/2 bg-white" x-data="{ 
                    name: '', 
                    phone: '', 
                    email: '', 
                    area: '', 
                    services: [],
                    submitForm() {
                        let text = 'Hi Vulindlela Tech Hub, I would like to enquire.%0A%0A';
                        text += '*Name:* ' + this.name + '%0A';
                        text += '*Phone:* ' + this.phone + '%0A';
                        text += '*Email:* ' + this.email + '%0A';
                        text += '*Area/Town:* ' + this.area + '%0A';
                        text += '*Interested Services:* ' + (this.services.length > 0 ? this.services.join(', ') : 'General Enquiry') + '%0A';
                        
                        window.open('https://wa.me/27621553817?text=' + text, '_blank');
                    } 
                }">
                    <form class="space-y-4" @submit.prevent="submitForm">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-1">Full Name</label>
                            <input type="text" x-model="name" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-brand-gold focus:border-transparent outline-none transition" placeholder="Your Name">
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-1">Contact Number</label>
                                <input type="tel" x-model="phone" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-brand-gold focus:border-transparent outline-none transition" placeholder="082 123 4567">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-1">Email Address</label>
                                <input type="email" x-model="email" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-brand-gold focus:border-transparent outline-none transition" placeholder="name@example.com">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-1">Area / Town</label>
                            <input type="text" x-model="area" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-brand-gold focus:border-transparent outline-none transition" placeholder="e.g. Durban, Umlazi">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Services Interested In:</label>
                            <DIV class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-sm">
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input type="checkbox" value="Website Design" x-model="services" class="rounded text-brand-gold focus:ring-brand-gold">
                                    <span class="text-slate-600">Website Design</span>
                                </label>
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input type="checkbox" value="NPO Registration" x-model="services" class="rounded text-brand-gold focus:ring-brand-gold">
                                    <span class="text-slate-600">NPO Registration</span>
                                </label>
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input type="checkbox" value="Compliance Support" x-model="services" class="rounded text-brand-gold focus:ring-brand-gold">
                                    <span class="text-slate-600">Compliance Support</span>
                                </label>
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input type="checkbox" value="Funding Applications" x-model="services" class="rounded text-brand-gold focus:ring-brand-gold">
                                    <span class="text-slate-600">Funding Applications</span>
                                </label>
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input type="checkbox" value="Training" x-model="services" class="rounded text-brand-gold focus:ring-brand-gold">
                                    <span class="text-slate-600">Training</span>
                                </label>
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input type="checkbox" value="Other" x-model="services" class="rounded text-brand-gold focus:ring-brand-gold">
                                    <span class="text-slate-600">Other</span>
                                </label>
                            </DIV>
                        </div>

                        <button type="submit" class="w-full py-3 bg-brand-gold text-white font-bold rounded-lg hover:bg-yellow-600 transition shadow-lg flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.506-.669-.516l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                            Submit via WhatsApp
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 py-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-6 text-sm">
            <div class="text-center md:text-left">
                <p>&copy; <?php echo date("Y"); ?> Vulindlela Tech Hub NPC. All rights reserved.</p>
                <p class="mt-2 text-slate-500">Opening the way for impact through technology and support.</p>
            </div>
            <div class="flex flex-col items-center md:items-end gap-2 text-xs">
                <a href="https://www.jaspa.co.za/website-design.php" target="_blank" class="hover:text-white transition">Website developed by Jaspa Technologies</a>
                <a href="https://www.sbuhost.co.za" target="_blank" class="hover:text-white transition">Hosted by Sbuhost</a>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Floating Button -->
    <div x-data="{ open: false }" class="fixed bottom-6 right-6 z-50">
        <!-- Popup Chat -->
        <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4" class="absolute bottom-16 right-0 w-72 bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden mb-2">
            <div class="bg-green-500 p-4 text-white">
                <h4 class="font-bold">Chat with us</h4>
                <p class="text-xs text-green-100">We typically reply within an hour</p>
            </div>
            <div class="p-4 bg-slate-50 h-40 flex items-center justify-center text-slate-400 text-sm italic">
                Start a conversation...
            </div>
            <div class="p-3 bg-white border-t border-gray-100">
                <a href="https://wa.me/27789166707?text=Hi%20Vulindlela%20Tech%20Hub,%20I%20need%20assistance." target="_blank" class="block w-full text-center py-2 bg-green-500 text-white rounded-lg font-bold hover:bg-green-600 transition">Start Chat</a>
            </div>
        </div>

        <!-- Button -->
        <button @click="open = !open" class="w-14 h-14 bg-green-500 rounded-full flex items-center justify-center text-white shadow-lg shadow-green-500/30 hover:bg-green-600 transition transform hover:scale-105">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.506-.669-.516l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
        </button>
    </div>

</body>
</html>
