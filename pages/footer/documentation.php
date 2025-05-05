<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Documentation for CodeNest Forum">
    <title>Documentation - CodeNest Forum</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
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
                        },
                    },
                    fontFamily: {
                        sans: ['Inter var', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                    },
                },
            },
        }
    </script>
     <link rel="stylesheet" href="./styles/documentation.style.css">
</head>
<body class="bg-gray-50 text-gray-900 font-sans">

    <!-- Header included via PHP -->
    <?php include('./components/header.php') ?>

    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-20 px-6 relative">
  <!-- Glass morphism card container -->
  <div class="max-w-6xl mx-auto relative z-10">
    <div class="flex flex-col items-center">
      <!-- Version badge with modern pill design -->
      <div class="inline-flex items-center bg-white/20 backdrop-blur-md rounded-full px-4 py-2 mb-6 border border-white/30">
        <div class="h-2 w-2 bg-teal-400 rounded-full mr-2"></div>
        <span class="text-sm font-medium">Version 2.0</span>
      </div>
      
      <!-- Heading with more modern typography -->
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 tracking-tight">
        CodeNest Forum <span class="bg-clip-text text-transparent bg-gradient-to-r from-teal-200 to-teal-400">Documentation</span>
      </h1>
      
      <!-- Subtle description -->
      <p class="text-xl md:text-2xl max-w-3xl text-white/90 mb-10 leading-relaxed">
        Your complete guide to making the most of our developer community platform
      </p>
      
      <!-- Modern button group with hover effects -->
      <div class="flex flex-wrap gap-5 justify-center">
        <a href="#getting-started" class="group flex items-center bg-white text-indigo-700 hover:bg-indigo-50 px-6 py-3 rounded-xl font-medium transition-all duration-200 shadow-lg">
          Get Started
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
        <a href="#need-assistance" class="flex items-center backdrop-blur-md bg-white/10 hover:bg-white/20 text-white border border-white/30 px-6 py-3 rounded-xl font-medium transition-all duration-200">
          Get Support
        </a>
      </div>
    </div>
  </div>
  
  <!-- Abstract shapes for visual interest -->
  <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
    <div class="absolute top-20 left-10 w-64 h-64 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-30"></div>
    <div class="absolute bottom-10 right-10 w-80 h-80 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-30"></div>
  </div>
  
  <!-- Modern wave divider -->
  <div class="absolute -bottom-1 left-0 right-0">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120" fill="#ffffff" preserveAspectRatio="none" class="w-full h-12">
      <path d="M0,32L60,42.7C120,53,240,75,360,74.7C480,75,600,53,720,42.7C840,32,960,32,1080,42.7C1200,53,1320,75,1380,85.3L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
    </svg>
  </div>
</div>
    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12 max-w-7xl">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Sidebar - Table of Contents -->
            <aside class="lg:w-64 shrink-0">
                <div class="sticky top-24 p-6 bg-white rounded-xl shadow-sm">
                    <h3 class="text-lg font-semibold mb-4 text-gray-800">Table of Contents</h3>
                    <nav class="space-y-1">
                        <a href="#introduction" class="toc-link block py-2 px-3 border-l-2 border-transparent hover:bg-gray-50 hover:border-gray-300 text-gray-600 hover:text-gray-900">Introduction</a>
                        <a href="#getting-started" class="toc-link block py-2 px-3 border-l-2 border-transparent hover:bg-gray-50 hover:border-gray-300 text-gray-600 hover:text-gray-900">Getting Started</a>
                        <a href="#forum-features" class="toc-link block py-2 px-3 border-l-2 border-transparent hover:bg-gray-50 hover:border-gray-300 text-gray-600 hover:text-gray-900">Forum Features</a>
                        <a href="#account-management" class="toc-link block py-2 px-3 border-l-2 border-transparent hover:bg-gray-50 hover:border-gray-300 text-gray-600 hover:text-gray-900">Account Management</a>
                        <a href="#faqs" class="toc-link block py-2 px-3 border-l-2 border-transparent hover:bg-gray-50 hover:border-gray-300 text-gray-600 hover:text-gray-900">FAQs</a>
                        <a href="#need-assistance" class="toc-link block py-2 px-3 border-l-2 border-transparent hover:bg-gray-50 hover:border-gray-300 text-gray-600 hover:text-gray-900">Need Assistance</a>
                    </nav>
                    <div class="mt-8 p-4 bg-primary-50 rounded-lg border border-primary-100">
                        <h4 class="font-medium text-primary-800 mb-2">Need help?</h4>
                        <p class="text-sm text-primary-700 mb-3">Our support team is ready to assist you with any questions.</p>
                        <a href="mailto:support@codenestforum.com" class="inline-flex items-center text-sm font-medium text-primary-600 hover:text-primary-800">
                            <i class="fas fa-envelope mr-2"></i> Contact Support
                        </a>
                    </div>
                </aside>

                <!-- Main Documentation Content -->
                <div class="flex-1">
                    <div class="bg-white shadow-sm rounded-xl overflow-hidden">
                        <!-- Introduction Section -->
                        <section id="introduction" class="p-8 border-b border-gray-100 doc-section">
                            <div class="flex items-center mb-4">
                                <div class="bg-primary-100 p-3 rounded-lg mr-4">
                                    <i class="fas fa-book text-primary-600 text-xl"></i>
                                </div>
                                <h2 class="text-3xl font-bold text-gray-900">Introduction</h2>
                            </div>
                            <p class="text-gray-600 text-lg leading-relaxed mb-6">
                                Welcome to the official CodeNest Forum documentation. This guide is designed to help you navigate and make the most of our community platform. Whether you're a new user or an experienced member, you'll find valuable information to enhance your experience.
                            </p>
                            <div class="p-4 bg-gray-50 rounded-lg">
                                <div class="flex">
                                    <div class="mr-4">
                                        <i class="fas fa-lightbulb text-amber-500 text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-800 mb-1">Pro Tip</h4>
                                        <p class="text-gray-600">
                                            Use the table of contents on the left to quickly navigate to specific sections of the documentation.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Getting Started Section -->
                        <section id="getting-started" class="p-8 border-b border-gray-100 doc-section">
                            <div class="flex items-center mb-4">
                                <div class="bg-green-100 p-3 rounded-lg mr-4">
                                    <i class="fas fa-rocket text-green-600 text-xl"></i>
                                </div>
                                <h2 class="text-3xl font-bold text-gray-900">Getting Started</h2>
                            </div>
                            <p class="text-gray-600 text-lg mb-6">
                                Learn the basics of CodeNest Forum, from creating an account to joining discussions.
                            </p>
                            
                            <div class="grid md:grid-cols-2 gap-6 mb-8">
                                <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-md transition">
                                    <div class="text-primary-600 mb-4">
                                        <i class="fas fa-user-plus text-xl"></i>
                                    </div>
                                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Sign Up</h3>
                                    <p class="text-gray-600">
                                        Create your CodeNest account to access all features. Click the <span class="text-primary-600 font-medium">Sign Up</span> button at the top right of the page.
                                    </p>
                                    <div class="mt-4">
                                        <a href="/signup" class="text-primary-600 hover:text-primary-800 font-medium text-sm inline-flex items-center">
                                            Create Account
                                            <i class="fas fa-arrow-right ml-2"></i>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-md transition">
                                    <div class="text-indigo-600 mb-4">
                                        <i class="fas fa-compass text-xl"></i>
                                    </div>
                                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Browse Categories</h3>
                                    <p class="text-gray-600">
                                        Explore topics organized by categories such as Web Development, Mobile Apps, Data Science, and more.
                                    </p>
                                    <div class="mt-4">
                                        <a href="/categories" class="text-primary-600 hover:text-primary-800 font-medium text-sm inline-flex items-center">
                                            View Categories
                                            <i class="fas fa-arrow-right ml-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="p-6 bg-gradient-to-r from-gray-50 to-gray-100 rounded-xl border border-gray-200 mb-6">
                                <h3 class="text-xl font-semibold text-gray-800 mb-4">Getting Started Steps</h3>
                                <ol class="space-y-4">
                                    <li class="flex">
                                        <div class="bg-primary-100 text-primary-700 rounded-full h-8 w-8 flex items-center justify-center font-bold mr-3 shrink-0">1</div>
                                        <div>
                                            <h4 class="font-medium text-gray-800">Create an account</h4>
                                            <p class="text-gray-600">Provide your email, choose a username, and set a secure password.</p>
                                        </div>
                                    </li>
                                    <li class="flex">
                                        <div class="bg-primary-100 text-primary-700 rounded-full h-8 w-8 flex items-center justify-center font-bold mr-3 shrink-0">2</div>
                                        <div>
                                            <h4 class="font-medium text-gray-800">Set up your profile</h4>
                                            <p class="text-gray-600">Add a profile picture, bio, and other details to help the community know you.</p>
                                        </div>
                                    </li>
                                    <li class="flex">
                                        <div class="bg-primary-100 text-primary-700 rounded-full h-8 w-8 flex items-center justify-center font-bold mr-3 shrink-0">3</div>
                                        <div>
                                            <h4 class="font-medium text-gray-800">Join discussions</h4>
                                            <p class="text-gray-600">Participate by posting questions or replying to existing threads.</p>
                                        </div>
                                    </li>
                                    <li class="flex">
                                        <div class="bg-primary-100 text-primary-700 rounded-full h-8 w-8 flex items-center justify-center font-bold mr-3 shrink-0">4</div>
                                        <div>
                                            <h4 class="font-medium text-gray-800">Follow topics</h4>
                                            <p class="text-gray-600">Subscribe to topics of interest to receive notifications on new posts.</p>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                        </section>

                        <!-- Forum Features Section -->
                        <section id="forum-features" class="p-8 border-b border-gray-100 doc-section">
                            <div class="flex items-center mb-4">
                                <div class="bg-purple-100 p-3 rounded-lg mr-4">
                                    <i class="fas fa-puzzle-piece text-purple-600 text-xl"></i>
                                </div>
                                <h2 class="text-3xl font-bold text-gray-900">Forum Features</h2>
                            </div>
                            <p class="text-gray-600 text-lg mb-6">
                                Discover features designed to enhance your experience and make collaboration easier.
                            </p>
                            
                            <div class="grid md:grid-cols-3 gap-4 mb-8">
                                <div class="p-5 bg-white rounded-lg border border-gray-200 shadow-sm">
                                    <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center mb-3">
                                        <i class="fas fa-search text-blue-600"></i>
                                    </div>
                                    <h3 class="font-medium text-gray-800 mb-2">Advanced Search</h3>
                                    <p class="text-gray-600 text-sm">
                                        Find topics easily using filters and keywords in the search bar.
                                    </p>
                                </div>
                                
                                <div class="p-5 bg-white rounded-lg border border-gray-200 shadow-sm">
                                    <div class="h-10 w-10 rounded-full bg-pink-100 flex items-center justify-center mb-3">
                                        <i class="fas fa-fire text-pink-600"></i>
                                    </div>
                                    <h3 class="font-medium text-gray-800 mb-2">Trending Discussions</h3>
                                    <p class="text-gray-600 text-sm">
                                        Stay updated with the most active and popular threads.
                                    </p>
                                </div>
                                
                                <div class="p-5 bg-white rounded-lg border border-gray-200 shadow-sm">
                                    <div class="h-10 w-10 rounded-full bg-amber-100 flex items-center justify-center mb-3">
                                        <i class="fas fa-bookmark text-amber-600"></i>
                                    </div>
                                    <h3 class="font-medium text-gray-800 mb-2">Bookmarks</h3>
                                    <p class="text-gray-600 text-sm">
                                        Save threads for quick access later from your profile.
                                    </p>
                                </div>
                                
                                <div class="p-5 bg-white rounded-lg border border-gray-200 shadow-sm">
                                    <div class="h-10 w-10 rounded-full bg-green-100 flex items-center justify-center mb-3">
                                        <i class="fas fa-code text-green-600"></i>
                                    </div>
                                    <h3 class="font-medium text-gray-800 mb-2">Code Snippets</h3>
                                    <p class="text-gray-600 text-sm">
                                        Share code with syntax highlighting and formatting.
                                    </p>
                                </div>
                                
                                <div class="p-5 bg-white rounded-lg border border-gray-200 shadow-sm">
                                    <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center mb-3">
                                        <i class="fas fa-bell text-indigo-600"></i>
                                    </div>
                                    <h3 class="font-medium text-gray-800 mb-2">Notifications</h3>
                                    <p class="text-gray-600 text-sm">
                                        Get alerts for replies to your posts and other important updates.
                                    </p>
                                </div>
                                
                                <div class="p-5 bg-white rounded-lg border border-gray-200 shadow-sm">
                                    <div class="h-10 w-10 rounded-full bg-red-100 flex items-center justify-center mb-3">
                                        <i class="fas fa-users text-red-600"></i>
                                    </div>
                                    <h3 class="font-medium text-gray-800 mb-2">Community Groups</h3>
                                    <p class="text-gray-600 text-sm">
                                        Join specialized groups based on technologies or interests.
                                    </p>
                                </div>
                            </div>
                            
                            <div class="bg-gray-50 rounded-xl p-6 border border-gray-200">
                                <h3 class="text-xl font-semibold text-gray-800 mb-4">Using Code Snippets</h3>
                                <p class="text-gray-600 mb-4">
                                    When posting code, use the code formatting button in the editor:
                                </p>
                                <div class="code-block mb-4">
<pre>function greetUser(name) {
    return `Hello, ${name}! Welcome to CodeNest Forum.`;
}

// Example usage
const message = greetUser('Developer');
console.log(message);</pre>
                                </div>
                                <p class="text-gray-600 text-sm">
                                    You can specify the language for proper syntax highlighting.
                                </p>
                            </div>
                        </section>
                        
                        <!-- Account Management Section (New) -->
                        <section id="account-management" class="p-8 border-b border-gray-100 doc-section">
                            <div class="flex items-center mb-4">
                                <div class="bg-teal-100 p-3 rounded-lg mr-4">
                                    <i class="fas fa-user-cog text-teal-600 text-xl"></i>
                                </div>
                                <h2 class="text-3xl font-bold text-gray-900">Account Management</h2>
                            </div>
                            <p class="text-gray-600 text-lg mb-6">
                                Learn how to manage your CodeNest Forum account settings and preferences.
                            </p>
                            
                            <div class="space-y-6">
                                <div class="flex flex-col md:flex-row gap-6">
                                    <div class="flex-1 border border-gray-200 rounded-xl overflow-hidden">
                                        <div class="bg-gray-50 px-6 py-4 border-b border-gray-200">
                                            <h3 class="font-semibold text-gray-800">Profile Settings</h3>
                                        </div>
                                        <div class="p-6">
                                            <p class="text-gray-600 mb-4">
                                                Customize your profile information to present yourself to the community:
                                            </p>
                                            <ul class="space-y-3">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                                    <span class="text-gray-700">Update profile picture and cover photo</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                                    <span class="text-gray-700">Edit bio and personal information</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                                    <span class="text-gray-700">Add social media links</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                                    <span class="text-gray-700">Showcase your skills and expertise</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="flex-1 border border-gray-200 rounded-xl overflow-hidden">
                                        <div class="bg-gray-50 px-6 py-4 border-b border-gray-200">
                                            <h3 class="font-semibold text-gray-800">Privacy & Security</h3>
                                        </div>
                                        <div class="p-6">
                                            <p class="text-gray-600 mb-4">
                                                Control your privacy settings and account security:
                                            </p>
                                            <ul class="space-y-3">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                                    <span class="text-gray-700">Change password and set up 2FA</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                                    <span class="text-gray-700">Manage email notifications</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                                    <span class="text-gray-700">Control who can see your activity</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                                    <span class="text-gray-700">Manage connected applications</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 flex">
                                    <div class="text-yellow-600 mr-4">
                                        <i class="fas fa-exclamation-triangle text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-yellow-800 mb-1">Important Note</h4>
                                        <p class="text-yellow-700 text-sm">
                                            For security reasons, you'll be asked to confirm your current password when making significant account changes.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- FAQs Section -->
                        <section id="faqs" class="p-8 border-b border-gray-100 doc-section">
                            <div class="flex items-center mb-4">
                                <div class="bg-amber-100 p-3 rounded-lg mr-4">
                                    <i class="fas fa-question-circle text-amber-600 text-xl"></i>
                                </div>
                                <h2 class="text-3xl font-bold text-gray-900">FAQs</h2>
                            </div>
                            <p class="text-gray-600 text-lg mb-6">
                                Find answers to commonly asked questions about CodeNest Forum.
                            </p>
                            
                            <div class="space-y-4">
                                <div class="border border-gray-200 rounded-lg overflow-hidden">
                                    <button class="w-full text-left p-4 flex justify-between items-center focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                                        <h3 class="text-lg font-medium text-gray-800">How do I reset my password?</h3>
                                        <i class="fas fa-chevron-down text-gray-400" ></i>
                                    </button>
                                    <div class="p-4 bg-gray-50 border-t border-gray-200">
                                        <p class="text-gray-700">
                                            Click <span class="text-primary-600 font-medium">Forgot Password</span> on the login page. You'll receive an email with instructions to reset your password. For security, the reset link expires after 30 minutes.
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="border border-gray-200 rounded-lg overflow-hidden">
                                    <button class="w-full text-left p-4 flex justify-between items-center focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                                        <h3 class="text-lg font-medium text-gray-800">Can I delete my account?</h3>
                                        <i class="fas fa-chevron-down text-gray-400"></i>
                                    </button>
                                    <div class="p-4 bg-gray-50 border-t border-gray-200">
                                        <p class="text-gray-700 mb-3">
                                            Yes, you can delete your account by following these steps:
                                        </p>
                                        <ol class="list-decimal pl-5 space-y-1 text-gray-700">
                                            <li>Go to your <span class="text-primary-600 font-medium">Profile Settings</span></li>
                                            <li>Navigate to <span class="text-primary-600 font-medium">Account</span> tab</li>
                                            <li>Scroll to the bottom and select <span class="text-primary-600 font-medium">Delete Account</span></li>
                                            <li>Confirm your decision by entering your password</li>
                                        </ol>
                                        <p class="text-gray-500 text-sm mt-3">
                                            Note: Deletion is permanent and cannot be undone. Your posts will remain but will be attributed to an anonymous user.
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="border border-gray-200 rounded-lg overflow-hidden">
                                    <button class="w-full text-left p-4 flex justify-between items-center focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                                        <h3 class="text-lg font-medium text-gray-800">How do I report inappropriate content?</h3>
                                        <i class="fas fa-chevron-down text-gray-400"></i>
                                    </button>
                                    <div class="p-4 bg-gray-50 border-t border-gray-200">
                                        <p class="text-gray-700">
                                            You can report inappropriate content by clicking the <span class="text-primary-600 font-medium">Report</span> button located next to any post or comment. Moderators will review the content and take appropriate action according to our community guidelines.
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="border border-gray-200 rounded-lg overflow-hidden">
                                    <button class="w-full text-left p-4 flex justify-between items-center focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                                        <h3 class="text-lg font-medium text-gray-800">Can I change my username?</h3>
                                        <i class="fas fa-chevron-down text-gray-400"></i>
                                    </button>
                                    <div class="p-4 bg-gray-50 border-t border-gray-200">
                                        <p class="text-gray-700">
                                        Yes, you can change your username once every 30 days. Go to <span class="text-primary-600 font-medium">Profile Settings</span> > <span class="text-primary-600 font-medium">Account</span> > <span class="text-primary-600 font-medium">Change Username</span>. Remember that changing your username will also change your profile URL.
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="border border-gray-200 rounded-lg overflow-hidden">
                                    <button class="w-full text-left p-4 flex justify-between items-center focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                                        <h3 class="text-lg font-medium text-gray-800">Is there a mobile app for CodeNest Forum?</h3>
                                        <i class="fas fa-chevron-down text-gray-400"></i>
                                    </button>
                                    <div class="p-4 bg-gray-50 border-t border-gray-200">
                                        <p class="text-gray-700">
                                            Yes, we have mobile apps available for both iOS and Android devices. You can download them from the App Store or Google Play Store by searching for "CodeNest Forum". The mobile app offers all the same features as the web version with a streamlined interface for on-the-go use.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Need Assistance Section -->
                        <section id="need-assistance" class="p-8 doc-section">
                            <div class="flex items-center mb-4">
                                <div class="bg-red-100 p-3 rounded-lg mr-4">
                                    <i class="fas fa-life-ring text-red-600 text-xl"></i>
                                </div>
                                <h2 class="text-3xl font-bold text-gray-900">Need Assistance</h2>
                            </div>
                            <p class="text-gray-600 text-lg mb-6">
                                We're here to help if you have any questions or encounter any issues.
                            </p>
                            
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition">
                                    <div class="mb-4 text-blue-600">
                                        <i class="fas fa-envelope-open-text text-2xl"></i>
                                    </div>
                                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Contact Support</h3>
                                    <p class="text-gray-600 mb-4">
                                        Our support team is available 24/7 to assist you with any questions or issues.
                                    </p>
                                    <a href="mailto:support@codenestforum.com" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                        Email Support
                                    </a>
                                </div>
                                
                                <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition">
                                    <div class="mb-4 text-green-600">
                                        <i class="fas fa-comments text-2xl" ></i>
                                    </div>
                                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Community Help</h3>
                                    <p class="text-gray-600 mb-4">
                                        Get help from other community members in our dedicated help forum.
                                    </p>
                                    <a href="/forum/help" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                        Visit Help Forum
                                    </a>
                                </div>
                            </div>
                            
                            <div class="mt-8 p-6 bg-gray-50 rounded-xl border border-gray-200">
                                <h3 class="text-xl font-semibold text-gray-800 mb-4">Feedback</h3>
                                <p class="text-gray-600 mb-4">
                                    We value your input! Help us improve CodeNest Forum by sharing your thoughts and suggestions.
                                </p>
                                <a href="/feedback" class="text-primary-600 hover:text-primary-800 font-medium inline-flex items-center">
                                    Submit Feedback
                                    <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer included via PHP -->
    <?php include('./components/footer.php') ?>

    <script src="./script/documentation.script.js">
 
    </script>
</body>
</html>
