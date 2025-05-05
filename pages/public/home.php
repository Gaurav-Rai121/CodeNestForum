<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeNexus | Modern Coding Community</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./styles/home.style.css">
</head>

<body>

  <?php include('components/header.php') ?>
    <!-- Hero Section -->
    <section class="pt-40 pb-24 overflow-hidden relative gradient-bg">
        <!-- Background blur circles -->
        <div class="blur-circle w-96 h-96 bg-indigo-300 top-10 -left-20"></div>
        <div class="blur-circle w-96 h-96 bg-purple-300 bottom-10 right-10"></div>

        <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center relative z-10">
            <div class="lg:w-1/2 mb-16 lg:mb-0 text-center lg:text-left">
                <span
                    class="inline-block px-4 py-1 rounded-full bg-indigo-100 text-indigo-800 font-semibold text-sm mb-8">A
                    Better Way to Code</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-8 leading-tight">
                    Find <span class="relative">Solutions<svg class="absolute -bottom-3 left-0 w-full"
                            viewBox="0 0 200 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 4.5C46.5 -1.5 179 -1.5 199 8.5" stroke="white" stroke-width="8"
                                stroke-linecap="round" />
                        </svg></span>,
                    <br class="hidden md:block">Share Knowledge
                </h1>
                <p class="text-xl text-indigo-100 mb-10 max-w-xl mx-auto lg:mx-0">Join our community of developers to
                    learn, share, and build amazing things together.</p>

                <div class="flex flex-col sm:flex-row gap-5 justify-center lg:justify-start">
                    <a href="#" class="btn-primary px-8 py-4 rounded-xl text-center font-medium text-base">Join
                        Community</a>
                    <a href="#"
                        class="flex items-center justify-center gap-2 bg-white bg-opacity-10 backdrop-filter backdrop-blur-sm text-white px-8 py-4 rounded-xl font-medium hover:bg-opacity-20 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M12 21a9 9 0 1 1 0-18 9 9 0 0 1 0 18z" />
                        </svg>
                        <span>How It Works</span>
                    </a>
                </div>

                <div class="flex items-center mt-16 justify-center lg:justify-start">
                    <p class="text-indigo-100 mr-4 font-medium">Trusted by:</p>
                    <div class="flex space-x-8">
                        <img src="/api/placeholder/40/20" alt="Company 1"
                            class="h-8 opacity-70 hover:opacity-100 transition">
                        <img src="/api/placeholder/40/20" alt="Company 2"
                            class="h-8 opacity-70 hover:opacity-100 transition">
                        <img src="/api/placeholder/40/20" alt="Company 3"
                            class="h-8 opacity-70 hover:opacity-100 transition">
                    </div>
                </div>
            </div>

            <div class="lg:w-1/2 relative">
                <div class="animate-float relative z-10">
                    <img src="/api/placeholder/600/450" alt="Dashboard Preview"
                        class="rounded-3xl shadow-2xl max-w-full">

                    <!-- Floating elements -->
                    <div class="absolute -top-8 -left-8 glass-morphism p-4 rounded-2xl shadow-lg">
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-lg bg-green-100 flex items-center justify-center mr-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12L9 16L19 6" stroke="#10b981" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">Problem Solved!</p>
                                <p class="text-xs text-gray-500">2 mins ago</p>
                            </div>
                        </div>
                    </div>

                    <div class="absolute -bottom-6 -right-6 glass-morphism p-4 rounded-2xl shadow-lg">
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-lg bg-indigo-100 flex items-center justify-center mr-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21"
                                        stroke="#6366f1" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M9 11C11.2091 11 13 9.20914 13 7C13 4.79086 11.2091 3 9 3C6.79086 3 5 4.79086 5 7C5 9.20914 6.79086 11 9 11Z"
                                        stroke="#6366f1" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M23 21V19C22.9993 18.1137 22.7044 17.2528 22.1614 16.5523C21.6184 15.8519 20.8581 15.3516 20 15.13"
                                        stroke="#6366f1" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M16 3.13C16.8604 3.35031 17.623 3.85071 18.1676 4.55232C18.7122 5.25392 19.0078 6.11683 19.0078 7.005C19.0078 7.89318 18.7122 8.75608 18.1676 9.45769C17.623 10.1593 16.8604 10.6597 16 10.88"
                                        stroke="#6366f1" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">Active Community</p>
                                <p class="text-xs text-gray-500">5,000+ online</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="custom-shape-divider">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <!-- Search Section -->
    <section class="py-16 px-6">
        <div class="container mx-auto max-w-4xl relative z-10">
            <div class="glass-morphism rounded-3xl p-10 shadow-xl -mt-32">
                <h2 class="text-2xl font-bold text-center mb-8">Find the Perfect Code Solution</h2>
                <div class="relative search-bar">
                    <input type="text" placeholder="Search for questions, articles, or code snippets..."
                        class="w-full p-5 pl-14 pr-20 rounded-xl border-transparent focus:outline-none focus:ring-2 focus:ring-indigo-300 bg-transparent" />
                    <div class="absolute left-5 top-1/2 transform -translate-y-1/2 text-indigo-500">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.16667 15.8333C12.8486 15.8333 15.8333 12.8486 15.8333 9.16667C15.8333 5.48477 12.8486 2.5 9.16667 2.5C5.48477 2.5 2.5 5.48477 2.5 9.16667C2.5 12.8486 5.48477 15.8333 9.16667 15.8333Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.5 17.5L13.875 13.875" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="absolute right-3 top-1/2 transform -translate-y-1/2">
                        <button
                            class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2.5 rounded-lg shadow-md transition">
                            Search
                        </button>
                    </div>
                </div>

                <div class="mt-8 flex flex-wrap gap-3 justify-center">
                    <span
                        class="tag bg-gray-100 text-gray-700 hover:bg-indigo-100 hover:text-indigo-700 transition">#javascript</span>
                    <span
                        class="tag bg-gray-100 text-gray-700 hover:bg-indigo-100 hover:text-indigo-700 transition">#python</span>
                    <span
                        class="tag bg-gray-100 text-gray-700 hover:bg-indigo-100 hover:text-indigo-700 transition">#react</span>
                    <span
                        class="tag bg-gray-100 text-gray-700 hover:bg-indigo-100 hover:text-indigo-700 transition">#webdev</span>
                    <span
                        class="tag bg-gray-100 text-gray-700 hover:bg-indigo-100 hover:text-indigo-700 transition">#dataScience</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-16 bg-white hero-pattern">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center mb-10">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4 md:mb-0 relative">
                    <span class="relative z-10">Explore Categories</span>
                    <span class="absolute bottom-0 left-0 w-full h-3 bg-indigo-100 transform -rotate-1 z-0"></span>
                </h2>
                <a href="#" class="text-indigo-600 hover:text-indigo-800 font-medium flex items-center">
                    <span>View all categories</span>
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- JavaScript Category -->
                <div class="category-card bg-gradient-to-br from-yellow-500 to-yellow-700 p-1">
                    <div class="bg-white dark:bg-gray-900 p-6 h-full rounded-lg">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full bg-amber-100 flex items-center justify-center mr-4">
                                <i class="fab fa-js-square text-amber-500 text-2xl"></i>
                            </div>
                            <h3 class="font-bold text-xl text-gray-800 dark:text-white">JavaScript</h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">Explore modern JavaScript concepts, frameworks,
                            and best practices.</p>
                        <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm">
                            <span class="mr-4"><i class="far fa-file-code mr-1"></i> 2.4k topics</span>
                            <span><i class="far fa-user mr-1"></i> 18k members</span>
                        </div>
                    </div>
                </div>

                <!-- Python Category -->
                <div class="category-card bg-gradient-to-br from-blue-500 to-blue-700 p-1">
                    <div class="bg-white dark:bg-gray-900 p-6 h-full rounded-lg">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                                <i class="fab fa-python text-blue-500 text-2xl"></i>
                            </div>
                            <h3 class="font-bold text-xl text-gray-800 dark:text-white">Python</h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">Find Python coding help for data science, web
                            development, and automation.</p>
                        <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm">
                            <span class="mr-4"><i class="far fa-file-code mr-1"></i> 3.2k topics</span>
                            <span><i class="far fa-user mr-1"></i> 22k members</span>
                        </div>
                    </div>
                </div>

                <!-- HTML/CSS Category -->
                <div class="category-card bg-gradient-to-br from-green-500 to-green-700 p-1">
                    <div class="bg-white dark:bg-gray-900 p-6 h-full rounded-lg">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center mr-4">
                                <i class="fab fa-html5 text-green-500 text-2xl"></i>
                            </div>
                            <h3 class="font-bold text-xl text-gray-800 dark:text-white">HTML/CSS</h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">Master web design with modern HTML5, CSS3, and
                            responsive techniques.</p>
                        <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm">
                            <span class="mr-4"><i class="far fa-file-code mr-1"></i> 1.9k topics</span>
                            <span><i class="far fa-user mr-1"></i> 15k members</span>
                        </div>
                    </div>
                </div>

                <!-- Java Category -->
                <div class="category-card bg-gradient-to-br from-red-500 to-red-700 p-1">
                    <div class="bg-white dark:bg-gray-900 p-6 h-full rounded-lg">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full bg-red-100 flex items-center justify-center mr-4">
                                <i class="fab fa-java text-red-500 text-2xl"></i>
                            </div>
                            <h3 class="font-bold text-xl text-gray-800 dark:text-white">Java</h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">Get assistance with Java programming, Spring
                            Boot, and enterprise applications.</p>
                        <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm">
                            <span class="mr-4"><i class="far fa-file-code mr-1"></i> 1.7k topics</span>
                            <span><i class="far fa-user mr-1"></i> 14k members</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Section -->
    <section class="py-20 px-6 bg-gray-50">
        <div class="container mx-auto">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-sm font-semibold text-indigo-600 tracking-wide uppercase">Features</span>
                <h2 class="mt-2 text-3xl md:text-4xl font-bold text-gray-900">Everything you need to code better</h2>
                <p class="mt-4 text-xl text-gray-500">Our platform provides all the tools and resources you need to
                    become a better developer.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="feature-card bg-white p-8 rounded-2xl shadow-sm transition hover:shadow-md">
                    <div class="feature-icon">
                        <i class="fas fa-question"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Ask Questions</h3>
                    <p class="text-gray-600">Get help from our community of expert developers and solve your coding
                        problems.</p>
                </div>

                <!-- Feature 2 -->
                <div class="feature-card bg-white p-8 rounded-2xl shadow-sm transition hover:shadow-md">
                    <div class="feature-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Share Code</h3>
                    <p class="text-gray-600">Share your code snippets, get feedback, and collaborate with others.</p>
                </div>

                <!-- Feature 3 -->
                <div class="feature-card bg-white p-8 rounded-2xl shadow-sm transition hover:shadow-md">
                    <div class="feature-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Learn Resources</h3>
                    <p class="text-gray-600">Access tutorials, guides, and documentation to improve your skills.</p>
                </div>

                <!-- Feature 4 -->
                <div class="feature-card bg-white p-8 rounded-2xl shadow-sm transition hover:shadow-md">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Community</h3>
                    <p class="text-gray-600">Connect with like-minded developers, mentors, and potential collaborators.
                    </p>
                </div>

                <!-- Feature 5 -->
                <div class="feature-card bg-white p-8 rounded-2xl shadow-sm transition hover:shadow-md">
                    <div class="feature-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Achievements</h3>
                    <p class="text-gray-600">Earn badges and reputation by helping others and contributing to projects.
                    </p>
                </div>

                <!-- Feature 6 -->
                <div class="feature-card bg-white p-8 rounded-2xl shadow-sm transition hover:shadow-md">
                    <div class="feature-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Code Reviews</h3>
                    <p class="text-gray-600">Get professional feedback on your code and learn best practices.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Questions Section -->
    <section class="py-20 px-6">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 md:mb-0">
                    Popular <span class="gradient-text">Questions</span>
                </h2>
                <a href="#"
                    class="group flex items-center text-indigo-600 font-semibold hover:text-indigo-800 transition">
                    Browse all questions
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Question 1 -->
                <div class="card bg-white shadow-sm p-8">
                    <div class="flex items-start mb-4">
                        <div class="language-icon bg-yellow-100 text-yellow-600">
                            <i class="fab fa-js text-sm"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">How to handle asynchronous operations in
                            JavaScript?</h3>
                    </div>
                    <p class="text-gray-600 mb-6 text-sm">I'm struggling with Promises and async/await. Can someone
                        explain the best practices for handling multiple API calls?</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img src="/api/placeholder/32/32" alt="User Avatar" class="w-8 h-8 rounded-full mr-2">
                            <span class="text-sm text-gray-700 font-medium">Alex Johnson</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-500">
                            <span class="flex items-center mr-4"><i class="far fa-comment mr-1"></i> 24</span>
                            <span class="flex items-center"><i class="far fa-eye mr-1"></i> 1.2k</span>
                        </div>
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="card bg-white shadow-sm p-8">
                    <div class="flex items-start mb-4">
                        <div class="language-icon bg-blue-100 text-blue-600">
                            <i class="fab fa-python text-sm"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">What's the most efficient way to process large
                            datasets in Python?</h3>
                    </div>
                    <p class="text-gray-600 mb-6 text-sm">I need to process a CSV file with millions of rows. What
                        libraries or techniques would you recommend for optimal performance?</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img src="/api/placeholder/32/32" alt="User Avatar" class="w-8 h-8 rounded-full mr-2">
                            <span class="text-sm text-gray-700 font-medium">Sarah Chen</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-500">
                            <span class="flex items-center mr-4"><i class="far fa-comment mr-1"></i> 36</span>
                            <span class="flex items-center"><i class="far fa-eye mr-1"></i> 2.4k</span>
                        </div>
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="card bg-white shadow-sm p-8">
                    <div class="flex items-start mb-4">
                        <div class="language-icon bg-pink-100 text-pink-600">
                            <i class="fab fa-react text-sm"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">Best state management approach for complex React
                            applications?</h3>
                    </div>
                    <p class="text-gray-600 mb-6 text-sm">I'm building a complex React app and wondering if I should use
                        Redux, Context API, or newer solutions like Recoil or Zustand.</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img src="/api/placeholder/32/32" alt="User Avatar" class="w-8 h-8 rounded-full mr-2">
                            <span class="text-sm text-gray-700 font-medium">Mike Rivera</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-500">
                            <span class="flex items-center mr-4"><i class="far fa-comment mr-1"></i> 42</span>
                            <span class="flex items-center"><i class="far fa-eye mr-1"></i> 3.5k</span>
                        </div>
                    </div>
                </div>

                <!-- Question 4 -->
                <div class="card bg-white shadow-sm p-8">
                    <div class="flex items-start mb-4">
                        <div class="language-icon bg-green-100 text-green-600">
                            <i class="fas fa-database text-sm"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">What database is best for a real-time
                            collaborative app?</h3>
                    </div>
                    <p class="text-gray-600 mb-6 text-sm">I'm building an app where multiple users need to see updates
                        in real-time. Should I use Firebase, MongoDB, or something else?</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img src="/api/placeholder/32/32" alt="User Avatar" class="w-8 h-8 rounded-full mr-2">
                            <span class="text-sm text-gray-700 font-medium">Jessica Wright</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-500">
                            <span class="flex items-center mr-4"><i class="far fa-comment mr-1"></i> 18</span>
                            <span class="flex items-center"><i class="far fa-eye mr-1"></i> 1.9k</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 px-6 bg-indigo-50 relative overflow-hidden">
        <div class="blur-circle w-96 h-96 bg-indigo-200 top-10 -left-20 opacity-60"></div>
        <div class="blur-circle w-96 h-96 bg-purple-200 bottom-10 right-10 opacity-60"></div>

        <div class="container mx-auto relative z-10">
            <div class="cta-card max-w-5xl mx-auto p-12 md:p-16">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-2/3 mb-10 md:mb-0">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Ready to join our coding
                            community?</h2>
                        <p class="text-lg text-gray-600 mb-8">Connect with developers, solve problems, and build amazing
                            projects together.</p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="#" class="btn-primary px-8 py-4 rounded-xl text-center font-medium text-base">Join
                                For Free</a>
                            <a href="#"
                                class="flex items-center justify-center gap-2 bg-white px-8 py-4 rounded-xl font-medium text-indigo-600 hover:bg-gray-50 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Watch Demo</span>
                            </a>
                        </div>
                    </div>
                    <div class="md:w-1/3 flex justify-center">
                        <img src="/api/placeholder/250/250" alt="Community illustration" class="max-w-full h-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php include('./components/footer.php') ?>

    

</body>

</html>