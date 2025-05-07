
<?php
session_start();
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }


?>

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
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-15px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    .animate-float {
        animation: float 6s ease-in-out infinite;
    }

    .animate-float-slow {
        animation: float 8s ease-in-out infinite;
    }

    .animate-float-slower {
        animation: float 10s ease-in-out infinite;
    }

    .error-card {
        background-color: #FFFFFF;
        padding: 24px;
        border-radius: 14px;
        border-left: 5px solid #f44336;
        display: flex;
        align-items: flex-start;
        gap: 16px;
        box-shadow: 0 8px 24px rgba(244, 67, 54, 0.12);
        animation: slideDown 0.5s ease, pulseAttention 2s ease 0.5s;
    }

    .error-icon-container {
        flex-shrink: 0;
        width: 44px;
        height: 44px;
        border-radius: 12px;
        background: linear-gradient(135deg, #f44336 0%, #f44336 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 24px;
        box-shadow: 0 6px 16px rgba(244, 67, 54, 0.2);
    }


    .error-content {
        flex-grow: 1;
    }

    .error-content h4 {
        color: var(--danger-dark);
        font-size: 17px;
        margin-bottom: 6px;
        font-weight: 600;
    }

    .error-content p {
        color: var(--text-secondary);
        font-size: 15px;
        line-height: 1.6;
    }

    :root {
        --error-primary: #FF3B5C;
        --error-secondary: #FF768C;
        --error-bg: #FFF1F3;
        --text-primary: #2D3748;
        --text-secondary: #718096;
        --surface: #FFFFFF;
        --shadow-sm: 0 4px 6px rgba(0, 0, 0, 0.04);
        --shadow-md: 0 10px 15px rgba(255, 59, 92, 0.08);
        --shadow-lg: 0 15px 25px rgba(255, 59, 92, 0.12);
    }

    .error-notification {
        padding: 8px;
        max-width: 450px;
        margin: 0 auto;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
    }

    .error-card {
        background-color: var(--surface);
        padding: 20px;
        border-radius: 16px;
        border-left: 4px solid var(--error-primary);
        display: flex;
        align-items: flex-start;
        gap: 16px;
        box-shadow: var(--shadow-lg);
        position: relative;
        overflow: hidden;
        animation: slideIn 0.4s cubic-bezier(0.16, 1, 0.3, 1), shimmer 3s infinite;
    }

    .error-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 3px;
        background: linear-gradient(90deg, var(--error-primary), var(--error-secondary));
        z-index: 1;
    }

    .error-card::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, 
            transparent, 
            rgba(255, 255, 255, 0.08), 
            transparent
        );
        animation: shine 3s infinite;
    }

    .error-icon-wrapper {
        position: relative;
    }

    .error-icon-wrapper::before {
        content: '';
        position: absolute;
        width: 52px;
        height: 52px;
        background: rgba(255, 59, 92, 0.08);
        border-radius: 12px;
        transform: rotate(45deg);
        z-index: 0;
        animation: pulse 2s infinite;
    }

    .error-icon-container {
        position: relative;
        z-index: 1;
        width: 48px;
        height: 48px;
        border-radius: 12px;
        background: linear-gradient(135deg, var(--error-primary) 0%, var(--error-secondary) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 8px 16px rgba(255, 59, 92, 0.25);
    }

    .error-content {
        flex-grow: 1;
        padding-right: 16px;
    }

    .error-content h4 {
        color: var(--text-primary);
        font-size: 17px;
        font-weight: 600;
        margin: 0 0 8px 0;
        letter-spacing: -0.3px;
    }

    .error-content p {
        color: var(--text-secondary);
        font-size: 15px;
        line-height: 1.6;
        margin: 0;
    }

    .error-actions {
        align-self: flex-start;
    }

    .dismiss-btn {
        background: none;
        border: none;
        cursor: pointer;
        color: var(--text-secondary);
        padding: 4px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s;
    }

    .dismiss-btn:hover {
        background-color: rgba(0, 0, 0, 0.04);
        color: var(--text-primary);
    }

    @keyframes slideIn {
        from {
            transform: translateY(-20px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes pulse {
        0% {
            opacity: 0.6;
            transform: rotate(45deg) scale(0.9);
        }
        50% {
            opacity: 0.3;
            transform: rotate(45deg) scale(1.1);
        }
        100% {
            opacity: 0.6;
            transform: rotate(45deg) scale(0.9);
        }
    }

    @keyframes shine {
        0% {
            left: -100%;
        }
        20% {
            left: 100%;
        }
        100% {
            left: 100%;
        }
    }

    @keyframes shimmer {
        0% {
            box-shadow: var(--shadow-lg);
        }
        50% {
            box-shadow: 0 15px 25px rgba(255, 59, 92, 0.18);
        }
        100% {
            box-shadow: var(--shadow-lg);
        }
    }
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

            <?php 
            $error = isset($_GET['error']) ? urldecode($_GET['error']) : '';
            if($error){
              echo'               <div class="mr-6 error-notification">
                    <div class="error-card">
                        <div class="error-icon-wrapper">
                            <div class="error-icon-container">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 8V12M12 16H12.01M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <div class="error-content">
                            <h4>Authentication Failed</h4>
                            <p>'.$error.'</p>
                        </div>
                        <div class="error-actions">
                            <button class="dismiss-btn">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>';
            }
            ?>
 

                <form method="post" action='../../Formhandlers/signup/handlesignup.php' id="signupForm"
                    class="space-y-8" >
                    <!-- Step 1: Basic Info -->
                    <div class="space-y-6">
                        <h2 class="text-2xl font-bold text-gray-800">Create your account</h2>
                        <p class="text-gray-600">Join our community and start your coding journey</p>
                        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">  
                        <div class="space-y-4">
                            <div>
                                <label for="username"
                                    class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-user text-gray-400"></i>
                                    </div>
                                    <input type="text" id="username" name="username"
                                        class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 bg-gray-50 py-3 px-4"
                                        placeholder="Choose a unique username">
                                </div>
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-envelope text-gray-400"></i>
                                    </div>
                                    <input type="email" id="email" name="email"
                                        class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 bg-gray-50 py-3 px-4"
                                        placeholder="your@email.com">
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
                                <label for="password"
                                    class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
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
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-lock text-gray-400"></i>
                                    </div>
                                    <input type="password" id="confirm-password" name="confirm-password"
                                        class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 bg-gray-50 py-3 px-4"
                                        placeholder="Confirm your password">
                                </div>
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
                                <label for="terms" class="ml-2 block text-sm text-gray-700">I agree to the <a href="#"
                                        class="text-blue-600 hover:text-blue-500">Terms and Conditions</a>
                                    and <a href="#" class="text-blue-600 hover:text-blue-500">Privacy
                                        Policy</a></label>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation buttons -->
                    <div class="flex justify-start pt-4">

                        <button type="submit"
                            class="px-6 py-3 gradient-bg text-white rounded-lg hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors custom-shadow">
                            Create Account
                        </button>
                    </div>

                    <?php
                    require_once __DIR__ . '/../../vendor/autoload.php'; // Adjust path as needed

                    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../'); // Load from project root
                    $dotenv->load();
                    ?>

                    <div class="g-recaptcha" data-sitekey="<?php echo htmlspecialchars($_ENV['RECAPTCHA_SITE_KEY']); ?>"></div>


                </form>

                <div class="mt-6 text-center">
                    <p class="text-gray-600">Already have an account? <a href="../../pages/auth/login.php"
                            class="text-blue-600 hover:text-blue-500 font-medium">Sign in</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


</body>

</html>