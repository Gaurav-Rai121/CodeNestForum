<?php
session_start();

if(!isset( $_SESSION['sno'])){
   header('location:../../login.php');
}



?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saved Items</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
       header :hover .logo{
        animation: rotate360 0.8s ease-in-out;
        }



    </style>
</head>
<body class="bg-gray-100 min-h-screen">

    <!-- Header -->
    <?php

include('../../components/database.php');

// Check if the user is logged in
$loggedin = isset($_SESSION['LoggedIN']);
if ($loggedin) {
    $sno = $_SESSION['sno'];
    $profileImageQuery = "SELECT * FROM `signup_page` WHERE `sno`='$sno'";
    $query = mysqli_query($myconnect, $profileImageQuery);
    $rows = mysqli_fetch_assoc($query);
    $profileImage = $rows['image'];
    $username = $rows['username'];
}
?>

<!-- Add Tailwind CSS -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<!-- Navbar -->
<header class="bg-gradient-to-r from-gray-800 to-gray-900 text-white shadow-lg">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <img src="../../components/logo/logo4.jpg" alt="Code Nest Logo" class=" logo w-16 h-16   rounded-full border-2 border-teal-300 shadow-md transform transition-all hover:scale-105"">
            <h1 class="text-2xl font-bold">Code Nest</h1>
        </div>

        <!-- Links -->
        <nav class="hidden md:flex space-x-8 text-lg">
            <a href="../../home.php" class="hover:text-blue-400 transition">Home</a>
            <a href="../../questions.php" class="hover:text-blue-400 transition">Questions</a>
            <a href="../../blog.php" class="hover:text-blue-400 transition">Blog</a>
            <a href="../../store.php" class="hover:text-blue-400 transition">Store</a>
            <a href="../../jobs.php" class="hover:text-blue-400 transition">Jobs</a>
            <a href="../../about.php" class="hover:text-blue-400 transition">About</a>
            <a href="../../contact.php" class="hover:text-blue-400 transition">Contact</a>
            <?php if (!$loggedin): ?>
                <a href="../../login.php" class="hover:text-blue-400 transition">Login</a>
                <a href="../../signup.php" class="hover:text-blue-400 transition">Sign Up</a>
            <?php endif; ?>
        </nav>

        <!-- Profile or Hamburger -->
        <div class="flex items-center space-x-4">
            <?php if ($loggedin): ?>
                <!-- Profile Button -->
                <button id="profileBtn" class="relative">
                    <img src="<?= $profileImage ?>" alt="Profile" class="w-10 h-10 rounded-full border-2 border-teal-300 shadow-md">
                </button>
            <?php else: ?>
                <!-- Mobile Menu Button -->
                <button id="menuToggle" class="md:hidden text-2xl text-white focus:outline-none">
                    ☰
                </button>
            <?php endif; ?>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden bg-gray-800 md:hidden">
        <ul class="space-y-4 py-4 px-6 text-lg">
            <li><a href="../../home.php" class="block hover:text-blue-400 transition">Home</a></li>
            <li><a href="../../questions.php" class="block hover:text-blue-400 transition">Questions</a></li>
            <li><a href="../../blog.php" class="block hover:text-blue-400 transition">Blog</a></li>
            <li><a href="../../store.php" class="block hover:text-blue-400 transition">Store</a></li>
            <li><a href="../../jobs.php" class="block hover:text-blue-400 transition">Jobs</a></li>
            <li><a href="../../about.php" class="block hover:text-blue-400 transition">About</a></li>
            <li><a href="../../contact.php" class="block hover:text-blue-400 transition">Contact</a></li>
            <?php if (!$loggedin): ?>
                <li><a href="../../login.php" class="block hover:text-blue-400 transition">Login</a></li>
                <li><a href="../../signup.php" class="block hover:text-blue-400 transition">Sign Up</a></li>
            <?php endif; ?>
        </ul>
    </div>
</header>

<!-- Profile Sidebar -->
<div id="profileSidebar" class="fixed right-0 top-0 w-64 h-full bg-gray-900 text-white p-6 shadow-lg transform translate-x-full transition-transform">
    <button id="closeProfileSidebar" class="text-lg flex justify-end mb-4">✖</button>

    <?php if ($loggedin): ?>
        <div class="flex flex-col items-center mb-6">
            <img src="<?= $profileImage ?>" alt="User Profile" class="w-24 h-24 rounded-full border-4 border-teal-300 mb-3 shadow-lg">
            <p class="text-xl font-semibold"><?= $username ?></p>
        </div>
    <?php endif; ?>

    <a href="#" class="block py-2 hover:bg-gray-800 rounded flex items-center space-x-2">
        <i class="fas fa-user"></i> <span>Profile</span>
    </a>
    <a href="../../forum2/pages/comments/saveComments.php" class="block py-2 hover:bg-gray-800 rounded flex items-center space-x-2">
        <i class="fas fa-cog"></i> <span>Saved</span>
    </a>
    <a href="../../logout.php" class="block py-2 hover:bg-gray-800 rounded flex items-center space-x-2">
        <i class="fas fa-sign-out-alt"></i> <span>Logout</span>
    </a>
</div>

<main class="container mx-auto py-8 px-4 sm:px-8">
        <!-- Saved Items Section -->
        <section class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
                Your Saved Items
            </h2>
            <div class="space-y-6">
<?php

$selectFour="SELECT * FROM `savedcommnets` WHERE `userId`='$sno'";;
$querry15=mysqli_query($myconnect,$selectFour);


   if($anyRow=mysqli_num_rows($querry15)>0)
   {

        while($row=mysqli_fetch_assoc($querry15)){
            if ($row) {
                $answerId = $row['answerId'];

            $selectFive="SELECT * FROM `comments` WHERE  `sno`='$answerId'";
            $querry16=mysqli_query($myconnect,$selectFive);
                while($row=mysqli_fetch_assoc($querry16)){
                    $comment=$row['comment'];
                    $code=$row['code'];
                    $time=$row['timestap'];
                    $Id=$row['userId'];
                    $AnswerId=$row['sno'];
                    $selectTwo="SELECT * FROM signup_page WHERE sno='$Id'";
                    $querry4=mysqli_query($myconnect,$selectTwo);
                    $rowTwo=mysqli_fetch_assoc($querry4);
                    $image=$rowTwo['image'];
                    $username=$rowTwo['username'];
                    $Iscode=$code!=null?htmlspecialchars($code):"no code provided by the user";

                    echo '
                    <div class="relative bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition">
                     
                        
                           <a href="../../Formhandlers/comment/handleSaveDelete.php?id='.$answerId.'"> <button type="button" class="absolute top-4 right-4 text-gray-400 hover:text-red-500 transition" name="delete">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                            </a>
                      
                        <div class="flex items-start space-x-4">
                            <img src="'.$image.'" alt="User" class="w-12 h-12 rounded-full shadow-sm">
                            <div class="flex-1">
                                <p class="text-lg font-semibold text-gray-800 mt-1"> 
                                    <span class="font-medium">'.$username.' • '.$time.'</span>
                                </p>
                                <p class="text-gray-700 leading-relaxed">
                                    '.$comment.'
                                </p>
                                <div class="bg-gray-100 border border-gray-200 text-sm text-gray-800 mt-3 p-3 rounded-lg overflow-auto">
                                    <pre style="white-space: pre-wrap; word-wrap: break-word; margin: 0; padding: 0; overflow: auto;">
                                        <code style="font-family: "Courier New", Courier, monospace; color: #333; white-space: pre-wrap; word-wrap: break-word; padding: 0; margin: 0;">
                                            '.htmlspecialchars($Iscode).'
                                        </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                    </div>';
                
                }

            }

        }

    }
    else{
        echo ' <div class="col-span-full text-center py-12 border-dashed border-2 border-gray-600 rounded-xl mb-48 mt-24">
                <p class="text-gray-400 text-lg">No saved items yet. Save your favorite answers or comments to see them here!</p>
            </div>';
    }
?>



         

                    
</div>
   
        </section>
    </main>



    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const menuToggle = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        const profileBtn = document.getElementById('profileBtn');
        const profileSidebar = document.getElementById('profileSidebar');
        const closeProfileSidebar = document.getElementById('closeProfileSidebar');

        // Toggle mobile menu
        menuToggle?.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Toggle profile sidebar
        profileBtn?.addEventListener('click', () => {
            profileSidebar.classList.toggle('translate-x-full');
        });

        closeProfileSidebar?.addEventListener('click', () => {
            profileSidebar.classList.add('translate-x-full');
        });
    });
</script>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-10">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <!-- Logo and Website Name -->
            <div class="flex items-center mb-6 md:mb-0">
                <img src="components/logo/logo4.jpg" alt="Code Nest Forum Logo" class="h-16 w-auto mr-4"> <!-- Update the src attribute with your logo path -->
                <h1 class="font-bold text-2xl">Code Nest Forum</h1>
            </div>
            <div>
                <p class="text-gray-400 text-sm">Your go-to platform for coding discussions, tutorials, and programming resources.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-6">
            <!-- Column 1: Quick Links -->
            <div>
                <h3 class="font-bold text-lg">Quick Links</h3>
                <ul class="mt-4 space-y-2">
                    <li><a href="about.php" class="footer-link text-gray-400 hover:text-white transition">About Us</a></li>
                    <li><a href="contact.php" class="footer-link text-gray-400 hover:text-white transition">Contact</a></li>
                    <li><a href="pages/privacy.php" class="footer-link text-gray-400 hover:text-white transition">Privacy Policy</a></li>
                    <li><a href="pages/termsOfServices.php" class="footer-link text-gray-400 hover:text-white transition">Terms of Service</a></li>
                </ul>
            </div>

            <!-- Column 2: Resources -->
            <div>
                <h3 class="font-bold text-lg">Resources</h3>
                <ul class="mt-4 space-y-2">
                    <li><a href="blog.php" class="footer-link text-gray-400 hover:text-white transition">Blog</a></li>
                    <li><a href="pages/documentation.php" class="footer-link text-gray-400 hover:text-white transition">Documentation</a></li>
                    <li><a href="pages/tutorials.php" class="footer-link text-gray-400 hover:text-white transition">Tutorials</a></li>
                    <li><a href="#" class="footer-link text-gray-400 hover:text-white transition">Community</a></li>
                </ul>
            </div>

            <!-- Column 3: Social Media -->
            <div>
                <h3 class="font-bold text-lg">Follow Us</h3>
                <div class="mt-4 flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white transition" aria-label="Instagram">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 0c-6.627 0-12 5.373-12 12 0 6.627 5.373 12 12 12 6.627 0 12-5.373 12-12 0-6.627-5.373-12-12-12zm0 22c-5.524 0-10-4.476-10-10s4.476-10 10-10 10 4.476 10 10-4.476 10-10 10zm4-14c-.553 0-1 .447-1 1s.447 1 1 1 1-.447 1-1-.447-1-1-1zm-4 0c-2.209 0-4 1.791-4 4s1.791 4 4 4 4-1.791 4-4-1.791-4-4-4zm6.5 6.5c-2.206 0-4 1.794-4 4 0 2.206 1.794 4 4 4 2.206 0 4-1.794 4-4 0-2.206-1.794-4-4-4z"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition" aria-label="Facebook">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.675 0h-21.35C.897 0 0 .897 0 2.025v19.95C0 23.103.897 24 2.025 24h21.35c1.128 0 2.025-.897 2.025-2.025V2.025C24 .897 23.103 0 22.675 0zm-5.325 24h-3.675v-10h-2.625v-3.125h2.625v-2.325c0-3.825 2.209-5.875 5.525-5.875 1.575 0 3.025.125 3.425.175v3.95h-2.35c-1.925 0-2.3 1.025-2.3 2.575v2.625h4.425l-1.075 3.125h-3.35v10z"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition" aria-label="YouTube">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.498 6.186c-.3-1.104-1.173-1.934-2.276-2.034C19.244 4 12 4 12 4s-7.244 0-9.222.152c-1.104.1-1.976.93-2.276 2.034C0 8.608 0 12 0 12s0 3.392.502 5.814c.3 1.104 1.173 1.934 2.276 2.034C4.756 20 12 20 12 20s7.244 0 9.222-.152c1.104-.1 1.976-.93 2.276-2.034C24 15.392 24 12 24 12s0-3.392-.502-5.814zm-14.996 9.451v-7.684l6.227 3.842-6.227 3.842z"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition" aria-label="Gmail">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 8.999h-2.829l-7.171 4.5-7.171-4.5h-2.829v8h2.829l7.171-4.5 7.171 4.5h2.829v-8zm0-1.998c.553 0 1 .447 1 1v8c0 .553-.447 1-1 1h-2.829l-7.171-4.5-7.171 4.5h-2.829c-.553 0-1-.447-1-1v-8c0-.553.447-1 1-1h2.829l7.171 4.5 7.171-4.5h2.829zm-11.001-.92l-4.058 2.573-4.058-2.573v8.006l4.058-2.574 4.058 2.574v-8.006z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="mt-6 text-center text-gray-400 text-sm">
            © 2024 Code Nest Forum. All rights reserved.
        </div>
    </div>
</footer>


</body>
</html>
