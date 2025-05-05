<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coding Forum Profile</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.12.0/cdn.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
  <div class="container mx-auto px-4 py-8" x-data="profileData()">
    <!-- Main Profile Area -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
      <!-- Profile Banner & Avatar -->
      <div class="relative h-48 bg-gradient-to-r from-blue-500 to-purple-600">
        <div class="absolute -bottom-16 left-8">
          <div class="relative">
            <img class="w-32 h-32 rounded-full border-4 border-white object-cover" src="/api/placeholder/150/150" alt="Profile Image">
            <div class="absolute bottom-0 right-0 bg-green-400 p-1 rounded-full border-2 border-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
            </div>
          </div>
        </div>
        <div class="absolute top-4 right-4 flex space-x-2">
          <button class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white px-4 py-2 rounded-lg backdrop-filter backdrop-blur-sm transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
            </svg>
            Edit Profile
          </button>
        </div>
      </div>
      
      <!-- Profile Info -->
      <div class="pt-20 px-8 pb-8">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
          <div>
            <h1 class="text-2xl font-bold text-gray-900">Sarah Johnson</h1>
            <p class="text-gray-600 flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              San Francisco, CA
            </p>
          </div>
          
          <div class="flex mt-4 md:mt-0 space-x-2">
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
              </svg>
              Follow
            </button>
            <button class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 rounded-lg transition">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
              </svg>
              Message
            </button>
          </div>
        </div>
        
        <!-- Bio and Tags -->
        <div class="mt-6">
          <p class="text-gray-700">Full-stack developer passionate about creating clean, efficient code. Currently focusing on React, Node.js, and cloud architecture. Always looking to learn new technologies and contribute to open-source projects.</p>
          
          <div class="mt-4 flex flex-wrap gap-2">
            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-1 rounded">JavaScript</span>
            <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-1 rounded">React</span>
            <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-1 rounded">Node.js</span>
            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-1 rounded">TypeScript</span>
            <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-1 rounded">AWS</span>
            <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-1 rounded">Docker</span>
          </div>
        </div>
        
        <!-- Stats Grid -->
        <div class="mt-8 grid grid-cols-2 md:grid-cols-4 gap-4">
          <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-4 rounded-xl">
            <div class="text-4xl font-bold text-blue-600" x-text="stats.questions">127</div>
            <div class="text-sm text-blue-700">Questions</div>
          </div>
          <div class="bg-gradient-to-br from-green-50 to-green-100 p-4 rounded-xl">
            <div class="text-4xl font-bold text-green-600" x-text="stats.answers">352</div>
            <div class="text-sm text-green-700">Answers</div>
          </div>
          <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-4 rounded-xl">
            <div class="text-4xl font-bold text-purple-600" x-text="stats.followers">2.4k</div>
            <div class="text-sm text-purple-700">Followers</div>
          </div>
          <div class="bg-gradient-to-br from-amber-50 to-amber-100 p-4 rounded-xl">
            <div class="text-4xl font-bold text-amber-600" x-text="stats.reputation">18.5k</div>
            <div class="text-sm text-amber-700">Reputation</div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Activity Overview -->
    <div class="mt-8">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold text-gray-900">Activity Overview</h2>
        <div class="text-sm text-gray-500">Last 30 days</div>
      </div>
      
      <div class="bg-white rounded-xl shadow-lg p-6">
        <canvas id="activityChart" height="100"></canvas>
      </div>
    </div>
    
    <!-- Tabs Section -->
    <div class="mt-8" x-data="{ activeTab: 'recent' }">
      <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <!-- Tab Navigation -->
        <div class="flex border-b">
          <button @click="activeTab = 'recent'" :class="{'border-b-2 border-blue-600 text-blue-600': activeTab === 'recent'}" class="flex-1 py-4 px-6 text-center font-medium hover:text-blue-600 transition">
            Recent Activity
          </button>
          <button @click="activeTab = 'questions'" :class="{'border-b-2 border-blue-600 text-blue-600': activeTab === 'questions'}" class="flex-1 py-4 px-6 text-center font-medium hover:text-blue-600 transition">
            Questions
          </button>
          <button @click="activeTab = 'answers'" :class="{'border-b-2 border-blue-600 text-blue-600': activeTab === 'answers'}" class="flex-1 py-4 px-6 text-center font-medium hover:text-blue-600 transition">
            Answers
          </button>
          <button @click="activeTab = 'saved'" :class="{'border-b-2 border-blue-600 text-blue-600': activeTab === 'saved'}" class="flex-1 py-4 px-6 text-center font-medium hover:text-blue-600 transition">
            Saved
          </button>
        </div>
        
        <!-- Recent Activity Tab -->
        <div x-show="activeTab === 'recent'" class="p-6 space-y-6">
          <div class="flex items-start space-x-4">
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-500">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
              </svg>
            </div>
            <div class="flex-1">
              <div class="flex items-center justify-between">
                <div>
                  <span class="font-medium text-gray-900">Posted an answer</span>
                  <span class="text-sm text-gray-500 ml-2">2 hours ago</span>
                </div>
                <div class="flex items-center space-x-2">
                  <span class="text-green-600 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                    </svg>
                    24
                  </span>
                </div>
              </div>
              <h3 class="mt-1 font-medium text-gray-800">How to properly implement authentication in a React application?</h3>
              <p class="mt-1 text-gray-600 line-clamp-2">I recommend using JWT tokens stored in HttpOnly cookies. This approach provides better security than localStorage and is relatively easy to implement with libraries like...</p>
            </div>
          </div>
          
          <div class="flex items-start space-x-4">
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-500">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <div class="flex-1">
              <div class="flex items-center justify-between">
                <div>
                  <span class="font-medium text-gray-900">Asked a question</span>
                  <span class="text-sm text-gray-500 ml-2">1 day ago</span>
                </div>
                <div class="flex items-center space-x-2">
                  <span class="text-gray-600 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                    8
                  </span>
                </div>
              </div>
              <h3 class="mt-1 font-medium text-gray-800">Best practices for optimizing Docker container sizes?</h3>
              <p class="mt-1 text-gray-600 line-clamp-2">I'm working on containerizing a Node.js application and noticed my image size is quite large (>1GB). What are the recommended approaches to reduce image size while maintaining...</p>
            </div>
          </div>
          
          <div class="flex items-start space-x-4">
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center text-purple-500">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
            <div class="flex-1">
              <div class="flex items-center justify-between">
                <div>
                  <span class="font-medium text-gray-900">Shared a code snippet</span>
                  <span class="text-sm text-gray-500 ml-2">3 days ago</span>
                </div>
                <div class="flex items-center space-x-2">
                  <span class="text-green-600 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                    </svg>
                    42
                  </span>
                </div>
              </div>
              <h3 class="mt-1 font-medium text-gray-800">Custom React Hook for handling form validation</h3>
              <div class="mt-2 bg-gray-50 rounded-lg p-3 text-sm font-mono text-gray-700">
                const useFormValidation = (initialState, validate) => {<br>
                &nbsp;&nbsp;const [values, setValues] = useState(initialState);<br>
                &nbsp;&nbsp;const [errors, setErrors] = useState({});<br>
                &nbsp;&nbsp;// More code here...<br>
                };
              </div>
            </div>
          </div>
          
          <div class="flex justify-center">
            <button class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
              View more activity
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
          </div>
        </div>
        
        <!-- Questions Tab -->
        <div x-show="activeTab === 'questions'" class="p-6 space-y-6">
          <div class="relative overflow-hidden bg-white shadow-md rounded-lg">
            <div class="flex flex-col space-y-4">
              <template x-for="(question, index) in questions" :key="index">
                <div class="p-4 border-b hover:bg-gray-50 transition">
                  <div class="flex items-center justify-between">
                    <h3 class="font-medium text-lg text-gray-900" x-text="question.title"></h3>
                    <div class="flex items-center space-x-2">
                      <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded" x-text="question.tag"></span>
                      <span class="text-green-600 text-sm flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                        </svg>
                        <span x-text="question.votes"></span>
                      </span>
                    </div>
                  </div>
                  <p class="mt-1 text-sm text-gray-600" x-text="question.excerpt"></p>
                  <div class="mt-2 flex items-center text-xs text-gray-500">
                    <span x-text="question.date"></span>
                    <span class="mx-2">•</span>
                    <span x-text="question.views + ' views'"></span>
                    <span class="mx-2">•</span>
                    <span x-text="question.answers + ' answers'"></span>
                  </div>
                </div>
              </template>
            </div>
          </div>
          
          <div class="flex justify-center">
            <button class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
              View all questions
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </button>
          </div>
        </div>
        
        <!-- Answers Tab -->
        <div x-show="activeTab === 'answers'" class="p-6 space-y-6">
          <div class="relative overflow-hidden bg-white shadow-md rounded-lg">
            <div class="flex flex-col space-y-4">
              <template x-for="(answer, index) in answers" :key="index">
                <div class="p-4 border-b hover:bg-gray-50 transition">
                  <div class="flex items-center justify-between">
                    <h3 class="font-medium text-gray-900" x-text="answer.questionTitle"></h3>
                    <div>
                      <template x-if="answer.accepted">
                        <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded flex items-center">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                          </svg>
                          Accepted
                        </span>
                      </template>
                    </div>
                  </div>
                  <div class="mt-2 text-sm text-gray-600">
                    <p x-text="answer.excerpt"></p>
                  </div>
                  <div class="mt-3 flex justify-between items-center">
                    <div class="flex items-center text-xs text-gray-500">
                      <span x-text="answer.date"></span>
                      <span class="mx-2">•</span>
                      <span x-text="answer.votes + ' votes'"></span>
                    </div>
                    <button class="text-blue-600 hover:text-blue-800 text-sm">Read more</button>
                  </div>
                </div>
              </template>
            </div>
          </div>
          
          <div class="flex justify-center">
            <button class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
              View all answers
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </button>
          </div>
        </div>
        
        <!-- Saved Tab -->
        <div x-show="activeTab === 'saved'" class="p-6">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <template x-for="(saved, index) in savedItems" :key="index">
              <div class="bg-white border rounded-lg overflow-hidden hover:shadow-md transition">
                <div class="p-4">
                  <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                      <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center" x-text="saved.author.charAt(0)"></div>
                      <span class="text-sm font-medium text-gray-800" x-text="saved.author"></span>
                    </div>
                    <span class="text-xs text-gray-500" x-text="saved.savedDate"></span>
                  </div>
                  <h3 class="mt-2 font-medium text-gray-900" x-text="saved.title"></h3>
                  <p class="mt-1 text-sm text-gray-600 line-clamp-2" x-text="saved.excerpt"></p>
                  <div class="mt-3 flex items-center justify-between">
                    <div class="flex space-x-2">
                      <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded" x-text="saved.type"></span>
                      <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded" x-text="saved.category"></span>
                    </div>
                    <button class="text-gray-400 hover:text-red-500 transition">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </template>
          </div>
          
          <div class="flex justify-center mt-6">
            <button class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
              View all saved items
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Achievements Section -->
    <div class="mt-8">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold text-gray-900">Badges & Achievements</h2>
        <div class="text-sm text-blue-600 cursor-pointer hover:underline">View all</div>
      </div>
      
      <div class="bg-white rounded-xl shadow-lg p-6">
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-4">
          <div class="flex flex-col items-center">
            <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
              </svg>
            </div>
            <span class="mt-2 text-sm font-medium text-gray-900">Problem Solver</span>
            <span class="text-xs text-gray-500">Gold</span>
          </div>
          
          <div class="flex flex-col items-center">
            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
              </svg>
            </div>
            <span class="mt-2 text-sm font-medium text-gray-900">Innovator</span>
            <span class="text-xs text-gray-500">Silver</span>
          </div>
          
          <div class="flex flex-col items-center">
            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center">
              <svg xmlns="http://www.w3.<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <span class="mt-2 text-sm font-medium text-gray-900">First Responder</span>
            <span class="text-xs text-gray-500">Silver</span>
          </div>
          
          <div class="flex flex-col items-center">
            <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
              </svg>
            </div>
            <span class="mt-2 text-sm font-medium text-gray-900">Code Wizard</span>
            <span class="text-xs text-gray-500">Bronze</span>
          </div>
          
          <div class="flex flex-col items-center">
            <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
            <span class="mt-2 text-sm font-medium text-gray-900">Quick Learner</span>
            <span class="text-xs text-gray-500">Bronze</span>
          </div>
          
          <div class="flex flex-col items-center">
            <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
              </svg>
            </div>
            <span class="mt-2 text-sm font-medium text-gray-900">Knowledge Base</span>
            <span class="text-xs text-gray-500">Coming soon</span>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Contributions & GitHub Section -->
    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Contribution Calendar -->
      <div class="bg-white rounded-xl shadow-lg p-6">
        <div class="flex justify-between items-center mb-4">
          <h2 class="font-bold text-gray-900">Contribution Activity</h2>
          <div class="text-sm text-gray-500">Last 12 months</div>
        </div>
        
        <div class="grid grid-cols-12 gap-1">
          <template x-for="week in 52" :key="'week-'+week">
            <div class="flex flex-col gap-1">
              <template x-for="day in 7" :key="'day-'+day">
                <div
                  :class="{
                    'bg-green-100': getRandomActivity() === 1,
                    'bg-green-300': getRandomActivity() === 2,
                    'bg-green-500': getRandomActivity() === 3,
                    'bg-green-700': getRandomActivity() === 4,
                    'bg-gray-100': getRandomActivity() === 0,
                  }"
                  class="w-3 h-3 rounded-sm"
                ></div>
              </template>
            </div>
          </template>
        </div>
        
        <div class="mt-4 flex items-center justify-end">
          <div class="text-xs text-gray-500 mr-2">Less</div>
          <div class="w-3 h-3 bg-gray-100 rounded-sm"></div>
          <div class="w-3 h-3 bg-green-100 rounded-sm ml-1"></div>
          <div class="w-3 h-3 bg-green-300 rounded-sm ml-1"></div>
          <div class="w-3 h-3 bg-green-500 rounded-sm ml-1"></div>
          <div class="w-3 h-3 bg-green-700 rounded-sm ml-1"></div>
          <div class="text-xs text-gray-500 ml-2">More</div>
        </div>
      </div>
      
      <!-- Top Projects -->
      <div class="bg-white rounded-xl shadow-lg p-6">
        <div class="flex justify-between items-center mb-4">
          <h2 class="font-bold text-gray-900">Top Projects</h2>
          <a href="#" class="text-sm text-blue-600 hover:underline">View GitHub</a>
        </div>
        
        <div class="space-y-4">
          <div class="flex items-start">
            <div class="flex-shrink-0 w-8 h-8 rounded bg-blue-100 flex items-center justify-center text-blue-500">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
              </svg>
            </div>
            <div class="ml-4 flex-1">
              <div class="flex items-center justify-between">
                <h3 class="font-medium text-gray-900">react-form-validator</h3>
                <div class="flex items-center space-x-2">
                  <span class="flex items-center text-xs text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                    </svg>
                    143
                  </span>
                  <span class="flex items-center text-xs text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                    </svg>
                    52
                  </span>
                </div>
              </div>
              <p class="mt-1 text-sm text-gray-600">Lightweight form validation library for React applications with zero dependencies</p>
              <div class="mt-2 flex items-center">
                <span class="h-3 w-3 rounded-full bg-yellow-400"></span>
                <span class="ml-1 text-xs text-gray-500">JavaScript</span>
                <span class="mx-2 text-gray-300">•</span>
                <span class="text-xs text-gray-500">Updated 3 days ago</span>
              </div>
            </div>
          </div>
          
          <div class="flex items-start">
            <div class="flex-shrink-0 w-8 h-8 rounded bg-purple-100 flex items-center justify-center text-purple-500">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
              </svg>
            </div>
            <div class="ml-4 flex-1">
              <div class="flex items-center justify-between">
                <h3 class="font-medium text-gray-900">node-database-connector</h3>
                <div class="flex items-center space-x-2">
                  <span class="flex items-center text-xs text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                    </svg>
                    87
                  </span>
                  <span class="flex items-center text-xs text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                    </svg>
                    31
                  </span>
                </div>
              </div>
              <p class="mt-1 text-sm text-gray-600">Universal database connector for Node.js supporting MySQL, PostgreSQL, MongoDB, and more</p>
              <div class="mt-2 flex items-center">
                <span class="h-3 w-3 rounded-full bg-green-500"></span>
                <span class="ml-1 text-xs text-gray-500">TypeScript</span>
                <span class="mx-2 text-gray-300">•</span>
                <span class="text-xs text-gray-500">Updated 1 week ago</span>
              </div>
            </div>
          </div>
          
          <div class="flex items-start">
            <div class="flex-shrink-0 w-8 h-8 rounded bg-red-100 flex items-center justify-center text-red-500">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
              </svg>
            </div>
            <div class="ml-4 flex-1">
              <div class="flex items-center justify-between">
                <h3 class="font-medium text-gray-900">data-visualization-toolkit</h3>
                <div class="flex items-center space-x-2">
                  <span class="flex items-center text-xs text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                    </svg>
                    61
                  </span>
                  <span class="flex items-center text-xs text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                    </svg>
                    24
                  </span>
                </div>
              </div>
              <p class="mt-1 text-sm text-gray-600">Customizable data visualization components built with D3.js and React</p>
              <div class="mt-2 flex items-center">
                <span class="h-3 w-3 rounded-full bg-blue-500"></span>
                <span class="ml-1 text-xs text-gray-500">TypeScript</span>
                <span class="mx-2 text-gray-300">•</span>
                <span class="text-xs text-gray-500">Updated 2 weeks ago</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function profileData() {
      return {
        stats: {
          questions: 127,
          answers: 352,
          followers: '2.4k',
          reputation: '18.5k'
        },
        questions: [
          {
            title: "Best practices for optimizing Docker container sizes?",
            tag: "Docker",
            votes: 24,
            excerpt: "I'm working on containerizing a Node.js application and noticed my image size is quite large (>1GB). What are the recommended approaches to reduce image size while maintaining functionality?",
            date: "1 day ago",
            views: 143,
            answers: 8
          },
          {
            title: "How to properly implement JWT authentication in a microservices architecture?",
            tag: "Security",
            votes: 18,
            excerpt: "I'm building a microservices-based application and need advice on implementing JWT authentication that works across services without compromising security.",
            date: "3 days ago",
            views: 210,
            answers: 5
          },
          {
            title: "TypeScript generics with React useContext - type safety issues",
            tag: "TypeScript",
            votes: 31,
            excerpt: "I'm having trouble maintaining type safety when using generics with React's useContext hook. Here's my current implementation...",
            date: "1 week ago",
            views: 287,
            answers: 12
          }
        ],
        answers: [
          {
            questionTitle: "How to properly implement authentication in a React application?",
            excerpt: "I recommend using JWT tokens stored in HttpOnly cookies. This approach provides better security than localStorage and is relatively easy to implement with libraries like express-jwt on the backend and axios interceptors on the frontend...",
            accepted: true,
            date: "2 hours ago",
            votes: 24
          },
          {
            questionTitle: "What's the most efficient way to handle form state in React?",
            excerpt: "For complex forms, I've had great success with React Hook Form. It minimizes re-renders, has built-in validation, and is very performant even with large forms. Here's a basic example...",
            accepted: true,
            date: "2 days ago",
            votes: 42
          },
          {
            questionTitle: "Proper error handling strategies in async/await functions?",
            excerpt: "I prefer using try/catch blocks with specific error types rather than generic catches. This approach allows for more granular error handling and better debugging...",
            accepted: false,
            date: "4 days ago",
            votes: 16
          }
        ],
        savedItems: [
          {
            title: "Understanding the new React Server Components",
            author: "Dan Abramov",
            excerpt: "React Server Components represent a new way to build React applications that combine client-side interactivity with server-side rendering and data fetching...",
            type: "Article",
            category: "React",
            savedDate: "Yesterday"
          },
          {
            title: "Optimizing PostgreSQL queries for large datasets",
            author: "Julia Evans",
            excerpt: "When dealing with multi-million row tables in PostgreSQL, query optimization becomes crucial. Here are some techniques I've used to improve performance by orders of magnitude...",
            type: "Tutorial",
            category: "Databases",
            savedDate: "3 days ago"
          },
          {
            title: "Implementing a custom virtual DOM in JavaScript",
            author: "Ryan Dahl",
            excerpt: "In this tutorial, we'll build a lightweight virtual DOM implementation from scratch to better understand how libraries like React work under the hood...",
            type: "Tutorial",
            category: "JavaScript",
            savedDate: "Last week"
          },
          {
            title: "Understanding WebAssembly: The Future of Web Performance",
            author: "Lin Clark",
            excerpt: "WebAssembly is changing how we think about performance on the web. This guide explores practical use cases and how to integrate WASM into your JavaScript applications...",
            type: "Guide",
            category: "WebAssembly",
            savedDate: "2 weeks ago"
          }
        ],
        getRandomActivity() {
          return Math.floor(Math.random() * 5);
        }
      }
    }

    // Initialize activity chart when the DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
      const ctx = document.getElementById('activityChart').getContext('2d');
      
      const gradient = ctx.createLinearGradient(0, 0, 0, 200);
      gradient.addColorStop(0, 'rgba(59, 130, 246, 0.5)');
      gradient.addColorStop(1, 'rgba(59, 130, 246, 0.0)');
      
      new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['Jan 15', 'Jan 20', 'Jan 25', 'Jan 30', 'Feb 4', 'Feb 9', 'Feb 14', 'Feb 19', 'Feb 24', 'Mar 1', 'Mar 6', 'Mar 11', 'Mar 16'],
          datasets: [{
            label: 'Activity',
            data: [12, 19, 10, 15, 24, 20, 28, 30, 22, 25, 31, 27, 34],
            borderColor: 'rgb(59, 130, 246)',
            backgroundColor: gradient,
            tension: 0.4,
            borderWidth: 2,
            pointBackgroundColor: 'rgb(59, 130, 246)',
            pointRadius: 3,
            fill: true
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false
            },
            tooltip: {
              mode: 'index',
              intersect: false,
              backgroundColor: 'rgba(17, 24, 39, 0.8)',
              titleColor: 'rgb(243, 244, 246)',
              bodyColor: 'rgb(243, 244, 246)',
              borderColor: 'rgba(107, 114, 128, 0.2)',
              borderWidth: 1,
              padding: 10,
              cornerRadius: 6
            }
          },
          scales: {
            y: {
              beginAtZero: true,
              grid: {
                color: 'rgba(107, 114, 128, 0.1)',
                drawBorder: false
              },
              ticks: {
                color: 'rgb(107, 114, 128)',
                font: {
                  size: 10
                }
              }
            },
            x: {
              grid: {
                display: false
              },
              ticks: {
                color: 'rgb(107, 114, 128)',
                font: {
                  size: 10
                },
                maxRotation: 0
              }
            }
          }
        }
      });
    });
  </script>
</body>
</html>