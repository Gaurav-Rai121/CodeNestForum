<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - CodeHub Developer Community</title>
<!-- Add Tailwind CSS and Font Awesome -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./styles/contact.style.css">
</head>

<body class="bg-gray-50">
  <!-- Hero Section -->
  <section class="contact-hero py-24 text-white relative">
    <!-- Floating shapes for visual interest -->
    <div class="floating-shapes">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
      <div class="text-center max-w-3xl mx-auto">
        <h1 class="text-5xl font-bold mb-5 leading-tight">Get in <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-200 to-white">Touch</span></h1>
        <p class="text-xl mb-10 text-blue-100">Have questions or feedback? We'd love to hear from you! Reach out and let's start a conversation.</p>
        <div class="flex justify-center space-x-6">
          <a href="#contact-form" class="btn-primary px-8 py-3 flex items-center">
            <i class="fas fa-paper-plane mr-2"></i>
            <span>Send Message</span>
          </a>
          <a href="#contact-info" class="bg-white text-blue-600 hover:bg-blue-50 px-8 py-3 rounded-lg font-medium transition duration-300 flex items-center">
            <i class="fas fa-info-circle mr-2"></i>
            <span>Contact Info</span>
          </a>
        </div>
      </div>
    </div>

    <!-- Wave divider -->
    <div class="wave-divider">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" fill="#f9fafb">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C57.17,92.92,112.37,81.19,160,70.16Z"></path>
      </svg>
    </div>
  </section>

  <!-- Main Content -->
  <section class="py-20">
    <div class="container mx-auto px-6">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
        
        <!-- Contact Information -->
        <div id="contact-info" class="lg:order-2">
          <div class="mb-8">
            <span class="inline-block px-4 py-1 bg-blue-100 text-blue-600 rounded-full font-medium text-sm mb-4">CONTACT INFO</span>
            <h2 class="text-3xl font-bold text-gray-800 mb-4">We're Here to Help</h2>
            <p class="text-gray-600 mb-8">Our team is available to answer your questions and help you with any issues you might have. Feel free to reach out through any of the channels below.</p>
          </div>

          <!-- Email -->
          <div class="info-card">
            <div class="info-icon">
              <i class="fas fa-envelope text-white text-lg"></i>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Email Us</h3>
            <p class="text-gray-600 mb-2">For general inquiries:</p>
            <a href="mailto:contact@codehub.com" class="text-blue-600 hover:underline font-medium">contact@codehub.com</a>
            <p class="text-gray-600 mt-2 mb-2">For support:</p>
            <a href="mailto:support@codehub.com" class="text-blue-600 hover:underline font-medium">support@codehub.com</a>
          </div>

          <!-- Support Hours -->
          <div class="info-card">
            <div class="info-icon">
              <i class="fas fa-clock text-white text-lg"></i>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Support Hours</h3>
            <p class="text-gray-600">Our team is available to assist you:</p>
            <ul class="mt-2 space-y-1 text-gray-600">
              <li class="flex items-center">
                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                Monday to Friday: 9 AM to 5 PM (UTC)
              </li>
              <li class="flex items-center">
                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                Response time: Within 24 hours
              </li>
            </ul>
          </div>

          <!-- Follow Us -->
          <div class="info-card">
            <div class="info-icon">
              <i class="fas fa-share-alt text-white text-lg"></i>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Connect With Us</h3>
            <p class="text-gray-600 mb-4">Stay updated with our latest news and updates:</p>
            <div class="flex mt-2">
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-github"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-discord"></i>
              </a>
            </div>
          </div>

          <!-- About Us Summary -->
          <div class="info-card">
            <div class="info-icon">
              <i class="fas fa-info-circle text-white text-lg"></i>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">About CodeHub</h3>
            <p class="text-gray-600">CodeHub is a vibrant community where programmers and developers come together to share knowledge, ask questions, and collaborate on projects. Our mission is to provide a supportive environment for coders of all skill levels.</p>
            <a href="about.php" class="inline-flex items-center mt-4 text-blue-600 font-medium hover:text-blue-700">
              Learn more about us
              <i class="fas fa-arrow-right ml-2"></i>
            </a>
          </div>
        </div>

        <!-- Contact Form -->
        <div id="contact-form" class="contact-card p-0 lg:order-1">
          <div class="bg-blue-600 px-8 py-6 text-white">
            <h2 class="text-2xl font-bold">Send Us a Message</h2>
            <p class="text-blue-100 mt-1">Fill out the form below and we'll get back to you shortly</p>
          </div>
          
          <form class="p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
              <div>
                <label class="block text-gray-700 font-medium mb-2" for="first-name">First Name</label>
                <input class="form-input" type="text" id="first-name" placeholder="John" required>
              </div>
              <div>
                <label class="block text-gray-700 font-medium mb-2" for="last-name">Last Name</label>
                <input class="form-input" type="text" id="last-name" placeholder="Doe" required>
              </div>
            </div>
            
            <div class="mb-6">
              <label class="block text-gray-700 font-medium mb-2" for="email">Email Address</label>
              <input class="form-input" type="email" id="email" placeholder="johndoe@example.com" required>
            </div>
            
            <div class="mb-6">
              <label class="block text-gray-700 font-medium mb-2" for="subject">Subject</label>
              <input class="form-input" type="text" id="subject" placeholder="How can we help you?" required>
            </div>
            
            <div class="mb-8">
              <label class="block text-gray-700 font-medium mb-2" for="message">Your Message</label>
              <textarea class="form-input" id="message" rows="5" placeholder="Your message here..." required></textarea>
            </div>
            
            <div class="flex items-center mb-8">
              <input type="checkbox" id="newsletter" class="w-5 h-5 text-blue-600 rounded">
              <label for="newsletter" class="ml-2 text-gray-700">Subscribe to our newsletter for updates</label>
            </div>
            
            <button type="submit" class="btn-primary w-full">
              <i class="fas fa-paper-plane mr-2"></i> Send Message
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
      <div class="text-center mb-12">
        <span class="inline-block px-4 py-1 bg-blue-100 text-blue-600 rounded-full font-medium text-sm mb-4">FAQ</span>
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Frequently Asked Questions</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Find quick answers to common questions about contacting us and getting support.</p>
      </div>
      
      <div class="max-w-3xl mx-auto grid gap-6">
        <div class="contact-card p-6">
          <h3 class="text-xl font-semibold text-gray-800 mb-2">How quickly will I receive a response?</h3>
          <p class="text-gray-600">We typically respond to all inquiries within 24 hours during business days. For urgent matters, please indicate so in your subject line.</p>
        </div>
        
        <div class="contact-card p-6">
          <h3 class="text-xl font-semibold text-gray-800 mb-2">What if I have technical issues with the forum?</h3>
          <p class="text-gray-600">For technical support, please email support@codehub.com with details about the issue you're experiencing, including screenshots if possible.</p>
        </div>
        
        <div class="contact-card p-6">
          <h3 class="text-xl font-semibold text-gray-800 mb-2">Can I request a feature for the platform?</h3>
          <p class="text-gray-600">Absolutely! We love hearing suggestions from our community. Please use the contact form and select "Feature Request" as the subject.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Map Section -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-6">
      <div class="text-center mb-12">
        <span class="inline-block px-4 py-1 bg-blue-100 text-blue-600 rounded-full font-medium text-sm mb-4">OUR COMMUNITY</span>
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Join Developers Worldwide</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Our community spans across the globe with members from over 150 countries.</p>
      </div>
      
      <div class="contact-card overflow-hidden">
        <!-- Placeholder for map - in a real implementation, replace with actual map embed -->
        <div class="bg-blue-50 h-80 w-full flex items-center justify-center">
          <img src="./images/846958.jpg" alt="World Map" class="w-full h-full object-cover">
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="py-20 contact-hero text-white relative">
    <!-- Floating shapes -->
    <div class="floating-shapes">
      <div></div>
      <div></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
      <div class="text-center max-w-3xl mx-auto">
        <h2 class="text-3xl font-bold mb-6">Ready to Join Our Community?</h2>
        <p class="text-xl mb-8 text-blue-100">Start your coding journey with thousands of developers around the world.</p>
        <div class="flex justify-center space-x-4">
          <a href="signup.php" class="bg-white text-blue-600 hover:bg-blue-50 px-8 py-3 rounded-lg font-medium transition duration-300">Sign Up Now</a>
          <a href="forum.php" class="border-2 border-white text-white hover:bg-white hover:text-blue-600 px-8 py-3 rounded-lg font-medium transition duration-300">Browse Forum</a>
        </div>
      </div>
    </div>
  </section>

  <script src="./script/contact.script.js">

  </script>
</body>
</html>