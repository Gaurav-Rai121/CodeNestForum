<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store - Coming Soon</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.9.4/lottie.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<link rel="stylesheet" href="./styles/store.style.css">
</head>
<body class="dark-theme bg-gradient-to-br from-gray-900 via-gray-800 to-black text-white min-h-screen flex items-center justify-center relative overflow-auto">
    <!-- Page loader -->
    <div class="loader" id="pageLoader">
        <div class="loader-circle"></div>
    </div>
    
    <!-- Theme toggle -->
    <div class="theme-switch">
        <label class="switch">
            <input type="checkbox" id="themeToggle">
            <span class="slider"></span>
        </label>
    </div>
    
    <!-- Notification toast -->
    <div class="form-notification" id="notification">
        <div class="flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Email saved! We'll notify you at launch.</span>
        </div>
    </div>
    
    <div id="canvas-container"></div>
    
    <!-- Floating code snippets -->
    <div id="codeLines"></div>
    
    <div class="container mx-auto px-4 py-8 max-w-6xl relative z-10">
        <div class="glass-card p-8 glow mb-8">
            <div class="flex flex-col lg:flex-row items-center">
                <!-- Left column with animation and heading -->
                <div class="w-full lg:w-1/2 text-center lg:text-left mb-8 lg:mb-0 px-4">
                    <div class="flex items-center justify-center lg:justify-start mb-4">
                        <div class="mr-3 bg-indigo-600 h-8 w-1 rounded"></div>
                        <h2 class="text-xl font-semibold text-indigo-400">Coding Forum</h2>
                    </div>
                    
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Our <span class="text-indigo-500">Store</span> is being engineered</h1>
                    
                    <p class="text-gray-300 dark:text-gray-300 mb-4">We're crafting a premium marketplace for developers. Get notified when we deploy to production.</p>
                    
                    <div class="code-font text-sm mb-4 overflow-hidden">
                        <div class="typewriter">$ npm install @coding-forum/store-components</div>
                    </div>
                    
                    <!-- Countdown timer -->
                    <div class="mb-6">
                        <p class="text-gray-400 mb-2">Launching in:</p>
                        <div class="flex justify-center lg:justify-start">
                            <div class="countdown-item">
                                <div class="text-xl font-bold" id="days">14</div>
                                <div class="text-xs text-gray-400">Days</div>
                            </div>
                            <div class="countdown-item">
                                <div class="text-xl font-bold" id="hours">23</div>
                                <div class="text-xs text-gray-400">Hours</div>
                            </div>
                            <div class="countdown-item">
                                <div class="text-xl font-bold" id="minutes">59</div>
                                <div class="text-xs text-gray-400">Mins</div>
                            </div>
                            <div class="countdown-item">
                                <div class="text-xl font-bold" id="seconds">42</div>
                                <div class="text-xs text-gray-400">Secs</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap mb-6">
                        <span class="tag tag-purple">React Components</span>
                        <span class="tag tag-blue">VS Code Extensions</span>
                        <span class="tag tag-green">Dev Resources</span>
                        <span class="tag tag-pink">Premium Courses</span>
                    </div>
                    
                    <!-- Email notification form -->
                    <div class="flex flex-col sm:flex-row mb-6 w-full sm:w-auto">
                        <input type="email" id="emailInput" placeholder="your@email.com" class="notify-input mb-2 sm:mb-0 sm:mr-2 px-4 py-3 rounded-lg focus:outline-none w-full">
                        <button id="notifyButton" class="bg-indigo-600 hover:bg-indigo-700 transition px-6 py-3 rounded-lg font-medium whitespace-nowrap">
                            Notify Me
                        </button>
                    </div>
                    
                    <div class="text-gray-400 text-sm">
                        Join <span class="highlight">243 developers</span> waiting for our launch
                    </div>
                </div>
                
                <!-- Right column with animation and progress -->
                <div class="w-full lg:w-1/2 flex flex-col items-center px-4">
                    <div class="w-64 h-64 mb-6 float" id="lottieAnimation"></div>
                    
                    <div class="flex items-center justify-center w-full mb-6">
                        <div class="flex items-center justify-center mr-8">
                            <!-- SVG Progress Ring -->
                            <svg class="progress-ring mr-3" width="60" height="60">
                                <circle class="progress-ring-circle" stroke-dasharray="250" stroke-dashoffset="75" r="25" cx="30" cy="30"/>
                            </svg>
                            <div class="text-center">
                                <div class="text-2xl font-bold">75%</div>
                                <div class="text-xs text-gray-400">Completed</div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="flex items-center mb-2">
                                <div class="h-3 w-3 rounded-full bg-green-500 mr-2 pulse"></div>
                                <span class="text-sm">Development in progress</span>
                            </div>
                            <div class="text-xs text-gray-400">Shipping April 17, 2025</div>
                        </div>
                    </div>
                    
                    <!-- Github-like activity graph -->
                    <div class="w-full bg-gray-800 bg-opacity-50 rounded-lg p-4 mb-4">
                        <div class="flex justify-between items-center mb-2">
                            <div class="text-sm font-medium">Development Activity</div>
                            <div class="text-xs text-gray-400">Last 2 weeks</div>
                        </div>
                        <div class="flex h-16 items-end space-x-1" id="activityGraph">
                            <!-- JS will populate this -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Features preview -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-6 text-center">What to Expect in Our Store</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="feature-card p-4">
                    <div class="icon-container mb-4">
                        <svg class="w-6 h-6 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold mb-2">Custom Themes & Extensions</h3>
                    <p class="text-gray-400 text-sm">Premium IDE themes and productivity extensions created by expert developers.</p>
                </div>
                
                <div class="feature-card p-4">
                    <div class="icon-container mb-4">
                        <svg class="w-6 h-6 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold mb-2">Code Snippets Library</h3>
                    <p class="text-gray-400 text-sm">Curated library of reusable code snippets to accelerate your development workflow.</p>
                </div>
                
                <div class="feature-card p-4">
                    <div class="icon-container mb-4">
                        <svg class="w-6 h-6 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold mb-2">Project Boilerplates</h3>
                    <p class="text-gray-400 text-sm">Ready-to-use project templates and boilerplates for various tech stacks.</p>
                </div>
                
                <div class="feature-card p-4">
                    <div class="icon-container mb-4">
                        <svg class="w-6 h-6 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold mb-2">Advanced Tutorials</h3>
                    <p class="text-gray-400 text-sm">In-depth video courses and tutorials created by industry professionals.</p>
                </div>
            </div>
        </div>
        
        <!-- Early access CTA -->
        <div class="glass-card p-6 text-center glow">
            <h3 class="text-xl font-bold mb-4">Want Early Access?</h3>
            <p class="text-gray-300 mb-4">Join our beta testing program and get exclusive early access to the store.</p>
            <button class="px-6 py-3 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-lg hover:from-indigo-600 hover:to-purple-700 transition font-medium">
                Apply for Beta Access
            </button>
        </div>
        
        <!-- Return to main site button -->
        <div class="mt-8 text-center">
            <button onclick="window.location.href='home.php'" class="bg-transparent hover:bg-gray-700 text-gray-300 transition px-6 py-3 rounded-lg font-medium border border-gray-700 hover:border-gray-600">
                <svg class="w-4 h-4 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Coding Forum
            </button>
        </div>
    </div>

    <script src="./script/store.script.js">
     

        </script>
</body>
</html>
       