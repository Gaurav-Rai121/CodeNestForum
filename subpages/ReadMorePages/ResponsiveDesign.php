<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Design</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-900 font-sans">
    <!-- Header -->
    <header class="bg-gradient-to-r from-purple-500 to-pink-600 text-white py-12">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-5xl font-extrabold">Responsive Design</h1>
            <p class="text-lg mt-4 font-medium">
                Learn how to create websites that look great on all devices and screen sizes.
            </p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-12 space-y-12">
        <!-- Introduction Section -->
        <section>
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">What is Responsive Design?</h2>
            <p class="text-gray-700 text-lg leading-relaxed">
                Responsive design is an approach to web design that ensures websites look and function well across
                different devices and screen sizes. By using techniques like fluid grids, flexible images, and media queries,
                developers can create layouts that adapt seamlessly to a user’s device, whether it's a smartphone, tablet, laptop, or desktop.
            </p>
        </section>

        <!-- Why is Responsive Design Important? -->
        <section>
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">Why is Responsive Design Important?</h2>
            <ul class="list-disc list-inside text-gray-700 space-y-3">
                <li><strong>Improved User Experience:</strong> Ensures content is easily accessible and visually appealing on all devices.</li>
                <li><strong>SEO Benefits:</strong> Search engines like Google prioritize mobile-friendly websites.</li>
                <li><strong>Increased Reach:</strong> Accommodates users across a wide range of devices, boosting engagement.</li>
                <li><strong>Cost-Effectiveness:</strong> Eliminates the need for separate desktop and mobile sites.</li>
            </ul>
        </section>

        <!-- Core Principles of Responsive Design -->
        <section>
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">Core Principles of Responsive Design</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Fluid Grids -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Fluid Grids</h3>
                    <p class="text-gray-700">
                        Fluid grids use relative units like percentages instead of fixed units like pixels for layout elements.
                        This allows the layout to adjust proportionally to the screen size.
                    </p>
                    <pre class="bg-gray-800 text-white rounded-lg p-4 overflow-auto">
/* Example of a fluid grid */
.container {
    width: 90%; /* Adapts to screen width */
    margin: auto;
}
                    </pre>
                </div>

                <!-- Flexible Images -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Flexible Images</h3>
                    <p class="text-gray-700">
                        Flexible images adjust their size dynamically to fit within their container, ensuring they don’t overflow or distort.
                    </p>
                    <pre class="bg-gray-800 text-white rounded-lg p-4 overflow-auto">
/* Example of flexible image */
img {
    max-width: 100%; /* Ensures image scales */
    height: auto;
}
                    </pre>
                </div>

                <!-- Media Queries -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">CSS Media Queries</h3>
                    <p class="text-gray-700">
                        Media queries allow you to apply different styles based on the device’s screen size or resolution.
                    </p>
                    <pre class="bg-gray-800 text-white rounded-lg p-4 overflow-auto">
/* Example of a media query */
@media (max-width: 768px) {
    body {
        background-color: lightgray;
    }
}
                    </pre>
                </div>
            </div>
        </section>

        <!-- Responsive Design Best Practices -->
        <section>
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">Responsive Design Best Practices</h2>
            <ul class="list-disc list-inside text-gray-700 space-y-3">
                <li>
                    <strong>Use Relative Units:</strong> Prefer percentages, em, or rem for widths, paddings, and margins instead of fixed pixel values.
                </li>
                <li>
                    <strong>Optimize Images:</strong> Use modern formats like WebP and implement lazy loading for faster load times.
                </li>
                <li>
                    <strong>Breakpoints:</strong> Identify common screen sizes and use breakpoints to adjust your layout.
                </li>
                <li>
                    <strong>Test on Real Devices:</strong> Always test your design on physical devices to ensure compatibility.
                </li>
                <li>
                    <strong>Mobile-First Approach:</strong> Design for smaller screens first, then add styles for larger screens.
                </li>
            </ul>
        </section>

        <!-- Tools for Responsive Design -->
        <section>
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">Tools for Responsive Design</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Frameworks -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Frameworks</h3>
                    <p class="text-gray-700">
                        Frameworks like Bootstrap, Tailwind CSS, and Foundation provide pre-designed responsive components to streamline development.
                    </p>
                </div>

                <!-- Testing Tools -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Testing Tools</h3>
                    <p class="text-gray-700">
                        Use tools like Google Chrome DevTools, BrowserStack, and Responsinator to test your website on multiple devices.
                    </p>
                </div>

                <!-- Grid Systems -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">CSS Grid & Flexbox</h3>
                    <p class="text-gray-700">
                        Leverage modern layout techniques like CSS Grid and Flexbox to create dynamic, responsive layouts.
                    </p>
                    <pre class="bg-gray-800 text-white rounded-lg p-4 overflow-auto">
/* Example of Flexbox layout */
.container {
    display: flex;
    flex-wrap: wrap;
}
                    </pre>
                </div>
            </div>
        </section>

        <!-- Advanced Topics -->
        <section>
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">Advanced Topics</h2>
            <ul class="list-disc list-inside text-gray-700 space-y-3">
                <li><strong>Viewport Units:</strong> Use <code>vw</code> and <code>vh</code> for scalable designs.</li>
                <li><strong>CSS Variables:</strong> Utilize CSS variables for reusable, responsive values.</li>
                <li><strong>Progressive Enhancement:</strong> Build basic functionality first and enhance for modern browsers.</li>
            </ul>
        </section>

        <!-- Additional Resources -->
        <section>
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">Additional Resources</h2>
            <p class="text-gray-700">
                For further learning, explore these resources:
            </p>
            <ul class="list-disc list-inside text-blue-600 underline mt-3">
                <li><a href="https://developer.mozilla.org/en-US/docs/Learn/CSS/CSS_layout/Responsive_Design" target="_blank" class="text-blue-600 hover:underline">MDN Web Docs: Responsive Design</a></li>
                <li><a href="https://web.dev/responsive-web-design-basics/" target="_blank" class="text-blue-600 hover:underline">Web.dev: Responsive Web Design Basics</a></li>
                <li><a href="https://getbootstrap.com/" target="_blank" class="text-blue-600 hover:underline">Bootstrap Framework</a></li>
                <li><a href="https://tailwindcss.com/" target="_blank" class="text-blue-600 hover:underline">Tailwind CSS Documentation</a></li>
            </ul>
        </section>

        <section>
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">YouTube Resources</h2>
            <p class="text-gray-700 text-lg mb-6">
                Here are some hand-picked videos by popular YouTubers to help you master responsive web design:
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Video 1 -->
                <div class="bg-white shadow-md rounded-lg p-4">
                    <iframe class="w-full h-48 rounded-md" 
                        src="https://www.youtube.com/embed/srvUrASNj0s" 
                        title="Responsive Web Design in 2024 by Traversy Media" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>
                    <h3 class="text-lg font-semibold text-gray-800 mt-4">Responsive Web Design (Traversy Media)</h3>
                    <p class="text-gray-700 mt-2">Learn the basics and advanced concepts of responsive design in this beginner-friendly tutorial.</p>
                </div>
                <!-- Video 2 -->
                <div class="bg-white shadow-md rounded-lg p-4">
                    <iframe class="w-full h-48 rounded-md" 
                        src="https://www.youtube.com/embed/yU7jJ3NbPdA" 
                        title="Responsive Design Best Practices by Dev Ed" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>
                    <h3 class="text-lg font-semibold text-gray-800 mt-4">Responsive Design Best Practices (Dev Ed)</h3>
                    <p class="text-gray-700 mt-2">Dev Ed covers the essentials of creating fluid and visually stunning websites.</p>
                </div>
                <!-- Video 3 -->
                <div class="bg-white shadow-md rounded-lg p-4">
                    <iframe class="w-full h-48 rounded-md" 
                        src="https://www.youtube.com/embed/VQraviuwbzU" 
                        title="CSS Media Queries Crash Course by Kevin Powell" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>
                    <h3 class="text-lg font-semibold text-gray-800 mt-4">CSS Media Queries (Kevin Powell)</h3>
                    <p class="text-gray-700 mt-2">Dive deep into media queries and learn how to use them effectively to build responsive layouts.</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2024 CodeNest Forum. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
