<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding Forum Chatbox</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }

        .chat-window {
            transition: all 0.3s ease;
            transform-origin: bottom right;
        }

        .chat-window.hidden {
            transform: scale(0);
            opacity: 0;
        }

        .message-user {
            background: linear-gradient(135deg, #6366f1, #4f46e5);
            border-radius: 18px 18px 4px 18px;
        }

        .message-bot {
            background-color: #f3f4f6;
            border-radius: 18px 18px 18px 4px;
        }

        .chat-button {
            transition: all 0.3s ease;
        }

        .chat-button:hover {
            transform: scale(1.1);
        }

        .suggestion-chip {
            transition: all 0.2s ease;
        }

        .suggestion-chip:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Custom scrollbar */
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #c5c7d0;
            border-radius: 10px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #a0a0a0;
        }

        /* Typing indicator animation */
        .typing-indicator span {
            animation: blink 1.4s infinite both;
        }

        .typing-indicator span:nth-child(2) {
            animation-delay: 0.2s;
        }

        .typing-indicator span:nth-child(3) {
            animation-delay: 0.4s;
        }

        @keyframes blink {
            0% { opacity: 0.1; }
            20% { opacity: 1; }
            100% { opacity: 0.1; }
        }
    </style>
</head>

<body class="bg-gray-100 font-sans min-h-screen">
    <!-- Chat Icon Button -->
    <div class="fixed bottom-6 right-6 z-50">
        <button id="chat-icon" class="chat-button flex items-center justify-center w-16 h-16 rounded-full bg-gradient-to-r from-indigo-500 to-purple-600 text-white shadow-lg hover:shadow-xl focus:outline-none">
            <i id="chat-icon-open" class="fas fa-code text-xl"></i>
            <i id="chat-icon-close" class="fas fa-times text-xl hidden"></i>
        </button>
    </div>

    <!-- Chat Container -->
    <div id="chat-container" class="chat-window hidden fixed bottom-24 right-6 w-80 md:w-96 bg-white rounded-2xl shadow-2xl overflow-hidden z-40">
        <!-- Chat Header -->
        <div class="bg-gradient-to-r from-indigo-500 to-purple-600 p-4 text-white flex justify-between items-center">
            <div class="flex items-center">
                <div class="bg-white p-2 rounded-full mr-3 text-indigo-600">
                    <i class="fas fa-code text-sm"></i>
                </div>
                <div>
                    <h2 class="font-bold">Code Helper</h2>
                    <div class="flex items-center text-xs opacity-80">
                        <span class="inline-block w-2 h-2 bg-green-400 rounded-full mr-1"></span>
                        <span>Online</span>
                    </div>
                </div>
            </div>
            <div class="flex">
                <button class="text-white opacity-70 hover:opacity-100 focus:outline-none ml-2" id="minimize-chat">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>

        <!-- Beta Banner -->
        <div class="bg-amber-50 border-b border-amber-100 px-4 py-2 flex items-center text-amber-800 text-xs">
            <i class="fas fa-flask mr-2"></i>
            <span>Beta version - Your feedback helps us improve!</span>
        </div>

        <!-- Chat Messages -->
        <div id="chat-messages" class="h-64 md:h-72 overflow-y-auto px-4 py-3 bg-gray-50 custom-scrollbar">
            <!-- Welcome message -->
            <div class="flex mb-4">
                <div class="w-8 h-8 rounded-full bg-indigo-100 flex items-center justify-center mr-2 flex-shrink-0">
                    <i class="fas fa-robot text-indigo-600 text-sm"></i>
                </div>
                <div class="message-bot text-gray-700 p-3 text-sm max-w-[80%]">
                    <p>Hi there! 👋 I'm your coding assistant. How can I help you today?</p>
                </div>
            </div>
            <!-- Messages will be appended here -->
        </div>

        <!-- Suggestions -->
        <div class="px-4 py-2 bg-white border-t border-gray-100">
            <p class="text-xs text-gray-500 mb-2">Popular questions:</p>
            <div class="flex flex-wrap gap-2">
                <span class="suggestion-chip px-3 py-1 text-xs bg-indigo-50 text-indigo-700 rounded-full cursor-pointer hover:bg-indigo-100" onclick="insertQuestion('What is JavaScript?')">What is JavaScript?</span>
                <span class="suggestion-chip px-3 py-1 text-xs bg-indigo-50 text-indigo-700 rounded-full cursor-pointer hover:bg-indigo-100" onclick="insertQuestion('How to center a div?')">How to center a div?</span>
                <span class="suggestion-chip px-3 py-1 text-xs bg-indigo-50 text-indigo-700 rounded-full cursor-pointer hover:bg-indigo-100" onclick="insertQuestion('What is a closure?')">What is a closure?</span>
            </div>
        </div>

        <!-- Input Area -->
        <div class="p-3 bg-white border-t border-gray-100">
            <div class="flex items-center bg-gray-50 rounded-full border border-gray-200 overflow-hidden">
                <input type="text" id="user-input" class="flex-1 py-2 px-4 bg-transparent focus:outline-none text-gray-700 text-sm" placeholder="Type your coding question..." />
                <button id="send-button" class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white p-2 rounded-full mx-1 h-8 w-8 flex items-center justify-center focus:outline-none hover:shadow-md">
                    <i class="fas fa-paper-plane text-xs"></i>
                </button>
            </div>
        </div>

        <!-- Feedback Section -->
        <div id="feedback" class="hidden p-3 bg-gray-50 border-t border-gray-100 text-center">
            <p class="text-xs text-gray-600 mb-2">Was this answer helpful?</p>
            <div class="flex justify-center gap-2">
                <button class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded-full text-xs flex items-center" onclick="handleFeedback(true)">
                    <i class="fas fa-thumbs-up mr-1"></i> Yes
                </button>
                <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-3 py-1 rounded-full text-xs flex items-center" onclick="handleFeedback(false)">
                    <i class="fas fa-thumbs-down mr-1"></i> No
                </button>
            </div>
        </div>

        <!-- Actions Footer -->
        <div class="flex justify-between p-3 bg-gray-50 border-t border-gray-100">
            <button class="text-xs flex items-center text-gray-500 hover:text-indigo-600" onclick="downloadChatHistory()">
                <i class="fas fa-download mr-1"></i> Save Chat
            </button>
            <button class="text-xs flex items-center text-gray-500 hover:text-indigo-600" onclick="clearChat()">
                <i class="fas fa-trash-alt mr-1"></i> Clear Chat
            </button>
        </div>
    </div>

    <script>
        const chatMessages = document.getElementById('chat-messages');
        const userInput = document.getElementById('user-input');
        const sendButton = document.getElementById('send-button');
        const chatContainer = document.getElementById('chat-container');
        const chatIcon = document.getElementById('chat-icon');
        const chatIconOpen = document.getElementById('chat-icon-open');
        const chatIconClose = document.getElementById('chat-icon-close');
        const minimizeChat = document.getElementById('minimize-chat');
        const feedbackDiv = document.getElementById('feedback');

        // Dummy FAQ for testing
        const faq = {
            "What is JavaScript?": "JavaScript is a versatile programming language primarily used for creating interactive elements on websites. It allows developers to implement complex features like form validation, animations, and dynamic content updates without page reloads.",
            "How to center a div?": "To center a div horizontally and vertically:\n\n```css\n.parent {\n  display: flex;\n  justify-content: center;\n  align-items: center;\n  height: 100vh; /* If you want to center in viewport */\n}\n```\n\nAlternatively, you can use Grid:\n\n```css\n.parent {\n  display: grid;\n  place-items: center;\n  height: 100vh;\n}\n```",
            "What is a closure?": "A closure in JavaScript is when a function retains access to its lexical scope even when the function is executed outside that scope. This allows a function to remember and access variables from the outer function that created it, even after the outer function has finished executing.",
            "What are promises?": "Promises in JavaScript are objects representing the eventual completion or failure of an asynchronous operation. They provide a cleaner way to handle asynchronous operations compared to callbacks, helping avoid 'callback hell'. A Promise can be in one of three states: pending, fulfilled, or rejected."
        };

        // Toggle chat visibility
        chatIcon.addEventListener('click', () => {
            chatContainer.classList.toggle('hidden');
            chatIconOpen.classList.toggle('hidden');
            chatIconClose.classList.toggle('hidden');
        });

        // Minimize chat
        minimizeChat.addEventListener('click', () => {
            chatContainer.classList.add('hidden');
            chatIconOpen.classList.remove('hidden');
            chatIconClose.classList.add('hidden');
        });

        // Insert suggested question
        function insertQuestion(question) {
            userInput.value = question;
            userInput.focus();
        }

        // Create and append a user message
        function appendUserMessage(message) {
            const msgDiv = document.createElement('div');
            msgDiv.className = 'flex flex-row-reverse mb-4';
            msgDiv.innerHTML = `
                <div class="message-user text-white p-3 text-sm max-w-[80%]">
                    <p>${message}</p>
                </div>
            `;
            chatMessages.appendChild(msgDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        // Create and append a bot message
        function appendBotMessage(message) {
            const msgDiv = document.createElement('div');
            msgDiv.className = 'flex mb-4';
            
            // Convert markdown-style code blocks to HTML
            let formattedMessage = message;
            if (message.includes('```')) {
                formattedMessage = message.replace(/```(\w*)\n([\s\S]*?)\n```/g, 
                    '<pre class="bg-gray-800 text-gray-200 p-2 rounded text-xs overflow-x-auto my-2">$2</pre>');
            }
            
            msgDiv.innerHTML = `
                <div class="w-8 h-8 rounded-full bg-indigo-100 flex items-center justify-center mr-2 flex-shrink-0">
                    <i class="fas fa-robot text-indigo-600 text-sm"></i>
                </div>
                <div class="message-bot text-gray-700 p-3 text-sm max-w-[80%]">
                    ${formattedMessage}
                </div>
            `;
            chatMessages.appendChild(msgDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        // Create and append the typing indicator
        function showTypingIndicator() {
            const typingDiv = document.createElement('div');
            typingDiv.id = 'typing-indicator';
            typingDiv.className = 'flex mb-4';
            typingDiv.innerHTML = `
                <div class="w-8 h-8 rounded-full bg-indigo-100 flex items-center justify-center mr-2 flex-shrink-0">
                    <i class="fas fa-robot text-indigo-600 text-sm"></i>
                </div>
                <div class="message-bot text-gray-700 p-3 text-sm typing-indicator">
                    <span>•</span>
                    <span>•</span>
                    <span>•</span>
                </div>
            `;
            chatMessages.appendChild(typingDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        // Remove typing indicator
        function removeTypingIndicator() {
            const typingIndicator = document.getElementById('typing-indicator');
            if (typingIndicator) {
                typingIndicator.remove();
            }
        }

        // Handle sending a message
        sendButton.addEventListener('click', sendMessage);
        userInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });

        function sendMessage() {
            const userMessage = userInput.value.trim();
            if (userMessage) {
                appendUserMessage(userMessage);
                userInput.value = ''; // Clear input field
                
                // Show typing indicator
                showTypingIndicator();
                
                // Simulate response delay
                setTimeout(() => {
                    removeTypingIndicator();
                    
                    // Check FAQ first
                    if (faq[userMessage]) {
                        appendBotMessage(faq[userMessage]);
                    } else {
                        // Dummy response in place of an API call
                        appendBotMessage("I don't have a specific answer for that query. In a real implementation, this would connect to an API to provide accurate responses to your coding questions.");
                    }
                    
                    // Show feedback buttons
                    feedbackDiv.classList.remove('hidden');
                }, 1500);
            }
        }

        // Handle feedback
        function handleFeedback(isHelpful) {
            const feedbackMessage = isHelpful 
                ? "Thank you for your positive feedback! 😊" 
                : "Thanks for letting us know. We'll work to improve our responses. 🙏";
            
            appendBotMessage(feedbackMessage);
            feedbackDiv.classList.add('hidden'); // Hide feedback after response
        }

        // Download chat history
        function downloadChatHistory() {
            let chatHistory = '--- Coding Forum Chat History ---\n\n';
            const messages = chatMessages.querySelectorAll('.message-user, .message-bot');
            
            messages.forEach((msg, index) => {
                const isUser = msg.classList.contains('message-user');
                chatHistory += `${isUser ? 'You' : 'Bot'}: ${msg.innerText.trim()}\n\n`;
            });

            const blob = new Blob([chatHistory], { type: 'text/plain' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'coding_chat_history.txt';
            a.click();
            URL.revokeObjectURL(url);
        }

        // Clear chat history
        function clearChat() {
            // Remove all messages except the welcome message
            while (chatMessages.children.length > 1) {
                chatMessages.removeChild(chatMessages.lastChild);
            }
            feedbackDiv.classList.add('hidden');
        }
    </script>
</body>

</html>