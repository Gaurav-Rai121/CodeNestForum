<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Terms of Service of CodeNest Forum">
    <title>Terms of Service - CodeNest Forum</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        },
                        dark: {
                            800: '#1e293b',
                            900: '#0f172a',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
 <link rel="stylesheet" href="./styles/termOfService.style.css">
</head>
<body class="bg-gray-50 text-gray-900">
    <!-- Progress bar for reading -->
    <div class="progress-bar" id="readingProgress"></div>

    <!-- Header Section placeholder -->
 <?php include('./components/header.php') ?>

    <!-- Hero section -->
    <div class="bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 text-white py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-10 z-0"></div>
    <div class="container mx-auto px-6 text-center relative z-10">
        <h1 class="text-5xl md:text-6xl font-extrabold mb-6 tracking-tight">
            Terms of Service
        </h1>
        <p class="text-xl md:text-2xl max-w-2xl mx-auto font-light opacity-90 mb-10">
            Before using our platform, please take a moment to read through our terms.
        </p>
        <div class="flex justify-center mt-8">
            <a href="#content" class="group flex items-center space-x-3 bg-white text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-pink-600 px-8 py-4 rounded-full font-semibold shadow-xl hover:shadow-2xl transition duration-300 ease-in-out transform hover:-translate-y-1 border-2 border-white">
                <span class='text-white'>Start Reading</span>
                <i class="fas fa-chevron-down text-white"></i>
            </a>
        </div>
    </div>
    <div class="absolute -bottom-10 left-0 right-0 h-20 bg-white transform -skew-y-3 z-0"></div>
</div>

    <!-- Last updated info -->
    <div class="bg-primary-50 border-b border-primary-100">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-gray-600">
                <span class="font-medium">Last Updated:</span> April 13, 2025
            </div>
            <div>
                <button id="printTOS" class="text-primary-600 hover:text-primary-800 flex items-center space-x-2">
                    <i class="fas fa-print"></i>
                    <span>Print</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-8 md:py-12" id="content">
        <div class="lg:flex lg:space-x-8">
            <!-- Sidebar / Table of Contents -->
            <div class="hidden lg:block lg:w-1/4 sticky top-6 self-start">
                <div class="bg-white shadow-sm rounded-lg p-6 table-of-contents">
                    <h3 class="font-bold text-lg mb-4 text-gray-800">Contents</h3>
                    <ul class="space-y-3">
                        <li><a href="#acceptance" class="text-gray-600 hover:text-primary-600 transition block">1. Acceptance of Terms</a></li>
                        <li><a href="#registration" class="text-gray-600 hover:text-primary-600 transition block">2. Account Registration</a></li>
                        <li><a href="#responsibilities" class="text-gray-600 hover:text-primary-600 transition block">3. User Responsibilities</a></li>
                        <li><a href="#content" class="text-gray-600 hover:text-primary-600 transition block">4. Content Ownership</a></li>
                        <li><a href="#termination" class="text-gray-600 hover:text-primary-600 transition block">5. Termination</a></li>
                        <li><a href="#disclaimer" class="text-gray-600 hover:text-primary-600 transition block">6. Disclaimer of Warranties</a></li>
                        <li><a href="#liability" class="text-gray-600 hover:text-primary-600 transition block">7. Limitation of Liability</a></li>
                        <li><a href="#law" class="text-gray-600 hover:text-primary-600 transition block">8. Governing Law</a></li>
                        <li><a href="#changes" class="text-gray-600 hover:text-primary-600 transition block">9. Changes to Terms</a></li>
                        <li><a href="#privacy" class="text-gray-600 hover:text-primary-600 transition block">10. Privacy Policy</a></li>
                        <li><a href="#contact" class="text-gray-600 hover:text-primary-600 transition block">11. Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <!-- Main content area -->
            <div class="w-full lg:w-3/4">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <!-- Introduction -->
                    <div class="p-8 border-b border-gray-100">
                        <div class="max-w-3xl">
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">Welcome to CodeNest Forum</h2>
                            <p class="text-gray-600 leading-relaxed">
                                By accessing or using our website, you agree to comply with and be bound by these Terms of Service. 
                                These terms govern your relationship with CodeNest Forum ("we," "us," or "our") and set forth the 
                                conditions for your use of our platform. Please read these terms carefully before using our services.
                            </p>
                        </div>
                    </div>

                    <!-- TOS Sections -->
                    <div class="p-8 space-y-12">
                        <!-- Section 1 -->
                        <section id="acceptance" class="section-animate">
                            <div class="flex items-center space-x-3 mb-4">
                                <div class="bg-primary-100 text-primary-700 w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h2 class="text-2xl font-semibold text-gray-800">1. Acceptance of Terms</h2>
                            </div>
                            <div class="pl-14">
                                <p class="text-gray-700 leading-relaxed">
                                    By accessing and using CodeNest Forum, you acknowledge that you have read, understood, and agree to abide by these Terms of Service and all applicable laws and regulations. If you do not agree with any part of these terms, you are prohibited from using or accessing our services.
                                </p>
                                <p class="text-gray-700 leading-relaxed mt-3">
                                    These terms constitute a legally binding agreement between you and CodeNest Forum regarding your use of our platform, including any content, functionality, and services offered.
                                </p>
                            </div>
                        </section>

                        <!-- Section 2 -->
                        <section id="registration" class="section-animate">
                            <div class="flex items-center space-x-3 mb-4">
                                <div class="bg-primary-100 text-primary-700 w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-user-plus"></i>
                                </div>
                                <h2 class="text-2xl font-semibold text-gray-800">2. Account Registration</h2>
                            </div>
                            <div class="pl-14">
                                <p class="text-gray-700 leading-relaxed">
                                    To access certain features of the forum, you must register for an account. You agree to provide accurate, complete, and up-to-date information during the registration process. You are responsible for maintaining the confidentiality of your account credentials and for all activities that occur under your account.
                                </p>
                                <div class="bg-gray-50 border-l-4 border-primary-500 p-4 mt-4">
                                    <h4 class="font-medium text-gray-800 mb-2">Important Account Security Notes:</h4>
                                    <ul class="list-disc list-inside text-gray-700 space-y-1">
                                        <li>Never share your password with others</li>
                                        <li>Use a strong, unique password</li>
                                        <li>Log out from shared devices</li>
                                        <li>Contact us immediately if you suspect unauthorized access</li>
                                    </ul>
                                </div>
                                <p class="text-gray-700 leading-relaxed mt-4">
                                    We reserve the right to disable any account if we believe you have violated these Terms of Service or if your actions might compromise the security of our platform.
                                </p>
                            </div>
                        </section>

                        <!-- Section 3 -->
                        <section id="responsibilities" class="section-animate">
                            <div class="flex items-center space-x-3 mb-4">
                                <div class="bg-primary-100 text-primary-700 w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <h2 class="text-2xl font-semibold text-gray-800">3. User Responsibilities</h2>
                            </div>
                            <div class="pl-14">
                                <p class="text-gray-700 leading-relaxed">
                                    You agree to use CodeNest Forum in accordance with all applicable laws and regulations. Your participation on our platform should contribute to a positive community experience.
                                </p>
                                <div class="grid md:grid-cols-2 gap-4 mt-4">
                                    <div class="bg-red-50 p-4 rounded-lg">
                                        <h4 class="font-medium text-red-700 mb-2">Prohibited Activities</h4>
                                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                                            <li>Violating intellectual property rights</li>
                                            <li>Harassing, abusing, or threatening others</li>
                                            <li>Posting offensive or inappropriate content</li>
                                            <li>Spamming, phishing, or other harmful practices</li>
                                            <li>Distributing malware or harmful code</li>
                                            <li>Interfering with the operation of the forum</li>
                                            <li>Creating multiple accounts for deceptive purposes</li>
                                        </ul>
                                    </div>
                                    <div class="bg-green-50 p-4 rounded-lg">
                                        <h4 class="font-medium text-green-700 mb-2">Encouraged Behavior</h4>
                                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                                            <li>Constructive discussions and feedback</li>
                                            <li>Respecting diverse viewpoints</li>
                                            <li>Helping others learn and grow</li>
                                            <li>Sharing valuable knowledge and resources</li>
                                            <li>Providing attribution for others' work</li>
                                            <li>Reporting inappropriate content</li>
                                            <li>Following community guidelines</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Section 4 -->
                        <section id="content" class="section-animate">
                            <div class="flex items-center space-x-3 mb-4">
                                <div class="bg-primary-100 text-primary-700 w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-copyright"></i>
                                </div>
                                <h2 class="text-2xl font-semibold text-gray-800">4. Content Ownership</h2>
                            </div>
                            <div class="pl-14">
                                <p class="text-gray-700 leading-relaxed">
                                    All content provided on CodeNest Forum, including posts, comments, and discussions, remains the intellectual property of the user who created it. However, by posting content, you grant CodeNest Forum a non-exclusive, royalty-free, worldwide license to use, display, reproduce, modify, and distribute your content in connection with the operation of our services.
                                </p>
                                <p class="text-gray-700 leading-relaxed mt-3">
                                    You are solely responsible for the content you post and agree to comply with applicable copyright laws. This includes obtaining necessary permissions for any third-party content you share on our platform.
                                </p>
                                <div class="p-4 bg-yellow-50 rounded-lg mt-4 flex items-start">
                                    <div class="text-yellow-500 mr-3 mt-1">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                    <p class="text-gray-700 text-sm">
                                        We respect intellectual property rights and expect our users to do the same. If you believe your copyright has been infringed, please contact us with details so we can address your concerns.
                                    </p>
                                </div>
                            </div>
                        </section>

                        <!-- Section 5 -->
                        <section id="termination" class="section-animate">
                            <div class="flex items-center space-x-3 mb-4">
                                <div class="bg-primary-100 text-primary-700 w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-ban"></i>
                                </div>
                                <h2 class="text-2xl font-semibold text-gray-800">5. Termination</h2>
                            </div>
                            <div class="pl-14">
                                <p class="text-gray-700 leading-relaxed">
                                    We reserve the right to suspend or terminate your account if we believe you have violated any of these Terms of Service, or if your actions disrupt the proper functioning of the forum. We may, at our sole discretion:
                                </p>
                                <ul class="list-disc list-inside text-gray-700 space-y-2 mt-3">
                                    <li>Issue a warning to you about your conduct</li>
                                    <li>Temporarily suspend your account</li>
                                    <li>Permanently terminate your account</li>
                                    <li>Remove content you have posted</li>
                                    <li>Take legal action if necessary</li>
                                </ul>
                                <p class="text-gray-700 leading-relaxed mt-3">
                                    If your account is terminated, you may not re-register without our explicit permission. We are not obligated to provide notice prior to termination.
                                </p>
                            </div>
                        </section>

                        <!-- Section 6 -->
                        <section id="disclaimer" class="section-animate">
                            <div class="flex items-center space-x-3 mb-4">
                                <div class="bg-primary-100 text-primary-700 w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-exclamation-circle"></i>
                                </div>
                                <h2 class="text-2xl font-semibold text-gray-800">6. Disclaimer of Warranties</h2>
                            </div>
                            <div class="pl-14">
                                <p class="text-gray-700 leading-relaxed">
                                    CodeNest Forum is provided on an "as is" and "as available" basis. We do not guarantee that our services will be uninterrupted or error-free. We disclaim all warranties, whether express or implied, including but not limited to warranties of merchantability, fitness for a particular purpose, or non-infringement.
                                </p>
                                <p class="text-gray-700 leading-relaxed mt-3">
                                    We make no warranties or representations about the accuracy or completeness of the content provided by users on our platform. You acknowledge that any reliance on such content is at your own risk.
                                </p>
                            </div>
                        </section>

                        <!-- Section 7 -->
                        <section id="liability" class="section-animate">
                            <div class="flex items-center space-x-3 mb-4">
                                <div class="bg-primary-100 text-primary-700 w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-gavel"></i>
                                </div>
                                <h2 class="text-2xl font-semibold text-gray-800">7. Limitation of Liability</h2>
                            </div>
                            <div class="pl-14">
                                <p class="text-gray-700 leading-relaxed">
                                    In no event shall CodeNest Forum, its affiliates, or its employees be liable for any indirect, incidental, special, consequential, or punitive damages arising from your use of the services. This includes, but is not limited to, loss of data, loss of profits, or damage to your computer system.
                                </p>
                                <p class="text-gray-700 leading-relaxed mt-3">
                                    Our total liability for any claims related to your use of our services shall not exceed the amount you have paid, if any, for accessing CodeNest Forum during the three months prior to such claim.
                                </p>
                            </div>
                        </section>

                        <!-- Section 8 -->
                        <section id="law" class="section-animate">
                            <div class="flex items-center space-x-3 mb-4">
                                <div class="bg-primary-100 text-primary-700 w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-balance-scale"></i>
                                </div>
                                <h2 class="text-2xl font-semibold text-gray-800">8. Governing Law</h2>
                            </div>
                            <div class="pl-14">
                                <p class="text-gray-700 leading-relaxed">
                                    These Terms of Service are governed by and construed in accordance with the laws of [Your Country/State], without regard to its conflict of law principles. You agree to submit to the personal and exclusive jurisdiction of the courts located within [Your City/Region] for the resolution of any disputes.
                                </p>
                                <p class="text-gray-700 leading-relaxed mt-3">
                                    Any claim arising from these Terms of Service must be filed within one year after such claim arose; otherwise, the claim is permanently barred.
                                </p>
                            </div>
                        </section>

                        <!-- Section 9 -->
                        <section id="changes" class="section-animate">
                            <div class="flex items-center space-x-3 mb-4">
                                <div class="bg-primary-100 text-primary-700 w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-sync-alt"></i>
                                </div>
                                <h2 class="text-2xl font-semibold text-gray-800">9. Changes to Terms</h2>
                            </div>
                            <div class="pl-14">
                                <p class="text-gray-700 leading-relaxed">
                                    We may update these Terms of Service from time to time. When we do, we will post the updated terms on this page and update the "Last Updated" date at the top. For significant changes, we may provide additional notice, such as an email notification or a site announcement.
                                </p>
                                <p class="text-gray-700 leading-relaxed mt-3">
                                    Your continued use of CodeNest Forum after we post changes to these Terms of Service constitutes your acceptance of those changes. We encourage you to review these terms periodically to stay informed about our policies.
                                </p>
                            </div>
                        </section>
                        
                        <!-- Section 10 (New) -->
                        <section id="privacy" class="section-animate">
                            <div class="flex items-center space-x-3 mb-4">
                                <div class="bg-primary-100 text-primary-700 w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-user-shield"></i>
                                </div>
                                <h2 class="text-2xl font-semibold text-gray-800">10. Privacy Policy</h2>
                            </div>
                            <div class="pl-14">
                                <p class="text-gray-700 leading-relaxed">
                                    Your privacy is important to us. Our Privacy Policy, which is incorporated into these Terms of Service, explains how we collect, use, and protect your personal information. By using CodeNest Forum, you consent to our collection and use of personal data as outlined in our Privacy Policy.
                                </p>
                                <div class="mt-4">
                                    <a href="/privacy-policy" class="inline-flex items-center text-primary-600 hover:text-primary-800 font-medium">
                                        <span>Read our Privacy Policy</span>
                                        <i class="fas fa-arrow-right ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </section>

                        <!-- Section 11 -->
                        <section id="contact" class="section-animate">
                            <div class="flex items-center space-x-3 mb-4">
                                <div class="bg-primary-100 text-primary-700 w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <h2 class="text-2xl font-semibold text-gray-800">11. Contact Us</h2>
                            </div>
                            <div class="pl-14">
                                <p class="text-gray-700 leading-relaxed">
                                    If you have any questions about these Terms of Service, please contact us:
                                </p>
                                <div class="bg-gray-50 p-6 rounded-lg mt-4 flex flex-col sm:flex-row sm:items-center sm:space-x-8">
                                    <div class="mb-4 sm:mb-0">
                                        <p class="text-gray-800 font-medium mb-1">Email:</p>
                                        <a href="mailto:support@codenestforum.com" class="text-primary-600 hover:underline">support@codenestforum.com</a>
                                    </div>
                                    <div class="sm:border-l sm:border-gray-200 sm:pl-8 mb-4 sm:mb-0">
                                        <p class="text-gray-800 font-medium mb-1">Support Hours:</p>
                                        <p class="text-gray-600">Monday - Friday: 9am - 5pm</p>
                                    </div>
                                    <div class="sm:border-l sm:border-gray-200 sm:pl-8">
                                        <a href="/contact" class="inline-flex items-center justify-center bg-primary-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-primary-700 transition">
                                            <i class="fas fa-paper-plane mr-2"></i>
                                            <span>Contact Form</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                
                <!-- Agreement section -->
                <div class="bg-primary-50 rounded-lg p-6 mt-8 shadow-sm">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mr-4 text-primary-500 text-xl">
                            <i class="fas fa-file-signature"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Your Agreement</h3>
                            <p class="text-gray-600">
                                By using CodeNest Forum, you acknowledge that you have read, understood, and agree to be bound by these Terms of Service. If you continue to use our services, you are indicating your acceptance of these terms.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer placeholder -->
    <?php include('./components/footer.php') ?>