<?php 
include('./components/database.php');
if(isset($_SESSION['LoggedIN'])) {
    $loggedin = true;
} else {
    $loggedin = false;
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to CodeHub - Coding Forum</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
    body {
        font-family: 'Inter', sans-serif;
    }

    .question-card {
        transition: box-shadow 0.3s ease;
    }

    .question-card:hover {
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
    }

    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        width: 100%;
        max-width: 500px;
    }

    .modal.active {
        display: flex;
    }



    .form-container {
        transition: background-color 0.3s ease, color 0.3s ease;
        background-color: #f9fafb;
        /* Softer white background */
        border-radius: 0.5rem;
        /* Rounded corners */
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        /* Subtle shadow */
    }

    button {
        background-color: #4f46e5;
        /* Darker blue for button */
        transition: background-color 0.3s ease;
    }

    /* button:hover {
            background-color: #4338ca; 
        } */

    /* Additional styles for input fields */
    .input-field {
        border-radius: 0.375rem;
        border: 1px solid #d1d5db;
        transition: border-color 0.2s, background-color 0.2s;
        background-color: #ffffff;
        /* White background for input fields */
    }

    .input-field:focus {
        border-color: #4f46e5;
        /* Change border color on focus */
        outline: none;
        box-shadow: 0 0 0 2px rgba(79, 70, 229, 0.5);
        /* Match button color */
    }


    /* Ensure code blocks have proper padding and margins */
    code,
    pre {
        display: block;
        /* Make it a block element */
        margin: 0;
        /* Remove margins */

        /* Optional: Add padding for better readability */
        background-color: #f5f5f5;
        /* Optional: Set a light background color */
        border: 1px solid #ddd;
        /* Optional: Add a border */
        border-radius: 4px;
        /* Optional: Slight rounding for the corners */
        font-family: 'Courier New', Courier, monospace;
        /* Use monospace font */
        white-space: pre-wrap;
        /* Allow line breaks to display properly */
    }
    </style>
</head>

<body class="light-mode" id="body">
    <?php include('components/header.php') ?>
    <div class="flex">

        <div class="flex-1 m-2 content-wrapper" id="mainContentWrapper">
        <div class="bg-white rounded-lg shadow-md border border-gray-100 overflow-hidden">
  <!-- Top subtle gradient accent -->
  <div class="h-1 bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500"></div>
  
  <div class="flex flex-col md:flex-row justify-between items-center p-5 space-y-4 md:space-y-0">
    <!-- Logo and Title Section -->
    <div class="flex items-center space-x-3">
      <div class="bg-gradient-to-br from-blue-500 to-indigo-600 p-2 rounded-lg shadow-md">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
        </svg>
      </div>
      <div>
        <h1 class="text-xl font-bold text-gray-800">Programming Q&A</h1>
        <p class="text-xs text-gray-500">Ask, answer, collaborate</p>
      </div>
    </div>
    
    <!-- Search Bar - Enhanced -->
    <div class="relative w-full md:w-1/2 lg:w-1/3">
      <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
      </div>
      <input type="text" placeholder="Search questions..." 
             class="block w-full pl-10 pr-4 py-2.5 text-sm bg-gray-50 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200" />
      <div class="absolute inset-y-0 right-0 flex items-center pr-3">
        <kbd class="px-2 py-1 text-xs font-semibold text-gray-500 bg-gray-100 border border-gray-200 rounded-md">/</kbd>
      </div>
    </div>
    
    <!-- Action Buttons -->
    <div class="flex items-center space-x-3">
      <button class="flex items-center space-x-2 text-gray-700 hover:text-gray-900 px-3 py-2 rounded-lg hover:bg-gray-100 transition-colors duration-200">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
        </svg>
        <span class="hidden md:inline text-sm font-medium">Filter</span>
      </button>
      
      <button id="askQuestionButton" class="flex items-center space-x-2 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white px-4 py-2 rounded-lg shadow-md transition-all duration-200 font-medium text-sm">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
        </svg>
        <span class="hidden md:inline">Ask Question</span>
      </button>
    </div>
  </div>
  
  <!-- Navigation tabs -->
  <div class="flex border-t border-gray-100 px-5 overflow-x-auto scrollbar-hide">
    <button class="px-4 py-3 text-sm font-medium text-blue-600 border-b-2 border-blue-600">Popular</button>
    <button class="px-4 py-3 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300 transition-colors duration-200">Recent</button>
    <button class="px-4 py-3 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300 transition-colors duration-200">Unanswered</button>
    <button class="px-4 py-3 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300 transition-colors duration-200">My Questions</button>
  </div>
</div>
            <div
                class="bg-white border-2 border-gray-300 p-6 rounded-xl shadow-lg mb-6 hover:shadow-2xl transition-shadow duration-300 group">
                <div class="mb-6 px-4">
                    <!-- Modern clean header with subtle elements -->
                    <div class="flex items-center space-x-3 mb-4">
                        <!-- Simple back button with hover effect -->
                        <button class="p-2 rounded-full hover:bg-gray-100 transition-colors duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                        </button>

                        <!-- Clean typography -->
                        <h2 class="text-2xl font-bold text-gray-800">Followed Questions</h2>

                        <!-- Badge count -->
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full">12</span>
                    </div>

                    <!-- Simple clean divider -->
                    <div class="h-px bg-gray-200 w-full"></div>

                    <!-- Filter options -->
                    <!-- <div class="flex items-center justify-between mt-4">
                        <div class="flex space-x-2">
                            <button
                                class="px-3 py-1 text-sm bg-blue-50 text-blue-700 rounded-md font-medium">All</button>
                            <button class="px-3 py-1 text-sm text-gray-600 hover:bg-gray-100 rounded-md">Newest</button>
                            <button
                                class="px-3 py-1 text-sm text-gray-600 hover:bg-gray-100 rounded-md">Popular</button>
                        </div>

                        <button class="flex items-center text-sm text-gray-600 hover:text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                            </svg>
                            Filter
                        </button>
                    </div> -->
                </div>

                <div class="my-6">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-xl ">
                        <!-- Top accent bar with gradient -->


                        <!-- Question Header -->
                        <div class="p-6 b">
                            <div class="flex items-start justify-between">
                                <div class="flex items-center space-x-4">
                                    <div class="relative group">
                                        <div
                                            class="absolute inset-0 rounded-full bg-gradient-to-br from-pink-500 via-purple-500 to-indigo-500 animate-spin-slow opacity-70 blur-sm group-hover:opacity-100 transition duration-300">
                                        </div>
                                        <img src="/api/placeholder/48/48" alt="User Profile"
                                            class="relative w-12 h-12 rounded-full object-cover border-2 border-white p-0.5">
                                        <div
                                            class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-green-400 rounded-full border-2 border-white">
                                        </div>
                                    </div>

                                    <div>
                                        <div class="flex items-center space-x-2 mb-1">
                                            <h2
                                                class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 to-purple-600">
                                                js is very important</h2>
                                            <span
                                                class="px-2 py-1 bg-indigo-100 text-indigo-700 text-xs font-medium rounded-full">JavaScript</span>
                                        </div>
                                        <div class="flex items-center space-x-2 text-sm text-gray-500">
                                            <span class="font-medium text-gray-700">Posted by</span>
                                            <a href="#"
                                                class="font-medium text-indigo-600 hover:text-indigo-700 hover:underline transition">@username</a>
                                            <span class="text-gray-400">•</span>
                                            <span class="flex items-center">
                                                <svg class="w-4 h-4 mr-1 text-gray-400" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                                <span>4hrs ago</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-2">
                                    <button type="submit" id="followButton"
                                        class="px-4 py-2 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-lg text-sm font-medium shadow-md hover:from-indigo-700 hover:to-purple-700 transition duration-300 flex items-center space-x-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                                            </path>
                                        </svg>
                                        <span>Follow</span>
                                    </button>

                                    <!-- Action Menu Button -->
                                    <div class="relative ml-2">
                                        <button
                                            class="p-2 text-gray-500 hover:text-indigo-600 hover:bg-indigo-50 rounded-full transition-all duration-300">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Question Content -->
                            <div class="mt-6">
                                <p class="text-gray-700 leading-relaxed">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quaerat expedita
                                    similique
                                    exercitationem libero quas dolorem minus animi tempora asperiores beatae temporibus
                                    eius
                                    sed, illo repudiandae voluptas porro dolorum corporis?
                                </p>

                                <!-- Code Block -->
                                <div class="mt-6 rounded-xl overflow-hidden border border-gray-200">
                                    <div
                                        class="flex items-center justify-between bg-gradient-to-r from-gray-800 to-gray-900 text-gray-200 py-2 px-4">
                                        <div class="flex items-center space-x-3">
                                            <div class="flex space-x-1.5">
                                                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                                                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                                            </div>
                                            <span
                                                class="text-xs font-mono bg-gray-700 px-2 py-1 rounded">script.js</span>
                                        </div>
                                        <div class="flex space-x-3">
                                            <button
                                                class="text-xs text-gray-400 hover:text-white transition-colors flex items-center space-x-1 bg-gray-700 bg-opacity-50 px-2 py-1 rounded">
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                                                    </path>
                                                </svg>
                                                <span>Copy</span>
                                            </button>
                                            <button
                                                class="text-xs text-gray-400 hover:text-white transition-colors flex items-center space-x-1 bg-gray-700 bg-opacity-50 px-2 py-1 rounded">
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5v-4m0 4h-4m4 0l-5-5">
                                                    </path>
                                                </svg>
                                                <span>Expand</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-gradient-to-r from-gray-900 to-gray-800 p-5 overflow-x-auto font-mono text-sm">
                                        <code class="text-yellow-300 bg-gradient-to-r from-gray-900 to-gray-800">
 function showMessage() {
  console.log("JavaScript is indeed very important!");
                            
  // This is a simple demonstration
  const elements = document.querySelectorAll('.interactive');
                            
  elements.forEach(el => {
   el.addEventListener('click', () => {
     el.classList.toggle('active');
    });
  });
 }
            </code>
                                    </div>
                                </div>

                                <!-- Tags Section -->
                                <div class="mt-5 flex flex-wrap gap-2">
                                    <span
                                        class="px-3 py-1 bg-gradient-to-r from-blue-50 to-indigo-50 text-indigo-600 rounded-full text-xs font-medium cursor-pointer hover:shadow-sm transition">#javascript</span>
                                    <span
                                        class="px-3 py-1 bg-gradient-to-r from-purple-50 to-pink-50 text-purple-600 rounded-full text-xs font-medium cursor-pointer hover:shadow-sm transition">#webdev</span>
                                    <span
                                        class="px-3 py-1 bg-gradient-to-r from-green-50 to-emerald-50 text-green-600 rounded-full text-xs font-medium cursor-pointer hover:shadow-sm transition">#programming</span>
                                </div>
                            </div>

                            <!-- Question Footer -->
                            <div class="mt-6 pt-5 border-t border-gray-100">
                                <div class="flex items-center justify-between">
                                    <div class="flex space-x-6">
                                        <button
                                            class="group flex items-center space-x-2 text-gray-600 hover:text-pink-600 transition-colors duration-300">
                                            <div
                                                class="bg-gray-100 group-hover:bg-pink-50 p-2 rounded-full transition-colors duration-300">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5"
                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="font-medium">24</span>
                                                <span class="text-sm text-gray-500 ml-1">Likes</span>
                                            </div>
                                        </button>

                                        <a href="#"
                                            class="group flex items-center space-x-2 text-gray-600 hover:text-indigo-600 transition-colors duration-300">
                                            <div
                                                class="bg-gray-100 group-hover:bg-indigo-50 p-2 rounded-full transition-colors duration-300">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5"
                                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="font-medium">12</span>
                                                <span class="text-sm text-gray-500 ml-1">Comments</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="flex items-center space-x-4">
                                        <button
                                            class="flex items-center space-x-1 text-gray-500 hover:text-indigo-600 transition-colors duration-300">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                                            </svg>
                                            <span class="text-sm">Save</span>
                                        </button>

                                        <button
                                            class="flex items-center space-x-1 text-gray-500 hover:text-indigo-600 transition-colors duration-300">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                    d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                </path>
                                            </svg>
                                            <span class="text-sm">Share</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="bg-white border-2 border-gray-300 p-6 rounded-xl shadow-lg mb-6 hover:shadow-2xl transition-shadow duration-300 group">
                <div class=" mb-4">
                    <h2
                        class=" flex items-center justify-center text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-gray-600 via-gray-700 to-gray-800 flex items-center gap-4 group-hover:text-gray-600 transition-colors duration-300 animate-fade-in">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-8 w-8 text-gray-600 group-hover:text-gray-800 transition-colors duration-300"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 16l-4-4m0 0l4-4m-4 4h16" />
                        </svg>
                        All Questions
                    </h2>
                    <div class="w-4/4 h-1 bg-gray-50 mt-2"></div>
                </div>

                <div id="questionsList" class="space-y-6">
                    <!-- Example Hardcoded Question -->



                    <div class="bg-white p-6 rounded shadow question-card">
                        <div class="flex justify-between">
                            <div class="flex items-center space-x-4">
                                <img src="'.$image.'" alt="User Profile" class="w-10 h-10 rounded-full">
                                <div>
                                    <h2 class="text-lg font-semibold text-gray-800">'.$title.'</h2>
                                    <p class="text-sm text-gray-600">Posted by ' . $username . ' • ' . $time . '</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">';
                                <form method="Post" action="./Formhandlers/Follow/handlefollow.php">
                                    <input type="hidden" name="userId" value=" '.$Id.'">
                                    <button type="submit" id="followButton"
                                        class="px-4 py-2 '.$color.' text-white shadow-lg  text-white rounded-lg "
                                        name="follow" value="follow">'.$follingvalue.'</button>
                                </form>


                                <a href="reportuser.php?id='.$Id.'"><button
                                        class="report-icon text-gray-600 hover:text-red-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M12 8v4m0 4h.01M19 12a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </button>
                                </a>
                                <div class="dropdown relative">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 icon cursor-pointer dropdown-toggle" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 12h8m-4-4h4m-4 8h4" />
                                    </svg>
                                    <div
                                        class="dropdown-content absolute right-0 mt-2 rounded shadow p-2 bg-white space-y-1 hidden z-10">
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-200">Edit</a>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-200">Delete</a>
                                        <a href="./pages/userProfile/userProfile.php?id='.$Id.'"
                                            class="block px-4 py-2 hover:bg-gray-200">View Profile</a>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-200">Share</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <p class="text-gray-700 mt-4">
                            ' . $description . '
                        </p>
                        <pre class="bg-gradient-to-r from-black via-gray-900 to-black p-4 mt-4 rounded text-sm overflow-x-auto "
                            id="codeSection">
                          <code  class="overflow-auto text-yellow-300 bg-gradient-to-r from-black via-gray-900 to-black border-none">' . htmlspecialchars($code). '</code>
                        </pre>

                        <div class="mt-4 flex justify-between items-center">
                            <div class="flex space-x-4">
                                <button class="flex items-center text-gray-600 hover:text-red-600">
                                    <svg class="w-6 h-6 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                    </svg>
                                    <span id="likeCount">0</span> Like
                                </button>

                                <a href="./comments.php?id='.$questionId.'">
                                    <button class="flex items-center text-gray-600 hover:text-blue-600">
                                        <svg class="w-6 h-6 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 10v4a8 8 0 01-8 8H7l-4 4V5a2 2 0 012-2h4a2 2 0 012 2h8a2 2 0 012 2z">
                                            </path>
                                        </svg>
                                        <span id="commentCount">'.$comments.'</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ask Question Modal -->

            <div class="modal" id="askQuestionModal">
                <div class="modal-content relative bg-white shadow-lg rounded-lg max-w-2xl mx-auto p-6">
                    <h2 class="text-xl font-semibold mb-4 text-center text-blue-600">Ask a Question</h2>
                    <form id="questionForm" action="#" method="post">
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                            <input type="text" id="questionTitle"
                                class="w-full p-2 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 placeholder-gray-500"
                                placeholder="Enter your question title" name="title" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                            <textarea id="questionDescription"
                                class="w-full p-2 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 placeholder-gray-500"
                                rows="3" placeholder="Describe your question..." name="description" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Code (optional)</label>
                            <textarea id="questionCode"
                                class="w-full p-2 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 placeholder-gray-500"
                                rows="3" placeholder="Paste your code here..." name="code"></textarea>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Type of Question</label>
                            <div class="relative">
                                <input type="text" id="questionType"
                                    class="w-full p-2 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 placeholder-gray-500"
                                    placeholder="e.g., Python, JavaScript, HTML, Web Development" name="typeQuestion"
                                    required>
                                <div class="absolute bottom-0 left-0 w-full border-t-2 border-gray-300 mt-1"></div>
                            </div>
                            <p class="text-sm text-gray-600 mt-1">
                                Please specify the programming language (e.g., Python, JavaScript) or the type of
                                question
                                (e.g., Web Development, General Programming).
                            </p>
                            <p class="text-xs text-gray-500 mt-2">
                                This helps others quickly identify the context of your question and provide relevant
                                answers
                                or solutions.
                            </p>
                        </div>
                        <div class="flex justify-end mt-4">
                            <button type="submit"
                                class="px-5 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300">
                                Submit
                            </button>
                        </div>
                    </form>
                    <span class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 cursor-pointer"
                        id="closeAskQuestionModal">✖</span>
                </div>
            </div>


        </div>
        <?php include('./sidebar.php');  ?>
    </div>


    <?php include('components/footer.php') ?>
</body>

</html>