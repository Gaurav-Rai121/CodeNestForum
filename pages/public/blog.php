<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DevSphere - Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
    body {
      font-family: 'Inter', sans-serif;
    }
    .glass-effect {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.18);
    }
    .card-hover {
      transition: all 0.3s ease;
    }
    .card-hover:hover {
      transform: translateY(-8px);
    }
    .gradient-text {
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
      background-image: linear-gradient(45deg, #6366f1, #8b5cf6);
    }
    .custom-scroll::-webkit-scrollbar {
      width: 6px;
    }
    .custom-scroll::-webkit-scrollbar-track {
      background: #f1f1f1;
    }
    .custom-scroll::-webkit-scrollbar-thumb {
      background: #8b5cf6;
      border-radius: 10px;
    }
  </style>
</head>
<body class="bg-gray-50 text-gray-900 custom-scroll">
  <!-- Floating Navigation -->
  <nav class="fixed top-6 left-1/2 transform -translate-x-1/2 z-50 w-11/12 max-w-6xl glass-effect rounded-2xl border border-gray-200 shadow-lg">
    <div class="px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <div class="flex items-center space-x-2">
              <div class="bg-indigo-600 w-8 h-8 rounded-lg flex items-center justify-center">
                <span class="text-white font-bold text-lg">&lt;/&gt;</span>
              </div>
              <span class="font-extrabold text-xl">Dev<span class="text-indigo-600">Sphere</span></span>
            </div>
          </div>
          <div class="hidden md:block ml-10">
            <div class="flex items-center space-x-6">
              <a href="#" class="text-gray-700 hover:text-indigo-600 font-medium transition-colors">Home</a>
              <a href="#" class="text-indigo-600 font-semibold border-b-2 border-indigo-600">Blog</a>
              <a href="#" class="text-gray-700 hover:text-indigo-600 font-medium transition-colors">Forums</a>
              <a href="#" class="text-gray-700 hover:text-indigo-600 font-medium transition-colors">Resources</a>
              <a href="#" class="text-gray-700 hover:text-indigo-600 font-medium transition-colors">Community</a>
            </div>
          </div>
        </div>
        <div class="flex items-center space-x-4">
          <div class="relative hidden md:block">
            <input type="text" placeholder="Search..." class="bg-gray-100 w-48 px-4 py-2 rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm">
            <button class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-400">
              <i class="fas fa-search"></i>
            </button>
          </div>
          <div class="hidden md:flex items-center space-x-2">
            <button class="px-4 py-2 rounded-full bg-indigo-50 text-indigo-600 text-sm font-medium hover:bg-indigo-100 transition-colors">
              Sign In
            </button>
            <button class="px-4 py-2 rounded-full bg-indigo-600 text-white text-sm font-medium hover:bg-indigo-700 transition-colors shadow-md hover:shadow-xl">
              Join Free
            </button>
          </div>
          <button class="md:hidden text-gray-700 focus:outline-none">
            <i class="fas fa-bars text-lg"></i>
          </button>
        </div>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="relative pt-24 overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-indigo-600 to-purple-600 opacity-90"></div>
    <div class="absolute top-0 left-0 w-full h-full">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="absolute bottom-0">
        <path fill="#f8fafc" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,186.7C384,213,480,235,576,229.3C672,224,768,192,864,192C960,192,1056,224,1152,208C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
      </svg>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-20 lg:py-32">
      <div class="text-center">
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-white leading-tight">
          Code. Learn. <span class="text-yellow-300">Inspire.</span>
        </h1>
        <p class="mt-6 max-w-2xl mx-auto text-xl text-white text-opacity-90">
          Discover in-depth articles, tutorials and insights from the world's top developers
        </p>
        
        <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4 max-w-xl mx-auto">
          <input type="text" placeholder="Search for articles, topics, or authors..." 
                 class="flex-grow px-6 py-4 rounded-xl shadow-xl focus:outline-none focus:ring-2 focus:ring-yellow-400 text-gray-700">
          <button class="bg-yellow-400 hover:bg-yellow-300 text-gray-900 font-semibold px-6 py-4 rounded-xl shadow-xl transition-all hover:shadow-2xl focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2">
            Discover Content
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Featured Categories -->
  <section class="py-14 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-wrap justify-center gap-3 md:gap-5">
      <a href="#" class="group">
        <div class="bg-white shadow-lg rounded-xl px-6 py-4 flex items-center space-x-3 border border-gray-100 hover:border-indigo-300 transition-all hover:shadow-indigo-100">
          <div class="w-10 h-10 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center">
            <i class="fab fa-react"></i>
          </div>
          <span class="font-medium text-gray-700 group-hover:text-indigo-600 transition-colors">React</span>
        </div>
      </a>
      <a href="#" class="group">
        <div class="bg-white shadow-lg rounded-xl px-6 py-4 flex items-center space-x-3 border border-gray-100 hover:border-indigo-300 transition-all hover:shadow-indigo-100">
          <div class="w-10 h-10 rounded-lg bg-green-100 text-green-600 flex items-center justify-center">
            <i class="fab fa-node-js"></i>
          </div>
          <span class="font-medium text-gray-700 group-hover:text-indigo-600 transition-colors">Node.js</span>
        </div>
      </a>
      <a href="#" class="group">
        <div class="bg-white shadow-lg rounded-xl px-6 py-4 flex items-center space-x-3 border border-gray-100 hover:border-indigo-300 transition-all hover:shadow-indigo-100">
          <div class="w-10 h-10 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center">
            <i class="fab fa-python"></i>
          </div>
          <span class="font-medium text-gray-700 group-hover:text-indigo-600 transition-colors">Python</span>
        </div>
      </a>
      <a href="#" class="group">
        <div class="bg-white shadow-lg rounded-xl px-6 py-4 flex items-center space-x-3 border border-gray-100 hover:border-indigo-300 transition-all hover:shadow-indigo-100">
          <div class="w-10 h-10 rounded-lg bg-yellow-100 text-yellow-600 flex items-center justify-center">
            <i class="fab fa-js"></i>
          </div>
          <span class="font-medium text-gray-700 group-hover:text-indigo-600 transition-colors">JavaScript</span>
        </div>
      </a>
      <a href="#" class="group">
        <div class="bg-white shadow-lg rounded-xl px-6 py-4 flex items-center space-x-3 border border-gray-100 hover:border-indigo-300 transition-all hover:shadow-indigo-100">
          <div class="w-10 h-10 rounded-lg bg-purple-100 text-purple-600 flex items-center justify-center">
            <i class="fas fa-database"></i>
          </div>
          <span class="font-medium text-gray-700 group-hover:text-indigo-600 transition-colors">Databases</span>
        </div>
      </a>
      <a href="#" class="group">
        <div class="bg-white shadow-lg rounded-xl px-6 py-4 flex items-center space-x-3 border border-gray-100 hover:border-indigo-300 transition-all hover:shadow-indigo-100">
          <div class="w-10 h-10 rounded-lg bg-red-100 text-red-600 flex items-center justify-center">
            <i class="fas fa-server"></i>
          </div>
          <span class="font-medium text-gray-700 group-hover:text-indigo-600 transition-colors">DevOps</span>
        </div>
      </a>
    </div>
  </section>

  <!-- Featured Post -->
  <section class="py-12 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between mb-8">
      <h2 class="text-3xl font-bold gradient-text">Featured Post</h2>
      <a href="#" class="text-indigo-600 hover:text-indigo-800 font-medium flex items-center">
        <span>View all</span>
        <i class="fas fa-arrow-right ml-2"></i>
      </a>
    </div>
    
    <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100">
      <div class="grid grid-cols-1 lg:grid-cols-2">
        <div class="relative overflow-hidden">
          <img src="/api/placeholder/800/600" alt="Featured post" class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-700 ease-in-out">
          <div class="absolute top-4 left-4 bg-yellow-400 text-gray-900 font-semibold uppercase text-xs tracking-wider px-3 py-1 rounded-full">
            Editor's Pick
          </div>
        </div>
        <div class="p-6 md:p-10 flex flex-col justify-between">
          <div>
            <div class="flex items-center space-x-2 mb-4">
              <span class="bg-indigo-100 text-indigo-800 text-xs font-semibold px-3 py-1 rounded-full">Web Development</span>
              <span class="text-gray-500 text-sm">April 15, 2025</span>
            </div>
            <h3 class="text-2xl md:text-3xl font-bold mb-4 text-gray-900 leading-tight">Building Scalable Microservices with Kubernetes and Next.js</h3>
            <p class="text-gray-600 leading-relaxed mb-6">
              Learn the essential patterns and practices for deploying scalable, maintainable microservice architectures using Kubernetes and Next.js. This comprehensive guide covers everything from local development to production deployment.
            </p>
            <div class="flex flex-wrap gap-2 mb-8">
              <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-xs font-medium">#kubernetes</span>
              <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-xs font-medium">#nextjs</span>
              <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-xs font-medium">#microservices</span>
              <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-xs font-medium">#docker</span>
            </div>
          </div>
          <div class="flex items-center justify-between">
            <div class="flex items-center space-x-3">
              <img src="/api/placeholder/100/100" alt="Author" class="w-12 h-12 rounded-full ring-2 ring-indigo-500">
              <div>
                <h4 class="font-medium text-gray-900">Alex Davidson</h4>
                <p class="text-gray-500 text-sm">Lead DevOps Engineer</p>
              </div>
            </div>
            <div class="flex items-center text-gray-500 text-sm">
              <span class="flex items-center mr-4">
                <i class="far fa-clock mr-1"></i> 15 min read
              </span>
              <span class="flex items-center">
                <i class="far fa-eye mr-1"></i> 4.2k views
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Latest Posts -->
  <section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between mb-12">
        <h2 class="text-3xl font-bold gradient-text">Latest Articles</h2>
        <div class="hidden md:flex items-center space-x-2">
          <button class="w-10 h-10 rounded-full bg-white border border-gray-200 flex items-center justify-center text-gray-600 hover:border-indigo-500 hover:text-indigo-600 transition-colors">
            <i class="fas fa-chevron-left"></i>
          </button>
          <button class="w-10 h-10 rounded-full bg-indigo-600 text-white flex items-center justify-center hover:bg-indigo-700 transition-colors">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Post 1 -->
        <article class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 card-hover">
          <div class="relative overflow-hidden">
            <img src="/api/placeholder/600/400" alt="Blog post" class="w-full h-56 object-cover transform hover:scale-110 transition duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
            <div class="absolute bottom-0 left-0 p-6">
              <span class="bg-indigo-600 text-white text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">
                TypeScript
              </span>
              <h3 class="mt-2 text-xl font-bold text-white leading-tight">
                Advanced TypeScript Patterns Every Senior Developer Should Know
              </h3>
            </div>
          </div>
          
          <div class="p-6">
            <p class="text-gray-600 mb-4 line-clamp-2">
              Take your TypeScript skills to the next level with these powerful design patterns that improve type safety and developer experience.
            </p>
            <div class="flex items-center justify-between">
              <div class="flex items-center space-x-3">
                <img src="/api/placeholder/100/100" alt="Author" class="w-10 h-10 rounded-full">
                <div>
                  <h4 class="font-medium text-gray-900 text-sm">Sarah Chen</h4>
                  <p class="text-gray-500 text-xs">Apr 14, 2025</p>
                </div>
              </div>
              <div class="flex items-center">
                <span class="flex items-center text-gray-500 text-xs mr-3">
                  <i class="far fa-comment mr-1"></i> 28
                </span>
                <span class="flex items-center text-gray-500 text-xs">
                  <i class="far fa-heart mr-1"></i> 124
                </span>
              </div>
            </div>
          </div>
        </article>

        <!-- Post 2 -->
        <article class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 card-hover">
          <div class="relative overflow-hidden">
            <img src="/api/placeholder/600/400" alt="Blog post" class="w-full h-56 object-cover transform hover:scale-110 transition duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
            <div class="absolute bottom-0 left-0 p-6">
              <span class="bg-green-600 text-white text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">
                Python
              </span>
              <h3 class="mt-2 text-xl font-bold text-white leading-tight">
                Building Production-Ready APIs with FastAPI and SQLModel
              </h3>
            </div>
          </div>
          
          <div class="p-6">
            <p class="text-gray-600 mb-4 line-clamp-2">
              A comprehensive guide to creating robust, well-tested APIs using FastAPI, SQLModel, and best practices for production environments.
            </p>
            <div class="flex items-center justify-between">
              <div class="flex items-center space-x-3">
                <img src="/api/placeholder/100/100" alt="Author" class="w-10 h-10 rounded-full">
                <div>
                  <h4 class="font-medium text-gray-900 text-sm">James Wilson</h4>
                  <p class="text-gray-500 text-xs">Apr 12, 2025</p>
                </div>
              </div>
              <div class="flex items-center">
                <span class="flex items-center text-gray-500 text-xs mr-3">
                  <i class="far fa-comment mr-1"></i> 45
                </span>
                <span class="flex items-center text-gray-500 text-xs">
                  <i class="far fa-heart mr-1"></i> 237
                </span>
              </div>
            </div>
          </div>
        </article>

        <!-- Post 3 -->
        <article class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 card-hover">
          <div class="relative overflow-hidden">
            <img src="/api/placeholder/600/400" alt="Blog post" class="w-full h-56 object-cover transform hover:scale-110 transition duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
            <div class="absolute bottom-0 left-0 p-6">
              <span class="bg-red-600 text-white text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">
                DevOps
              </span>
              <h3 class="mt-2 text-xl font-bold text-white leading-tight">
                GitOps Workflows with ArgoCD and Infrastructure as Code
              </h3>
            </div>
          </div>
          
          <div class="p-6">
            <p class="text-gray-600 mb-4 line-clamp-2">
              Implement GitOps for your infrastructure using ArgoCD and Terraform to achieve consistent, version-controlled deployment pipelines.
            </p>
            <div class="flex items-center justify-between">
              <div class="flex items-center space-x-3">
                <img src="/api/placeholder/100/100" alt="Author" class="w-10 h-10 rounded-full">
                <div>
                  <h4 class="font-medium text-gray-900 text-sm">Michael Torres</h4>
                  <p class="text-gray-500 text-xs">Apr 10, 2025</p>
                </div>
              </div>
              <div class="flex items-center">
                <span class="flex items-center text-gray-500 text-xs mr-3">
                  <i class="far fa-comment mr-1"></i> 19
                </span>
                <span class="flex items-center text-gray-500 text-xs">
                  <i class="far fa-heart mr-1"></i> 156
                </span>
              </div>
            </div>
          </div>
        </article>
      </div>

      <div class="flex justify-center mt-12">
        <a href="#" class="bg-indigo-600 text-white px-8 py-3 rounded-full font-medium hover:bg-indigo-700 transition-colors shadow-lg hover:shadow-xl flex items-center">
          View All Articles
          <i class="fas fa-arrow-right ml-2"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- Trending Topics -->
  <section class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl font-bold gradient-text mb-12 text-center">Trending Topics</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Left Column -->
      <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-gray-100">
        <div class="p-8">
          <div class="flex items-center justify-between mb-6">
            <h3 class="text-2xl font-bold">Most Discussed</h3>
            <a href="#" class="text-indigo-600 font-medium text-sm hover:text-indigo-800">View all</a>
          </div>
          
          <div class="space-y-6">
            <!-- Topic 1 -->
            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 rounded-xl bg-indigo-100 text-indigo-600 flex items-center justify-center font-bold text-lg">
                1
              </div>
              <div class="flex-1">
                <h4 class="font-semibold mb-1 text-gray-900">Will AI Replace Frontend Developers?</h4>
                <div class="flex items-center text-sm text-gray-500">
                  <span class="flex items-center mr-4">
                    <i class="far fa-comment mr-1"></i> 243 comments
                  </span>
                  <span class="flex items-center">
                    <i class="far fa-eye mr-1"></i> 15.7k views
                  </span>
                </div>
              </div>
            </div>
            
            <!-- Topic 2 -->
            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 rounded-xl bg-indigo-100 text-indigo-600 flex items-center justify-center font-bold text-lg">
                2
              </div>
              <div class="flex-1">
                <h4 class="font-semibold mb-1 text-gray-900">Rust vs Go: The Ultimate Server-Side Battle</h4>
                <div class="flex items-center text-sm text-gray-500">
                  <span class="flex items-center mr-4">
                    <i class="far fa-comment mr-1"></i> 187 comments
                  </span>
                  <span class="flex items-center">
                    <i class="far fa-eye mr-1"></i> 12.3k views
                  </span>
                </div>
              </div>
            </div>
            
            <!-- Topic 3 -->
            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 rounded-xl bg-indigo-100 text-indigo-600 flex items-center justify-center font-bold text-lg">
                3
              </div>
              <div class="flex-1">
                <h4 class="font-semibold mb-1 text-gray-900">The New Era of CSS: Container Queries</h4>
                <div class="flex items-center text-sm text-gray-500">
                  <span class="flex items-center mr-4">
                    <i class="far fa-comment mr-1"></i> 156 comments
                  </span>
                  <span class="flex items-center">
                    <i class="far fa-eye mr-1"></i> 9.8k views
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Right Column -->
      <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-gray-100">
        <div class="p-8">
          <div class="flex items-center justify-between mb-6">
            <h3 class="text-2xl font-bold">Popular Tutorials</h3>
            <a href="#" class="text-indigo-600 font-medium text-sm hover:text-indigo-800">View all</a>
          </div>
          
          <div class="space-y-6">
            <!-- Tutorial 1 -->
            <div class="flex items-center space-x-4">
              <div class="flex-shrink-0">
                <div class="w-16 h-16 rounded-xl overflow-hidden">
                  <img src="/api/placeholder/100/100" alt="Tutorial thumbnail" class="w-full h-full object-cover">
                </div>
              </div>
              <div class="flex-1">
                <h4 class="font-semibold mb-1 text-gray-900">Building a Full-Stack App with Next.js 14 and tRPC</h4>
                <div class="flex items-center text-xs text-gray-500">
                  <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded-full mr-2">Beginner</span>
                  <span class="flex items-center">
                    <i class="far fa-clock mr-1"></i> 45 min
                  </span>
                </div>
              </div>
            </div>
            
            <!-- Tutorial 2 -->
            <div class="flex items-center space-x-4">
              <div class="flex-shrink-0">
                <div class="w-16 h-16 rounded-xl overflow-hidden">
                  <img src="/api/placeholder/100/100" alt="Tutorial thumbnail" class="w-full h-full object-cover">
                </div>
              </div>
              <div class="flex-1">
                <h4 class="font-semibold mb-1 text-gray-900">Mastering AWS Lambda with Python: Zero to Hero</h4>
                <div class="flex items-center text-xs text-gray-500">
                  <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded-full mr-2">Intermediate</span>
                  <span class="flex items-center">
                    <i class="far fa-clock mr-1"></i> 1h 20min
                  </span>
                </div>
              </div>
            </div>
            
            <!-- Tutorial 3 -->
            <div class="flex items-center space-x-4">
              <div class="flex-shrink-0">
                <div class="w-16 h-16 rounded-xl overflow-hidden">
                  <img src="/api/placeholder/100/100" alt="Tutorial thumbnail" class="w-full h-full object-cover">
                </div>
              </div>
              <div class="flex-1">
                <h4 class="font-semibold mb-1 text-gray-900">Advanced React Patterns with TypeScript</h4>
                <div class="flex items-center text-xs text-gray-500">
                  <span class="bg-red-100 text-red-700 px-2 py-1 rounded-full mr-2">Advanced</span>
                  <span class="flex items-center">
                    <i class="far fa-clock mr-1"></i> 2h 5min
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Newsletter Section -->
  <section class="py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-indigo-900 to-purple-900"></div>
    <div class="absolute inset-0 opacity-20">
      <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
        <defs>
          <pattern id="dotted-pattern" width="20" height="20" patternUnits="userSpaceOnUse">
            <circle cx="2" cy="2" r="1" fill="white" />
          </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#dotted-pattern)" />
      </svg>
    </div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <div class="text-center mb-10">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Stay at the Cutting Edge</h2>
        <p class="text-indigo-200 max-w-xl mx-auto">
          Join over 50,000 developers who get weekly updates on the latest programming trends, best practices, and career opportunities.
        </p>
      </div>
      
      <div class="bg-white p-1 rounded-xl shadow-2xl max-w-2xl mx-auto">
        <div class="flex flex-col sm:flex-row">
          <input type="email" placeholder="Enter your email address" class="flex-grow px-5 py-4 rounded-lg focus:outline-none">
          <button class="mt-3 sm:mt-0 sm:ml-2 bg-indigo-600 text-white font-semibold px-6 py-4 rounded-lg hover:bg-indigo-700 transition-colors">
            Subscribe Now
          </button>
        </div>
      </div>
      
      <div class="flex justify-center mt-6 space-x-8">
        <div class="flex items-center text-indigo-200">
          <i class="fas fa-shield-alt mr-2"></i>
          <span class="text-sm">No spam, ever</span>
        </div>
        <div class="flex items-center text-indigo-200">
          <i class="fas fa-lock mr-2"></i>
          <span class="text-sm">Your data is safe</span>
        </div>
        <div class="flex items-center text-indigo-200">
          <i class="fas fa-paper-plane mr-2"></i>
          <span class="text-sm">Weekly updates</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Community Section -->
  <section class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold gradient-text">Join Our Community</h2>
      <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
        Connect with thousands of developers, share your knowledge, and grow your network.
      </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Community Card 1 -->
      <div class="bg-white rounded-2xl shadow-lg p-8 text-center border border-gray-100 hover:border-indigo-200 transition-all card-hover">
        <div class="w-16 h-16 bg-indigo-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
          <i class="fas fa-comments text-indigo-600 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-4">Engaging Forums</h3>
        <p class="text-gray-600 mb-6">
          Discuss coding challenges, share solutions, and get help from experienced developers.
        </p>
        <a href="#" class="text-indigo-600 font-medium hover:text-indigo-800 inline-flex items-center">
          Browse Forums <i class="fas fa-arrow-right ml-2"></i>
        </a>
      </div>
      
      <!-- Community Card 2 -->
      <div class="bg-white rounded-2xl shadow-lg p-8 text-center border border-gray-100 hover:border-indigo-200 transition-all card-hover">
        <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
          <i class="fas fa-users text-green-600 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-4">Live Coding Events</h3>
        <p class="text-gray-600 mb-6">
          Participate in hackathons, coding challenges, and collaborative projects with other members.
        </p>
        <a href="#" class="text-indigo-600 font-medium hover:text-indigo-800 inline-flex items-center">
          View Events <i class="fas fa-arrow-right ml-2"></i>
        </a>
      </div>
      
      <!-- Community Card 3 -->
      <div class="bg-white rounded-2xl shadow-lg p-8 text-center border border-gray-100 hover:border-indigo-200 transition-all card-hover">
        <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
          <i class="fas fa-graduation-cap text-blue-600 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-4">Learning Paths</h3>
        <p class="text-gray-600 mb-6">
          Follow structured learning paths to master new technologies and advance your career.
        </p>
        <a href="#" class="text-indigo-600 font-medium hover:text-indigo-800 inline-flex items-center">
          Explore Paths <i class="fas fa-arrow-right ml-2"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white pt-20 pb-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12">
        <!-- Column 1 -->
        <div class="lg:col-span-2">
          <div class="flex items-center space-x-2 mb-6">
            <div class="bg-indigo-600 w-8 h-8 rounded-lg flex items-center justify-center">
              <span class="text-white font-bold text-lg">&lt;/&gt;</span>
            </div>
            <span class="font-extrabold text-xl">Dev<span class="text-indigo-400">Sphere</span></span>
          </div>
          <p class="text-gray-400 mb-6">
            A vibrant community for developers to connect, share knowledge, and grow their careers through high-quality content and collaboration.
          </p>
          <div class="flex space-x-4">
            <a href="#" class="w-10 h-10 rounded-lg bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-indigo-600 hover:text-white transition-colors">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="w-10 h-10 rounded-lg bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-indigo-600 hover:text-white transition-colors">
              <i class="fab fa-github"></i>
            </a>
            <a href="#" class="w-10 h-10 rounded-lg bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-indigo-600 hover:text-white transition-colors">
              <i class="fab fa-discord"></i>
            </a>
            <a href="#" class="w-10 h-10 rounded-lg bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-indigo-600 hover:text-white transition-colors">
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
        </div>
        
        <!-- Column 2 -->
        <div>
          <h4 class="font-bold text-lg mb-6">Navigation</h4>
          <ul class="space-y-3">
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Home</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Blog</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Forums</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Resources</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Community</a></li>
          </ul>
        </div>
        
        <!-- Column 3 -->
        <div>
          <h4 class="font-bold text-lg mb-6">Resources</h4>
          <ul class="space-y-3">
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Documentation</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Tutorials</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Code Examples</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Podcasts</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Webinars</a></li>
          </ul>
        </div>
        
        <!-- Column 4 -->
        <div>
          <h4 class="font-bold text-lg mb-6">Company</h4>
          <ul class="space-y-3">
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Careers</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Privacy Policy</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Terms of Service</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Contact Us</a></li>
          </ul>
        </div>
      </div>
      
      <div class="border-t border-gray-800 mt-16 pt-8 flex flex-col md:flex-row justify-between items-center">
        <p class="text-gray-400 text-sm">© 2025 DevSphere. All rights reserved.</p>
        <div class="mt-4 md:mt-0">
          <div class="flex space-x-6">
            <a href="#" class="text-gray-400 hover:text-white text-sm">Privacy</a>
            <a href="#" class="text-gray-400 hover:text-white text-sm">Terms</a>
            <a href="#" class="text-gray-400 hover:text-white text-sm">Cookies</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Back to Top Button -->
  <button class="fixed bottom-6 right-6 w-12 h-12 bg-indigo-600 text-white rounded-full flex items-center justify-center shadow-lg hover:bg-indigo-700 focus:outline-none z-50">
    <i class="fas fa-arrow-up"></i>
  </button>
</body>
</html>