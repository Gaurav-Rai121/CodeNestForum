<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About CodeHub - The Developer Community</title>
<!-- Add Tailwind CSS and Font Awesome -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="./styles/about.style.css">
</head>

<body class="bg-gray-50">


  <!-- Hero Section -->
  <section class="hero-gradient text-white py-20 relative overflow-hidden">
    <!-- Animated background elements -->
    <div class="absolute inset-0 overflow-hidden">
      <div class="absolute -top-16 -left-16 w-64 h-64 bg-blue-400 rounded-full opacity-20"></div>
      <div class="absolute top-20 right-32 w-96 h-96 bg-blue-600 rounded-full opacity-10"></div>
      <div class="absolute bottom-0 left-1/4 w-80 h-80 bg-blue-300 rounded-full opacity-10"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
      <div class="flex flex-col items-center justify-center text-center">
        <h1 class="text-5xl sm:text-6xl font-bold mb-6 leading-tight">About <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-200 to-white">CodeHub</span></h1>
        <p class="text-xl max-w-2xl mx-auto leading-relaxed mb-10 text-blue-100">Connecting developers across the globe through knowledge sharing and collaboration in a vibrant community of coding enthusiasts.</p>
        <div class="flex space-x-4">
          <a href="#mission" class="btn-primary px-8 py-3 rounded-full font-medium flex items-center">
            <span>Our Mission</span>
            <i class="fas fa-arrow-right ml-2"></i>
          </a>
          <a href="#feedback" class="bg-white text-blue-600 hover:bg-blue-50 px-8 py-3 rounded-full font-medium transition duration-300">Join Us</a>
        </div>
      </div>
    </div>

    <!-- Wave Divider -->
    <div class="wave-divider absolute bottom-0 left-0 w-full">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" fill="#f9fafb">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C57.17,92.92,112.37,81.19,160,70.16Z"></path>
      </svg>
    </div>
  </section>

  <!-- Mission Section -->
  <section id="mission" class="py-20">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16">
        <span class="inline-block px-4 py-1 bg-blue-100 text-blue-600 rounded-full font-medium text-sm mb-4">OUR VISION</span>
        <h2 class="text-4xl font-bold text-gray-800 mb-6">Our Mission</h2>
        <p class="text-gray-600 text-lg max-w-3xl mx-auto leading-relaxed">
          CodeHub is dedicated to fostering a global community where developers, programmers, and coders can come together, share knowledge, and grow in their careers. From newbies to experts, we are here to help you solve coding problems and share insights.
        </p>
      </div>

      <!-- Features with modern cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="glass-card p-8">
          <div class="feature-icon inline-flex items-center justify-center mb-6">
            <i class="fas fa-users text-white text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-4">Collaborative Learning</h3>
          <p class="text-gray-600 leading-relaxed">Join discussions, ask questions, and share answers on a wide range of topics, from web development to data science.</p>
          <div class="mt-6">
            <a href="#" class="text-blue-600 font-medium hover:text-blue-700 inline-flex items-center group">
              Learn more
              <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition duration-300"></i>
            </a>
          </div>
        </div>
        
        <div class="glass-card p-8">
          <div class="feature-icon inline-flex items-center justify-center mb-6">
            <i class="fas fa-code-branch text-white text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-4">Diverse Topics</h3>
          <p class="text-gray-600 leading-relaxed">Explore a variety of categories ranging from JavaScript, Python, and C++ to frameworks like React, Vue, and more.</p>
          <div class="mt-6">
            <a href="#" class="text-blue-600 font-medium hover:text-blue-700 inline-flex items-center group">
              Explore topics
              <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition duration-300"></i>
            </a>
          </div>
        </div>
        
        <div class="glass-card p-8">
          <div class="feature-icon inline-flex items-center justify-center mb-6">
            <i class="fas fa-star text-white text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-4">Expert Community</h3>
          <p class="text-gray-600 leading-relaxed">Interact with seasoned professionals, get insights from industry experts, and grow together with an active community.</p>
          <div class="mt-6">
            <a href="#" class="text-blue-600 font-medium hover:text-blue-700 inline-flex items-center group">
              Meet experts
              <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition duration-300"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Creator Section -->
  <section class="py-20 bg-blue-50">
    <div class="container mx-auto px-6">
      <div class="flex flex-col md:flex-row items-center justify-between">
        <div class="md:w-1/2 mb-10 md:mb-0">
          <span class="inline-block px-4 py-1 bg-blue-100 text-blue-600 rounded-full font-medium text-sm mb-4">THE TEAM</span>
          <h2 class="text-4xl font-bold text-gray-800 mb-6">Meet the Creator</h2>
          <p class="text-gray-600 leading-relaxed mb-8">
            This forum was created by a passionate developer for developers. Our aim is to empower every coder, from beginners to experts, with the knowledge and support they need to excel in their programming journey.
          </p>
          <div class="flex space-x-4">
            <a href="#" class="text-blue-500 hover:text-blue-700 transition">
              <i class="fab fa-twitter text-xl"></i>
            </a>
            <a href="#" class="text-blue-500 hover:text-blue-700 transition">
              <i class="fab fa-github text-xl"></i>
            </a>
            <a href="#" class="text-blue-500 hover:text-blue-700 transition">
              <i class="fab fa-linkedin text-xl"></i>
            </a>
          </div>
        </div>
        
        <div class="md:w-2/5">
          <div class="creator-card bg-white p-8 text-center relative">
            <div class="relative z-10">
              <div class="rounded-full overflow-hidden border-4 border-blue-500 w-32 h-32 mx-auto mb-6">
                <img src="/api/placeholder/150/150" alt="Gaurav Rai" class="w-full h-full object-cover">
              </div>
              <h3 class="text-2xl font-bold text-gray-800">Gaurav Rai</h3>
              <p class="text-blue-600 font-medium mb-4">Founder & Chief Developer</p>
              <p class="text-gray-600">Passionate about democratizing coding knowledge and building inclusive developer communities.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section with Modern Accordion -->
  <section class="py-20">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16">
        <span class="inline-block px-4 py-1 bg-blue-100 text-blue-600 rounded-full font-medium text-sm mb-4">FAQ</span>
        <h2 class="text-4xl font-bold text-gray-800 mb-6">Frequently Asked Questions</h2>
        <p class="text-gray-600 text-lg max-w-2xl mx-auto leading-relaxed">
          Have a question? We're here to help you understand how CodeHub works.
        </p>
      </div>

      <div class="max-w-3xl mx-auto">
        <!-- FAQ 1 -->
        <div class="accordion mb-5 glass-card overflow-hidden">
          <button class="accordion-toggle w-full text-left py-5 px-6 text-lg font-semibold text-gray-800 focus:outline-none">
            What is CodeHub?
          </button>
          <div class="accordion-content px-6 pb-5">
            <p class="text-gray-600 leading-relaxed">
              CodeHub is an online platform designed to connect developers, share coding knowledge, and solve programming challenges. We foster a community where coders of all levels can learn, grow, and collaborate on projects.
            </p>
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="accordion mb-5 glass-card overflow-hidden">
          <button class="accordion-toggle w-full text-left py-5 px-6 text-lg font-semibold text-gray-800 focus:outline-none">
            How can I ask a question?
          </button>
          <div class="accordion-content px-6 pb-5">
            <p class="text-gray-600 leading-relaxed">
              Simply navigate to the relevant category and click on "Ask a Question." Fill out the form with as much detail as possible, and our community will respond shortly! Be sure to include any relevant code snippets and the specific problem you're facing.
            </p>
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="accordion mb-5 glass-card overflow-hidden">
          <button class="accordion-toggle w-full text-left py-5 px-6 text-lg font-semibold text-gray-800 focus:outline-none">
            Can I contribute to the forum?
          </button>
          <div class="accordion-content px-6 pb-5">
            <p class="text-gray-600 leading-relaxed">
              Absolutely! We welcome contributions from all members. You can share your knowledge by answering questions, writing blog posts, creating tutorials, or even helping moderate discussions. The more you contribute, the more you'll be recognized in our community.
            </p>
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="accordion mb-5 glass-card overflow-hidden">
          <button class="accordion-toggle w-full text-left py-5 px-6 text-lg font-semibold text-gray-800 focus:outline-none">
            Is the forum free to use?
          </button>
          <div class="accordion-content px-6 pb-5">
            <p class="text-gray-600 leading-relaxed">
              Yes! CodeHub is completely free to join and participate in. All members have access to all features without any hidden fees. We believe knowledge should be freely accessible to everyone passionate about coding.
            </p>
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="accordion mb-5 glass-card overflow-hidden">
          <button class="accordion-toggle w-full text-left py-5 px-6 text-lg font-semibold text-gray-800 focus:outline-none">
            Can I connect with other developers on the forum?
          </button>
          <div class="accordion-content px-6 pb-5">
            <p class="text-gray-600 leading-relaxed">
              Absolutely! You can connect with other developers by following topics, commenting on discussions, and messaging users directly. We also host regular virtual meetups and coding challenges to foster community connections.
            </p>
          </div>
        </div>

        <!-- FAQ 6 -->
        <div class="accordion mb-5 glass-card overflow-hidden">
          <button class="accordion-toggle w-full text-left py-5 px-6 text-lg font-semibold text-gray-800 focus:outline-none">
            What programming languages are supported?
          </button>
          <div class="accordion-content px-6 pb-5">
            <p class="text-gray-600 leading-relaxed">
              We support a wide range of programming languages, including but not limited to Python, JavaScript, Java, C++, Ruby, PHP, Go, Swift, and many more. If you work with a language not listed, feel free to start a new category!
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Feedback Form with Modern Design -->
  <section id="feedback" class="py-20 hero-gradient relative">
    <!-- Background elements -->
    <div class="absolute inset-0 overflow-hidden">
      <div class="absolute top-10 left-1/4 w-64 h-64 bg-blue-400 rounded-full opacity-10"></div>
      <div class="absolute bottom-10 right-1/4 w-80 h-80 bg-blue-300 rounded-full opacity-10"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-12">
          <span class="inline-block px-4 py-1 bg-white bg-opacity-20 text-white rounded-full font-medium text-sm mb-4">FEEDBACK</span>
          <h2 class="text-4xl font-bold text-white mb-6">Share Your Thoughts</h2>
          <p class="text-blue-100 text-lg max-w-2xl mx-auto leading-relaxed">
            We're eager to hear your feedback to improve our community and make CodeHub even better!
          </p>
        </div>

        <form action="#" method="POST" class="glass-card bg-white p-10 rounded-2xl shadow-xl feedback-form">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
              <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
              <input type="text" id="name" name="name" required class="border border-gray-300 rounded-lg w-full py-3 px-4 text-gray-700 focus:outline-none transition duration-300" placeholder="Your Name">
            </div>

            <div>
              <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
              <input type="email" id="email" name="email" required class="border border-gray-300 rounded-lg w-full py-3 px-4 text-gray-700 focus:outline-none transition duration-300" placeholder="Your Email">
            </div>
          </div>

          <div class="mb-6">
            <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
            <input type="text" id="subject" name="subject" required class="border border-gray-300 rounded-lg w-full py-3 px-4 text-gray-700 focus:outline-none transition duration-300" placeholder="Subject">
          </div>

          <div class="mb-8">
            <label for="message" class="block text-gray-700 font-medium mb-2">Your Feedback</label>
            <textarea id="message" name="message" required class="border border-gray-300 rounded-lg w-full py-3 px-4 text-gray-700 focus:outline-none transition duration-300" rows="5" placeholder="Share your thoughts with us..."></textarea>
          </div>

          <button type="submit" class="btn-primary text-white font-bold py-4 px-6 rounded-lg w-full flex items-center justify-center">
            <i class="fas fa-paper-plane mr-2"></i>
            <span>Send Feedback</span>
          </button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer would be included here -->
  <?php include('components/footer.php') ?>

  <script src="./script/about.script.js">

  </script>
</body>
</html>