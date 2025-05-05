<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Message Header -->
    <div class="bg-white shadow-md p-4 flex justify-between items-center">
        <!-- Redesigned Back Button -->
        <button onclick="window.history.back()" class="flex items-center space-x-2 bg-gray-100 hover:bg-gray-200 text-gray-600 px-4 py-2 rounded-full shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a1 1 0 01-.707-.293l-7-7a1 1 0 010-1.414l7-7a1 1 0 011.414 1.414L4.414 10l6.293 6.293A1 1 0 0110 18z" clip-rule="evenodd" />
            </svg>
            <span>Back</span>
        </button>
        
        <div class="text-center">
            <h1 class="text-xl font-semibold text-gray-800">John Doe</h1>
            <p class="text-sm text-gray-500">Active 10 minutes ago</p>
        </div>
        <!-- Placeholder to balance the space -->
        <div class="w-10"></div>
    </div>

    <!-- Message Container -->
    <div class="max-w-4xl mx-auto my-6 p-6 bg-white shadow-lg rounded-lg">
        <!-- Chat Box -->
        <div class="overflow-auto h-96 p-4 space-y-6">
            <!-- Message List -->
            <div class="space-y-6">
                <!-- Incoming Message -->
                <div class="flex items-start space-x-3">
                    <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full shadow-md">
                    <div class="flex flex-col space-y-2">
                        <div class="bg-gray-200 p-4 rounded-xl shadow-sm max-w-xs">
                            <p class="text-gray-800">Hey! I need some help with my recent question about JavaScript closures.</p>
                        </div>
                        <span class="text-xs text-gray-500">10:45 AM</span>
                    </div>
                </div>

                <div class="flex items-start space-x-3">
                    <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full shadow-md">
                    <div class="flex flex-col space-y-2">
                        <div class="bg-gray-200 p-4 rounded-xl shadow-sm max-w-xs">
                            <p class="text-gray-800">Hey! I need some help with my recent question about JavaScript closures.</p>
                        </div>
                        <span class="text-xs text-gray-500">10:45 AM</span>
                    </div>
                </div>

                <div class="flex items-start space-x-3">
                    <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full shadow-md">
                    <div class="flex flex-col space-y-2">
                        <div class="bg-gray-200 p-4 rounded-xl shadow-sm max-w-xs">
                            <p class="text-gray-800">Hey! I need some help with my recent question about JavaScript closures.</p>
                        </div>
                        <span class="text-xs text-gray-500">10:45 AM</span>
                    </div>
                </div>

                <div class="flex items-start space-x-3">
                    <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full shadow-md">
                    <div class="flex flex-col space-y-2">
                        <div class="bg-gray-200 p-4 rounded-xl shadow-sm max-w-xs">
                            <p class="text-gray-800">Hey! I need some help with my recent question about JavaScript closures.</p>
                        </div>
                        <span class="text-xs text-gray-500">10:45 AM</span>
                    </div>
                </div>

                <!-- Outgoing Message -->
                <div class="flex items-start space-x-3 justify-end">
                    <div class="flex flex-col space-y-2 items-end">
                        <div class="bg-blue-500 text-white p-4 rounded-xl shadow-sm max-w-xs">
                            <p>No problem! I can assist you with that. Closures can be tricky at first!</p>
                        </div>
                        <span class="text-xs text-gray-400">10:48 AM</span>
                    </div>
                    <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full shadow-md">
                </div>

          
            
                <div class="flex items-start space-x-3 justify-end">
                    <div class="flex flex-col space-y-2 items-end">
                        <div class="bg-blue-500 text-white p-4 rounded-xl shadow-sm max-w-xs">
                            <p>No problem! I can assist you with that. Closures can be tricky at first!</p>
                        </div>
                        <span class="text-xs text-gray-400">10:48 AM</span>
                    </div>
                    <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full shadow-md">
                </div>
                

                <div class="flex items-start space-x-3 justify-end">
                    <div class="flex flex-col space-y-2 items-end">
                        <div class="bg-blue-500 text-white p-4 rounded-xl shadow-sm max-w-xs">
                            <p>No problem! I can assist you with that. Closures can be tricky at first!</p>
                        </div>
                        <span class="text-xs text-gray-400">10:48 AM</span>
                    </div>
                    <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full shadow-md">
                </div>

                <div class="flex items-start space-x-3 justify-end">
                    <div class="flex flex-col space-y-2 items-end">
                        <div class="bg-blue-500 text-white p-4 rounded-xl shadow-sm max-w-xs">
                            <p>No problem! I can assist you with that. Closures can be tricky at first!</p>
                        </div>
                        <span class="text-xs text-gray-400">10:48 AM</span>
                    </div>
                    <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full shadow-md">
                </div>

                <div class="flex items-start space-x-3 justify-end">
                    <div class="flex flex-col space-y-2 items-end">
                        <div class="bg-blue-500 text-white p-4 rounded-xl shadow-sm max-w-xs">
                            <p>No problem! I can assist you with that. Closures can be tricky at first!</p>
                        </div>
                        <span class="text-xs text-gray-400">10:48 AM</span>
                    </div>
                    <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full shadow-md">
                </div>

                <div class="flex items-start space-x-3 justify-end">
                    <div class="flex flex-col space-y-2 items-end">
                        <div class="bg-blue-500 text-white p-4 rounded-xl shadow-sm max-w-xs">
                            <p>No problem! I can assist you with that. Closures can be tricky at first!</p>
                        </div>
                        <span class="text-xs text-gray-400">10:48 AM</span>
                    </div>
                    <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full shadow-md">
                </div>
                <!-- More Messages Here -->
            </div>
        </div>

        <!-- Message Input -->
        <div class="border-t mt-6 pt-4">
            <form class="flex items-center space-x-4">
                <!-- Attachment Icon -->
                <button type="button" class="text-gray-600 hover:text-blue-500">
                    📎
                </button>
                <!-- Message Input Field -->
                <input type="text" placeholder="Type your message..." class="flex-1 p-3 border rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                <!-- Send Button -->
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600">
                    ➤
                </button>
            </form>
        </div>
    </div>
</body>
</html>
