<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tutorials - CodeNest Forum">
    <title>Tutorials - CodeNest Forum</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
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
                    animation: {
                        'float': 'float 3s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link rel="stylesheet" href="./styles/tutorials.style.css">
</head>
<body class="bg-gray-50 text-gray-900">
<?php include('./components/header.php') ?>

<!-- Main Content -->
<main>
    <!-- Hero Section -->
    <section class="relative hero-pattern bg-gradient-to-r from-blue-50 to-indigo-50 py-16 px-6 overflow-hidden">
        <div class="container mx-auto max-w-6xl relative z-10">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <div class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold mb-4">
                        <i class="fas fa-graduation-cap mr-2"></i>Learn & Grow
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-6 text-gray-800 leading-tight">
                        Level Up Your <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">Coding Skills</span>
                    </h1>
                    <p class="text-lg text-gray-600 mb-8 max-w-lg">
                        Explore our comprehensive collection of tutorials designed to help you master everything from web development to advanced programming concepts.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#categories" class="px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-medium rounded-lg shadow-md hover:shadow-lg transition-all flex items-center">
                            <i class="fas fa-book-open mr-2"></i> Browse Tutorials
                        </a>
                        <a href="#" class="px-6 py-3 bg-white text-gray-700 border border-gray-200 font-medium rounded-lg shadow-sm hover:shadow-md transition-all flex items-center">
                            <i class="fas fa-star mr-2"></i> Popular Topics
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2 relative">
                    <div class="relative">
                        <div class="absolute -top-8 -left-8 w-24 h-24 bg-yellow-400 rounded-full opacity-20 animate-float"></div>
                        <div class="absolute -bottom-12 -right-8 w-32 h-32 bg-purple-400 rounded-full opacity-20 animate-float" style="animation-delay: 1s"></div>
                        <img src="/api/placeholder/600/400" alt="Coding illustration" class="rounded-xl shadow-2xl w-full max-w-md mx-auto relative z-10">
                        <div class="absolute -z-10 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-blue-400 rounded-full opacity-20 filter blur-3xl"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Search and Filter Bar -->
    <section class="py-8 bg-white border-b border-gray-100 sticky top-0 z-20 shadow-sm">
        <div class="container mx-auto max-w-6xl px-6">
            <div class="flex flex-col md:flex-row gap-4 items-center justify-between">
                <div class="relative w-full md:w-1/3">
                    <input type="text" placeholder="Search tutorials..." class="w-full pl-10 pr-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>
                <div class="flex overflow-x-auto gap-2 pb-2 w-full md:w-auto" id="categories">
                    <button class="category-pill active whitespace-nowrap px-4 py-2 rounded-full bg-gray-100 text-gray-700 font-medium">All</button>
                    <button class="category-pill whitespace-nowrap px-4 py-2 rounded-full bg-gray-100 text-gray-700 font-medium">Web Development</button>
                    <button class="category-pill whitespace-nowrap px-4 py-2 rounded-full bg-gray-100 text-gray-700 font-medium">Programming</button>
                    <button class="category-pill whitespace-nowrap px-4 py-2 rounded-full bg-gray-100 text-gray-700 font-medium">Tools & Frameworks</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Tutorials -->
    <section class="py-16 px-6 bg-gradient-to-b from-white to-gray-50">
        <div class="container mx-auto max-w-6xl">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-2xl font-bold text-gray-800 flex items-center">
                    <i class="fas fa-fire text-orange-500 mr-3"></i>
                    Featured Tutorials
                </h2>
                <a href="#" class="text-blue-600 hover:text-blue-800 flex items-center text-sm font-medium">
                    View all <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Featured Tutorial Card -->
                <div class="tutorial-card rounded-xl overflow-hidden bg-white shadow-lg border border-gray-100">
                    <div class="relative">
                        <img src="/api/placeholder/400/200" alt="JavaScript" class="w-full h-48 object-cover">
                        <div class="absolute top-4 right-4 bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full">Popular</div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-yellow-100 text-yellow-800 text-xs px-3 py-1 rounded-full">JavaScript</span>
                            <span class="ml-2 text-gray-500 text-sm">5 hours</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">JavaScript Essentials for Modern Web Development</h3>
                        <p class="text-gray-600 mb-4">Master fundamental JavaScript concepts and build interactive websites with modern ES6+ features.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white">
                                    <i class="fas fa-user"></i>
                                </div>
                                <span class="ml-2 text-sm text-gray-600">By John Doe</span>
                            </div>
                            <a href="./ReadMorePages/jsEssentials.php" class="text-blue-600 hover:text-blue-800 font-medium text-sm flex items-center">
                                Get Started <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Featured Tutorial Card -->
                <div class="tutorial-card rounded-xl overflow-hidden bg-white shadow-lg border border-gray-100">
                    <div class="relative">
                        <img src="/api/placeholder/400/200" alt="HTML CSS" class="w-full h-48 object-cover">
                        <div class="absolute top-4 right-4 bg-green-600 text-white text-xs font-bold px-3 py-1 rounded-full">Beginner</div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">HTML & CSS</span>
                            <span class="ml-2 text-gray-500 text-sm">4 hours</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">HTML & CSS Fundamentals: Building Your First Website</h3>
                        <p class="text-gray-600 mb-4">Learn the foundations of web development by building responsive websites from scratch.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-purple-500 flex items-center justify-center text-white">
                                    <i class="fas fa-user"></i>
                                </div>
                                <span class="ml-2 text-sm text-gray-600">By Jane Smith</span>
                            </div>
                            <a href="./ReadMorePages/HTML&CSS.php" class="text-blue-600 hover:text-blue-800 font-medium text-sm flex items-center">
                                Get Started <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Featured Tutorial Card -->
                <div class="tutorial-card rounded-xl overflow-hidden bg-white shadow-lg border border-gray-100">
                    <div class="relative">
                        <img src="/api/placeholder/400/200" alt="Responsive Design" class="w-full h-48 object-cover">
                        <div class="absolute top-4 right-4 bg-purple-600 text-white text-xs font-bold px-3 py-1 rounded-full">Advanced</div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-purple-100 text-purple-800 text-xs px-3 py-1 rounded-full">Responsive Design</span>
                            <span class="ml-2 text-gray-500 text-sm">6 hours</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Mastering Responsive Web Design Techniques</h3>
                        <p class="text-gray-600 mb-4">Learn advanced techniques to create websites that look perfect on any device or screen size.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-green-500 flex items-center justify-center text-white">
                                    <i class="fas fa-user"></i>
                                </div>
                                <span class="ml-2 text-sm text-gray-600">By Alex Johnson</span>
                            </div>
                            <a href="./ReadMorePages/ResponsiveDesign.php" class="text-blue-600 hover:text-blue-800 font-medium text-sm flex items-center">
                                Get Started <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Web Development Category -->
    <section class="py-16 px-6">
        <div class="container mx-auto max-w-6xl">
            <div class="flex items-center mb-8">
                <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center text-blue-600 mr-3">
                    <i class="fas fa-code"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800">Web Development</h2>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Tutorial Card -->
                <div class="tutorial-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl border border-gray-100">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 rounded-lg bg-orange-100 flex items-center justify-center text-orange-500">
                                <i class="fas fa-code"></i>
                            </div>
                            <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">Beginner</span>
                        </div>
                        <h4 class="text-xl font-bold text-gray-800 mb-2">HTML & CSS Basics</h4>
                        <p class="text-gray-600 mb-4">
                            Learn the foundations of building websites with HTML and CSS. Perfect for beginners.
                        </p>
                        <div class="flex items-center text-gray-500 text-sm mb-5">
                            <i class="fas fa-clock mr-2"></i> 3 hours
                            <i class="fas fa-layer-group ml-4 mr-2"></i> 8 lessons
                        </div>
                        <a href="./ReadMorePages/HTML&CSS.php" class="inline-block w-full text-center py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-lg font-medium hover:from-blue-700 hover:to-blue-800 transition-all">
                            Start Learning
                        </a>
                    </div>
                </div>
                
                <!-- Tutorial Card -->
                <div class="tutorial-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl border border-gray-100">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 rounded-lg bg-yellow-100 flex items-center justify-center text-yellow-500">
                                <i class="fab fa-js"></i>
                            </div>
                            <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">Intermediate</span>
                        </div>
                        <h4 class="text-xl font-bold text-gray-800 mb-2">JavaScript Essentials</h4>
                        <p class="text-gray-600 mb-4">
                            Master the fundamentals of JavaScript and start adding interactivity to your websites.
                        </p>
                        <div class="flex items-center text-gray-500 text-sm mb-5">
                            <i class="fas fa-clock mr-2"></i> 5 hours
                            <i class="fas fa-layer-group ml-4 mr-2"></i> 12 lessons
                        </div>
                        <a href="./ReadMorePages/jsEssentials.php" class="inline-block w-full text-center py-3 bg-gradient-to-r from-yellow-500 to-yellow-600 text-white rounded-lg font-medium hover:from-yellow-600 hover:to-yellow-700 transition-all">
                            Start Learning
                        </a>
                    </div>
                </div>
                
                <!-- Tutorial Card -->
                <div class="tutorial-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl border border-gray-100">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 rounded-lg bg-purple-100 flex items-center justify-center text-purple-500">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">Intermediate</span>
                        </div>
                        <h4 class="text-xl font-bold text-gray-800 mb-2">Responsive Design</h4>
                        <p class="text-gray-600 mb-4">
                            Learn how to make websites that look great on any device using modern CSS techniques.
                        </p>
                        <div class="flex items-center text-gray-500 text-sm mb-5">
                            <i class="fas fa-clock mr-2"></i> 4 hours
                            <i class="fas fa-layer-group ml-4 mr-2"></i> 10 lessons
                        </div>
                        <a href="./ReadMorePages/ResponsiveDesign.php" class="inline-block w-full text-center py-3 bg-gradient-to-r from-purple-600 to-purple-700 text-white rounded-lg font-medium hover:from-purple-700 hover:to-purple-800 transition-all">
                            Start Learning
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programming Languages -->
    <section class="py-16 px-6 bg-gray-50">
        <div class="container mx-auto max-w-6xl">
            <div class="flex items-center mb-8">
                <div class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center text-green-600 mr-3">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800">Programming Languages</h2>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Tutorial Card -->
                <div class="tutorial-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl border border-gray-100">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 rounded-lg bg-blue-100 flex items-center justify-center text-blue-500">
                                <i class="fab fa-python"></i>
                            </div>
                            <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">Beginner</span>
                        </div>
                        <h4 class="text-xl font-bold text-gray-800 mb-2">Python for Beginners</h4>
                        <p class="text-gray-600 mb-4">
                            Start your programming journey with Python. A comprehensive guide for new coders.
                        </p>
                        <div class="flex items-center text-gray-500 text-sm mb-5">
                            <i class="fas fa-clock mr-2"></i> 6 hours
                            <i class="fas fa-layer-group ml-4 mr-2"></i> 15 lessons
                        </div>
                        <a href="#" class="inline-block w-full text-center py-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-lg font-medium hover:from-blue-600 hover:to-blue-700 transition-all">
                            Coming Soon
                        </a>
                    </div>
                </div>
                
                <!-- Tutorial Card -->
                <div class="tutorial-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl border border-gray-100">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 rounded-lg bg-red-100 flex items-center justify-center text-red-500">
                                <i class="fab fa-java"></i>
                            </div>
                            <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">Intermediate</span>
                        </div>
                        <h4 class="text-xl font-bold text-gray-800 mb-2">Java Fundamentals</h4>
                        <p class="text-gray-600 mb-4">
                            Dive into object-oriented programming with this beginner-friendly Java tutorial.
                        </p>
                        <div class="flex items-center text-gray-500 text-sm mb-5">
                            <i class="fas fa-clock mr-2"></i> 8 hours
                            <i class="fas fa-layer-group ml-4 mr-2"></i> 18 lessons
                        </div>
                        <a href="#" class="inline-block w-full text-center py-3 bg-gradient-to-r from-red-500 to-red-600 text-white rounded-lg font-medium hover:from-red-600 hover:to-red-700 transition-all">
                            Coming Soon
                        </a>
                    </div>
                </div>
                
                <!-- Tutorial Card -->
                <div class="tutorial-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl border border-gray-100">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 rounded-lg bg-indigo-100 flex items-center justify-center text-indigo-500">
                                <i class="fas fa-terminal"></i>
                            </div>
                            <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">Advanced</span>
                        </div>
                        <h4 class="text-xl font-bold text-gray-800 mb-2">C++ Basics</h4>
                        <p class="text-gray-600 mb-4">
                            Learn the basics of C++ programming, one of the most popular and versatile languages.
                        </p>
                        <div class="flex items-center text-gray-500 text-sm mb-5">
                            <i class="fas fa-clock mr-2"></i> 10 hours
                            <i class="fas fa-layer-group ml-4 mr-2"></i> 20 lessons
                        </div>
                        <a href="#" class="inline-block w-full text-center py-3 bg-gradient-to-r from-indigo-500 to-indigo-600 text-white rounded-lg font-medium hover:from-indigo-600 hover:to-indigo-700 transition-all">
                            Coming Soon
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tools & Frameworks -->
    <section class="py-16 px-6">
        <div class="container mx-auto max-w-6xl">
            <div class="flex items-center mb-8">
                <div class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center text-red-600 mr-3">
                    <i class="fas fa-toolbox"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800">Tools & Frameworks</h2>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Tutorial Card -->
                <div class="tutorial-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl border border-gray-100">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 rounded-lg bg-gray-100 flex items-center justify-center text-gray-700">
                                <i class="fab fa-git-alt"></i>
                            </div>
                            <span class="bg-red-100 text-red-800 text-xs px-3 py-1 rounded-full">Essential</span>
                        </div>
                        <h4 class="text-xl font-bold text-gray-800 mb-2">Git & GitHub Basics</h4>
                        <p class="text-gray-600 mb-4">
                            Understand version control and collaborate with other developers using Git and GitHub.
                        </p>
                        <div class="flex items-center text-gray-500 text-sm mb-5">
                            <i class="fas fa-clock mr-2"></i> 4 hours
                            <i class="fas fa-layer-group ml-4 mr-2"></i> 10 lessons
                        </div>
                        <a href="#" class="inline-block w-full text-center py-3 bg-gradient-to-r from-gray-700 to-gray-800 text-white rounded-lg font-medium hover:from-gray-800 hover:to-gray-900 transition-all">
                            Coming Soon
                        </a>
                    </div>
                </div>
                
                <!-- Tutorial Card -->
                <div class="tutorial-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl border border-gray-100">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 rounded-lg bg-blue-100 flex items-center justify-center text-blue-500">
                                <i class="fab fa-react"></i>
                            </div>
                            <span class="bg-red-100 text-red-800 text-xs px-3 py-1 rounded-full">Advanced</span>
                        </div>
                        <h4 class="text-xl font-bold text-gray-800 mb-2">React.js Essentials</h4>
                        <p class="text-gray-600 mb-4">
                            Get started with React.js and build modern, interactive web applications.
                        </p>
                        <div class="flex items-center text-gray-500 text-sm mb-5">
                            <i class="fas fa-clock mr-2"></i> 8 hours
                            <i class="fas fa-layer-group ml-4 mr-2"></i> 16 lessons
                        </div>
                        <a href="#" class="inline-block w-full text-center py-3 bg-gradient-to-r from-blue-400 to-blue-500 text-white rounded-lg font-medium hover:from-blue-500 hover:to-blue-600 transition-all">
                            Coming Soon
                        </a>
                    </div>
                </div>
                
                <!-- Tutorial Card -->
                <div class="tutorial-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl border border-gray-100">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 rounded-lg bg-blue-100 flex items-center justify-center text-blue-500">
                                <i class="fab fa-docker"></i>
                            </div>
                            <span class="bg-red-100 text-red-800 text-xs text-red-800 text-xs px-3 py-1 rounded-full">Advanced</span>
                        </div>
                        <h4 class="text-xl font-bold text-gray-800 mb-2">Docker Fundamentals</h4>
                        <p class="text-gray-600 mb-4">
                            Learn containerization with Docker and streamline your development workflows.
                        </p>
                        <div class="flex items-center text-gray-500 text-sm mb-5">
                            <i class="fas fa-clock mr-2"></i> 6 hours
                            <i class="fas fa-layer-group ml-4 mr-2"></i> 14 lessons
                        </div>
                        <a href="#" class="inline-block w-full text-center py-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-lg font-medium hover:from-blue-600 hover:to-blue-700 transition-all">
                            Coming Soon
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 px-6 bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
        <div class="container mx-auto max-w-6xl text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to start learning?</h2>
            <p class="text-xl opacity-90 mb-8 max-w-2xl mx-auto">Join thousands of developers who are mastering coding skills with our comprehensive tutorials.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#" class="px-8 py-3 bg-white text-blue-600 font-semibold rounded-lg shadow-lg hover:bg-blue-50 transition-all">
                    Get Started for Free
                </a>
                <a href="#" class="px-8 py-3 bg-transparent border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:bg-opacity-10 transition-all">
                    Browse All Tutorials
                </a>
            </div>
        </div>
    </section>
</main>

<!-- Footer would be included here -->
<?php include('./components/footer.php') ?>

<script src="./script/tutorials.script.js">

</script>
</body>
</html>