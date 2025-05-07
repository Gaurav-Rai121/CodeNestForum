<!-- Horizontal Navbar -->
<header class="fixed top-0 right-0 left-20 md:left-72 z-40 h-16">
    <!-- Glass Morphism Effect -->
    <div
        class="absolute inset-0 bg-gray-900/80 backdrop-blur-xl border-b border-purple-500/20 shadow-lg shadow-purple-500/5">
    </div>

    <!-- Wireframe Grid Background -->
    <div class="absolute inset-0 opacity-5">
        <div class="h-full w-full"
            style="background-image: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 20px 20px;">
        </div>
    </div>

    <!-- Glowing Line at Bottom -->
    <div
        class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-purple-600/50 via-blue-500/50 to-purple-600/50">
    </div>

    <!-- Navbar Content -->
    <div class="relative flex items-center justify-between h-16 px-4 md:px-8 z-10">
        <!-- Left Side (Logo or Title) -->
        <div class="flex items-center md:hidden">
            <button id="mobileMenuToggle"
                class="flex items-center justify-center w-10 h-10 rounded-lg text-purple-400 hover:text-purple-300 transition-all duration-300 focus:outline-none">
                <i class="fas fa-bars text-lg"></i>
            </button>
        </div>

        <!-- Center side -->
        <div class="flex-1 max-w-2xl mx-auto px-2 md:px-0">
            <div class="relative group">
                <!-- Search Container -->
                <div
                    class="relative flex items-center h-10 w-full rounded-full bg-gray-800/50 border border-purple-500/20 backdrop-blur-sm overflow-hidden group-focus-within:border-purple-500/40 transition-all duration-300">
                    <!-- Search Icon -->
                    <div
                        class="flex items-center justify-center w-12 h-10 text-gray-400 group-focus-within:text-purple-400 transition-colors duration-300">
                        <i class="fas fa-search"></i>
                    </div>

                    <!-- Search Input -->
                    <input type="text" placeholder="Search Code Nest..."
                        class="w-full h-full bg-transparent border-none outline-none text-sm text-gray-200 placeholder-gray-500">

                    <!-- Keyboard Shortcut Badge -->
                    <div class="hidden md:flex items-center mr-3">
                        <span
                            class="flex items-center justify-center px-2 py-0.5 text-xs text-gray-400 bg-gray-800 rounded">
                            <span class="mr-1">⌘</span>K
                        </span>
                    </div>
                </div>

                <!-- Search Glow Effect -->
                <div
                    class="absolute -inset-0.5 bg-gradient-to-r from-purple-600 to-blue-500 rounded-full opacity-0 group-focus-within:opacity-20 blur-sm transition-opacity duration-300">
                </div>
            </div>
        </div>



        <!-- Right Side (User/Settings/Icons) -->
        <div class="flex items-center space-x-3 md:space-x-4">
            <!-- Notifications Bell -->
            <button class="nav-icon-btn group relative">
                <div class="nav-icon-inner">
                    <i class="fas fa-bell"></i>
                    <!-- Notification Badge -->
                    <span
                        class="absolute -top-1 -right-1 w-4 h-4 bg-red-500 rounded-full flex items-center justify-center text-xs text-white font-bold">3</span>
                </div>
            </button>

            <!-- Only show these buttons when not logged in -->
            <div class="hidden auth-buttons">
                <!-- Toggle this with JS when logged out -->
                <!-- Login Button -->
                <button
                    class="hidden md:flex items-center justify-center h-9 px-4 rounded-lg bg-gray-800 border border-purple-500/30 text-gray-200 text-sm font-medium hover:bg-purple-600/20 transition-all duration-300">
                    Login
                </button>

                <!-- Sign Up Button - Only visible on desktop -->
                <button
                    class="hidden md:flex items-center justify-center h-9 px-4 rounded-lg bg-gradient-to-r from-purple-600 to-blue-500 text-white text-sm font-medium hover:from-purple-500 hover:to-blue-400 transition-all duration-300 shadow-lg shadow-purple-500/20">
                    Sign Up
                </button>

                <!-- Combined Button - Only visible on mobile -->
                <button
                    class="md:hidden flex items-center justify-center h-9 px-4 rounded-lg bg-gradient-to-r from-purple-600 to-blue-500 text-white text-sm font-medium shadow-lg shadow-purple-500/20">
                    <i class="fas fa-sign-in-alt mr-2"></i> Login
                </button>
            </div>

            <!-- User Profile - Show when logged in -->
            <div class="relative user-profile">
                <!-- Toggle this with JS when logged in -->
                <!-- User Avatar Button -->
                <button id="userMenuButton" class="flex items-center space-x-2 focus:outline-none">
                    <!-- Avatar Container -->
                    <div class="relative group">
                        <!-- Glowing Circle -->
                        <div
                            class="absolute -inset-0.5 bg-gradient-to-r from-purple-600 to-blue-500 rounded-full opacity-70 blur-sm">
                        </div>

                        <!-- Avatar Image -->
                        <div
                            class="relative w-9 h-9 rounded-full overflow-hidden border-2 border-gray-800 transition-all duration-300">
                            <img src="/api/placeholder/200/200" alt="User Avatar" class="w-full h-full object-cover">

                            <!-- Online Status Indicator -->
                            <div
                                class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-green-500 rounded-full border-2 border-gray-800">
                            </div>
                        </div>
                    </div>

                    <!-- Username - Only shown on larger screens -->
                    <div class="hidden md:flex flex-col items-start">
                        <span class="text-sm font-medium text-gray-200">Alex Morgan</span>
                        <span class="text-xs text-purple-400">Premium</span>
                    </div>

                    <!-- Dropdown Arrow -->
                    <div class="hidden md:flex items-center text-gray-400">
                        <i class="fas fa-chevron-down text-xs transition-transform duration-300" id="userMenuArrow"></i>
                    </div>
                </button>

                <!-- User Dropdown Menu -->
                <div id="userDropdown"
                    class="absolute right-0 mt-2 w-60 rounded-xl bg-gray-900/95 backdrop-blur-xl border border-purple-500/20 shadow-xl shadow-purple-500/10 overflow-hidden transform origin-top-right scale-95 opacity-0 invisible transition-all duration-200 z-50">
                    <!-- User Info Section -->
                    <div class="px-4 py-3 border-b border-gray-800">
                        <div class="flex items-center space-x-3">
                            <!-- User Avatar -->
                            <div class="relative w-10 h-10 rounded-lg overflow-hidden border border-gray-800">
                                <img src="/api/placeholder/200/200" alt="User Avatar"
                                    class="w-full h-full object-cover">
                            </div>

                            <!-- User Info -->
                            <div class="flex flex-col">
                                <span class="text-sm font-semibold text-gray-200">Alex Morgan</span>
                                <span class="text-xs text-gray-400">alex@example.com</span>
                            </div>
                        </div>

                        <!-- Subscription Badge -->
                        <!-- <div class="mt-2 flex items-center">
                            <span
                                class="text-xs px-2 py-0.5 rounded-full bg-gradient-to-r from-purple-600/20 to-blue-500/20 text-purple-300 border border-purple-500/20">
                                Premium Membership
                            </span>
                            <span class="ml-2 text-xs text-gray-400">· 267 days left</span>
                        </div> -->
                    </div>

                    <!-- Menu Items -->
                    <div class="py-1">
                        <!-- Profile -->
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-user"></i>
                            <span>Profile</span>
                        </a>

                        <!-- Dashboard -->
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>

                        <!-- Settings -->
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-cog"></i>
                            <span>Settings</span>
                        </a>

                        <!-- Divider -->
                        <div class="border-t border-gray-800 my-1"></div>

                        <!-- Dark Mode Toggle -->
                        <button class="dropdown-item justify-between">
                            <div>
                                <i class="fas fa-moon"></i>
                                <span>Dark Mode</span>
                            </div>
                            <!-- Toggle Switch -->
                            <div class="relative w-10 h-5 bg-gray-700 rounded-full overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-blue-500"></div>
                                <div
                                    class="absolute right-0 top-0 bottom-0 w-5 h-5 bg-white rounded-full transform translate-x-0 border-2 border-gray-700">
                                </div>
                            </div>
                        </button>

                        <!-- Divider -->
                        <div class="border-t border-gray-800 my-1"></div>

                        <!-- Logout -->
                        <a href="../../Formhandlers/auth/logout.php" class="dropdown-item text-red-400 hover:text-red-300">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>



<style>



/* Custom Navbar Icon Button */
.nav-icon-btn {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    border-radius: 10px;
    color: #94a3b8;
    transition: all 0.3s;
}

.nav-icon-btn:hover {
    color: #e2e8f0;
}

.nav-icon-inner {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    border-radius: 10px;
    background: linear-gradient(145deg, #151824, #121622);
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    transition: all 0.3s;
}

.nav-icon-btn:hover .nav-icon-inner {
    background: linear-gradient(145deg, rgba(139, 92, 246, 0.2), rgba(59, 130, 246, 0.2));
    box-shadow: 0 4px 10px rgba(139, 92, 246, 0.15);
    transform: translateY(-2px);
}

/* Dropdown Item Styling */
.dropdown-item {
    display: flex;
    align-items: center;
    padding: 0.625rem 1rem;
    color: #e2e8f0;
    font-size: 0.875rem;
    transition: all 0.2s;
}

.dropdown-item:hover {
    background: linear-gradient(90deg, rgba(139, 92, 246, 0.1), rgba(59, 130, 246, 0.1));
}

.dropdown-item i {
    width: 1.25rem;
    margin-right: 0.75rem;
    color: #94a3b8;
    transition: color 0.2s;
}

.dropdown-item:hover i {
    color: #a78bfa;
}

/* Show/Hide User Dropdown */
#userDropdown.active {
    transform: scale(100%);
    opacity: 1;
    visibility: visible;
}

/* User Menu Arrow Animation */
#userMenuArrow.active {
    transform: rotate(180deg);
}

</style>


<script>


        // Toggle the user dropdown menu
        userMenuButton?.addEventListener('click', () => {
        userDropdown.classList.toggle('active');
        userMenuArrow?.classList.toggle('active');
    });
    
    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        if (!userMenuButton?.contains(event.target) && !userDropdown?.contains(event.target)) {
            userDropdown?.classList.remove('active');
            userMenuArrow?.classList.remove('active');
        }
    });
</script>