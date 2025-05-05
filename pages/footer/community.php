<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Community - CodeNest Forum">
    <title>Community - CodeNest Forum</title>
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
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
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
    <link rel="stylesheet" href="./styles/community.style.css">
</head>
<body class="bg-gray-50 text-gray-900">
<?php include('./components/header.php') ?>

<!-- Main Content -->
<main>
    <!-- Hero Section -->
    <section class="relative mesh-gradient py-20 px-6 overflow-hidden">
        <div class="absolute inset-0 dot-pattern opacity-20"></div>
        <div class="container mx-auto max-w-6xl relative z-10">
            <div class="flex flex-col items-center text-center">
                <div class="inline-block px-4 py-2 bg-white bg-opacity-20 backdrop-blur-sm text-white rounded-full text-sm font-semibold mb-4">
                    <i class="fas fa-users mr-2"></i>Join Our Community
                </div>
                <h1 class="text-4xl md:text-5xl font-bold mb-6 text-white leading-tight">
                    Connect with <span class="relative">
                        Developers
                        <svg class="absolute -bottom-2 w-full" viewBox="0 0 200 15" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 12.5C18.5 6.5 43.5 1.5 55 3.5C70.5 6.5 80.5 13.5 97.5 13.5C114.5 13.5 126 6 138.5 6C151 6 171.5 10.5 199 3.5" stroke="white" stroke-width="3" stroke-linecap="round" fill="none"/>
                        </svg>
                    </span> Around the World
                </h1>
                <p class="text-lg text-white text-opacity-90 mb-8 max-w-2xl">
                    Join thousands of developers sharing knowledge, collaborating on projects, and building their coding careers together.
                </p>
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="#discussions" class="px-6 py-3 bg-white text-blue-600 font-medium rounded-lg shadow-md hover:shadow-lg transition-all flex items-center">
                        <i class="fas fa-comments mr-2"></i> Join Discussions
                    </a>
                    <a href="#members" class="px-6 py-3 bg-transparent border-2 border-white text-white font-medium rounded-lg hover:bg-white hover:bg-opacity-10 transition-all flex items-center">
                        <i class="fas fa-user-group mr-2"></i> Meet Members
                    </a>
                </div>
            </div>
        </div>
        <!-- Decorative Elements -->
        <div class="absolute -bottom-6 left-0 right-0 h-12 bg-gray-50 rounded-t-[50%]"></div>
        <div class="absolute top-10 left-10 w-20 h-20 bg-blue-400 rounded-full opacity-20 animate-float"></div>
        <div class="absolute bottom-20 right-10 w-32 h-32 bg-purple-400 rounded-full opacity-20 animate-float" style="animation-delay: 1s"></div>
    </section>

    <!-- Community Stats -->
    <section class="py-16 px-6 bg-white">
        <div class="container mx-auto max-w-6xl">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl font-bold text-blue-600 mb-2">15K+</div>
                    <div class="text-gray-600">Active Members</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-blue-600 mb-2">5.2K+</div>
                    <div class="text-gray-600">Daily Posts</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-blue-600 mb-2">87%</div>
                    <div class="text-gray-600">Questions Answered</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-blue-600 mb-2">120+</div>
                    <div class="text-gray-600">Countries</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Communities -->
    <section id="discussions" class="py-16 px-6 bg-gray-50">
        <div class="container mx-auto max-w-6xl">
            <div class="flex items-center justify-between mb-10">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">Popular Communities</h2>
                    <p class="text-gray-600">Join discussions on topics you're passionate about</p>
                </div>
                <a href="#" class="text-blue-600 hover:text-blue-800 flex items-center text-sm font-medium">
                    View all communities <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Community Card -->
                <div class="community-card bg-white rounded-xl shadow-md overflow-hidden border border-gray-100">
                    <div class="h-24 bg-gradient-to-r from-blue-500 to-blue-600 flex items-center justify-center">
                        <i class="fab fa-js text-5xl text-white opacity-80"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-gray-800">JavaScript</h3>
                            <div class="flex items-center">
                                <span class="text-gray-500 text-sm mr-1">4.9</span>
                                <div class="flex text-yellow-400">
                                    <i class="fas fa-star text-xs"></i>
                                    <i class="fas fa-star text-xs"></i>
                                    <i class="fas fa-star text-xs"></i>
                                    <i class="fas fa-star text-xs"></i>
                                    <i class="fas fa-star-half-alt text-xs"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">Discuss JavaScript frameworks, libraries, and coding techniques with fellow enthusiasts.</p>
                        <div class="flex items-center text-gray-500 text-sm mb-5">
                            <div class="flex items-center mr-4">
                                <i class="fas fa-users mr-1"></i> 8.4k members
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-comment-alt mr-1"></i> 120+ daily
                            </div>
                        </div>
                        <a href="#" class="block w-full text-center py-2.5 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-lg font-medium hover:from-blue-600 hover:to-blue-700 transition-all">
                            Join Community
                        </a>
                    </div>
                </div>
                
                <!-- Community Card -->
                <div class="community-card bg-white rounded-xl shadow-md overflow-hidden border border-gray-100">
                    <div class="h-24 bg-gradient-to-r from-purple-500 to-purple-600 flex items-center justify-center">
                        <i class="fas fa-code text-5xl text-white opacity-80"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-gray-800">Web Development</h3>
                            <div class="flex items-center">
                                <span class="text-gray-500 text-sm mr-1">4.8</span>
                                <div class="flex text-yellow-400">
                                    <i class="fas fa-star text-xs"></i>
                                    <i class="fas fa-star text-xs"></i>
                                    <i class="fas fa-star text-xs"></i>
                                    <i class="fas fa-star text-xs"></i>
                                    <i class="fas fa-star-half-alt text-xs"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">Everything about web development, from frontend design to backend architecture.</p>
                        <div class="flex items-center text-gray-500 text-sm mb-5">
                            <div class="flex items-center mr-4">
                                <i class="fas fa-users mr-1"></i> 12.7k members
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-comment-alt mr-1"></i> 185+ daily
                            </div>
                        </div>
                        <a href="#" class="block w-full text-center py-2.5 bg-gradient-to-r from-purple-500 to-purple-600 text-white rounded-lg font-medium hover:from-purple-600 hover:to-purple-700 transition-all">
                            Join Community
                        </a>
                    </div>
                </div>
                
                <!-- Community Card -->
                <div class="community-card bg-white rounded-xl shadow-md overflow-hidden border border-gray-100">
                    <div class="h-24 bg-gradient-to-r from-green-500 to-green-600 flex items-center justify-center">
                        <i class="fab fa-python text-5xl text-white opacity-80"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-gray-800">Python</h3>
                            <div class="flex items-center">
                                <span class="text-gray-500 text-sm mr-1">4.7</span>
                                <div class="flex text-yellow-400">
                                    <i class="fas fa-star text-xs"></i>
                                    <i class="fas fa-star text-xs"></i>
                                    <i class="fas fa-star text-xs"></i>
                                    <i class="fas fa-star text-xs"></i>
                                    <i class="fas fa-star-half-alt text-xs"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">Explore Python programming, data science, machine learning, and automation.</p>
                        <div class="flex items-center text-gray-500 text-sm mb-5">
                            <div class="flex items-center mr-4">
                                <i class="fas fa-users mr-1"></i> 9.3k members
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-comment-alt mr-1"></i> 143+ daily
                            </div>
                        </div>
                        <a href="#" class="block w-full text-center py-2.5 bg-gradient-to-r from-green-500 to-green-600 text-white rounded-lg font-medium hover:from-green-600 hover:to-green-700 transition-all">
                            Join Community
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hot Discussions -->
    <section class="py-16 px-6 bg-white">
        <div class="container mx-auto max-w-6xl">
            <div class="flex items-center justify-between mb-10">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">Hot Discussions</h2>
                    <p class="text-gray-600">Join the conversations trending right now</p>
                </div>
                <a href="#" class="text-blue-600 hover:text-blue-800 flex items-center text-sm font-medium">
                    View all discussions <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            
            <div class="space-y-6">
                <!-- Discussion Card -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100 hover:shadow-md transition-all p-6">
                    <div class="flex items-start">
                        <div class="mr-4">
                            <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center mb-2">
                                <h3 class="font-semibold text-gray-800">Sarah Johnson</h3>
                                <span class="mx-2 text-gray-400">•</span>
                                <span class="text-gray-500 text-sm">3 hours ago</span>
                                <span class="ml-2 px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded-full">JavaScript</span>
                            </div>
                            <h4 class="text-lg font-bold text-gray-800 mb-2">What's your preferred state management solution in React?</h4>
                            <p class="text-gray-600 mb-4">I've been using Redux for a while but I'm curious about other options like Zustand, Recoil, or even just the Context API. What are you all using these days and why?</p>
                            <div class="flex items-center justify-between">
                                <div class="flex space-x-4">
                                    <button class="flex items-center text-gray-500 hover:text-blue-600">
                                        <i class="far fa-thumbs-up mr-1"></i> 42
                                    </button>
                                    <button class="flex items-center text-gray-500 hover:text-blue-600">
                                        <i class="far fa-comment mr-1"></i> 28
                                    </button>
                                    <button class="flex items-center text-gray-500 hover:text-blue-600">
                                        <i class="far fa-bookmark mr-1"></i> Save
                                    </button>
                                </div>
                                <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                    Join Discussion
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Discussion Card -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100 hover:shadow-md transition-all p-6">
                    <div class="flex items-start">
                        <div class="mr-4">
                            <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-600">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center mb-2">
                                <h3 class="font-semibold text-gray-800">Alex Chen</h3>
                                <span class="mx-2 text-gray-400">•</span>
                                <span class="text-gray-500 text-sm">8 hours ago</span>
                                <span class="ml-2 px-2 py-1 bg-green-100 text-green-700 text-xs rounded-full">Python</span>
                            </div>
                            <h4 class="text-lg font-bold text-gray-800 mb-2">Best practices for structuring large Django projects</h4>
                            <p class="text-gray-600 mb-4">I'm working on a large-scale Django project and wondering how others structure their applications. Do you prefer many small apps or fewer larger ones? How do you handle shared utilities?</p>
                            <div class="flex items-center justify-between">
                                <div class="flex space-x-4">
                                    <button class="flex items-center text-gray-500 hover:text-blue-600">
                                        <i class="far fa-thumbs-up mr-1"></i> 36
                                    </button>
                                    <button class="flex items-center text-gray-500 hover:text-blue-600">
                                        <i class="far fa-comment mr-1"></i> 19
                                    </button>
                                    <button class="flex items-center text-gray-500 hover:text-blue-600">
                                        <i class="far fa-bookmark mr-1"></i> Save
                                    </button>
                                </div>
                                <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                    Join Discussion
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Discussion Card -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100 hover:shadow-md transition-all p-6">
                    <div class="flex items-start">
                        <div class="mr-4">
                            <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center text-purple-600">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center mb-2">
                                <h3 class="font-semibold text-gray-800">Michael Taylor</h3>
                                <span class="mx-2 text-gray-400">•</span>
                                <span class="text-gray-500 text-sm">Yesterday</span>
                                <span class="ml-2 px-2 py-1 bg-purple-100 text-purple-700 text-xs rounded-full">Career</span>
                            </div>
                            <h4 class="text-lg font-bold text-gray-800 mb-2">Transitioning from backend to fullstack development</h4>
                            <p class="text-gray-600 mb-4">I've been a backend developer for 5 years and want to move into fullstack. What frontend technologies should I focus on first? Any learning paths or resources you'd recommend?</p>
                            <div class="flex items-center justify-between">
                                <div class="flex space-x-4">
                                    <button class="flex items-center text-gray-500 hover:text-blue-600">
                                        <i class="far fa-thumbs-up mr-1"></i> 53
                                    </button>
                                    <button class="flex items-center text-gray-500 hover:text-blue-600">
                                        <i class="far fa-comment mr-1"></i> 32
                                    </button>
                                    <button class="flex items-center text-gray-500 hover:text-blue-600">
                                        <i class="far fa-bookmark mr-1"></i> Save
                                    </button>
                                </div>
                                <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                    Join Discussion
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Active Members -->
    <section id="members" class="py-16 px-6 bg-gray-50">
        <div class="container mx-auto max-w-6xl">
            <div class="flex items-center justify-between mb-10">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">Active Members</h2>
                    <p class="text-gray-600">Connect with top contributors in our community</p>
                </div>
                <a href="#" class="text-blue-600 hover:text-blue-800 flex items-center text-sm font-medium">
                    See all members <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Member Card -->
                <div class="community-card bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 text-center p-6">
                    <div class="relative inline-block mb-4">
                        <div class="w-20 h-20 rounded-full bg-gradient-to-r from-blue-500 to-purple-500 flex items-center justify-center text-white text-3xl font-bold mx-auto">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="absolute bottom-0 right-0 w-6 h-6 bg-green-500 rounded-full border-2 border-white"></div>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-1">David Kim</h3>
                    <p class="text-blue-600 text-sm font-medium mb-2">Full Stack Developer</p>
                    <div class="flex justify-center mb-3">
                        <div class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded-full mr-1">JavaScript</div>
                        <div class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded-full">React</div>
                    </div>
                    <div class="text-sm text-gray-500 mb-4">
                        <div class="font-medium">Contribution Level:</div>
                        <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                            <div class="bg-blue-600 h-2 rounded-full" style="width: 85%"></div>
                        </div>
                    </div>
                    <button class="w-full py-2 border border-blue-600 text-blue-600 rounded-lg font-medium hover:bg-blue-50 transition-all">
                        Connect
                    </button>
                </div>
                
                <!-- Member Card -->
                <div class="community-card bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 text-center p-6">
                    <div class="relative inline-block mb-4">
                        <div class="w-20 h-20 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center text-white text-3xl font-bold mx-auto">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="absolute bottom-0 right-0 w-6 h-6 bg-green-500 rounded-full border-2 border-white"></div>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-1">Emily Wang</h3>
                    <p class="text-purple-600 text-sm font-medium mb-2">UX Designer & Developer</p>
                    <div class="flex justify-center mb-3">
                        <div class="px-2 py-1 bg-purple-100 text-purple-700 text-xs rounded-full mr-1">UI/UX</div>
                        <div class="px-2 py-1 bg-purple-100 text-purple-700 text-xs rounded-full">Vue.js</div>
                    </div>
                    <div class="text-sm text-gray-500 mb-4">
                        <div class="font-medium">Contribution Level:</div>
                        <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                            <div class="bg-purple-600 h-2 rounded-full" style="width: 92%"></div>
                        </div>
                    </div>
                    <button class="w-full py-2 border border-purple-600 text-purple-600 rounded-lg font-medium hover:bg-purple-50 transition-all">
                        Connect
                    </button>
                </div>
                
                <!-- Member Card -->
                <div class="community-card bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 text-center p-6">
                    <div class="relative inline-block mb-4">
                        <div class="w-20 h-20 rounded-full bg-gradient-to-r from-green-500 to-teal-500 flex items-center justify-center text-white text-3xl font-bold mx-auto">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="absolute bottom-0 right-0 w-6 h-6 bg-green-500 rounded-full border-2 border-white"></div>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-1">Robert Chen</h3>
                    <p class="text-green-600 text-sm font-medium mb-2">Backend Developer</p>
                    <div class="flex justify-center mb-3">
                        <div class="px-2 py-1 bg-green-100 text-green-700 text-xs rounded-full mr-1">Python</div>
                        <div class="px-2 py-1 bg-green-100 text-green-700 text-xs rounded-full">Django</div>
                    </div>
                    <div class="text-sm text-gray-500 mb-4">
                        <div class="font-medium">Contribution Level:</div>
                        <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                            <div class="bg-green-600 h-2 rounded-full" style="width: 78%"></div>
                        </div>
                    </div>
                    <button class="w-full py-2 border border-green-600 text-green-600 rounded-lg font-medium hover:bg-green-50 transition-all">
                        Connect
                    </button>
                </div>
                
<!-- This is the completion for the last Member Card that was cut off -->
<div class="community-card bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 text-center p-6">
    <div class="relative inline-block mb-4">
        <div class="w-20 h-20 rounded-full bg-gradient-to-r from-red-500 to-orange-500 flex items-center justify-center text-white text-3xl font-bold mx-auto">
            <i class="fas fa-user"></i>
        </div>
        <div class="absolute bottom-0 right-0 w-6 h-6 bg-green-500 rounded-full border-2 border-white"></div>
    </div>
    <h3 class="text-lg font-bold text-gray-800 mb-1">Sophia Martinez</h3>
    <p class="text-red-600 text-sm font-medium mb-2">DevOps Engineer</p>
    <div class="flex justify-center mb-3">
        <div class="px-2 py-1 bg-red-100 text-red-700 text-xs rounded-full mr-1">Docker</div>
        <div class="px-2 py-1 bg-red-100 text-red-700 text-xs rounded-full">AWS</div>
    </div>
    <div class="text-sm text-gray-500 mb-4">
        <div class="font-medium">Contribution Level:</div>
        <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
            <div class="bg-red-600 h-2 rounded-full" style="width: 82%"></div>
        </div>
    </div>
    <button class="w-full py-2 border border-red-600 text-red-600 rounded-lg font-medium hover:bg-red-50 transition-all">
        Connect
    </button>
</div>
</section>

<!-- Call to Action -->
<section class="py-16 px-6 bg-white relative overflow-hidden">
    <div class="absolute inset-0 bg-blue-50 opacity-50"></div>
    <div class="container mx-auto max-w-4xl relative z-10">
        <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 border border-blue-100">
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-blue-100 text-blue-600 mb-4">
                    <i class="fas fa-rocket text-2xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-gray-800 mb-3">Ready to join our developer community?</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Connect with like-minded developers, share your knowledge, and grow your skills with CodeNest's thriving community.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#" class="w-full sm:w-auto px-8 py-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white font-medium rounded-lg shadow-md hover:shadow-lg transition-all text-center">
                    Create Account
                </a>
                <a href="#" class="w-full sm:w-auto px-8 py-3 bg-white border border-blue-600 text-blue-600 font-medium rounded-lg hover:bg-blue-50 transition-all text-center">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-16 px-6 bg-gray-50">
    <div class="container mx-auto max-w-6xl">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">What Our Community Says</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Real stories from our members about their experience</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Testimonial Card -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400 mr-2">
                        <i class="fas fa-star text-xs"></i>
                        <i class="fas fa-star text-xs"></i>
                        <i class="fas fa-star text-xs"></i>
                        <i class="fas fa-star text-xs"></i>
                        <i class="fas fa-star text-xs"></i>
                    </div>
                    <span class="text-gray-600 text-sm">5.0</span>
                </div>
                <p class="text-gray-700 mb-6">
                    "CodeNest has been instrumental in my growth as a developer. The community is incredibly supportive and always ready to help with any coding challenges."
                </p>
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 mr-3">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h4 class="font-medium text-gray-800">Jason Cooper</h4>
                        <p class="text-gray-500 text-sm">Frontend Developer</p>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial Card -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400 mr-2">
                        <i class="fas fa-star text-xs"></i>
                        <i class="fas fa-star text-xs"></i>
                        <i class="fas fa-star text-xs"></i>
                        <i class="fas fa-star text-xs"></i>
                        <i class="fas fa-star text-xs"></i>
                    </div>
                    <span class="text-gray-600 text-sm">5.0</span>
                </div>
                <p class="text-gray-700 mb-6">
                    "I love how diverse the CodeNest community is. I've learned so much from people with different backgrounds and areas of expertise. It's truly a global learning experience."
                </p>
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 mr-3">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h4 class="font-medium text-gray-800">Priya Sharma</h4>
                        <p class="text-gray-500 text-sm">Data Scientist</p>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial Card -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400 mr-2">
                        <i class="fas fa-star text-xs"></i>
                        <i class="fas fa-star text-xs"></i>
                        <i class="fas fa-star text-xs"></i>
                        <i class="fas fa-star text-xs"></i>
                        <i class="fas fa-star-half-alt text-xs"></i>
                    </div>
                    <span class="text-gray-600 text-sm">4.5</span>
                </div>
                <p class="text-gray-700 mb-6">
                    "The discussions are always insightful and the community moderators do a great job keeping everything organized and focused. I've found valuable career opportunities through connections made here."
                </p>
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-600 mr-3">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h4 class="font-medium text-gray-800">Marcus Johnson</h4>
                        <p class="text-gray-500 text-sm">Software Engineer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter -->
<section class="py-16 px-6 bg-white">
    <div class="container mx-auto max-w-lg text-center">
        <i class="far fa-envelope text-4xl text-blue-600 mb-4"></i>
        <h2 class="text-3xl font-bold text-gray-800 mb-3">Stay Connected</h2>
        <p class="text-gray-600 mb-6">Get weekly updates on hot discussions, community events, and coding tips</p>
        <form class="flex flex-col sm:flex-row gap-3">
            <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            <button type="submit" class="px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-all">
                Subscribe
            </button>
        </form>
        <p class="text-gray-500 text-sm mt-4">We respect your privacy. Unsubscribe at any time.</p>
    </div>
</section>

</main>

<!-- Footer (assuming you have a footer component) -->
<?php include('./components/footer.php') ?>

<script>
    // Additional JavaScript for enhanced interactivity could go here
    // For example, notifications, real-time updates, etc.
</script>
</body>
</html>