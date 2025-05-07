<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeConnect - Join Our Coding Community</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.3/cdn.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
    .gradient-bg {
        background: linear-gradient(90deg, #3B82F6 0%, #8B5CF6 100%);
    }

    .custom-shadow {
        box-shadow: 0 10px 25px -5px rgba(59, 130, 246, 0.5);
    }

    @keyframes float {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-15px); }
      100% { transform: translateY(0px); }
    }
    .animate-float { animation: float 6s ease-in-out infinite; }
    .animate-float-slow { animation: float 8s ease-in-out infinite; }
    .animate-float-slower { animation: float 10s ease-in-out infinite; }
    </style>
</head>

<body class="bg-gray-50">
    <div class="min-h-screen flex flex-col lg:flex-row">
        <!-- Left side with illustration and welcome text -->
        <div
            class="w-full lg:w-1/2 relative overflow-hidden flex flex-col justify-center items-center p-6 lg:p-12 text-white">
            <!-- Modern animated background -->
            <div class="absolute inset-0 bg-gradient-to-br from-indigo-900 via-purple-800 to-blue-900 z-0">
                <div class="absolute inset-0 opacity-20">
                    <div class="absolute top-0 left-0 w-full h-full">
                        <!-- SVG pattern for background texture -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                            <defs>
                                <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                                    <path d="M 40 0 L 0 0 0 40" fill="none" stroke="rgba(255,255,255,0.1)"
                                        stroke-width="1" />
                                </pattern>
                            </defs>
                            <rect width="100%" height="100%" fill="url(#grid)" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Floating code particles -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="code-particle absolute text-xs text-blue-300 opacity-30 top-20 left-10 animate-float-slow">
                    function()</div>
                <div
                    class="code-particle absolute text-xs text-purple-300 opacity-30 top-40 right-20 animate-float-slower">
                    {code}</div>
                <div class="code-particle absolute text-xs text-indigo-300 opacity-30 bottom-40 left-1/4 animate-float">
                    const data =</div>
                <div
                    class="code-particle absolute text-xs text-green-300 opacity-30 bottom-20 right-1/3 animate-float-slow">
                    return true;</div>
            </div>

            <!-- Content container -->
            <div class="relative z-10 flex flex-col items-center">
                <!-- Logo with modern animated effect -->
                <div class="mb-8 relative">
                    <div
                        class="w-20 h-20 flex items-center justify-center rounded-xl bg-white bg-opacity-10 backdrop-blur-sm border border-white border-opacity-20 transform rotate-12">
                        <div class="transform -rotate-12">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="16 18 22 12 16 6"></polyline>
                                <polyline points="8 6 2 12 8 18"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div
                        class="absolute -right-1 -top-1 w-6 h-6 bg-blue-400 rounded-full flex items-center justify-center text-xs font-bold animate-pulse">
                        +</div>
                </div>

                <!-- Title with gradient text -->
                <h1 class="text-4xl md:text-5xl font-bold mb-3 text-center">
                    <span
                        class="bg-clip-text text-transparent bg-gradient-to-r from-blue-300 to-purple-400">CodeConnect</span>
                </h1>

                <p class="text-lg md:text-xl mb-12 text-center max-w-md opacity-90">Join our thriving community of
                    developers and transform your coding journey</p>

                <!-- Cards with hover effects -->
                <div class="max-w-md w-full space-y-5">
                    <div
                        class="group bg-white bg-opacity-5 backdrop-blur-sm rounded-xl p-5 border-l-4 border-blue-400 hover:bg-opacity-10 transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 rounded-lg bg-blue-500 bg-opacity-20 flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-300"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                </svg>
                            </div>
                            <p class="font-medium">Engage in discussions with fellow coders</p>
                        </div>
                    </div>

                    <div
                        class="group bg-white bg-opacity-5 backdrop-blur-sm rounded-xl p-5 border-l-4 border-purple-400 hover:bg-opacity-10 transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 rounded-lg bg-purple-500 bg-opacity-20 flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-300"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                                    <line x1="8" y1="21" x2="16" y2="21"></line>
                                    <line x1="12" y1="17" x2="12" y2="21"></line>
                                </svg>
                            </div>
                            <p class="font-medium">Share your projects and get feedback</p>
                        </div>
                    </div>

                    <div
                        class="group bg-white bg-opacity-5 backdrop-blur-sm rounded-xl p-5 border-l-4 border-indigo-400 hover:bg-opacity-10 transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 rounded-lg bg-indigo-500 bg-opacity-20 flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-300"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z">
                                    </path>
                                </svg>
                            </div>
                            <p class="font-medium">Learn from experts across all domains</p>
                        </div>
                    </div>
                </div>

                <!-- Join CTA button -->
                <div class="mt-10">
                    <button
                        class="px-8 py-3 rounded-full bg-gradient-to-r from-blue-500 to-purple-600 text-white font-medium shadow-lg hover:shadow-xl transform transition-all duration-300 hover:-translate-y-1 focus:ring-2 focus:ring-purple-500 focus:outline-none">
                        Join the community
                    </button>
                </div>
            </div>
        </div>

            <!-- Right side with signup form -->
                <div class="w-full lg:w-1/2 p-6 lg:p-12 overflow-y-auto" x-data="{ step: 1, maxStep: 3 }">
                    <div class="max-w-lg mx-auto">
                        <!-- Progress bar -->
                        <div class="mb-8">
                            <div class="flex justify-between mb-2">
                                <span class="text-sm font-medium" x-text="`Step ${step} of ${maxStep}`"></span>
                                <span class="text-sm font-medium"
                                    x-text="`${Math.round((step/maxStep)*100)}% Complete`"></span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="gradient-bg h-2.5 rounded-full transition-all duration-300 ease-in-out"
                                    :style="`width: ${(step/maxStep)*100}%`"></div>
                            </div>
                        </div>

                        <form method="post" action='../../Formhandlers/signup/handlesignup.php' id="signupForm" class="space-y-8" enctype="multipart/form-data">
                            <!-- Step 1: Basic Info -->
                            <div x-show="step === 1" class="space-y-6">
                                <h2 class="text-2xl font-bold text-gray-800">Create your account</h2>
                                <p class="text-gray-600">Join our community and start your coding journey</p>

                                <div class="space-y-4">
                                    <div>
                                        <label for="username"
                                            class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <i class="fas fa-user text-gray-400"></i>
                                            </div>
                                            <input type="text" id="username" name="username"
                                                class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 bg-gray-50 py-3 px-4"
                                                placeholder="Choose a unique username">
                                        </div>
                                    </div>

                                    <div>
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <i class="fas fa-envelope text-gray-400"></i>
                                            </div>
                                            <input type="email" id="email" name="email"
                                                class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 bg-gray-50 py-3 px-4"
                                                placeholder="your@email.com">
                                        </div>
                                    </div>

                                    <div>
                                        <label for="password"
                                            class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <i class="fas fa-lock text-gray-400"></i>
                                            </div>
                                            <input type="password" id="password" name="password"
                                                class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 bg-gray-50 py-3 px-4"
                                                placeholder="Create a strong password">
                                        </div>
                                        <p class="mt-2 text-sm text-gray-500">Must be at least 8 characters with a number
                                            and special character</p>
                                    </div>

                                    <div>
                                        <label for="confirm-password"
                                            class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <i class="fas fa-lock text-gray-400"></i>
                                            </div>
                                            <input type="password" id="confirm-password" name="confirm-password"
                                                class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 bg-gray-50 py-3 px-4"
                                                placeholder="Confirm your password">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 2: Personal Details -->
                            <div x-show="step === 2" class="space-y-6">
                                <h2 class="text-2xl font-bold text-gray-800">Personal Details</h2>
                                <p class="text-gray-600">Tell us more about yourself</p>

                                <div class="space-y-4">
                                    <div>
                                        <label for="full-name" class="block text-sm font-medium text-gray-700 mb-1">Full
                                            Name</label>
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <i class="fas fa-id-card text-gray-400"></i>
                                            </div>
                                            <input type="text" id="full-name" name="full-name"
                                                class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 bg-gray-50 py-3 px-4"
                                                placeholder="Your full name">
                                        </div>
                                    </div>

                                    <div>
                                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone
                                            Number</label>
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <i class="fas fa-phone text-gray-400"></i>
                                            </div>
                                            <input type="tel" id="phone" name="phone"
                                                class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 bg-gray-50 py-3 px-4"
                                                placeholder="Your phone number">
                                        </div>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Gender</label>
                                        <div class="flex space-x-4">
                                            <div class="flex items-center">
                                                <input id="male" name="gender" type="radio" value='Male'
                                                    class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                                <label for="male" class="ml-2 block text-sm text-gray-700">Male</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="female" name="gender" type="radio" value="Female"
                                                    class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                                <label for="female" class="ml-2 block text-sm text-gray-700">Female</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="non-binary" name="gender" type="radio" value='Non-binary'
                                                    class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                                <label for="non-binary"
                                                    class="ml-2 block text-sm text-gray-700">Non-binary</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="other" name="gender" type="radio" value="others"
                                                    class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                                <label for="other" class="ml-2 block text-sm text-gray-700">Other</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <label for="profile-image"
                                            class="block text-sm font-medium text-gray-700 mb-1">Profile Image</label>
                                        <div
                                            class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg">
                                            <div class="space-y-1 text-center">
                                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor"
                                                    fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                    <path
                                                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <div class="flex text-sm text-gray-600">
                                                    <label for="file-upload"
                                                        class="relative cursor-pointer rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500">
                                                        <span>Upload a file</span>
                                                        <input id="file-upload"      type="file" name='image'
                                                            class="sr-only">
                                                    </label>
                                                    <p class="pl-1">or drag and drop</p>
                                                </div>
                                                <p class="text-xs text-gray-500">PNG, JPG, GIF up to 2MB</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 3: Coding Interests -->
                            <div x-show="step === 3" class="space-y-6">
                                <h2 class="text-2xl font-bold text-gray-800">Coding Interests</h2>
                                <p class="text-gray-600">Tell us about your programming interests to personalize your
                                    experience</p>

                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Experience Level</label>
                                        <select id="experience" name="experience"
                                            class="mt-1 block w-full pl-3 pr-10 py-3 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-lg bg-gray-50">
                                            <option value="">Select your level</option>
                                            <option value="beginner">Beginner (0-1 years)</option>
                                            <option value="intermediate">Intermediate (1-3 years)</option>
                                            <option value="advanced">Advanced (3-5 years)</option>
                                            <option value="expert">Expert (5+ years)</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Primary Programming
                                            Languages</label>
                                        <div class="grid grid-cols-2 gap-2">
                                            <div class="flex items-center">
                                                <input id="js" name="languages" type="checkbox" value="JavaScript"
                                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                                <label for="js" class="ml-2 block text-sm text-gray-700">JavaScript</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="python" name="languages" type="checkbox" value="Python"
                                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                                <label for="python" class="ml-2 block text-sm text-gray-700">Python</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="java" name="languages" type="checkbox" value="Java"
                                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                                <label for="java" class="ml-2 block text-sm text-gray-700">Java</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="csharp" name="languages" type="checkbox" value="C#"
                                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                                <label for="csharp" class="ml-2 block text-sm text-gray-700">C#</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="php" name="languages" type="checkbox" value="PHP"
                                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                                <label for="php" class="ml-2 block text-sm text-gray-700">PHP</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="ruby" name="languages" type="checkbox" value="Ruby"
                                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                                <label for="ruby" class="ml-2 block text-sm text-gray-700">Ruby</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="go" name="languages" type="checkbox" value="Go"
                                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                                <label for="go" class="ml-2 block text-sm text-gray-700">Go</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="rust" name="languages" type="checkbox" value="Rust"
                                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                                <label for="rust" class="ml-2 block text-sm text-gray-700">Rust</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Areas of
                                            Interest</label>
                                        <div class="grid grid-cols-2 gap-2">
                                            <div class="flex items-center">
                                                <input id="web-dev" name="interests" type="checkbox" value="Web
                                                    Development"
                                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                                <label for="web-dev" class="ml-2 block text-sm text-gray-700">Web
                                                    Development</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="mobile-dev" name="interests" type="checkbox" value="Mobile
                                                    Development"
                                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                                <label for="mobile-dev" class="ml-2 block text-sm text-gray-700">Mobile
                                                    Development</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="data-science" name="interests" type="checkbox" value="Data
                                                    Science"
                                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                                <label for="data-science" class="ml-2 block text-sm text-gray-700">Data
                                                    Science</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="ai-ml" name="interests" type="checkbox" value="AI & Machine
                                                    Learning"
                                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                                <label for="ai-ml" class="ml-2 block text-sm text-gray-700">AI & Machine
                                                    Learning</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="devops" name="interests" type="checkbox" value="DevOps"
                                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                                <label for="devops" class="ml-2 block text-sm text-gray-700">DevOps</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="game-dev" name="interests" type="checkbox" value="Game
                                                    Development"
                                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                                <label for="game-dev" class="ml-2 block text-sm text-gray-700">Game
                                                    Development</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="blockchain" name="interests" type="checkbox" value="Blockchain"
                                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                                <label for="blockchain"
                                                    class="ml-2 block text-sm text-gray-700">Blockchain</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="security" name="interests" type="checkbox" value="Cybersecurity"
                                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                                <label for="security"
                                                    class="ml-2 block text-sm text-gray-700">Cybersecurity</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <label for="bio" class="block text-sm font-medium text-gray-700 mb-1">Bio</label>
                                        <textarea id="bio" name="bio" rows="3"
                                            class="shadow-sm focus:ring-blue-500 focus:border-blue-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-lg bg-gray-50 p-3"
                                            placeholder="Tell us a bit about yourself and your coding journey"></textarea>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="newsletter" name="newsletter" type="checkbox"
                                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                        <label for="newsletter" class="ml-2 block text-sm text-gray-700">Subscribe to our
                                            newsletter for coding tips and community updates</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="terms" name="terms" type="checkbox"
                                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                        <label for="terms" class="ml-2 block text-sm text-gray-700">I agree to the <a
                                                href="#" class="text-blue-600 hover:text-blue-500">Terms and Conditions</a>
                                            and <a href="#" class="text-blue-600 hover:text-blue-500">Privacy
                                                Policy</a></label>
                                    </div>
                                </div>
                            </div>

                            <!-- Navigation buttons -->
                            <div class="flex justify-between pt-4">
                                <button type="button"
                                    class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 transition-colors"
                                    x-show="step > 1" @click="step--">
                                    <i class="fas fa-arrow-left mr-2"></i> Previous
                                </button>

                                <div class="flex-grow"></div>

                                <button type="button"
                                    class="px-6 py-3 gradient-bg text-white rounded-lg hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors custom-shadow"
                                    x-show="step < maxStep" @click="step++">
                                    Continue <i class="fas fa-arrow-right ml-2"></i>
                                </button>

                                <button type="submit"
                                    class="px-6 py-3 gradient-bg text-white rounded-lg hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors custom-shadow"
                                    x-show="step === maxStep">
                                    Create Account <i class="fas fa-check ml-2"></i>
                                </button>
                            </div>
                        </form>

                        <div class="mt-8 text-center">
                            <p class="text-gray-600">Already have an account? <a href="#"
                                    class="text-blue-600 hover:text-blue-500 font-medium">Sign in</a></p>
                        </div>
                    </div>
                </div>
        </div>

    
</body>

</html>
<?php






require_once __DIR__.'/../../vendor/autoload.php';
include('../../components/db/database.php');



use Cloudinary\Cloudinary;
use Mailgun\Api\EmailValidation;

$cloudinary = new Cloudinary([
    'cloud' => [
        'cloud_name' => $_ENV['CLOUDINARY_CLOUD_NAME'],
        'api_key'    => $_ENV['CLOUDINARY_API_KEY'],
        'api_secret' => $_ENV['CLOUDINARY_API_SECRET'],
    ],
]);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = (string)$_POST['username'];
    $email = (string)$_POST['email'];
    $password = (string)$_POST['password'];
    $confirm_password = (string)$_POST['confirm-password'];
    $fullname = (string)$_POST['full-name'];
    $mobile = (int)$_POST['phone'];
    $gender = (string)$_POST['gender'];
    $experience=(string)$_POST['experience'];
    $languages= (string)$_POST['languages'];
    $interests= (string)$_POST['interests'];
    $bio =      (string)$_POST['bio'];
    $file = $_FILES['image'];
    $fileType = $file['type'];
    $fileSize = $file['size'];
    

    if(empty($_POST['csrf_token'])|| isset($_POST['csrf_token'])){
        errorMessage('Invalid CSRF token. Please try again.');
        header('location:../../pages/auth/signup.php');
        exit;

    }


    // Image validation parameters
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    $maxFileSize = 2 * 1024 * 1024; // 2 MB in bytes


 //Handle Username input field
    $specialCharacters = '!@#$%^&*()-_=+[]{};:\'",.<>?/|\\`~';
    $actualuser=trim($thread); 
    $Actualusername=strlen(trim($username));

    if($Actualusername<04){

        $error='Your username is too small. Use atleast 5 words ';
        header('location:../../pages/auth/signup.php');
        exit;

    }

    if($Actualusername<=0){

        $error='Please write a username';
        header('location:../../pages/auth/signup.php');
        exit;

    }

     if( $Actualusername>10){

        $error='Your username exceeds the limit of 10 characters';
        header('location:../../pages/auth/signup.php');
        exit;

    }
  
    if(ctype_digit($Actualuser[0]))
    {
        $error="username does not start with number";
        header('location:../../pages/auth/signup.php');
        exit;
    }

    if(strpos($specialCharacters , $Actualuser[0])!==false)
    {
        $error="username does not start with special character";
        header('location:../../pages/auth/signup.php');
        exit;
    }

//Handle email input field
    $userEmail= strlen(trim($userEmail));

    if($userEmail==0){
        $error="Please enter the email";
        header('location:../../pages/auth/signup.php');
        exit; 
    }

    if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
        $error="Email is not valid";
        header('location:../../pages/auth/signup.php');
        exit; 
    }

//Handle Full Name

     //Handle Username input field
     $UserFullName=trim($thread); 
     $ActualuserFullName=strlen(trim($UserFullName));
 
     if($ActualuserFullName<5){
 
         $error='Your Full name is too small. Use atleast 5 words ';
         header('location:../../pages/auth/signup.php');
         exit;
 
     }
 
     if($ActualuserFullName<=0){
 
         $error='Please write your username';
         header('location:../../pages/auth/signup.php');
         exit;
 
     }
 
      if( $ActualuserFullName>10){
 
         $error='Your Full Name exceeds the limit of 10 characters';
         header('location:../../pages/auth/signup.php');
         exit;
 
     }
   
     if(ctype_digit($ActualuserFullName[0]))
     {
         $error="Full name does not start with number";
         header('location:../../pages/auth/signup.php');
         exit;
     }
 
     if(strpos($specialCharacters , $ActualuserFullName[0])!==false)
     {
         $error="Full name does not start with special character";
         header('location:../../pages/auth/signup.php');
         exit;
     }
 

     //handle phone no
    $specialCharacters = '!@#$%^&*()-_=+[]{};:\'",.<>?/|\\`~';
    $number=(string)$mobile;
    $userNumber=trim($number); 
    $ActualuserNumber=strlen(trim($userNumber));

    if($ActualuserNumber<=0){

        $error='Please write a mobile number';
        header('location:../../pages/auth/signup.php');
        exit;

    }

    if($ActualuserNumber<10){

        $error='Invalid mobile number mobile number';
        header('location:../../pages/auth/signup.php');
        exit;

    }

    if($ActualuserNumber>10){

        $error='Your mobile number exceeds the limit of 10';
        header('location:../../pages/auth/signup.php');
        exit;

    }

  
    if(!ctype_digit($userNumber))
    {
        $error="Invalid mobile number";
        header('location:../../pages/auth/signup.php');
        exit;
    }















    if(!isset($_FILES['image'])){
        errorMessage("Please add a image");
        header('location:../../pages/auth/signup.php');
        exit;
    }

    if (!isset($_FILES['image']) || $_FILES['image']['error'] === 4) {
        errorMessage("Please upload an image.");
        header('location:../../pages/auth/signup.php');
        exit;
    }

  
   

    if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK ){
      $imageCheck = getimagesize($file['tmp_name']);
        // Validate file size
        if ($fileSize > $maxFileSize) {
            errorMessage(" File size exceeds the maximum limit of 2 MB.");
            header('location:../../pages/auth/signup.php');
            exit;
        }  

        
        elseif ($imageCheck === false) {
            errorMessage("Uploaded file is not a valid image.");
            header('location:../../pages/auth/signup.php');
            exit;
        }

            
        elseif (!in_array($fileType, $allowedTypes)) {
            errorMessage("Invalid file type. Only JPG, PNG, and GIF types are allowed.");
            header('location:../../pages/auth/signup.php');
            exit;
        }


        else{
            try {
                // Upload image to Cloudinary
                $uploadResult = $cloudinary->uploadApi()->upload($file['tmp_name'], [
                    'folder' => 'UserPostImages', // replace with your desired Cloudinary folder
                ]);

                $imageUrl = $uploadResult['secure_url']; 
               
                $stmt=$myconnect-> prepare("INSERT INTO userimagespost( `postContent`, `postImage`, `PostTags`, `PostType`, `userId`) VALUES (?,?,?,?,?)");
                $stmt->bind_param('ssssi',$thread,$imageUrl,$tags,$anonymous,$LoginUserId);
                $result=$stmt->execute();
                 

                if($result){
                    sucessMessage("Yor post is uploaded.");
                     header('location:../../pages/auth/signup.php');
                     exit;
                }
                else {
                    errorMessage(" Your post image is not uploaded. Please try again");
                     header('location:../../pages/auth/signup.php');
                     exit;
                }
            } catch (Exception $e) {
                // $error=  $e->getMessage();
               
                $error=  $e->getMessage();
                error_log($e->getMessage()); // Log the detailed error
                errorMessage(" An error occurred. Please try again later.");
                header('location:../../pages/auth/signup.php');
                exit;
            }
        }


    }
  


}
else {
   
     errorMessage( "An unexpected error occurred. Please try again later.");
     header('location:../../pages/auth/signup.php');
     exit;
}






?> 
