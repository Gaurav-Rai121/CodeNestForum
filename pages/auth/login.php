<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Code Nest Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-600 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="home.php" class="flex items-center text-white text-2xl font-bold"> <!-- Corrected link -->
                <img src="logo.png" alt="Code Nest Forum Logo" class="w-8 h-8 mr-2"> <!-- Replace with your logo path -->
                Code Nest Forum
            </a>
            <ul class="flex space-x-4">
                <li><a href="home.php" class="text-white hover:text-blue-200">Home</a></li>
                <li><a href="signup.php" class="text-white hover:text-blue-200">Sign Up</a></li>
            </ul>
        </div>
    </nav>

    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-10 rounded-lg shadow-lg w-full max-w-lg">
            <h2 class="text-2xl font-semibold text-center mb-6">Login to Your Account</h2>
            <form action="./Formhandlers/login/handlelogin.php" method="post"> <!-- Ensure this points to your PHP script -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                    <input type="email" name="email" id="email" required placeholder="Enter your email" 
                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 p-3">
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                    <input type="password" name="password" id="password" required placeholder="Enter your password" 
                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 p-3">
                </div>
                <div>
                    <input type="submit" value="Login" 
                           class="w-full bg-blue-600 text-white font-semibold rounded-lg p-3 hover:bg-blue-500 transition">
                </div>
            </form>
            <p class="mt-4 text-center">Don't have an account? <a href="signup.php" class="text-blue-600 hover:underline">Sign up here</a></p>
        </div>
    </div>
</body>
</html>
