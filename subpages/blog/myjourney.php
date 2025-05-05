<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Journey - CodeNest</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        codeblue: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace']
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                        'typewriter': 'typewriter 4s steps(44) 1s forwards',
                        'caret': 'caret 1s infinite'
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-15px)' },
                        },
                        glow: {
                            '0%': { boxShadow: '0 0 5px rgba(66, 153, 225, 0.5)' },
                            '100%': { boxShadow: '0 0 20px rgba(66, 153, 225, 0.8)' }
                        },
                        typewriter: {
                            'to': { left: '100%' }
                        },
                        caret: {
                            '50%': { borderColor: 'transparent' }
                        }
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
            background-color: #0f172a;
        }

        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 1s ease-out forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .stagger-delay-1 { animation-delay: 0.2s; }
        .stagger-delay-2 { animation-delay: 0.4s; }
        .stagger-delay-3 { animation-delay: 0.6s; }
        .stagger-delay-4 { animation-delay: 0.8s; }

        /* Timeline */
        .timeline-container {
            position: relative;
        }

        .timeline-line {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 4px;
            background: linear-gradient(to bottom, #3b82f6, #6366f1);
            height: 100%;
            z-index: 0;
        }

        /* Code Block Styling */
        .code-block {
            background-color: #1e293b;
            border-radius: 0.5rem;
            font-family: 'JetBrains Mono', monospace;
            position: relative;
            overflow: hidden;
        }

        .code-block::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(59, 130, 246, 0.1), transparent 70%);
        }

        /* Card hover effects */
        .journey-card {
            transition: all 0.3s ease;
        }

        .journey-card:hover {
            transform: translateY(-5px);
        }

        /* Background patterns */
        .bg-dots {
            background-image: radial-gradient(rgba(255, 255, 255, 0.1) 1px, transparent 1px);
            background-size: 20px 20px;
        }

        .bg-grid {
            background-size: 40px 40px;
            background-image: 
                linear-gradient(to right, rgba(255, 255, 255, 0.05) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
        }

        /* Carousel */
        .carousel {
            position: relative;
            overflow: hidden;
            border-radius: 0.75rem;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }
        
        .carousel img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: opacity 0.8s ease;
            opacity: 0;
        }
        
        .carousel img.active {
            position: relative;
            opacity: 1;
        }

        /* Typewriter effect */
        .typewriter {
            position: relative;
            display: inline-block;
        }

        .typewriter::after {
            content: '|';
            position: absolute;
            right: -8px;
            animation: caret 1s infinite;
        }

        /* Scroll animations */
        .scroll-reveal {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .scroll-reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Custom Glow Effects */
        .glow-text {
            text-shadow: 0 0 5px rgba(59, 130, 246, 0.5);
        }

        .glow-border {
            box-shadow: 0 0 10px rgba(59, 130, 246, 0.5);
        }

        /* Skills tag */
        .skill-tag {
            transition: all 0.3s ease;
            background: rgba(59, 130, 246, 0.1);
            border: 1px solid rgba(59, 130, 246, 0.3);
        }

        .skill-tag:hover {
            transform: scale(1.05);
            background: rgba(59, 130, 246, 0.2);
        }

        /* 3D Card Effect */
        .card-3d {
            transition: transform 0.5s ease;
            transform-style: preserve-3d;
        }

        .card-3d:hover {
            transform: translateY(-5px) rotateX(5deg);
        }
    </style>
</head>

<body class="bg-slate-900 text-gray-300">
    <!-- Navbar with blur effect -->
    <header class="fixed w-full top-0 z-50 bg-slate-900/90 backdrop-blur-lg border-b border-slate-800">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 rounded-lg bg-gradient-to-r from-blue-600 to-indigo-600 flex items-center justify-center">
                    <i class="fas fa-code text-white text-xl"></i>
                </div>
                <h1 class="text-2xl font-bold text-white">CodeNest</h1>
            </div>
            <nav class="hidden md:flex space-x-8">
                <a href="../../blog.php" class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center">
                    <i class="fas fa-home mr-2"></i> Home
                </a>
                <a href="./myjourney.php" class="text-blue-400 border-b-2 border-blue-500 font-medium flex items-center">
                    <i class="fas fa-road mr-2"></i> My Journey
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center">
                    <i class="fab fa-twitter mr-2"></i> Tweet
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center">
                    <i class="fas fa-star mr-2"></i> Review
                </a>
            </nav>
            <!-- Mobile menu button -->
            <button class="md:hidden text-gray-400 hover:text-white">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
    </header>

    <!-- Hero Section with Parallax Effect -->
    <section class="pt-32 pb-24 relative overflow-hidden bg-gradient-to-b from-slate-900 to-slate-800">
        <!-- Animated background dots -->
        <div class="absolute inset-0 bg-dots opacity-30"></div>
        
        <!-- Floating shapes -->
        <div class="absolute top-20 left-10 w-24 h-24 bg-blue-500/20 rounded-full blur-2xl animate-pulse-slow"></div>
        <div class="absolute bottom-10 right-10 w-32 h-32 bg-indigo-500/20 rounded-full blur-3xl animate-float"></div>
        <div class="absolute top-40 right-20 w-16 h-16 bg-purple-500/20 rounded-full blur-xl" style="animation-delay: 2s"></div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <!-- Animated badge -->
                <div class="inline-flex items-center bg-blue-900/30 border border-blue-700/50 rounded-full px-4 py-2 mb-6 fade-in stagger-delay-1">
                    <span class="flex h-2 w-2 rounded-full bg-blue-400 mr-2 animate-pulse"></span>
                    <span class="text-blue-300 text-sm font-medium">Personal Developer Story</span>
                </div>
                
                <!-- Main heading with gradient -->
                <h1 class="text-5xl md:text-6xl font-extrabold mb-6 fade-in stagger-delay-2">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-indigo-500">
                        My Journey
                    </span>
                </h1>
                
                <!-- Animated typewriter subtitle -->
                <div class="h-12 mb-8 fade-in stagger-delay-3">
                    <p class="text-xl md:text-2xl text-gray-300 typewriter">
                        From <span class="text-blue-400 font-semibold">CodeHub</span> to <span class="text-indigo-400 font-semibold">CodeNest</span>
                    </p>
                </div>
                
                <!-- Description -->
                <p class="text-lg text-gray-400 mb-10 max-w-2xl mx-auto fade-in stagger-delay-4">
                    The transformation of a simple college project into a global developer community, driven by passion, continuous learning, and a dream to connect coders worldwide.
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center fade-in stagger-delay-4">
                    <a href="#timeline" class="px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-medium rounded-lg hover:shadow-lg hover:from-blue-700 hover:to-indigo-700 transition-all flex items-center justify-center">
                        <i class="fas fa-timeline mr-2"></i> View Timeline
                    </a>
                    <a href="#future" class="px-6 py-3 bg-slate-800 border border-blue-700/30 text-gray-300 font-medium rounded-lg hover:bg-slate-700 transition-all flex items-center justify-center">
                        <i class="fas fa-rocket mr-2"></i> See My Vision
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Wave divider -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" fill="#0f172a">
                <path d="M0,96L48,85.3C96,75,192,53,288,48C384,43,480,53,576,58.7C672,64,768,64,864,58.7C960,53,1056,43,1152,42.7C1248,43,1344,53,1392,58.7L1440,64L1440,100L1392,100C1344,100,1248,100,1152,100C1056,100,960,100,864,100C768,100,672,100,576,100C480,100,384,100,288,100C192,100,96,100,48,100L0,100Z"></path>
            </svg>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-16">
        <!-- Introduction Card -->
        <section class="mb-20 max-w-4xl mx-auto">
            <div class="bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-2xl p-8 card-3d glow-border scroll-reveal">
                <div class="flex flex-col md:flex-row gap-8 items-center">
                    <div class="md:w-1/3">
                        <div class="w-full aspect-square rounded-2xl bg-gradient-to-br from-blue-600 to-indigo-800 flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 bg-grid opacity-30"></div>
                            <i class="fas fa-lightbulb text-6xl text-white opacity-90"></i>
                        </div>
                    </div>
                    
                    <div class="md:w-2/3">
                        <h2 class="text-3xl font-bold text-white mb-4">The Genesis of an Idea</h2>
                        <p class="text-gray-300 mb-4">
                            Every great project starts with an idea, and for me, that idea was <span class="text-blue-400 font-semibold">CodeHub</span>, my very first coding forum. 
                            It was born during my Bachelor of Computer Applications (BCA) program as my final semester project.
                        </p>
                        <p class="text-gray-300">
                            While functional, the original CodeHub had its limitations. Features like edit, delete, and like were missing, the frontend design was basic, and there were several performance issues. 
                            Despite its simplicity, this project ignited a <span class="text-blue-400 font-semibold">passion</span> in me to create something bigger and better.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Timeline Section -->
        <section id="timeline" class="mb-20 scroll-reveal">
            <div class="text-center mb-16">
                <div class="inline-flex items-center bg-blue-900/30 border border-blue-700/50 rounded-full px-4 py-2 mb-4">
                    <i class="fas fa-clock text-blue-400 mr-2"></i>
                    <span class="text-blue-300 text-sm font-medium">Development Timeline</span>
                </div>
                <h2 class="text-4xl font-bold text-white mb-4">The Evolution</h2>
                <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                    Follow the journey of how a simple college project transformed into a thriving developer community platform
                </p>
            </div>

            <!-- Timeline -->
            <div class="timeline-container py-10">
                <div class="timeline-line"></div>
                
                <!-- Timeline Item 1 -->
                <div class="flex flex-col md:flex-row items-center mb-16 relative scroll-reveal">
                    <!-- Timeline circle marker -->
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full border-4 border-blue-600 bg-slate-900 z-10 flex items-center justify-center">
                        <span class="text-blue-500 font-bold">1</span>
                    </div>
                    
                    <!-- Left side (for even items) -->
                    <div class="md:w-1/2 md:pr-16 mb-6 md:mb-0 md:text-right">
                        <div class="journey-card bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-xl p-6 mx-4">
                            <span class="inline-block text-indigo-400 font-mono mb-2">2021</span>
                            <h3 class="text-2xl font-bold text-white mb-3">College Project: CodeHub</h3>
                            <p class="text-gray-300 mb-4">
                                Created as a final semester project during my BCA program. A simple forum built with HTML, CSS, Bootstrap, and PHP.
                            </p>
                            <div class="flex flex-wrap gap-2 justify-end">
                                <span class="skill-tag px-3 py-1 rounded-full text-blue-400 text-sm">HTML</span>
                                <span class="skill-tag px-3 py-1 rounded-full text-blue-400 text-sm">CSS</span>
                                <span class="skill-tag px-3 py-1 rounded-full text-blue-400 text-sm">Bootstrap</span>
                                <span class="skill-tag px-3 py-1 rounded-full text-blue-400 text-sm">PHP</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right side (empty for even items) -->
                    <div class="md:w-1/2 md:pl-16"></div>
                </div>
                
                <!-- Timeline Item 2 -->
                <div class="flex flex-col md:flex-row items-center mb-16 relative scroll-reveal">
                    <!-- Timeline circle marker -->
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full border-4 border-indigo-600 bg-slate-900 z-10 flex items-center justify-center">
                        <span class="text-indigo-500 font-bold">2</span>
                    </div>
                    
                    <!-- Left side (empty for odd items) -->
                    <div class="md:w-1/2 md:pr-16"></div>
                    
                    <!-- Right side (for odd items) -->
                    <div class="md:w-1/2 md:pl-16">
                        <div class="journey-card bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-xl p-6 mx-4">
                            <span class="inline-block text-indigo-400 font-mono mb-2">2022</span>
                            <h3 class="text-2xl font-bold text-white mb-3">Post-Graduation Reflection</h3>
                            <p class="text-gray-300 mb-4">
                                After graduating, I revisited CodeHub with a critical eye, noting its limitations and envisioning what it could become with improved skills and knowledge.
                            </p>
                            <div class="code-block p-4 mb-4 text-sm">
                                <span class="text-gray-400">// Areas that needed improvement:</span><br>
                                <span class="text-pink-400">const</span> <span class="text-blue-300">limitations</span> = [<br>
                                <span class="text-gray-300 ml-4">'Basic UI/UX design',</span><br>
                                <span class="text-gray-300 ml-4">'Limited feature set',</span><br>
                                <span class="text-gray-300 ml-4">'Performance issues',</span><br>
                                <span class="text-gray-300 ml-4">'Lack of modern technology stack'</span><br>
                                ];
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Timeline Item 3 -->
                <div class="flex flex-col md:flex-row items-center mb-16 relative scroll-reveal">
                    <!-- Timeline circle marker -->
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full border-4 border-blue-600 bg-slate-900 z-10 flex items-center justify-center">
                        <span class="text-blue-500 font-bold">3</span>
                    </div>
                    
                    <!-- Left side -->
                    <div class="md:w-1/2 md:pr-16 mb-6 md:mb-0 md:text-right">
                        <div class="journey-card bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-xl p-6 mx-4">
                            <span class="inline-block text-indigo-400 font-mono mb-2">2023</span>
                            <h3 class="text-2xl font-bold text-white mb-3">The Rebirth: CodeNest</h3>
                            <p class="text-gray-300 mb-4">
                                Complete redesign with modern technologies. Switched to Tailwind CSS for a cleaner, more responsive UI. Enhanced backend capabilities while maintaining PHP.
                            </p>
                            <div class="flex flex-wrap gap-2 justify-end">
                                <span class="skill-tag px-3 py-1 rounded-full text-blue-400 text-sm">Tailwind CSS</span>
                                <span class="skill-tag px-3 py-1 rounded-full text-blue-400 text-sm">PHP</span>
                                <span class="skill-tag px-3 py-1 rounded-full text-blue-400 text-sm">Cloudinary</span>
                                <span class="skill-tag px-3 py-1 rounded-full text-blue-400 text-sm">Zapier</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right side -->
                    <div class="md:w-1/2 md:pl-16"></div>
                </div>
                
                <!-- Timeline Item 4 -->
                <div class="flex flex-col md:flex-row items-center relative scroll-reveal">
                    <!-- Timeline circle marker -->
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full border-4 border-indigo-600 bg-slate-900 z-10 flex items-center justify-center">
                        <span class="text-indigo-500 font-bold">4</span>
                    </div>
                    
                    <!-- Left side (empty for odd items) -->
                    <div class="md:w-1/2 md:pr-16"></div>
                    
                    <!-- Right side (for odd items) -->
                    <div class="md:w-1/2 md:pl-16">
                        <div class="journey-card bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-xl p-6 mx-4">
                            <span class="inline-block text-indigo-400 font-mono mb-2">2024</span>
                            <h3 class="text-2xl font-bold text-white mb-3">Feature Expansion</h3>
                            <p class="text-gray-300 mb-4">
                                Added new capabilities including blogs, real-time messaging, community chat, and began development on a dedicated resource store.
                            </p>
                            <div class="grid grid-cols-2 gap-3 mt-4">
                                <div class="bg-slate-900/70 p-3 rounded-lg flex items-center">
                                    <i class="fas fa-blog text-blue-400 mr-2"></i>
                                    <span>Blog System</span>
                                </div>
                                <div class="bg-slate-900/70 p-3 rounded-lg flex items-center">
                                    <i class="fas fa-comments text-blue-400 mr-2"></i>
                                    <span>Real-time Chat</span>
                                </div>
                                <div class="bg-slate-900/70 p-3 rounded-lg flex items-center">
                                    <i class="fas fa-users text-blue-400 mr-2"></i>
                                    <span>Community</span>
                                </div>
                                <div class="bg-slate-900/70 p-3 rounded-lg flex items-center">
                                    <i class="fas fa-store text-blue-400 mr-2"></i>
                                    <span>Resource Store</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Visual Comparison -->
        <section class="mb-20 scroll-reveal">
            <div class="text-center mb-12">
                <div class="inline-flex items-center bg-blue-900/30 border border-blue-700/50 rounded-full px-4 py-2 mb-4">
                    <i class="fas fa-images text-blue-400 mr-2"></i>
                    <span class="text-blue-300 text-sm font-medium">Visual Transformation</span>
                </div>
                <h2 class="text-4xl font-bold text-white mb-4">Before & After</h2>
                <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                    See the visual evolution from CodeHub to CodeNest
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Before -->
                <div class="bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-xl overflow-hidden">
                    <div class="bg-slate-900 px-4 py-3 border-b border-slate-700 flex items-center">
                        <div class="flex space-x-2 mr-3">
                            <div class="w-3 h-3 rounded-full bg-red-500"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                            <div class="w-3 h-3 rounded-full bg-green-500"></div>
                        </div>
                        <div class="text-sm text-gray-400">CodeHub - Before</div>
                    </div>
                    <div class="p-4">
                        <div class="carousel h-64 w-full">
                            <img src="https://via.placeholder.com/800x400/444" alt="CodeHub Screenshot" class="active rounded-lg">
                            <img src="https://via.placeholder.com/800x400/333" alt="CodeHub Screenshot" class="rounded-lg">
                        </div>
                        <div class="mt-4 p-4 bg-slate-900 rounded-lg">
                            <h4 class="font-semibold text-blue-400 mb-2">CodeHub Features:</h4>
                            <ul class="text-gray-300 space-y-2">
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                    <span>Basic forum functionality</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                    <span>Simple user registration</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-times text-red-500 mr-2 mt-1"></i>
                                    <span>Limited UI with Bootstrap</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-times text-red-500 mr-2 mt-1"></i>
                                    <span>No advanced features</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- After -->
                <div class="bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-xl overflow-hidden">
                    <div class="bg-slate-900 px-4 py-3 border-b border-slate-700 flex items-center">
                        <div class="flex space-x-2 mr-3">
                            <div class="w-3 h-3 rounded-full bg-red-500"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                            <div class="w-3 h-3 rounded-full bg-green-500"></div>
                        </div>
                        <div class="text-sm text-gray-400">CodeNest - After</div>
                    </div>
                    <div class="p-4">
                        <div class="carousel h-64 w-full">
                            <img src="../images/blogImages/codeNestForumOne.png" alt="CodeNest Screenshot" class="active rounded-lg">
                            <!-- Continuing from where the code was cut off -->
                            <img src="../images/blogImages/codeNestForumTwo.png" alt="CodeNest Screenshot" class="rounded-lg">
                            <img src="../images/blogImages/codeNestForumThree.png" alt="CodeNest Screenshot" class="rounded-lg">
                        </div>
                        <div class="mt-4 p-4 bg-slate-900 rounded-lg">
                            <h4 class="font-semibold text-blue-400 mb-2">CodeNest Features:</h4>
                            <ul class="text-gray-300 space-y-2">
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                    <span>Modern UI with Tailwind CSS</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                    <span>Enhanced forum capabilities</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                    <span>Blog system and real-time chat</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                    <span>Resource marketplace</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technical Evolution -->
        <section class="mb-20 scroll-reveal">
            <div class="text-center mb-12">
                <div class="inline-flex items-center bg-blue-900/30 border border-blue-700/50 rounded-full px-4 py-2 mb-4">
                    <i class="fas fa-code text-blue-400 mr-2"></i>
                    <span class="text-blue-300 text-sm font-medium">Technical Deep Dive</span>
                </div>
                <h2 class="text-4xl font-bold text-white mb-4">The Tech Stack Evolution</h2>
                <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                    A closer look at how the development technologies improved over time
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Frontend Evolution -->
                <div class="bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-xl p-6 card-3d">
                    <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <i class="fas fa-paint-brush text-blue-400 mr-3"></i> Frontend Evolution
                    </h3>
                    <div class="code-block p-4 mb-4 text-sm">
                        <span class="text-gray-400">// CodeHub (2021)</span><br>
                        <span class="text-pink-400">const</span> <span class="text-blue-300">oldStack</span> = {<br>
                        <span class="text-gray-300 ml-4">framework: 'Bootstrap 4',</span><br>
                        <span class="text-gray-300 ml-4">styling: 'CSS',</span><br>
                        <span class="text-gray-300 ml-4">javascript: 'jQuery',</span><br>
                        <span class="text-gray-300 ml-4">responsiveness: 'Limited'</span><br>
                        };<br><br>
                        
                        <span class="text-gray-400">// CodeNest (2023-2024)</span><br>
                        <span class="text-pink-400">const</span> <span class="text-blue-300">newStack</span> = {<br>
                        <span class="text-gray-300 ml-4">framework: 'Tailwind CSS',</span><br>
                        <span class="text-gray-300 ml-4">styling: 'Custom animations',</span><br>
                        <span class="text-gray-300 ml-4">javascript: 'Modern ES6+',</span><br>
                        <span class="text-gray-300 ml-4">responsiveness: 'Fully responsive'</span><br>
                        };
                    </div>
                    <p class="text-gray-300 mb-4">
                        The transition from Bootstrap to Tailwind CSS allowed for more custom designs while maintaining a utility-first approach. This significantly reduced CSS bloat and improved loading times.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="skill-tag px-3 py-1 rounded-full text-blue-400 text-sm">Tailwind CSS</span>
                        <span class="skill-tag px-3 py-1 rounded-full text-blue-400 text-sm">Alpine.js</span>
                        <span class="skill-tag px-3 py-1 rounded-full text-blue-400 text-sm">Modern JavaScript</span>
                        <span class="skill-tag px-3 py-1 rounded-full text-blue-400 text-sm">CSS Grid</span>
                        <span class="skill-tag px-3 py-1 rounded-full text-blue-400 text-sm">Flexbox</span>
                    </div>
                </div>
                
                <!-- Backend Evolution -->
                <div class="bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-xl p-6 card-3d">
                    <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <i class="fas fa-server text-blue-400 mr-3"></i> Backend Evolution
                    </h3>
                    <div class="code-block p-4 mb-4 text-sm">
                        <span class="text-gray-400">// CodeHub (2021)</span><br>
                        <span class="text-pink-400">function</span> <span class="text-blue-300">originalBackend</span>() {<br>
                        <span class="text-gray-300 ml-4">return {</span><br>
                        <span class="text-gray-300 ml-8">language: 'PHP',</span><br>
                        <span class="text-gray-300 ml-8">database: 'MySQL',</span><br>
                        <span class="text-gray-300 ml-8">security: 'Basic',</span><br>
                        <span class="text-gray-300 ml-8">optimization: 'Minimal'</span><br>
                        <span class="text-gray-300 ml-4">};</span><br>
                        }<br><br>
                        
                        <span class="text-gray-400">// CodeNest (2023-2024)</span><br>
                        <span class="text-pink-400">function</span> <span class="text-blue-300">enhancedBackend</span>() {<br>
                        <span class="text-gray-300 ml-4">return {</span><br>
                        <span class="text-gray-300 ml-8">language: 'PHP 8.1',</span><br>
                        <span class="text-gray-300 ml-8">database: 'MySQL (optimized)',</span><br>
                        <span class="text-gray-300 ml-8">security: 'Advanced',</span><br>
                        <span class="text-gray-300 ml-8">optimization: 'Comprehensive'</span><br>
                        <span class="text-gray-300 ml-4">};</span><br>
                        }
                    </div>
                    <p class="text-gray-300 mb-4">
                        While maintaining PHP as the core backend language, significant improvements were made in security, performance optimization, and database structure. Integrated modern PHP features for better error handling and type safety.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="skill-tag px-3 py-1 rounded-full text-blue-400 text-sm">PHP 8.1</span>
                        <span class="skill-tag px-3 py-1 rounded-full text-blue-400 text-sm">MySQL</span>
                        <span class="skill-tag px-3 py-1 rounded-full text-blue-400 text-sm">WebSockets</span>
                        <span class="skill-tag px-3 py-1 rounded-full text-blue-400 text-sm">Cloudinary</span>
                        <span class="skill-tag px-3 py-1 rounded-full text-blue-400 text-sm">API Integration</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Challenges and Lessons -->
        <section class="mb-20 scroll-reveal">
            <div class="text-center mb-12">
                <div class="inline-flex items-center bg-blue-900/30 border border-blue-700/50 rounded-full px-4 py-2 mb-4">
                    <i class="fas fa-mountain text-blue-400 mr-2"></i>
                    <span class="text-blue-300 text-sm font-medium">Growth & Learning</span>
                </div>
                <h2 class="text-4xl font-bold text-white mb-4">Challenges & Lessons</h2>
                <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                    Overcoming obstacles and growing as a developer
                </p>
            </div>

            <div class="bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-xl p-8 card-3d">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Challenges -->
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                            <i class="fas fa-exclamation-triangle text-yellow-500 mr-3"></i> Key Challenges
                        </h3>
                        <ul class="space-y-4">
                            <li class="bg-slate-900/70 p-4 rounded-lg">
                                <h4 class="text-lg font-semibold text-white mb-2">Performance Optimization</h4>
                                <p class="text-gray-300">
                                    Balancing rich features with fast loading times required significant optimization work and learning about browser rendering.
                                </p>
                            </li>
                            <li class="bg-slate-900/70 p-4 rounded-lg">
                                <h4 class="text-lg font-semibold text-white mb-2">Real-time Functionality</h4>
                                <p class="text-gray-300">
                                    Implementing real-time chat and notifications with PHP required creative solutions and integration with WebSocket services.
                                </p>
                            </li>
                            <li class="bg-slate-900/70 p-4 rounded-lg">
                                <h4 class="text-lg font-semibold text-white mb-2">Security Concerns</h4>
                                <p class="text-gray-300">
                                    Protecting user data and preventing common vulnerabilities was a constant challenge requiring continuous learning.
                                </p>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Lessons -->
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-4 flex items-center">
                            <i class="fas fa-lightbulb text-blue-400 mr-3"></i> Key Lessons
                        </h3>
                        <ul class="space-y-4">
                            <li class="bg-slate-900/70 p-4 rounded-lg">
                                <h4 class="text-lg font-semibold text-white mb-2">User-Centered Design</h4>
                                <p class="text-gray-300">
                                    The importance of focusing on user needs rather than just technical implementation. Features should solve real problems.
                                </p>
                            </li>
                            <li class="bg-slate-900/70 p-4 rounded-lg">
                                <h4 class="text-lg font-semibold text-white mb-2">Incremental Development</h4>
                                <p class="text-gray-300">
                                    Building step by step rather than trying to implement everything at once led to more stable and maintainable code.
                                </p>
                            </li>
                            <li class="bg-slate-900/70 p-4 rounded-lg">
                                <h4 class="text-lg font-semibold text-white mb-2">Continuous Learning</h4>
                                <p class="text-gray-300">
                                    The development landscape constantly evolves. Staying curious and open to new techniques is essential for growth.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Future Vision Section -->
        <section id="future" class="mb-20 scroll-reveal">
            <div class="text-center mb-12">
                <div class="inline-flex items-center bg-blue-900/30 border border-blue-700/50 rounded-full px-4 py-2 mb-4">
                    <i class="fas fa-rocket text-blue-400 mr-2"></i>
                    <span class="text-blue-300 text-sm font-medium">Looking Forward</span>
                </div>
                <h2 class="text-4xl font-bold text-white mb-4">Future Vision</h2>
                <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                    Where CodeNest is headed in the coming years
                </p>
            </div>

            <div class="bg-gradient-to-br from-blue-900/20 to-indigo-900/20 rounded-2xl p-8 border border-blue-800/20">
                <div class="grid md:grid-cols-3 gap-6">
                    <!-- Vision Card 1 -->
                    <div class="bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-xl p-6 hover:shadow-lg hover:shadow-blue-900/20 transition-all">
                        <div class="w-14 h-14 bg-blue-900/50 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-code-branch text-blue-400 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Modern Framework Integration</h3>
                        <p class="text-gray-300">
                            Plans to integrate React or Vue.js for more dynamic user interfaces while maintaining the core PHP backend for stability.
                        </p>
                    </div>
                    
                    <!-- Vision Card 2 -->
                    <div class="bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-xl p-6 hover:shadow-lg hover:shadow-blue-900/20 transition-all">
                        <div class="w-14 h-14 bg-blue-900/50 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-globe text-blue-400 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Global Developer Community</h3>
                        <p class="text-gray-300">
                            Expanding beyond a forum to become a comprehensive platform for developers to connect, learn, and collaborate on projects.
                        </p>
                    </div>
                    
                    <!-- Vision Card 3 -->
                    <div class="bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-xl p-6 hover:shadow-lg hover:shadow-blue-900/20 transition-all">
                        <div class="w-14 h-14 bg-blue-900/50 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-laptop-code text-blue-400 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Interactive Learning Platform</h3>
                        <p class="text-gray-300">
                            Adding interactive coding challenges, tutorials, and resources to help developers improve their skills within the platform.
                        </p>
                    </div>
                </div>
                
                <div class="mt-8 bg-slate-900/70 rounded-xl p-6">
                    <h3 class="text-2xl font-bold text-white mb-4">The 2025 Roadmap</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h4 class="font-semibold text-blue-400 mb-3">Q1 & Q2 2025</h4>
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-blue-500 mr-2 mt-1"></i>
                                    <span class="text-gray-300">Frontend framework integration</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-blue-500 mr-2 mt-1"></i>
                                    <span class="text-gray-300">Enhanced API development</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-blue-500 mr-2 mt-1"></i>
                                    <span class="text-gray-300">Mobile application development</span>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-blue-400 mb-3">Q3 & Q4 2025</h4>
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-blue-500 mr-2 mt-1"></i>
                                    <span class="text-gray-300">AI-powered code suggestions</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-blue-500 mr-2 mt-1"></i>
                                    <span class="text-gray-300">Developer marketplace launch</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-blue-500 mr-2 mt-1"></i>
                                    <span class="text-gray-300">Global developer hackathons</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="mb-20 scroll-reveal">
            <div class="bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl p-8 relative overflow-hidden">
                <div class="absolute inset-0 bg-grid opacity-20"></div>
                <div class="relative z-10 text-center">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Join the CodeNest Community</h2>
                    <p class="text-xl text-blue-100 mb-6 max-w-2xl mx-auto">
                        Be part of the journey and help shape the future of our developer platform
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#" class="px-6 py-3 bg-white text-blue-600 font-medium rounded-lg hover:bg-blue-50 transition-all flex items-center justify-center">
                            <i class="fas fa-user-plus mr-2"></i> Sign Up Now
                        </a>
                        <a href="#" class="px-6 py-3 bg-blue-700 text-white font-medium rounded-lg hover:bg-blue-800 transition-all flex items-center justify-center">
                            <i class="fab fa-github mr-2"></i> GitHub Repository
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 border-t border-slate-800 py-12">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center mb-6 md:mb-0">
                    <div class="w-10 h-10 rounded-lg bg-gradient-to-r from-blue-600 to-indigo-600 flex items-center justify-center mr-3">
                        <i class="fas fa-code text-white text-xl"></i>
                    </div>
                    <h2 class="text-xl font-bold text-white">CodeNest</h2>
                </div>
                <div>
                    <div class="flex space-x-4 mb-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 hover:bg-blue-600 transition-colors flex items-center justify-center text-gray-400 hover:text-white">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 hover:bg-blue-600 transition-colors flex items-center justify-center text-gray-400 hover:text-white">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 hover:bg-blue-600 transition-colors flex items-center justify-center text-gray-400 hover:text-white">
                            <i class="fab fa-discord"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 hover:bg-blue-600 transition-colors flex items-center justify-center text-gray-400 hover:text-white">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-slate-800 mt-8 pt-8 text-center">
                <p class="text-gray-400">© 2025 CodeNest. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript for scroll animations and carousel -->
    <script>
        // Carousel functionality
        document.addEventListener('DOMContentLoaded', function() {
            const carousels = document.querySelectorAll('.carousel');
            
            carousels.forEach(carousel => {
                const images = carousel.querySelectorAll('img');
                let currentIndex = 0;
                
                function rotateCarousel() {
                    images[currentIndex].classList.remove('active');
                    currentIndex = (currentIndex + 1) % images.length;
                    images[currentIndex].classList.add('active');
                }
                
                setInterval(rotateCarousel, 4000);
            });
            
            // Scroll animations
            const scrollRevealElements = document.querySelectorAll('.scroll-reveal');
            
            function revealOnScroll() {
                scrollRevealElements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                    
                    if (elementTop < windowHeight - 100) {
                        element.classList.add('visible');
                    }
                });
            }
            
            window.addEventListener('scroll', revealOnScroll);
            revealOnScroll(); // Call once on load
        });
    </script>
</body>
</html>