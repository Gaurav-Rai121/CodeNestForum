            <!-- Modern Futuristic Vertical Navbar -->
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

            <div class="flex  bg-gradient-to-br from-gray-900 to-black">
                <!-- Futuristic Vertical Navbar -->
                <aside id="sidebar" class="fixed inset-y-0 left-0 z-50 w-20 md:w-72 transform transition-all duration-500 ease-out">
                    <!-- Glowing Border Effect -->
                    <div class="absolute inset-0 bg-gradient-to-b from-purple-600/20 to-blue-500/20 backdrop-blur-xl rounded-r-3xl"></div>
                    <div class="absolute inset-0 bg-gray-900/80 backdrop-blur-xl rounded-r-3xl"></div>
                    
                    <!-- Glass Panel Effect -->
                    <div class="absolute inset-0.5 backdrop-blur-3xl rounded-r-3xl border-r border-r-purple-500/20 overflow-hidden">
                        <!-- Animated Background Elements -->
                        <div class="absolute -inset-1 opacity-10">
                            <div class="absolute top-1/4 -left-12 w-24 h-24 bg-purple-500 rounded-full blur-xl animate-pulse"></div>
                            <div class="absolute top-3/4 -right-12 w-32 h-32 bg-blue-500 rounded-full blur-xl animate-pulse delay-700"></div>
                            <div class="absolute top-1/2 -left-16 w-36 h-36 bg-indigo-500 rounded-full blur-xl animate-pulse delay-1000"></div>
                        </div>
                        
                        <!-- Wireframe Grid Background -->
                        <div class="absolute inset-0 opacity-5">
                            <div class="h-full w-full" style="background-image: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 20px 20px;"></div>
                        </div>
                    </div>
                    
                    <!-- Content Container -->
                    <div class="relative h-full flex flex-col justify-between pt-8 pb-6 px-4 z-10">
                        <!-- Logo Section -->
                        <div class="flex flex-col items-center justify-center space-y-3 mb-10">
                            <!-- Orbiting Logo Effect -->
                            <div class="relative group w-16 h-16 flex items-center justify-center">
                                <!-- Orbiting Circles -->
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                    <div class="w-full h-full border-2 border-purple-500/30 rounded-full animate-reverse-spin"></div>
                                    <div class="absolute w-16 h-16 border-2 border-dashed border-blue-500/30 rounded-full animate-spin-slow"></div>
                                </div>
                                
                                <!-- Central Logo -->
                                <div class="relative w-12 h-12 rounded-xl bg-gradient-to-br from-purple-600 to-blue-500 shadow-2xl shadow-purple-500/30 overflow-hidden flex items-center justify-center transform transition-all duration-500 group-hover:scale-110 group-hover:rotate-12 group-hover:rounded-lg z-10">
                                    <div class="absolute inset-0.5 bg-gray-900 rounded-lg flex items-center justify-center">
                                        <!-- You can use a text logo or an image -->
                                        <span class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-blue-400">CN</span>
                                        <!-- Or use image: -->
                                        <!-- <img src="../../assets/logo/logo4.jpg" alt="Code Nest Logo" class="w-10 h-10 rounded object-cover"> -->
                                    </div>
                                    <!-- Light beam effect on hover -->
                                    <div class="absolute top-0 -left-full w-full h-full bg-gradient-to-r from-transparent via-white/20 to-transparent transform group-hover:translate-x-full transition-all duration-1000 ease-in-out"></div>
                                </div>
                            </div>
                            
                            <!-- Brand Name -->
                            <div class="hidden md:block text-center">
                                <h1 class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-blue-400">
                                    Code Nest
                                </h1>
                                <div class="text-xs text-gray-400 mt-1 tracking-wider">DEVELOP • INNOVATE</div>
                            </div>
                        </div>
                        
                        <!-- Navigation Links -->
                        <nav class="flex-1 mt-4 space-y-1.5">
                            <!-- Home - Active Item -->
                            <a href="home.php" class="nav-link active">
                                <div class="indicator"></div>
                                <div class="icon-container">
                                    <i class="fas fa-home"></i>
                                </div>
                                <span class="link-text">Home</span>
                            </a>
                            
                            <!-- Questions -->
                            <a href="questions.php" class="nav-link">
                                <div class="indicator"></div>
                                <div class="icon-container">
                                    <i class="fas fa-question-circle"></i>
                                </div>
                                <span class="link-text">Questions</span>
                            </a>
                            
                            <!-- Blog -->
                            <a href="blog.php" class="nav-link">
                                <div class="indicator"></div>
                                <div class="icon-container">
                                    <i class="fas fa-blog"></i>
                                </div>
                                <span class="link-text">Blog</span>
                            </a>
                            
                            <!-- Store -->
                            <a href="store.php" class="nav-link">
                                <div class="indicator"></div>
                                <div class="icon-container">
                                    <i class="fas fa-store"></i>
                                </div>
                                <span class="link-text">Store</span>
                            </a>
                            
                            <!-- Jobs -->
                            <a href="jobs.php" class="nav-link">
                                <div class="indicator"></div>
                                <div class="icon-container">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <span class="link-text">Jobs</span>
                            </a>
                            
                            <!-- About -->
                            <a href="about.php" class="nav-link">
                                <div class="indicator"></div>
                                <div class="icon-container">
                                    <i class="fas fa-info-circle"></i>
                                </div>
                                <span class="link-text">About</span>
                            </a>
                            
                            <!-- Contact -->
                            <a href="contact.php" class="nav-link">
                                <div class="indicator"></div>
                                <div class="icon-container">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <span class="link-text">Contact</span>
                            </a>
                        </nav>
                        
                        <!-- Toggle Button at Bottom -->
                        <div class="flex justify-center md:justify-end mt-6">
                            <button id="sidebarToggle" class="toggle-btn group">
                                <div class="toggle-icon">
                                    <i class="fas fa-chevron-left transition-transform duration-300" id="toggleIcon"></i>
                                </div>
                            </button>
                        </div>
                    </div>
                </aside>
                
                <!-- Mobile Header -->
                <div class="fixed top-0 left-0 right-0 z-40 bg-gray-900/90 backdrop-blur-md border-b border-purple-500/20 md:hidden">
                    <div class="flex items-center justify-between px-4 py-4">
                        <button id="mobileMenuToggle" class="p-2 rounded-lg text-purple-400 hover:text-purple-300 transition-colors">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                        
                        <div class="flex items-center space-x-3">
                            <div class="relative w-8 h-8 rounded-lg bg-gradient-to-br from-purple-600 to-blue-500 flex items-center justify-center">
                                <div class="absolute inset-0.5 bg-gray-900 rounded-md flex items-center justify-center">
                                    <span class="text-sm font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-blue-400">CN</span>
                                </div>
                            </div>
                            <h1 class="text-lg font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-blue-400">
                                Code Nest
                            </h1>
                        </div>
                        
                        <div class="w-10">
                            <!-- Empty div for flex spacing -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Backdrop for mobile sidebar -->
            <div id="backdropOverlay" class="hidden fixed inset-0 bg-black bg-opacity-70 backdrop-blur-sm z-30 md:hidden"></div>

            <style>
            /* Base Styles */
            body {
                background-color: #0f1118;
                overflow-x: hidden;
            }

            /* Animation Keyframes */
            @keyframes spin-slow {
                from { transform: rotate(0deg); }
                to { transform: rotate(360deg); }
            }

            @keyframes reverse-spin {
                from { transform: rotate(0deg); }
                to { transform: rotate(-360deg); }
            }

            @keyframes float {
                0% { transform: translateY(0px); }
                50% { transform: translateY(-10px); }
                100% { transform: translateY(0px); }
            }

            /* Custom Utilities */
            .animate-spin-slow {
                animation: spin-slow 10s linear infinite;
            }

            .animate-reverse-spin {
                animation: reverse-spin 15s linear infinite;
            }

            .animate-float {
                animation: float 3s ease-in-out infinite;
            }

            /* Navigation Link Styling */
            .nav-link {
                position: relative;
                display: flex;
                align-items: center;
                padding: 0.75rem 1rem;
                margin-bottom: 0.5rem;
                border-radius: 0.75rem;
                color: #94a3b8;
                transition: all 0.3s;
                overflow: hidden;
            }

            .nav-link:before {
                content: '';
                position: absolute;
                left: 0;
                top: 0;
                height: 100%;
                width: 0;
                background: linear-gradient(90deg, rgba(139, 92, 246, 0.1), rgba(59, 130, 246, 0.1));
                transition: width 0.4s ease;
                z-index: -1;
            }

            .nav-link:hover {
                color: #e2e8f0;
            }

            .nav-link:hover:before {
                width: 100%;
            }

            .nav-link.active {
                background: linear-gradient(90deg, rgba(139, 92, 246, 0.2), rgba(59, 130, 246, 0.2));
                color: #f8fafc;
                box-shadow: 0 4px 15px rgba(139, 92, 246, 0.15);
            }

            .nav-link .indicator {
                position: absolute;
                left: 0;
                top: 50%;
                transform: translateY(-50%);
                width: 3px;
                height: 0;
                background: linear-gradient(to bottom, #a855f7, #3b82f6);
                border-radius: 0 4px 4px 0;
                transition: height 0.3s ease;
            }

            .nav-link.active .indicator {
                height: 60%;
            }

            .nav-link .icon-container {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 2.5rem;
                height: 2.5rem;
                border-radius: 0.75rem;
                background: linear-gradient(145deg, #151824, #121622);
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
                margin-right: 0.75rem;
                transition: all 0.3s;
            }

            .nav-link:hover .icon-container,
            .nav-link.active .icon-container {
                background: linear-gradient(145deg, rgba(139, 92, 246, 0.3), rgba(59, 130, 246, 0.3));
                box-shadow: 0 4px 15px rgba(139, 92, 246, 0.25);
                transform: translateY(-2px);
            }

            .nav-link .link-text {
                display: none;
                font-weight: 500;
                transition: all 0.3s;
            }

            .toggle-btn {
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 3rem;
                height: 3rem;
                border-radius: 0.75rem;
                background: linear-gradient(145deg, rgba(139, 92, 246, 0.5), rgba(59, 130, 246, 0.5));
                transition: all 0.3s;
                overflow: hidden;
            }

            .toggle-btn:hover {
                box-shadow: 0 10px 15px -3px rgba(139, 92, 246, 0.3);
                transform: translateY(-2px);
            }

            .toggle-btn:before {
                content: '';
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, rgba(139, 92, 246, 0.7), rgba(59, 130, 246, 0.7));
                opacity: 0;
                transition: opacity 0.3s;
            }

            .toggle-btn:hover:before {
                opacity: 1;
            }

            .toggle-icon {
                position: relative;
                color: #ffffff;
                font-size: 0.875rem;
                z-index: 10;
            }

            /* Responsive Adjustments */
            @media (min-width: 768px) {
                #sidebar {
                    width: 18rem;
                }
                
                #sidebar.collapsed {
                    width: 5rem;
                }
                
                .nav-link .link-text {
                    display: block;
                }
                
                #sidebar.collapsed .link-text,
                #sidebar.collapsed h1, 
                #sidebar.collapsed .text-xs {
                    display: none;
                }
                
                #sidebar.collapsed #toggleIcon {
                    transform: rotate(180deg);
                }
            }
            </style>

            <script>
            document.addEventListener('DOMContentLoaded', function() {
                const sidebar = document.getElementById('sidebar');
                const mainContent = document.getElementById('mainContent');
                const mobileMenuToggle = document.getElementById('mobileMenuToggle');
                const sidebarToggle = document.getElementById('sidebarToggle');
                const toggleIcon = document.getElementById('toggleIcon');
                const backdropOverlay = document.getElementById('backdropOverlay');

                let sidebarCollapsed = false;

                // Desktop sidebar toggle
                sidebarToggle?.addEventListener('click', () => {
                    sidebarCollapsed = !sidebarCollapsed;

                    if (sidebarCollapsed) {
                        sidebar.classList.add('collapsed');
                        mainContent?.classList.add('expanded');
                        toggleIcon.classList.add('transform', 'rotate-180');
                    } else {
                        sidebar.classList.remove('collapsed');
                        mainContent?.classList.remove('expanded');
                        toggleIcon.classList.remove('transform', 'rotate-180');
                    }
                });

                // Mobile menu toggle
                mobileMenuToggle.addEventListener('click', () => {
                    if (sidebar.classList.contains('-translate-x-full')) {
                        sidebar.classList.remove('-translate-x-full');
                        backdropOverlay.classList.remove('hidden');
                    } else {
                        sidebar.classList.add('-translate-x-full');
                        backdropOverlay.classList.add('hidden');
                    }
                });

                // Backdrop click closes sidebar on mobile
                backdropOverlay?.addEventListener('click', () => {
                    sidebar.classList.add('-translate-x-full');
                    backdropOverlay.classList.add('hidden');
                });

                // Handle window resize
                window.addEventListener('resize', () => {
                    if (window.innerWidth >= 768) {
                        sidebar.classList.remove('-translate-x-full');
                        backdropOverlay.classList.add('hidden');
                    } else if (!sidebar.classList.contains('-translate-x-full')) {
                        sidebar.classList.add('-translate-x-full');
                    }
                });

                // Initialize for mobile on page load
                if (window.innerWidth < 768) {
                    sidebar.classList.add('-translate-x-full');
                }
                
                // Add hover effect to nav links
                const navLinks = document.querySelectorAll('.nav-link');
                navLinks.forEach(link => {
                    link.addEventListener('mouseenter', function() {
                        // Highlight effect logic can be added here if needed
                    });
                });
            });
            </script>   