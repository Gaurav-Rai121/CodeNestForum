<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML & CSS Basics Tutorial</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-900 font-sans">
    <!-- Header -->
    <header class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-8">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl font-extrabold">HTML & CSS Basics</h1>
            <p class="text-lg mt-2 font-medium">Your first step into the world of web development!</p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-12">
        <!-- Introduction Section -->
        <section class="mb-12">
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">Introduction</h2>
            <p class="text-gray-600 text-lg leading-relaxed">
                HTML (HyperText Markup Language) and CSS (Cascading Style Sheets) are the foundation of web development. 
                In this tutorial, you'll learn how to create a simple webpage and style it with CSS.
            </p>
        </section>

        <!-- HTML Basics Section -->
        <section class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Getting Started with HTML</h2>
            <p class="text-gray-600 text-lg mb-4">
                HTML provides the structure for your webpage. Here's an example of a simple HTML document:
            </p>
            <pre class="bg-gray-800 text-white p-4 rounded-lg overflow-auto">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;My First Webpage&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Welcome to My Website&lt;/h1&gt;
    &lt;p&gt;This is a paragraph on my first webpage.&lt;/p&gt;
  &lt;/body&gt;
&lt;/html&gt;
            </pre>
            <p class="text-gray-600 mt-4">
                In this example:
                <ul class="list-disc list-inside mt-2 text-gray-600">
                    <li><code>&lt;h1&gt;</code> creates a main heading.</li>
                    <li><code>&lt;p&gt;</code> adds a paragraph of text.</li>
                </ul>
            </p>
        </section>

        <!-- CSS Basics Section -->
        <section class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Styling with CSS</h2>
            <p class="text-gray-600 text-lg mb-4">
                CSS is used to style your HTML content. Here's an example of how to add styles:
            </p>
            <pre class="bg-gray-800 text-white p-4 rounded-lg overflow-auto">
/* External CSS */
body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  color: #333;
}

h1 {
  color: #4CAF50;
  text-align: center;
}

p {
  font-size: 18px;
  line-height: 1.6;
}
            </pre>
            <p class="text-gray-600 mt-4">
                To apply these styles, link the CSS file in your HTML like this:
            </p>
            <pre class="bg-gray-800 text-white p-4 rounded-lg overflow-auto">
&lt;head&gt;
  &lt;link rel="stylesheet" href="styles.css"&gt;
&lt;/head&gt;
            </pre>
        </section>

        <!-- Practical Exercise Section -->
        <section class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Practical Exercise</h2>
            <p class="text-gray-600 text-lg mb-4">
                Let's create a basic webpage with a heading, a paragraph, and some styles.
            </p>
            <ol class="list-decimal list-inside space-y-4 text-gray-600 text-lg">
                <li>
                    Create an <strong>index.html</strong> file and add the following code:
                    <pre class="bg-gray-800 text-white p-4 rounded-lg overflow-auto">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;My Webpage&lt;/title&gt;
    &lt;link rel="stylesheet" href="styles.css"&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Welcome to My Site&lt;/h1&gt;
    &lt;p&gt;This is styled with CSS.&lt;/p&gt;
  &lt;/body&gt;
&lt;/html&gt;
                    </pre>
                </li>
                <li>
                    Create a <strong>styles.css</strong> file and add this code:
                    <pre class="bg-gray-800 text-white p-4 rounded-lg overflow-auto">
body {
  background-color: #f0f0f0;
  font-family: Verdana, sans-serif;
  margin: 20px;
}

h1 {
  color: #3498db;
}

p {
  color: #2c3e50;
  font-size: 18px;
}
                    </pre>
                </li>
                <li>Open <strong>index.html</strong> in your browser to see the result.</li>
            </ol>
        </section>

        <!-- Redesigned YouTube Channels Section -->
        <section class="mb-12">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Learn More with YouTube</h2>
            <p class="text-gray-700 text-lg mb-8">
                Take your learning to the next level with tutorials from these top YouTube creators. These channels are packed with beginner-friendly videos and advanced techniques to deepen your knowledge.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Channel Card -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x150" alt="Traversy Media Thumbnail" class="w-full">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">Traversy Media</h3>
                        <p class="text-gray-600 mt-2">
                            Brad Traversy offers in-depth web development tutorials, including HTML and CSS basics.
                        </p>
                        <a href="https://www.youtube.com/c/TraversyMedia" 
                           class="text-blue-600 mt-4 inline-block hover:underline">Visit Channel</a>
                    </div>
                </div>
                <!-- Channel Card -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x150" alt="freeCodeCamp Thumbnail" class="w-full">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">freeCodeCamp</h3>
                        <p class="text-gray-600 mt-2">
                            Learn everything from HTML basics to advanced web development concepts with freeCodeCamp.
                        </p>
                        <a href="https://www.youtube.com/c/Freecodecamp" 
                           class="text-blue-600 mt-4 inline-block hover:underline">Visit Channel</a>
                    </div>
                </div>
                <!-- Channel Card -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x150" alt="The Net Ninja Thumbnail" class="w-full">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">The Net Ninja</h3>
                        <p class="text-gray-600 mt-2">
                            The Net Ninja's playlists cover a wide range of web development topics, including HTML and CSS.
                        </p>
                        <a href="https://www.youtube.com/c/TheNetNinja" 
                           class="text-blue-600 mt-4 inline-block hover:underline">Visit Channel</a>
                    </div>
                </div>
            </div>
        </section>



        <section>
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Additional Resources</h2>
            <ul class="list-disc list-inside text-gray-600 space-y-4 text-lg">
                <li>
                    <a href="https://developer.mozilla.org/en-US/docs/Learn/HTML" class="text-blue-600 hover:underline">
                        HTML Basics (MDN Web Docs)
                    </a> - A detailed guide to get started with HTML from Mozilla Developer Network.
                </li>
                <li>
                    <a href="https://developer.mozilla.org/en-US/docs/Learn/CSS" class="text-blue-600 hover:underline">
                        CSS Basics (MDN Web Docs)
                    </a> - A beginner-friendly guide to CSS, covering selectors, properties, and layout techniques.
                </li>
                <li>
                    <a href="https://web.dev/learn/css/" class="text-blue-600 hover:underline">
                        Learn CSS (web.dev)
                    </a> - Comprehensive tutorials and exercises to master CSS, offered by Google.
                </li>
                <li>
                    <a href="https://www.w3schools.com/html/" class="text-blue-600 hover:underline">
                        W3Schools HTML Tutorial
                    </a> - Interactive examples and quizzes to help you learn HTML step-by-step.
                </li>
                <li>
                    <a href="https://www.w3schools.com/css/" class="text-blue-600 hover:underline">
                        W3Schools CSS Tutorial
                    </a> - Beginner to advanced CSS concepts with practical code snippets.
                </li>
            </ul>
        </section>

                <!-- Call to Action -->
                <section class="text-center mt-12">
            <h2 class="text-3xl font-semibold text-gray-800">Next Steps</h2>
            <p class="text-gray-700 text-lg mt-4">
                Ready to take your skills to the next level? Explore advanced topics or practice with real-world projects.
            </p>
            <a href="../tutorials.php" class="inline-block bg-blue-600 text-white py-3 px-6 rounded-lg mt-6 hover:bg-blue-700 transition">
                Back to Tutorials
            </a>
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
